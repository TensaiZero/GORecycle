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
       <p id="rsrc">Resources</p>
       <p class="wood"><img src="Sources/wood_icon.png"> Wood: <?php get_value("fiber"); ?></p>
       <p class="iron"><img src="Sources/iron_icon.png"> Metal: <?php get_value("metal"); ?></p>
    </div>
    
	
	<div class="item1">
		<img src="Sources/notebook.png" height="250" width="250"><br>
		<b>Ruled Notebook</b><br>
		Resource Cost<br>
		<b>Fiber:</b> 500 units<br>
		<b>Resin:</b> 100 units<br><br>
		<center><input type="submit" value="Purchase" />
		</center><br>
		
    </div>
	
	<div class="item2">
		
       <img src="Sources/case.jpg" height="250" width="150"><br>
	   <b>Iphone case</b><br>
		Resource Cost<br>
		<b>Fiber:</b> 500 units<br>
		<b>Crystal:</b> 1000 units<br>
		<center><input type="submit" value="Purchase" />
		</center><br>
    </div>
	
	<div class="item3">
       <img src="Sources/sackbag.jpg" height="225" width="150"><br>
	   <b>Sack Bag</b><br>
		Resource Cost<br>
		<b>Wood:</b> 600 units<br>
		<b>Fiber:</b> 300 units<br>
		<center><input type="submit" value="Purchase" />
		</center><br>
    </div>
	
	