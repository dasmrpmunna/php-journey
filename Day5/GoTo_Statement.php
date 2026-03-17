<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    for ($i = 1; $i <= 10; $i++){
        echo "$i <br>";
        if ($i == 5) {
            goto jump;
        }
    }
        jump:
        echo "Above condition is right";

    echo "<br>"; echo "<br>";
    ##################################################
    for ($y = 0; $y < 9; $y++){
        echo "$y <br>";

        if ($y == 4){
            goto next;
        }
    }
    $name = "Aryan Shrivastava <br>";       //it print while the above condition is wrong.
    echo "$name";

    
    next:
    echo "Above condition is right:";
    
    ?>
    
</body>
</html>