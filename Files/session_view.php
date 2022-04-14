<?php 

    session_start();

    print_r($_SESSION);


?>

<html>
    <head> </head>
    <body>
        <?php 
            echo "<br>";
            echo "Favorite color is: ". $_SESSION['favcolor'];

            // or 
            // if(isset($_SESSION['favcolor'])) {
                echo "Favorite color: ". $_SESSION['favcolor'];
            }
        ?>
    </body>
</html>
