<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <h2> PHP Function </h2>
        <h3> PHP Built-in Functions </h3>
        <h5>PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task. Please check out our PHP reference for a complete overview.</h5>

        <h3> PHP User Defined Functions </h3>
        <h5>Besides the built-in PHP functions, it is possible to create your own functions.<h5>

        A function is a block of statements that can be used repeatedly in a program.   <br>
        A function is not executed automatically when a page loads.     <br>
        A function is executed only when it is called.  

        <h3> Create a Function </h3>

        A user-defined function declaration starts with the keyword function, followed by the name of the function.         <br><br>

        The opening curly brace { indicates the beginning of the function code, and the closing curly brace } indicates the end of the function.        <br><br>

        Note: A function name is not case-sensitive, and it must start with a letter or an underscore.

        <h3> Syntax </h3>

        <h5> function functionName($parameter1, $parameter2) {      <br>
            // code to be executed                                  <br>
            return $value; // optional                              <br>
        }
        </h5>

        Example                             <br>
        function myMessage() {              <br>
            echo "Hello world!";            <br>
        }                                   <br>
        Tip: Give the function a name that reflects what the function does!                 <br>

        Call a Function                                                                     <br>
        To call a function, just write its name followed by parentheses ().                 <br>

        The function below outputs "Hello world!":                                          <br>

        <h3>Example </h3>
        <h4>Call the function myMessage()</h4>

        <h5>
        function myMessage() {          <br>
            echo "Hello world!";           <br>
        }                               <br>
        myMessage();                     
        </h5>     

        <h3>PHP Function Parameters </h3>
        Information can be passed to functions through parameters. A parameter is just like a variable. <br><br>

        Parameters are specified after the function name, inside the parentheses. You can add as many parameters as you want, just separate them with a comma. <br><br>

        The following example has a function with one parameter ($fname). When the familyName() function is called, we also pass along a name, e.g. ("Jani"), and the name is used inside the function, which outputs several different first names, but an equal last name:  <br><br>



    </p>
    <?php 
    echo "<h2> Example </h2>";

    function myMessage(){
        echo "Hey!, How are you..?";
    }
    myMessage();

    echo "<br>";echo "<br>";
    ##############################################################
    echo "<h3>PHP Function Parameters </h3>";

    function familyName($fname){
        echo"$fname Das <br>";
    }
    familyName("Munna");
    familyName("Raju");
    familyName("Ayush");
    familyname("Ishika");

    echo "<br>";echo "<br>";
    ##############################################################
    echo "<h4> The following example has a function with two parameters ($fname, $year):</h4>";

    function FamilymName($fname, $year){
        echo "$fname Das. Born in $year  years <br>";
    }
    FamilymName("Munna", "2003");
    FamilymName("Raju", "1999");
    FamilymName("Ayush", "2020");
    FamilymName("Ishika", "2018");

    echo "<br>";echo "<br>";
    ##############################################################
    echo "<h3>PHP Default Parameter Value </h3>";
    echo "<h4> The following example shows how to use a default parameter. ($fname, $year):</h4>";
    echo "<p>If we call the function setHeight() without a parameter, it will take the default value: <p>";
    echo "<h3> Example</h3>";

    function setHeight($height = 50){
        echo "The height is : $height <br>";
    }
    setHeight(350);
    setHeight();  //will take the default value of 50;

    echo "<br>";echo "<br>";
    ##############################################################
    echo "<h3>PHP Functions - Returning values </h3>";
    echo "<h4> The return statement immediately ends the execution of a function, and returns a value back to the line of code that called it:</h4>";

    function sum($x, $y){
        $z = $x + $y;
        return $z;
    }
    echo "5 + 6 = " . sum(5, 6) . "<br> ";
    echo "2 + 5 = " . sum(2, 5) . "<br>";
    echo "30 +35 = " . sum(30, 35) . "<br>";


    echo "<br>";echo "<br>";
    ##############################################################
    echo "<h3>Passing Arguments by Reference </h3>";
    echo "<h5> Arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.</h5>";
    echo "<h5> When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, use the & operator in front of the argument/parameter:

</h5>";


    
    
    
    ?>
    
</body>
</html>