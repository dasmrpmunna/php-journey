<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "<h2> Do While Loop </h3>";

    $i = 0;
    do{
        echo $i . " ";  //output -> 0 1 2 3 4 5 6 7 8 9
        $i++;       // This is post-increment
    }while($i < 10);

    echo "<br>";echo "<br>";
    ##############################################################
    $i = 0; 
    do{
        // ++$i;
        echo $i . " ";  //output -> 0 1 2 3 4 5 6 7 8 9
        ++$i;           // This is pre-increment.
    }while($i < 10);

    echo "<br>";echo "<br>";
    ##############################################################


    //Here is the best example of Pre-increment 
    $i = 0; 
    do{
        ++$i;   // This is the best example of pre-increment
        echo $i . " ";   // output -> 1 2 3 4 5 6 7 8 9 10
    }while($i < 10);

    echo "<br>";echo "<br>";
    ##############################################################

    echo "<h2> break statement </h3>";


    ?>
    
</body>
</html>