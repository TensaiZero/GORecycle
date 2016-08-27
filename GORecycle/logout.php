<?php
    //Clear Cookies
    setcookie('type', '', time() - 3600);
    setcookie('data', '', time() - 3600);
    
    header('Refresh:0; URL = index.php');


