<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>
    <h2>The PHP while Loop</h2>
    The PHP while loop - Loops through a block of code as long as the specified condition is true. <br><br>

    <h3>Syntax</h3>
    <h5>
    while (condition) {         <br>
        // code to be executed repeatedly as long as condition is true        <br>
    }           <br><br><br>

    Tip: The condition is checked at the beginning of each iteration, which means that if the condition is initially false, the code block will not run even once.  <br>

</h5>



</p>
<?php 
    echo "<h3> Example </h3>";

    $i = 1;     //initialize counter
    while ($i < 10){       //check condition    
        echo $i . " ";     // execute code 
        $i++;               //increment counter
    }

    ####################################################endregion

    echo "<h3> The PHP break Statement </h3>";
    echo "<h5> With the break statement we can stop the loop even if the condition is still true: </h5>";

    $i = 1;
    while ($i < 10){
        if ($i == 6)
            break;
            echo $i ." ";
            $i++;
    }

    ####################################################

    echo "<h3> The PHP continue Statement </h3>";
    echo "<h5> With the continue statement we can skip the current iteration, and continue with the next: </h5>";

    $i = 0;
    while($i < 10){
        $i++;
        if ($i == 6) continue;
        echo $i ." ";
    }

    ####################################################

    echo "<h3> Alternative Syntax </h3>";
    echo "<h5> The while loop syntax can also be written with the endwhile statement like this </h5>";
    
    $i = 1;
    while ($i < 6):
        echo $i . "<br>";
        $i++;
    endwhile;

    ####################################################

    echo "<h5> If you want the while loop count to 100, but only by each 10, you can increase the counter by 10 instead 1 in each iteration: </h5>";

    $i = 0;
    while ($i < 100):
        $i += 10;
        echo $i . "<br>";
    endwhile;

    



?>
    
</body>
</html>