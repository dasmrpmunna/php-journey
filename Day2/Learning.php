<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><h2> Day - 2</h2></p>
    <?php 
    // $name = "Munna Das";
    // echo $name;


    /*
    #This below line give error "PHP Parse error: syntax error, unexpected identifier "Vikings" in /home/RvNsqI/prog.php on line 8."
    $x = "We are the so-called "Vikings" from the north.";
    echo $x;
    */


    /*
    // To fix this problem, use the escape character \"
    $y = "We are the so-called \"Vikings\" from the north.";
    echo $y;
    */

    echo "<br>";
    $a = 34534;
    $b = 32.232;
    $c = 5.2e412;
    echo $a, "<br>", $b, "<br>", $c;
    echo "<br>";
    echo "<h3>Check if variable is of type integer:</h3>";

    var_dump(is_int($a));
    echo "<br>";
    var_dump(is_int($b));
    echo "<br>";
    var_dump(is_int($c));
    echo "<br>";
    

    echo "<h3>Check if variable is of type float:</h3>";
    var_dump(is_float($a));
    echo "<br>";
    var_dump(is_float($b));
    echo "<br>";
    var_dump(is_float($c));
    echo "<br>";

    echo "<h3>Check if a numeric value is infinite:</h3>";
    var_dump(is_infinite($a));
    echo "<br>";
    var_dump(is_infinite($b));
    echo "<br>";
    var_dump(is_infinite($c));




    
    
    ?>
    
</body>
</html>