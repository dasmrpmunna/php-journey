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


    /*
    echo "<br>";
    echo "<h2> PHP Number<h2>";
    // echo "<br>";
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
    */

    echo "<h2> PHP Type Casting </h2>";
    #The PHP casting operators are:
    //(string) - Converts to data type String
    // (int) - Converts to data type Integer
    // (float) - Converts to data type Float
    // (bool) - Converts to data type Boolean
    // (array) - Converts to data type Array
    // (object) - Converts to data type Object
    // (unset) - Deprecated. Converts to data type NULL

    $a = 5;
    $b = 54.434;
    $c = "Aryan Shrivastava";
    $d = true;
    $e = Null;

    $a = (string) $a;
    $b = (string) $b;
    $c = (string) $c;
    $d = (string) $d;
    $e = (string) $e;

    var_dump($a); echo "<br>";
    var_dump($b);echo "<br>";
    var_dump($c);echo "<br>";
    var_dump($d);echo "<br>";
    var_dump($e);echo "<br>";





    
    /* */
    ?>
   
</body>
</html>