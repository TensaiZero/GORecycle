<?php include 'functions.php'; //Include Function File
$type =  $_POST['type'];
$metal = $_POST['metal'];
$fiber = $_POST['fiber'];
$resin = $_POST['resin'];
$crystal = $_POST['crystal'];

purchase($type, $metal, $resin, $fiber, $crystal);

//header('Refresh:0; URL = trade.php');



