<div class="prof-det">
            <!--Get Details-->
            <p id="name" > <?php get_value("username"); ?> </p>
            <p id="credit"> Credits: <?php get_value("credits"); ?></p> 
			
			
        </div>
    </div>
    <!--Resources Block-->
    <div class="resources">
       <p id="rsrc">Inventory</p>
        <p class="glass"><img src="Sources/wood_icon.png"> 
            <b>Glass:</b> 
                (Green: <?php get_value("glass_green");?>,
                 Brown: <?php get_value("glass_brown");?>,
                 Clear: <?php get_value("glass_clear");?>)
        </p>
       <p class="iron"><img src="Sources/iron_icon.png"> 
           <b>Metal:</b> 
                (Alum: <?php get_value("metal_alum");?>,
                 Iron: <?php get_value("metal_iron");?>)
       </p>
       <p class="resin"><img src="Sources/iron_icon.png"> 
           <b>Resin:</b> 
                (HDPE: <?php get_value("resin_hdpe");?>,
                 LDPE: <?php get_value("resin_ldpe");?>,
                 PVC: <?php get_value("resin_pvc");?>)
       </p>
       <p class="iron"><img src="Sources/iron_icon.png"> 
           <b>Fiber:</b> 
                (HQ: <?php get_value("fiber_hq");?>,
                 LQ: <?php get_value("fiber_lq");?>,
                 Carton: <?php get_value("fiber_carton");?>,
                 Coated: <?php get_value("fiber_coated");?>,)
       </p>
    </div>
    <!--Transact Block-->
    <div class="transact">
        <form action="transact-action.php" method="post">
            
			<h3>Material Exchange</h3>
			<table>
				<tr>
					<th><b>Client ID:	</b></th>
					<th><input type="text" name="client_id"></th>
					<th></th>
                                        <th><input btn btn-lg btn-primary btn-block type="submit" name="transact"></th>
					
				</tr>
				<tr>
					<th><hr></th>
					<th><hr></th>
					<th><hr></th>
					<th><hr></th>
				</tr>
				<tr>
					<th><b>Fiber (HQ):      	</b></th>
					<th><input type="text" name="fhq"></th>
					<th><b>Fiber (LQ):      	</b> </th>
					<th><input type="text" name="flq"></th>
                                        
				</tr>
				<tr>
					<th><b>Fiber (Carton): 	</b></th>
					<th><input type="text" name="fcr"></th>
					<th><b>Fiber (Coated):  	</b></th>
					<th><input type="text" name="fco"></th>
				</tr>
				<tr>
					<th><hr></th>
					<th><hr></th>
					<th><hr></th>
					<th><hr></th>
				</tr>
				<tr>
					<th><b>Metal (Al):			</b></th>
					<th><input type="text" name="al"></th>
					<th><b>Metal (Fe):			</b></th>
					<th><input type="text" name="fe"></th>
				</tr>
				<tr>
					<th><hr></th>
					<th><hr></th>
					<th><hr></th>
					<th><hr></th>
				</tr>
				<tr>
					<th><b>Resin (HDPE):		</b></th>
					<th><input type="text" name="hdpe"></th>
					<th><b>Resin (LDPE):		</b></th>
					<th><input type="text" name="ldpe"></th>
				</tr>
				<tr>
					<th><b>Resin (PVC):		</b></th>
					<th><input type="text" name="pvc"></th>
				</tr>
				<tr>
					<th><hr></th>
					<th><hr></th>
					<th><hr></th>
					<th><hr></th>
				</tr>
				<tr>
					<th><b>Crystal (Grn):		</b></th>
					<th><input type="text" name="grn"></th>
					<th><b>Crystal (Bwn):		</b></th>
					<th><input type="text" name="bwn"></th>
				</tr>
				<tr>
					<th><b>Crystal (Clr):		</b></th>
					<th><input type="text" name="clr">	</th>
				</tr>
                                
                                
            
			</table>     
                        
                       
             	
        </form>
    </div>



