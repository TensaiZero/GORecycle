<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width"> 
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
        <title>GO Recycle</title>
    </head>
    <body>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php"     <?php active_class("index"); ?>>Profile</a>
            <a href="trade.php"     <?php active_class("trade"); ?>>Trade</a>
            <a href="history.php"   <?php active_class("history"); ?>>History</a>
            <a href="maps.php"      <?php active_class("maps"); ?>>Map</a>
            <?php if(isset($_COOKIE['data'])) {?>
                <a href="logout.php"      <?php active_class("logout"); ?>>Logout</a>
            <?php } ?>
        </div>
        
        <div id="main">
            <!--Header Bar-->
            <div class="hd-bar">
                <span onclick="openNav()" class="menu-btn" >&#9776; Recycle GO</span>  
            </div>
            



