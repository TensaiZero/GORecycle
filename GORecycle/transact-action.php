<?php include 'functions.php'; //Include Function File
$un = $_POST["client_id"];
$fh = $_POST["fhq"];
$fl = $_POST["flq"];
$ca = $_POST["fcr"];
$co = $_POST["fco"];
$ma = $_POST["al"];
$mi = $_POST["fe"];
$rh = $_POST["hdpe"];
$rl = $_POST["ldpe"];
$rv = $_POST["pvc"];
$gg = $_POST["grn"];
$gb = $_POST["bwn"];
$gc = $_POST["clr"];

transact($un, $gg, $gb, $gc, $mi, $ma, $rh, $rl, $rv, $fh, $fl, $ca, $co);
//echo "<script>window.location.href = 'http://localhost/gorecycle/index.php'</script>";



