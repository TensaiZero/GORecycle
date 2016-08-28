<!--Maps Page-->
<?php include 'functions.php' ?>
<?php set_active("history"); ?>
<?php include 'header.php' //Include Header File ?> 
<div class="tr-cont">
    <center><P>TRANSACTION HISTORY</P></center>
    <div class="transact-table">
        <center>
            <table class="tran-table">
                <tr>
                <?php if ($_COOKIE[ 'type' ] == "Client") { ?>
                    <th>TYPE</th>
                    <th>SHOP</th>
                    <th>METAL</th>
                    <th>RESIN</th>
                    <th>FIBER</th>
                    <th>GLASS</th>
                    <th>GAIN</th>
                <?php }else{ ?>
                    <th>TYPE</th>
                    <th>CLIENT</th>
                    <th>METAL</th>
                    <th>RESIN</th>
                    <th>FIBER</th>
                    <th>GLASS</th>
                    <th>CREDITS</th>
                <?php } ?>
                </tr>
                <?php fetch_transactions(); ?>
            </table>
        </center>
    </div>
</div>

<?php include 'footer.php' //Include Footer File ?> 