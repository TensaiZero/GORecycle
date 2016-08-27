<?php
$active = "";
$client_row = "";
$control_row = "";
$profile = "";
$message = "";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maindb";

function set_active($page) {
    $GLOBALS[ 'active' ] = $page;
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
        if ($pw == $row["password"]){
            //Succesfull login
            $GLOBALS[ 'client_row' ] = $row;
            $GLOBALS[ 'profile' ] = "Client";
            $GLOBALS[ 'message' ] = "Success";
            setcookie('type', 'Client' , time() + (86400 * 30), "/"); // 86400 = 1 day
            setcookie('data', serialize($row),time()+3600);
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
        if ($pw == $row["password"]){
            //Succesfull login
            $GLOBALS[ 'control_row' ] = $row;
            setcookie('type', 'Control' , time() + (86400 * 30), "/"); // 86400 = 1 day
            setcookie('data', serialize($row),time()+3600);
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


