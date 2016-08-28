<div class="prof-det">
            <!--Get Details-->
            <p id="name" > <?php get_value("username"); ?> </p>
            <p id="level"> Level <?php get_value("level"); ?></p>
            <p id="exp">XP: <?php get_value("exp"); ?> </p>  
            <?php //get_value(,"id"); ?>
        </div>
        <!--Removed
        <div class="prof-stats">
            <p id="hp">HP: 120/120</p>
            <p id="stamina">Stamina: 5/5</p>
            <p id="attack">Attack: 310</p>
            <p id="defense">Defense: 200</p>
        </div>
        -->
    </div>
    <!--Resources Block-->
    <div class="resources">
       <p id="rsrc">Resources:
              <img src="Sources/wood_icon.png"> Fiber: <?php get_value("fiber"); ?>
              <img src="Sources/iron_icon.png"> Metal: <?php get_value("metal"); ?>
	      <img src="Sources/crys.png"> Crystals: <?php get_value("crystal"); ?>
	      <img src="Sources/gold.png"> Resin: <?php get_value("resin"); ?></p>
    </div>
	
	<div class="quest">
	Quest Members:<br>
	<input type="text" name="name" value="<?php get_value("username"); ?>" readonly="readonly"/>
	<input type="text" name="name" value="" />
	<input type="text" name="name" value="" />
	<input type="text" name="name" value="" /><br>
	<center>
	<font size="6">Active Quest : 3 </font>
	</center>
	
	</div>
	
	<div class="achieve1">
	<center>
		<b>Recycle Bottles</b><br>
		<img src="Sources/aa.png"><br>
		65/100
	</center>
	Reward: 500 Crystals
	</div>
	
	<div class="achieve2">
	
	<center>
		<b>Total Experience Gained</b><br>
		<img src="Sources/bb.png"><br>
		6500 pts/10000 pts
	</center>
	Reward: 300 Metals
	</div>
	
	<div class="achieve2">
	<center>
		<b>Friends Invited</b><br>
		<img src="Sources/cc.png"><br>
		1/5 Friends
	</center>
	Reward: 200 Crystals
	</div>

