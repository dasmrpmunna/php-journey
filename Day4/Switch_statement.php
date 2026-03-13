<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>

   <h2> The PHP switch Statement    </h2>
    <h4>The switch statement is used to perform different actions based on different conditions.</h4>

    Use the switch statement to select one of many blocks of code to be executed.

    <h3>Syntax for switch</h3>

    <h5>switch (expression) {           <br>
        case label1:                    <br>
            //code block                        <br>
            break;                                  <br>
        case label2:                        <br>
            //code block;                           <br>
            break;                              <br>
        case label3:                            <br>
            //code block                        <br>
            break;                          <br>
        default:                            <br>
            //code block                            <br>
    }
        </h5>

    <h4> This is how it works: </h4>

    * The expression is evaluated once <br>
    * The value of the expression is compared with the values of each case <br>
    * If there is a match, the associated block of code is executed <br>
    * The break keyword breaks out of the switch block <br>
    * The default code block is executed if there is no match <br>



    </p>
    <?php
    
    echo"<h2> Switch Statement </h2>"; 
    $color = "green";
    
    switch ($color){
        case"red":
            echo "H2R ninja is a red color..!";
            break;

        case "blue":
            echo "H2R ninja is a blue color..!";
            break;
        
        case "green":
            echo "H2R ninja is a green color..!";
            break;
        
        case "yellow":
            echo 'H2R ninja is a yellow color..!';
            bread;
        
        default:
        echo "H2R ninja is a unique color";
    }

    

    
    ?>
    
</body>
</html>