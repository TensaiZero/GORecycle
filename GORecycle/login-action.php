<?php include 'functions.php'; //Include Function File
$un = $_POST["un"];
$pw = $_POST["pw"];

function login($un, $pw){
    fetch_client($un, $pw);
    fetch_control($un, $pw);
}
login($un,$pw);
header('Refresh:0; URL = index.php');
//echo "<script>window.location.href = 'http://localhost/gorecycle/index.php'</script>";

