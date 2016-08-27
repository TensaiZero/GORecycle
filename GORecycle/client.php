<div class="prof-det">
            <!--Get Details-->
            <p id="name" > <?php get_value("username"); ?> </p>
            <p id="level"> Level <?php get_value("level"); ?></p>
            <p id="exp">XP: <?php get_value("exp"); ?> </p>  
            <?php //get_value(,"id"); ?>
            <form action="login-action.php" method="post">
                Username <input type="text" name="un"><br>
                Password <input type="password" name="pw"><br>  
                <input type="submit">
            </form>
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
       <p id="rsrc">Resources</p>
       <p class="wood"><img src="Sources/wood_icon.png"> Wood: <?php get_value("fiber"); ?></p>
       <p class="iron"><img src="Sources/iron_icon.png"> Metal: <?php get_value("metal"); ?></p>
    </div>

