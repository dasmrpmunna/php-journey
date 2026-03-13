<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <h2>PHP Conditional Statements</h2>
        
       <h4> Conditional statements are used to perform different actions based on different conditions. </h4>

--> In PHP, we have the following conditional statements:<br>

        * if statement - executes some code if one condition is true    <br>
        * if...else statement - executes some code if a condition is true and another code if that condition is false   <br>
        * if...elseif...else statement - executes different codes for more than two conditions      <br>
        * switch statement - selects one of many blocks of code to be executed  <br>



    </p>
    <?php 
    echo"<h2> If - Statements</h2>"; 
    //The if statement executes some code only if the specified condition is true.
    
    if (10 > 5){
        echo "Have a good day..!";  //when above condition is true then print this line.
    }

    if (10<5){
        echo "Have a good Day";     //when above condition is wrong then nothing is print in output.
    }
    
    ##########################################################################

    echo"<h2> If....else - Statements</h2>";

    if (10 > 5){
        echo "Above condition is True";
    }
    else {
        echo "Above condition is wrong..!";
    }

    echo"<br>"; echo"<br>";
    
    if (10 < 5){
        echo "Above condition is True";
    }
    else {
        echo "Above condition is wrong..!";
    }

    ##########################################################################
    
    echo"<h2> If..elseif..else - Statements</h2>";

    $a = 10; $b = 15; $c = 20;
    if($a > $b && $a > $c){
        echo "If condition is right";
    }
    elseif($a < $b && $b < $c){
        echo "Else..if condition is right";
    }
    else{
        echo "all condition is wrong";
    }

##########################################################################

    echo"<h2> PHP Shorthand if Statements </h2>";
    //To write shorter code, you can write if statements on one line.

    echo "<h4> Example of One-line if statement:</h4>";

    $x = 10;
    if ($x < 20) $y = "Condition is Right";   // it print "Condition is right" because of right condition.
    echo $y;

    // here is the example if wrong condition.
    $u = 5;
    if ($u > 10) $p = "Condition is Wrong";
    echo $p;

##########################################################################

    echo"<h2> PHP Shorthand if..else Statements </h2>";
    // if...else statements can also be written in one line, but the syntax is a bit different.


    //Example of right condition 
    $m = 10;   
    $n = $m < 15 ? "condition is right" : "condition is wrong";
    echo $n;

    echo"<br>"; echo"<br>";

    // Example of Wrong Condition
    $num = 20;
    $num1 = $num > 25 ? "Condition is Right" : "Condition is wrong";
    echo $num1;


    ##########################################################################
    
    echo"<h2> PHP Nested if Statements </h2>";
    // You can have if statements inside if statements, this is called nested if statements.

    $w = 15;
    if ($w > 10 ){
        echo "Above 10";
        if ($w > 20){
            echo "and also above 20";
        }
        else{
            echo " but below 20";
        }
    }

    echo"<br>"; echo"<br>";

    //Another example;
    $p = 5;
    if ($p > 3){
        echo " $p is above 3 ";
        if ($p < 10){
            echo " but $p is below 10 ";
        }
        else{
            echo "$p is also above 10";
        }
    }

    ?>
</body>
</html>