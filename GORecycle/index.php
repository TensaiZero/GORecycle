<!--Main Profile Page-->
<?php include 'functions.php'; //Include Function File
      set_active("index"); //Set Active Page
      include 'header.php'; //Include Header File ?> 
    <!--Profile Block-->
    <div class="profile"> 
        <div class="prof-pic">
            <img src=" <?php get_pic(); ?>">
        </div>
        <?php if($_COOKIE[ 'type' ] == "Client") {
            include "client.php";
        }elseif($_COOKIE['type'] == "Control") {
            include "control.php";
        } ?>

<?php include 'footer.php' //Include Footer File ?> 