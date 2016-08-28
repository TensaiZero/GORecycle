<div class="prof-det">
            <!--Get Details-->
            <p id="name" > <?php get_value("username"); ?> </p>
            <p id="level"> Level <?php get_value("level"); ?></p>
            <p id="exp">XP: <?php get_value("exp"); ?> </p>  
            <?php //get_value(,"id"); ?>
        </div>
    </div>
    <!--Resources Block-->
    <div class="resources">
        <p id="rsrc"><b>Resources:</b>
        <img src="Sources/fiber_icon.jpg"> Fiber: <?php get_value("fiber"); ?>,
        <img src="Sources/metal_icon.jpg"> Metal: <?php get_value("metal"); ?>,
        <img src="Sources/resin_icon.jpg"> Resin: <?php get_value("resin"); ?>,
        <img src="Sources/glass_icon.jpg"> Glass: <?php get_value("crystal"); ?>
       </p>
    </div>
    <!--Achievements-->
    <div class="achieve">
        <b>Achievements</b>
        
    </div>

