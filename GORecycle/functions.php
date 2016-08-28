<?php
$active = "";
$client_row = "";
$control_row = "";
$profile = "";
$message = "";
$process = "";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maindb";

function set_active($page) {
    $GLOBALS[ 'active' ] = $page;
}

function set_process($proc) {
    $GLOBALS[ 'process' ] = $proc;
}

function active_class($page) {
    if ($GLOBALS[ 'active' ] == $page){ ?>
        class="active"
<?php    
    }else{
        //Do Nothing
    }
}

function get_value($index) {
    if (isset($_COOKIE['data'])){
        $local_row = unserialize($_COOKIE[ 'data' ]);
        echo $local_row[ $index ];
    }
}

function fetch_value($index) {
    if (isset($_COOKIE['data'])){
        $local_row = unserialize($_COOKIE[ 'data' ]);
        return $local_row[ $index ];
    }
}

function fetch_client($un, $pw) {
// Create connection
$conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Login as Client First
$sql = "SELECT id, username, password, email, exp, level, "
        . "fiber, metal, resin, crystal FROM client where username = '" . $un . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if ($pw == $row["password"] or $GLOBALS['process'] = "refresh"){
            //Succesfull login
            $GLOBALS[ 'client_row' ] = $row;
            $GLOBALS[ 'profile' ] = "Client";
            $GLOBALS[ 'message' ] = "Success";
            setcookie('type', 'Client' , time() + (86400 * 30), "/"); // 86400 = 1 day
            setcookie('data', serialize($row),time() + (86400 * 30));
        }else{
            //Wrong Password
            $GLOBALS[ 'message' ] = "Wrong Password";
        }
    }
} else {
    //User Not Found 
    $GLOBALS[ 'message' ] = "User not found";
}
$conn->close();
}
function check_client($un){
    // Create connection
$conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Check if Client Exist
$sql = "SELECT id, username, password, email, exp, level, "
        . "fiber, metal, resin, crystal FROM client where username = '" . $un . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
            //Client Found
            $GLOBALS[ 'client_row' ] = $row;
            $GLOBALS[ 'message' ] = "Success";
            $conn->close();
            return true;
    }
} else {
    //User Not Found 
    $GLOBALS[ 'message' ] = "User not found";
    $conn->close();
    return false;
}

}

function fetch_control($un,$pw) {
// Create connection
$conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Login as Client First
$sql = "SELECT id, username, password, credits, glass_green, glass_brown, "
        . "glass_clear, metal_alum, metal_iron, resin_hdpe, resin_ldpe,"
        . "resin_pvc, fiber_hq, fiber_lq, fiber_carton,"
        . "fiber_coated FROM control where  username = '" . $un . "'";
        //. "where  username = '" . $un . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if ($pw == $row["password"] or $GLOBALS['process'] = "refresh" ){
            //Succesfull login
            $GLOBALS[ 'control_row' ] = $row;
            setcookie('type', 'Control' , time() + (86400 * 30), "/"); // 86400 = 1 day
            setcookie('data', serialize($row),time() + (86400 * 30));
            $GLOBALS[ 'profile' ] = "Control";
            $GLOBALS[ 'message' ] = "Success";
        }else{
            //Wrong Password
            $GLOBALS[ 'message' ] = "Wrong Password";
        }
    }
} else {
    //User Not Found 
    $GLOBALS[ 'message' ] = "User not found";
}
$conn->close();
}

function get_pic() {
    $local_row = unserialize($_COOKIE[ 'data' ]);
    $id = $local_row[ "id" ];
    $file = "Sources/" . $id . ".jpg";
    if (file_exists($file)){
        echo $file;
    }else{
        echo "Sources/0.jpg";
    }
        
}

function transact($un,$gg,$gb,$gc,$mi,$ma,$rh,$rl,$rv,$fh,$fl,$ca,$co){
    $credit_now = fetch_value("credits");
    $credit_total = $gg*2 + $gb*2 + $gc*2 + $mi*3 + $ma*2 + $rh*1
                  + $rl*1 + $rv*1 + $fh*1 + $fl*1 + $ca*1 + $co*1;
    //Check first if sufficient credit
    if ($credit_now >= $credit_total) {
        //Sufficient Credit
        //Check if Client Exist
        if (check_client($un)) {
         //Client Exist   
            update_db($un,$gg,$gb,$gc,$mi,$ma,$rh,$rl,$rv,$fh,$fl,$ca,$co,$credit_total);
            echo 'Success';
        }else{
          //Invalid Client Username
          echo 'Invalid Client Name';
        }

    }else{
        //Insufficient Credit
        echo 'Insufficient Credit';
    }
    
}

function update_cookies(){
    $un = fetch_value("username");
    if ($GLOBALS[ 'process' ] == "refresh"){
        if($_COOKIE[ 'type' ] == "Client"){
            fetch_client($un, "");
        }else{
            fetch_control($un, "");
        }
    }
}

function update_db($un,$gg,$gb,$gc,$mi,$ma,$rh,$rl,$rv,$fh,$fl,$ca,$co,$exp) {
        $credit_now = fetch_value("credits");
        $control = fetch_value("username");
        $credit_new = $credit_now - $exp;
        $glass = $gg + $gb + $gc;
        $metal = $mi + $ma;
        $fiber = $fh + $fl + $ca + $co;
        $resin = $rh + $rl + $rv;
        // Create connection
        $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
        // Check connection
        if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
        } 
        $local_row = $GLOBALS[ 'client_row' ];
        $exp_new = $local_row[ 'exp' ] + $exp;
        $metal_new = $local_row[ 'metal' ] + $metal;
        $fiber_new = $local_row[ 'fiber' ] + $fiber;
        $resin_new = $local_row[ 'resin' ] + $resin;
        $glass_new = $local_row[ 'crystal' ] + $glass;
        $sql = "UPDATE client SET metal= '" . $metal_new . "' , fiber= '" . $fiber_new
               . "' , resin= '" . $resin_new . "' ,crystal= '" . $glass_new . "' , exp ='" .$exp_new
               . "' where username = '" . $un . "'";
        $conn->query($sql);
        // Update Control
        $gb_new = fetch_value("glass_brown") + $gb;
        $gg_new = fetch_value("glass_green") + $gg;
        $gc_new = fetch_value("glass_clear") + $gc;
        $ma_new = fetch_value("metal_alum") + $ma;
        $mi_new = fetch_value("metal_iron") + $mi;
        $rh_new = fetch_value("resin_hdpe") + $rh;
        $rl_new = fetch_value("resin_ldpe") + $rl;
        $rv_new = fetch_value("resin_pvc") + $rv;
        $fh_new = fetch_value("fiber_hq") + $fh;
        $fl_new = fetch_value("fiber_lq") + $fl;
        $ca_new = fetch_value("fiber_carton") + $ca;
        $co_new = fetch_value("fiber_coated") + $co;
        $sql = "UPDATE control SET credits = '" . $credit_new . "' , glass_green = '" . $gg_new 
                . "', glass_brown = '" . $gb_new . "' , glass_clear = '" . $gc_new 
                . "', metal_alum = '" . $ma_new . "' , metal_iron = '" . $mi_new
                . "', resin_hdpe = '" . $rh_new . "' , resin_ldpe = '" . $rl_new
                . "', resin_pvc = '" . $rv_new . "' , fiber_hq = '" . $fh_new 
                . "', fiber_lq = '" . $fl_new . "' , fiber_carton = '" . $ca_new
                . "', fiber_coated = '" . $co_new . "' where username = '" . $control . "'";
        //$conn->query($sql);
        if ($conn->query($sql) === TRUE) {
                //echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        $conn->close();
        //Insert Transactions
        insert_transaction($un,$control,"Glass Green",      $gg,$gg*2, 0,0,0,$gg);
        insert_transaction($un,$control,"Glass Brown",      $gb,$gb*2, 0,0,0,$gb);
        insert_transaction($un,$control,"Glass Clear",      $gc,$gc*2, 0,0,0,$gc);
        insert_transaction($un,$control,"Metal Aluminum",   $ma,$ma*3, $ma,0,0,0);
        insert_transaction($un,$control,"Metal Iron",       $mi,$mi*2, $mi,0,0,0);
        insert_transaction($un,$control,"Resin HDPE",       $rh,$rh, 0,0,$rh,0);
        insert_transaction($un,$control,"Resin LDPE",       $rl,$rl, 0,0,$rl,0);
        insert_transaction($un,$control,"Resin PVC",        $rv,$rv, 0,0,$rv,0);
        insert_transaction($un,$control,"Fiber HQ",         $fh,$fh*1, 0,$fh,0,0);
        insert_transaction($un,$control,"Fiber LQ",         $fl,$fl*1, 0,$fl,0,0);
        insert_transaction($un,$control,"Fiber Carton",     $ca,$ca*1, 0,$ca,0,0);
        insert_transaction($un,$control,"Fiber Coated",     $co,$co*1, 0,$co,0,0);
}

function insert_transaction($client,$shop,$type,$mass,$exp , $metal,$fiber,$resin,$glass) {
        if ($mass > 0) {
            // Create connection
            $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
            // Insert Transactions
            $sql = "INSERT INTO `transaction`(`type`, `mass`, `client`, `experience`, `shop` , `metal` , `fiber` , `resin` , `glass`) VALUES"
                   . "('" . $type ."','" .  $mass . "','" . $client . "','" . $exp . "','" .
                   $shop .  "','" . $metal . "','" . $fiber . "','" . $resin . "','" . $glass .  "')";
            //$conn->query($sql);
            if ($conn->query($sql) === TRUE) {
                //echo "New record created successfully <br>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }
}

function purchase($item,$metal,$resin,$fiber,$crystal) {
    $un        = fetch_value("username");
    if (fetch_value("metal") > 0){$metal_new = fetch_value("metal") - $metal;}
    if (fetch_value("fiber") > 0){$fiber_new = fetch_value("fiber") - $fiber;}
    if (fetch_value("resin") > 0){$resin_new = fetch_value("resin") - $resin;}
    if (fetch_value("crystal") > 0){$glass_new = fetch_value("crystal") - $crystal;}
    
    if ($metal_new < 0 or $fiber_new < 0 or $resin_new < 0 or $glass_new < 0) {
        //Insuficient resources
        header('Refresh:0; URL = fail.php');
    }else{
        //Update Client
        // Create connection
        $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
        // Check connection
        if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "UPDATE client SET metal= '" . $metal_new . "' , fiber= '" . $fiber_new
               . "' , resin= '" . $resin_new . "' ,crystal= '" . $glass_new 
               . "' where username = '" . $un . "'";
        $conn->query($sql);
        
        if ($conn->query($sql) === TRUE) {
            insert_purchase($un, "Admin", $item, $metal, $fiber, $resin, $crystal);
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        
        $_COOKIE["result"] = "Purchase Succesful";
        
        $conn->close();
        
        header('Refresh:0; URL = success.php');
        
    }
    
}

function insert_purchase($client,$shop,$type,$metal,$fiber,$resin,$glass) {
            // Create connection
            $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
            // Insert Transactions
            $sql = "INSERT INTO `transaction`(`type`, `client`, `shop` , `metal` , `resin` , `glass` ,`fiber` ) VALUES"
                   . "('" . $type ."','"  . $client . "','" . $shop . "','" .
                   $metal ."','"  . $resin . "','"  . $glass ."','"  . $fiber . "')";
            //$conn->query($sql);
            if ($conn->query($sql) === TRUE) {
                //echo "New record created successfully <br>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
}

function fetch_transactions() {
    $un = fetch_value("username");
// Create connection
$conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// IF Client 
if ($_COOKIE[ 'type' ] == "Client") {
    $sql = "SELECT * FROM transaction where  client = '" . $un . "'";
}else{
    $sql = "SELECT * FROM transaction where  shop = '" . $un . "'";
}
      
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    if ($row["shop"] == "Admin") {
        $type = "Purchased";
        $gain = $row["type"];
    }else{
        $type = "Sold";
        $gain = $row["experience"];
    }  
    if ($_COOKIE[ 'type' ] == "Client") {
    echo "<tr>" .
            "<th>" . $type  . "</th>" .
            "<th>" . $row["shop"]  . "</th>" .
            "<th>" . $row["metal"]  . "</th>" .
            "<th>" . $row["resin"]  . "</th>" .
            "<th>" . $row["fiber"]  . "</th>" .
            "<th>" . $row["glass"]  . "</th>" .
            "<th>" . $gain  . "</th>" .
          "</tr>";
    }else{
       echo "<tr>" .
            "<th>" . $row["type"]  . "</th>" .
            "<th>" . $row["client"]  . "</th>" .
            "<th>" . $row["metal"]  . "</th>" .
            "<th>" . $row["resin"]  . "</th>" .
            "<th>" . $row["fiber"]  . "</th>" .
            "<th>" . $row["glass"]  . "</th>" .
            "<th>" . $gain  . "</th>" .
          "</tr>"; 
    }
    }
} else {
    //User Not Found 
    $GLOBALS[ 'message' ] = "User not found";
}
$conn->close();
}

