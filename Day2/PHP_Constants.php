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

    ?>
</body>
</html>