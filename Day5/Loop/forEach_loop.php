<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h2> PHP foreach Loop </h3>";
    echo "<h5> PHP foreach Loop on Indexed Arrays</h5>";
    echo "<h5> The PHP foreach loop - Loops through a block of code for each element in an array or each property in an object.</h5>";

    $colors = array("red","blue","yellow","pink","green");
    foreach ($colors as $value){
        echo "$value <br>";
    }

    echo "<br>";echo "<br>";
    ##############################################################
   
    echo "<h3> PHP foreach Loop on Associative Arrays </h3>";


    ?>

    
</body>
</html>