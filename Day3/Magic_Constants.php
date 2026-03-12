<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        PHP has nine predefined constants that change value depending on where they are used, also called the "magic constants". <br>

The magic constants provide information about the current state of the script, such as the file name, directory name, line number, function name, class name, and more. <br>

The magic constants always start and end with double underscores (__), except for the ClassName::class constant. <br>

The magic constants are not case-sensitive, meaning __LINE__ returns the same as __line__.<br><br><br>

The following table lists the magic constants, with descriptions and examples:<br><br>

Constant	Description <br>	
__CLASS__	: If used inside a class, the class name is returned.  --> This constant returns the class name:	<br> <br>

__DIR__	: The directory of the file.	--> This constant returns the directory name of the file: <br><br>

__FILE__ :	The file name including the full path.  --> This constant returns the full path and the name of the file:	 <br><br>

__FUNCTION__ :	If inside a function, the function name is returned.  --> This constant returns the function name:	 <br><br>

__LINE__	: The current line number of the file.  --> This constant returns the current line number:	<br><br>

__METHOD__	: If used inside a function that belongs to a class, both class and function name is returned. --> This constant returns both class and function name:	<br><br>

__NAMESPACE__	: If used inside a namespace, the name of the namespace is returned. --> This constant returns the name of the namespace:	<br><br>

__TRAIT__	: If used inside a trait, the trait name is returned.  --> This constant returns the trait name:	<br><br>

ClassName::class   : Returns the name of the specified class and the name of the namespace, if any. --> This constant returns the class name and name of the namespace (if any):<br><br>

    </p>
</body>
</html>


