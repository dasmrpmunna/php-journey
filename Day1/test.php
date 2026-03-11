<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>This is learning phase <?php echo "Day 1"; ?></p>
    <?php
    // $name = "Munna Das";
    // echo $name;

    // $name = ["Aryan Shrivastava","Sagar Gupta","Ram"];
    // echo $name;

    /*
    echo $_SERVER["DOCUMENT_ROOT"];
    ECHO "<BR>";
    echo "<br>";
    ECHO $_SERVER["PHP_SELF"];
    ECHO "<BR>";
    echo "<br>";
    ECHO $_SERVER["SERVER_NAME"];
    echo "<br>";
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"];
    
    echo "<br>";
    echo "<br>";
    echo $_GET["name"];

    echo "<br>";
    echo "<br>";
    echo $_GET["eyecolor"];*/

    /*
    # Variable Scope
    $x = 20;
    $y =10;

    function myTest(){
        //$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y']; #this array is also accessable from within function and can be used update to global variable directly.
        global $x, $y;
        $x -= $y;
    }
    myTest();
    echo $x;
    */


    /*
    #The php echo Function
    $txt1= "Have a Fun";
    $txt2 = "The following example shows how to output text and variables with the echo statement:";

    echo "<h2> $txt1 </h2> ";
    echo "This is from W3School--> $txt2";
    */


    /*
    #Single or Double Quotes?
    //Strings are surrounded by quotes, but there is a difference between single and double quotes in PHP.
    //When using double quotes, variables can be inserted to the string as in the example above.
    //When using single quotes, variables have to be inserted using the . operator, like this:

    $txt1 = "Have a Fun";
    $txt2 = "The following example shows how to output text and variables with the echo statement:";

    echo '<h2>' . $txt1 . '</h2>';
    echo '<p>' . $txt2 . '</p>';
    */


    /*
    #PHP Object Data Type
    //An object data type holds an instance of a programmer-defined class.

    class Car{
        public $color;
        public $model;

        public function __construct($color, $model){
        $this-> color = $color;
        $this-> model = $model;
        }
        public function message(){
            return "My car is " . $this->color . " " . $this->model . "!";
        }
    }
    $MyCar = new Car("red", "Volvo");
    var_dump($MyCar);
    */

    #String Reverse
    $x = "Aryan Shrivastava";
    echo strrev($x);

    echo "<br>";
    echo "<br>";
    #String Replace 
    $name = "Munna Shrivastava";
    echo $name;
    echo "<h3> After replace 'Shrivastava' to 'Das' </h3>";
    echo str_replace("Shrivastava", "Das", $name);

    echo "<br>";
    echo "<br>";

    $full_Name = "Aryan Shrivastava";
    var_dump(str_starts_with($full_Name,"Aryan")); echo "<br>";
    var_dump(str_ends_with($full_Name,"Shrivastava"));

    ?>
</body>
</html>