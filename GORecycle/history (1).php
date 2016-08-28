<!--Maps Page-->
<?php include 'functions.php' ?>
<?php set_active("history"); ?>
<?php include 'header.php' //Include Header File ?> 

	<div class="resources">
		<h2 style="text-align:center">Transaction History</h2>
	</div>
		
    <!--Transaction Block-->
    
	
	<div class="resources">
       <p>Transaction ID: 002  |  Client: Krig   |   Purchaser: 001  |  Date: 11 Jul 2016</p>
	   <table>
			<tr>
				<th><p class="glass"><img src="Sources/wood_icon.png"></p></th>
				<th><p class="glass">GRN:<?php get_value("glass_green");?> |</p></th>
				<th><p class="glass">BWN:<?php get_value("glass_brown");?> |</p></th>
				<th><p class="glass">CLR:<?php get_value("glass_clear");?> |</p></th>
				<th></th>
				
				<th><p class="iron"><img src="Sources/iron_icon.png"></p></th>
				<th><p class="iron">ALU:<?php get_value("metal_alum");?> |</p></th>
				<th><p class="iron">IRN:<?php get_value("metal_iron");?> |</p></th>
				<th></th>
				<th></th>
			</tr>
			<tr>
				<th><p class="resin"><img src="Sources/iron_icon.png"></p></th>
				<th><p class="resin">HDP:<?php get_value("resin_hdpe");?> |</p></th>
				<th><p class="resin">LDP:<?php get_value("resin_ldpe");?> |</p></th>
				<th><p class="resin">PVC:<?php get_value("resin_pvc");?> |</p></th>
				<th></th>
								
				<th><p class="fiber"><img src="Sources/iron_icon.png"></p></th>
				<th><p class="fiber">FHQ:<?php get_value("fiber_hq");?> |</p></th>
				<th><p class="fiber">FLQ:<?php get_value("fiber_lq");?> |</p></th>
				<th><p class="fiber">FCR:<?php get_value("fiber_carton");?> |</p></th>
				<th><p class="fiber">FCO:<?php get_value("fiber_coated");?> |</p></th>
			</tr>
			<tr>
				<th><p class="resin"><img src="Sources/iron_icon.png"></p></th>
				<th><p class="resin">EXP:<?php get_value("resin_hdpe");?> |</p></th>
				<th></th>
				<th></th>
				<th></th>
				<th><p class="resin"><img src="Sources/iron_icon.png"></p></th>
				<th><p class="resin">CSH:<?php get_value("resin_ldpe");?> |</p></th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
	   </table>  	   
    </div>
	
	<div class="resources">
       <p>Transaction ID: 003  |  Client: Krig   |   Purchaser: 001  |  Date: 12 Jul 2016</p>
	   <table>
			<tr>
				<th><p class="glass"><img src="Sources/wood_icon.png"></p></th>
				<th><p class="glass">GRN:<?php get_value("glass_green");?> |</p></th>
				<th><p class="glass">BWN:<?php get_value("glass_brown");?> |</p></th>
				<th><p class="glass">CLR:<?php get_value("glass_clear");?> |</p></th>
				<th></th>
				
				<th><p class="iron"><img src="Sources/iron_icon.png"></p></th>
				<th><p class="iron">ALU:<?php get_value("metal_alum");?> |</p></th>
				<th><p class="iron">IRN:<?php get_value("metal_iron");?> |</p></th>
				<th></th>
				<th></th>
			</tr>
			<tr>
				<th><p class="resin"><img src="Sources/iron_icon.png"></p></th>
				<th><p class="resin">HDP:<?php get_value("resin_hdpe");?> |</p></th>
				<th><p class="resin">LDP:<?php get_value("resin_ldpe");?> |</p></th>
				<th><p class="resin">PVC:<?php get_value("resin_pvc");?> |</p></th>
				<th></th>
								
				<th><p class="fiber"><img src="Sources/iron_icon.png"></p></th>
				<th><p class="fiber">FHQ:<?php get_value("fiber_hq");?> |</p></th>
				<th><p class="fiber">FLQ:<?php get_value("fiber_lq");?> |</p></th>
				<th><p class="fiber">FCR:<?php get_value("fiber_carton");?> |</p></th>
				<th><p class="fiber">FCO:<?php get_value("fiber_coated");?> |</p></th>
			</tr>
			<tr>
				<th><p class="resin"><img src="Sources/iron_icon.png"></p></th>
				<th><p class="resin">EXP:<?php get_value("resin_hdpe");?> |</p></th>
				<th></th>
				<th></th>
				<th></th>
				<th><p class="resin"><img src="Sources/iron_icon.png"></p></th>
				<th><p class="resin">CSH:<?php get_value("resin_ldpe");?> |</p></th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
	   </table>  	   
    </div>



<?php include 'footer.php' //Include Footer File ?> 