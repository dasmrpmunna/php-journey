<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><h2> Day - 2 </h2></p>
    <?php
    echo"<h2> PHP Constants </h2>";
    echo"<br>";
    
    // PHP define() Function
    // The define() function defines a constant at run-time.
    // The define() function always define constants in the global scope, and can be declared inside conditional blocks (if/else, loops, functions), but they cannot be used to define class consta    
    // Syntax
    // define(CONSTANT_NAME, value);

    define("Munna", "Hello Aryan Shrivastava..?");
    echo Munna;

    echo "<h3>This example declares a constant inside a function, and output it outside the function:</h3>";

    function myTest(){
        define("Aryan", "Hello Mrs. Shrivastava..?");
    }
    myTest();
    echo Aryan;

    echo "<br>";
    define ("Ben", "Welcome to my Home..🏠");
    echo Ben;

    echo"<br>";
    function myHome(){
        define("Mahi", "Thanks Ben");
    }
    myHome();
    echo Mahi;

    echo "<h2>PHP const Keyword</h2>";
    echo "<h3>The const keyword defines a constant at compile-time.</h3>";
    // Constants defined with the const keyword must be declared at the top-level scope because they are defined at compile-time. This means that they cannot be declared inside functions, loops, if/else statements or try/catch blocks.
    // Constants defined with the const keyword can be used to define class constants.
    // Constants defined with the const keyword are case-sensitive.
    // Syntxa
    // const CONSTANT_NAME = value;

    // Example
    // echoCreate a constant named "GREETING" with const:

    const Hello = "Hello Aryan., How are you.?";
    echo Hello;

    echo "<h3>Exmaple of using Define and Const</h3>";
    function Communication(){
        define("Greeting","Hello Aryan, How are you..?");
    }
    Communication();
    echo Greeting;

    echo"<br>";
    
    const Communication = "I'm good Mahi, How about you..?";
    function Greeting(){
        echo Communication;
    }
    Greeting();
    echo"<br>";
    echo"<br>";

    //using define in Array
    define("Car",array("Jeep","Valvo","Toyato","BMW"));
    echo Car[0];
    echo"<br>";echo"<br>";
    //using Const in Array;
    const Animals = array("Dog","Cat","Elephant","Lion");
    echo Animals[1];

    ?>
</body>
</html>