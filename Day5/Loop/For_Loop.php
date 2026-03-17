<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h2> The PHP for Loop </h3>";
    echo "<h5> The PHP for loop - Loops through a block of code a specified number of times.</h5>";
    echo "<h5> The for loop is used when you know how many times the script should run.</h5>";
    echo "<h3> Syntax <h3>";
    echo "<h5> for (initialization; condition; increment) { <br>
         // code to be executed  <br>
    x       <br>
    }<h5>";


    echo "<br>";echo "<br>";
    ##############################################################
   
    echo "<h2> Increaser Counter </h3>";
    for ($x = 0 ; $x <= 10; ++$x){
        echo "The number is: $x  <br>";
    }
 
    // $x = 0;, is evaluated once, and sets the counter variable to 0.
    // $x <= 10;, is evaluated before each iteration, and the loop continues if this expression evaluates to true. Here, the expression is true as long as $x is less than, or equal to 10.
    // $x++;, is evaluated after each iteration, and it increases the counter variable $x by one.

    echo "<br>";echo "<br>";
    ##############################################################
    echo "<h2> Decreaser Counter </h3>";
    for ($i = 10; $i >= 0; $i--){
        echo "The number is: $i <br>";
    }

    echo "<br>";echo "<br>";
    ##############################################################

    echo "<h2> The PHP break Statement </h3>";
    for ($x = 1; $x <= 10; $x++){
        if ($x == 6) break;     // while print if find 6 then printing is stop on number 5;
        echo "The number is: $x <br>";
    }

    echo "<br>";echo "<br>";
    ##############################################################

    echo "<h2> The PHP continue Statement </h3>";
    for ($i = 0; $i <= 10; $i++){
        if ($i == 5) continue;      // number 5 is skip
        echo "The number is: $i <br>";
    }

    echo "<br>";echo "<br>";
    //another example
    for ($i = 0; $i <= 100; $i +=10){
        if ($i == 50) continue;         // 50 is skip;
        echo "The number is: $i <br>";
    }



    ?>

    
</body>
</html>