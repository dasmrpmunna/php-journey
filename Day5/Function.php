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
    echo "<hr/>";
    echo "<h2 style = 'color:red'> Example </h2>";

    function myMessage(){
        echo "Hey!, How are you..?";
        echo "<hr/>";
    }
    myMessage();

    ##############################################################
    
    // another examle
    function myDetail(){
        echo "<h3>My Details </h3>";
    }
    function userDetail(){
        myDetail();
        echo "My name is Aryan  <br>";
        echo "I am from Nepal";
        echo "i'm in my Final Year";
        echo "<hr/>";
    }
    userDetail();
    userDetail();

    ##############################################################
    echo "<h3 style = 'color:green'>PHP Function Parameters </h3>";

    function familyName($fname){
        echo"$fname Das <br>";
    }
    familyName("Munna");
    familyName("Raju");
    familyName("Ayush");
    familyname("Ishika");

    echo "<hr/>";
    echo "<h3 style='color:Black'> Another Dynamic Parameter Example </h3>"; 

    function myColor($name, $color){
        echo "<h4 style='color:$color'> My name is $name";
    }
    myColor("Munna Das", "red");
    myColor("Aryan Shrivastava", "yellow");
    myColor("Ben Tennyson","green");
    myColor("Wins", "pink");



   echo "<hr/>";
    ##############################################################
    echo "<h4> The following example has a function with two parameters ($fname, $year):</h4>";

    function FamilymName($fname, $year){
        echo "$fname Das. Born in $year  years <br>";
    }
    FamilymName("Munna", "2003");
    FamilymName("Raju", "1999");
    FamilymName("Ayush", "2020");
    FamilymName("Ishika", "2018");
    echo "<hr/>";
    ##############################################################
    echo "<h3 style = 'color:green'>PHP Default Parameter Value </h3>";
    echo "<h4> The following example shows how to use a default parameter. ($fname, $year):</h4>";
    echo "<p>If we call the function setHeight() without a parameter, it will take the default value: <p>";
    echo "<h3> Example</h3>";

    function setHeight($height = 50){       // 50 is the default value, when you forget to put height then it take default value automatically.
        echo "The height is : $height <br>";
    }
    setHeight(350);
    setHeight();  //will take the default value of 50;

    echo "<hr/>";
    echo "<h4 style ='color:blue'> Another Example <h4>";

    function Furits($name, $color = "green"){   // this color = green is default value, when you don't want to call color name then it automatically take default color/value "red";
        echo "This is $name and it's color is $color";
    }
    Furits("apple", "red");

    echo "<hr/>";
    ##############################################################
    echo "<h3 style = 'color:green'>PHP Functions - Returning values </h3>";
    echo "<h4> The return statement immediately ends the execution of a function, and returns a value back to the line of code that called it:</h4>";

    function sum($x, $y){
        $z = $x + $y;
        return $z;
    }
    echo "5 + 6 = " . sum(5, 6) . "<br> ";
    echo "2 + 5 = " . sum(2, 5) . "<br>";
    echo "30 +35 = " . sum(30, 35) . "<br>";

    echo "<hr>";
    echo "<h4 style ='color:blue'> Another Example <h4>";
    function userName(){
        return "Munna Das";
    }
    echo "The current user is " . userName() ."..!";


    echo "<hr/>"; 
    ##############################################################
    
    echo "<h3 style = 'color:green'>Nasted Function </h3>";
    echo "<h5> Function within a Function is known as Nested function</h5>";

    function Fun1(){
        echo "Testing Fun1 function <br>";

        function Fun2(){
            echo "Testing Fun2 Function";
        }
    }
    Fun1();
    Fun2();

    // When i call first Fun2 function then it show error because of nested.
    // Everytime first call "Parent Function" then call "children function".
    echo "<br/>";echo "<br/>";
    echo "*******************************************************<br>";

    function Furit($name, $color){
        echo "This is the $name and it's color is $color..! <br>";

        function Vegetable($name1, $color1){
            echo "This is a $name1 and it's color is $color1..!";
        }
    }
    Furit("apple","red");
    Vegetable("carrot", "orange");


    echo "<hr/>";
    ##############################################################
    echo "<h3 style = 'color:green'>Passing Arguments by Reference </h3>";
    echo "<h5> Arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.</h5>";
    echo "<h5> When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, use the & operator in front of the argument/parameter:</h5>";


    
    
    
    ?>
    
</body>
</html>