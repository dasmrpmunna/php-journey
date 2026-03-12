<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><h2>Day - 3 </h2>
    <p> Operators are special symbols used to perform operations on variables and values.
    <br>
    PHP divides the operators in the following groups:
    <br><br>
    -> Arithmetic operators <br>
    -> Assignment operators <br>
    -> Comparison operators <br>
    -> Increment/Decrement operators <br>
    -> Logical operators <br>
    -> String operators <br>
    -> Array operators <br>
    -> Conditional operators <br><br>

    <h2>PHP Arithmetic Operators</h2>
 The arithmetic operators are used with numeric values to perform common mathematical operations, such as addition, subtraction, multiplication etc. <br><br>

<h3> Operator  || 	Name  ||	Example	  ||   Result </h3>
+	            Addition	    $x + $y        Sum of $x and $y	<br><br>
-	            Subtraction	    $x - $y	       Difference of $x and $y	<br><br>
*	            Multiplication	$x * $y	       Product of $x and $y	<br><br>
/	            Division	    $x / $y	       Quotient of $x and $y	<br><br>
%	            Modulus	        $x % $y	       Remainder of $x divided by $y	<br><br>
**	            Exponentiation	$x ** $y	   Result of raising $x to the $y'th power<br><br>

<h2>PHP Assignment Operators</h2>

The assignment operators are used with numeric values to assign values to variables.<br><br>

<h3>Assignment	  ||   Same as...   ||  	Description	 </h3>
$x = $y	            $x = $y	            Assign (the left operand is set to the value of the expression on the right)	<br><br>
$x += $y	        $x = $x + $y	    Add and assign	<br><br>
$x -= $y	        $x = $x - $y	    Subtract and assign	<br><br>
$x *= $y	        $x = $x * $y	    Multiply and assign	<br><br>
$x /= $y	        $x = $x / $y	    Divide and assign	<br><br>
$x %= $y	        $x = $x % $y	    Modulus and assign <br><br>


<h2>PHP Comparison Operators</h2>
The comparison operators are used to compare two values (number or string) and return a boolean result.<br><br>

<h3>Operator ||	Name	    ||       Example	|| Result </h3>
==	            Equal	            $x == $y	    Returns true if $x is equal to $y	<br><br>
===	            Identical	        $x === $y	    Returns true if $x is equal to $y, and they are of the same type	<br><br>
!=	            Not equal	        $x != $y	    Returns true if $x is not equal to $y	<br><br>
<>	            Not equal	        $x <> $y	    Returns true if $x is not equal to $y	<br><br>
!==	            Not identical	    $x !== $y	    Returns true if $x is not equal to $y, or they are not of the same type	<br><br>
>	            Greater than	    $x > $y	        Returns true if $x is greater than $y	<br><br>
<	            Less than	        $x < $y	        Returns true if $x is less than $y	<br><br>
>=	            Greater than or equal to    $x >= $y	Returns true if $x is greater than or equal to $y	<br><br>
<=	            Less than or equal to	$x <= $y	Returns true if $x is less than or equal to $y	<br><br>
<=>	            Spaceship	        $x <=> $y	    Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7. <br><br>


<h2>PHP Increment / Decrement Operators</h2>
The increment/decrement operators are used to increment or decrement a variable's value by one. <br><br>

<h3> Operator   ||	Same as...    ||   Description	</h3>
++$x	        Pre-increment	    -> Increments $x by one, then returns $x	<br><br>
$x++	        Post-increment	    -> Returns $x, then increments $x by one	<br><br>
--$x	        Pre-decrement	    -> Decrements $x by one, then returns $x	<br><br>
$x--	        Post-decrement	    -> Returns $x, then decrements $x by one   <br><br> 


<h2>PHP Logical Operators</h2>
The logical operators are used to combine conditional statements and return a boolean result.

<h3>Operator	|| Name   || 	Example	Result</h3>
and	    And	    $x and $y	    True if both $x and $y are true	<br><br> 
or	    Or	    $x or $y	    True if either $x or $y is true	<br><br> 
xor	    Xor	    $x xor $y	    True if either $x or $y is true, but not both	<br><br> 
&&	    And	    $x && $y	    True if both $x and $y are true	<br><br> 
||	    Or	    $x || $y	    True if either $x or $y is true	<br><br> 
!	    Not	    !$x	            True if $x is not true <br><br> 

</p>

    <?php

    echo "<h2>PHP Comparison Operators</h2>";
    echo "<h3>Example of Spaceship</h3>";

    $x = 10;
    $y = 15;

    echo($x <=> $y); //returns -1 because $x is less than $y.
    echo "<br>";

    $x = 10;
    $y = 10;
    echo($x <=> $y); // returns 0 because values are equal.
    echo "<br>";

    $x = 15;
    $y = 10;
    echo($x <=> $y); // returns +1 because $x is greater than $y.
    
    echo "<h2>PHP Increment / Decrement Operators</h2>";
    echo "<h3>Example of Pre-increment</h3>";
    $x =10;
    echo ++$x;   // 10 become 11 due to pre-increment {Increments $x by one, then returns $x}

    echo "<h3>Example of Post-increment</h3>";
    $a = 15;
    echo $a++;  // 10 become 10 due to Post-increment {Returns $x, then increments $x by one}
    
    echo "<h3>Example of Post-decrement</h3>";
    $b = 10;
    echo --$b;  // 10 become 9 due to pre-increment {Decrements $x by one, then returns $x}

    echo "<h3>Example of Post-decrement</h3>";
    $c = 15; 
    echo $c--;  // 15 become 15 due to Post-increment {Returns $x, then decrements $x by one}

    echo "<h2>PHP Logical Operators</h2>";
    $x = 100; $y = 100;
    echo "Write a message when both condition is True:";echo "<br>";
    if ($x == 100 and $y == 100){
        echo "yes it is Right";
    }
    echo "<br>";
    
    if ($a = 100 and $b = 200);
        echo "Write a message if condition is True";

    ?>
</body>
</html>