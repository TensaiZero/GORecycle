<div class="prof-det">
            <!--Get Details-->
            <p id="name" > <?php get_value("username"); ?> </p>
            <p id="credit"> Credits: <?php get_value("credits"); ?></p> 
            <form action="transact-action.php" method="post">
                Client <input type="text" name="un"><br>
                Password <input type="password" name="pw"><br>  
                <input type="submit">
            </form>
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
        <<form action="transact-action.php">
            <b>Client:</b> <input type="text" name="client_id">
        </form>
    </div>



