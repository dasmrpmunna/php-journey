<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <h2>The PHP Match Expression</h2>
        The match expression provides a new way to handle multiple conditional checks (like the switch statement). <br><br>

        The match expression evaluates an expression against multiple alternatives (using strict comparison) and returns a value.       <br> <br>

        Tip: The match expression is new in PHP 8.0.            <br>

        <h5>Here are the key differences between match and switch:   </h5> 
        * A match expression has a more readable syntax than switch       <br>
        * A match expression returns a value, while switch does not           <br>
        * A match expression breaks automatically after a match, while switch requires break;     <br>
        * A match expression has strict comparison (===), while switch uses loose comparison (==)         <br>
            
            <h4>Syntax for match<h4>
            <h5>
            $result = match($expression) {      <br>
            condition1 => returnvalue1,            <br>
            condition2 => returnvalue2,             <br>
            condition3, condition4 => returnvalue3,         <br>
            default => defaultvalue,                    <br>
            }
            </h5>
        Tip: The default arm catches all expressions that are not matched.



    </p>
    <?php 

    echo "<h2>Example of Match Expression</h2>";
    
    $favColor = "red";
    
    $color = match($favColor){
        "red" => "Your favorite color is red..!",
        "blue" => "Your favorite color is blue..!",
        "yellow" => "Your favorite color is yellow..!",
        "green" => "Your favorite color is green..!",
        default => "Your favorite coolor is neither red, blue, yellow nor green"
    };
    echo $color;

    echo "<br>"; echo "<br>";

#################################################################################################
    // another example;

    $bestColor = "Black";
    $myColor = match($bestColor){
        "red" => "Your favorite color is red..!",
        "blue" => "Your favorite color is blue..!",
        "yellow" => "Your favorite color is yellow..!",
        "green" => "Your favorite color is green..!",
        default => "Your favorite color is neither red, blue, yellow nor green..!"
    };
    echo $myColor;

    echo "<br>"; echo "<br>";

    #################################################################################################
    // another example;

    $d = 4;
    $txt = match($d){
        1, 2, 3, 4, 5 => "The week feel so long..🫩🥱😮‍💨!",
        6, 0 => "Weekend are best..😜🤩🥳",
        default => "Invalid Day..!" 
    };
    echo $txt;

    #################################################################################################

    echo "<h2>The default Keyword</h2>";

    echo "<h5>* In a match expression, there must be a condition that matches the expression, or a default case, to handle it. <br><br> * If there are no matches, and no default case, the match expression throws an UnhandledMatchError exception.</h5>";
    
    // Example
    //This will throw an UnhandledMatchError exception:

    $mColor = "pink";   // no conditions will match this
    try{
        $bColor = match($mColor){
            "red" => "My favourite color is red",
            "green" => "My favourite color is green",
            "yellow" => "My favourite color is yellow",
        };
    }catch(\UnhandledMatchError $e){
        var_dump($e);
    }
    echo $bColor;
    
    ?>
</body>
</html>