<?php 

    echo "Cookie Value: ". $_COOKIE['user'];

    // Deleting the cookie

    
    setcookie("user", "", time() - (86400 * 30), "/" );

?>