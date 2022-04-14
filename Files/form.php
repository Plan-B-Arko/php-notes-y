<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" action="POST">
        Name: <input type="text" name="fname" placeholder="Name"> <br><br>
        Age: <input type="number" name="age" placeholder="Age">
        <br><br>
        <input type="submit" value="Save" name="save">
    </form>

    <?php 

        if(isset($_POST['save'])) {
            echo $_POST['fname'];
            echo "<br>";
            echo $_POST['age'];
        }
    
    
    ?>
</body>
</html>