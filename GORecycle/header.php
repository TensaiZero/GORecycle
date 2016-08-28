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
        <link rel="stylesheet" href="style.css" rel = "stylesheet">
        <script src="script.js"></script>
        <title>GO Recycle</title>
    </head>
    <body>

        <!--Check if logged in-->
        <?php if(isset($_COOKIE['data'])) {
            set_process("refresh");
            update_cookies();
        }else{
            header('Refresh:0; URL = login.php');
        } ?>
        <div id="mySidenav" class="zsidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php"     <?php active_class("index"); ?>>Profile</a>
             
            <?php if($_COOKIE[ 'type' ] == "Client") { //If Account is a Client, do not display if control?>
                <a href="achievement.php"   <?php active_class("achievement"); ?>>Achievements</a>
                <a href="trade.php"     <?php active_class("trade"); ?>>Trade</a>
            <?php } ?>
            <a href="history.php"   <?php active_class("history"); ?>>History</a>
            <?php if(isset($_COOKIE['data'])) {?>
                <a href="logout.php"      <?php active_class("logout"); ?>>Logout</a>
            <?php } ?>
        </div>
        
        <div id="zmain">
            <!--Header Bar-->
            <div class="zhd-bar">
                <span onclick="openNav()" class="zmenu-btn" >&#9776; GO Recycle </span>  
            </div>
            



