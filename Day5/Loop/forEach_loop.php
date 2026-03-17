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

    $member = array("Peter" => "21", "Ben" => "23", "Joe" => "20");
    foreach($member as $key => $value){
        echo "$key : $value <br>";
    }

    echo "<br>";echo "<br>";
    ##############################################################
   
    echo "<h3> PHP foreach Loop on Objects </h3>";

    class myCar{
        public $color;
        public $model;
        public function __construct($color, $model){
            $this-> color = $color;
            $this-> model = $model;
        }
    }
    $thisCar = new myCar("White", "Toyato");
    foreach ($thisCar as $key => $value){
        echo "$key : $value <br> ";
    }

    echo "<br>";echo "<br>";
    ##############################################################
   
    echo "<h3> The PHP break Statement </h3>";

    $color = array("red", "blue", "yellow","green","pink");
    foreach ($color as $x) {
        if ($x == "yellow") break;
        echo "$x <br>";
    }

    echo "<br>";echo "<br>";
    ##############################################################
   
    echo "<h3> The PHP continue Statement </h3>";
    $car = array("Jeep", "Toyato", "Valvo","Tata", "BMW");
    foreach($car as $y){
        if ($y =="Valvo") continue;
        echo "$y <br>";
    }

    echo "<br>";echo "<br>";
    ##############################################################
   
    echo "<h3> PHP Foreach Loop Byref </h3>";

    $color = array("red", "blue", "yellow","green");
    foreach($color as $m){
        if ($m == "Blue") $m = "pink";
    }
    var_dump ($color);

    echo "<br>";echo "<br>";
    ##############################################################
   
    echo "<h3> Alternative Syntax </h3>";
    echo "<h5> The foreach loop syntax can also be written with the endforeach statement like this </h5>";

    $color = array("red", "blue","yellow","pink","green");
    foreach($color as $x):
        echo "$x <br>";
    endforeach;
    ?>

    
</body>
</html>