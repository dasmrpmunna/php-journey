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
    echo"<h2> Math </h2>";
    echo"<br>";
    echo "Print the value of pip (pi) --> ";
    echo (pi());

    echo"<h3> PHP min() and max() Functions </h3>"; //echo"<br>";
    echo (max(20,-23,0,23,45,53));echo"<br>";echo"<br>";
    echo (min(20,-23,0,23,45,53));

    echo"<h3> PHP abs() Function </h3>";
    echo "<p> -> The abs() function returns the absolute (positive) value of a number: </p>";

    echo(abs(-6.5));

    echo"<h3> PHP sqrt() Function </h3>";
    echo "<p> -> The sqrt() function returns the square root of a number: </p>";
    echo (sqrt(25));
    
    echo"<h3> PHP round() Function </h3>";
    echo "<p> -> The round() function rounds a floating-point number to its nearest integer: </p>";
    echo (round(5.63));echo"<br>";
    echo (round(34.49));

    echo"<h3> Random Numbers </h3>";
    echo "<p> -> The PHP rand() function generates a random number: </p>";
    echo (rand()); #everytime change that random number while reload
    echo"<br>";
    echo (rand(10, 100));

    ?>
</body>
</html>