<!--Trade Page-->
<?php include 'functions.php' ?>
<?php set_active("battle"); ?>
<?php include 'header.php' //Include Header File ?> 
<div class="trade-items">
    
</div>
<?php include 'footer.php' //Include Footer File ?> 

       <center>
	   <b><font size="6"> Reward Shop
	   </b></font>
	   </center>
	   
	   <div class="resources">
       <p id="rsrc">Resources:
              <img src="Sources/wood_icon.png"> Fiber: <?php get_value("fiber"); ?>
              <img src="Sources/iron_icon.png"> Metal: <?php get_value("metal"); ?>
	      <img src="Sources/crys.png"> Crystals: <?php get_value("crystal"); ?>
	      <img src="Sources/gold.png"> Resin: <?php get_value("resin"); ?></p>
           
    </div>
    
	
	<div class="item-all">
            <div class="items">
                <center>
		<img src="Sources/notebook.png" height="250" width="250"><br>
		<b>Ruled Notebook</b><br>
		Resource Cost<br>
		<b>Fiber:</b> 500 units<br>
		<b>Resin:</b> 100 units<br><br>
		<form action="purchase-action.php" method="POST">
                    <input type="hidden" name="metal" value="0">
                    <input type="hidden" name="fiber" value="500">
                    <input type="hidden" name="resin" value="100">
                    <input type="hidden" name="crystal" value="0">
                    <input type="hidden" name="type" value="Ruled Notebook">
                    <input type="submit" value="Purchase" />
                </form>
		</center><br>
            </div>
    </div>
	
	<div class="item-all">
	<div class="items">	
            <center>
       <img src="Sources/case.jpg" height="250" width="150"><br>
	   <b>Iphone case</b><br>
                
		Resource Cost<br>
		<b>Fiber:</b> 500 units<br>
		<b>Crystal:</b> 1000 units<br>
                <form action="purchase-action.php" method="POST">
                    <input type="hidden" name="metal" value="0">
                    <input type="hidden" name="fiber" value="500">
                    <input type="hidden" name="resin" value="1000">
                    <input type="hidden" name="crystal" value="0">
                    <input type="hidden" name="type" value="Iphone Case">
                    <input type="submit" value="Purchase" />
                </form>
		</center><br>
        </div>
    </div>
	
	<div class="item-all">
            <div class="items">
                <center>
       <img src="Sources/sackbag.jpg" height="225" width="150"><br>
	   <b>Sack Bag</b><br>
		Resource Cost<br>
		<b>Metal:</b> 600 units<br>
		<b>Fiber:</b> 300 units<br>
		<form action="purchase-action.php" method="POST">
                    <input type="hidden" name="metal" value="600">
                    <input type="hidden" name="fiber" value="300">
                    <input type="hidden" name="resin" value="0">
                    <input type="hidden" name="crystal" value="0">
                    <input type="hidden" name="type" value="Sack Bag">
                    <input type="submit" value="Purchase" />
                </form>
		</center><br>
            </div>div
    </div>
	
	