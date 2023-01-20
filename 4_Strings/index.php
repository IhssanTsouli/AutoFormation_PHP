<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>PHP String Functions</h1>
<?php
//strlen() - Return the Length of a String

echo strlen("Hello world!"); // outputs 12

echo"<br><br>";

//str_word_count() - Count Words in a String

echo str_word_count("Hello world!"); // outputs 2

echo"<br><br>";
// strrev() - Reverse a String

echo strrev("Hello world!"); // outputs !dlrow olleH
echo"<br><br>";

//strpos() - Search For a Text Within a String
echo strpos("Hello world!", "world"); // outputs 6
echo"<br><br>";

//str_replace() - Replace Text Within a String
echo str_replace("world", "Dolly", "Hello world!"); // outputs
?>

</body>
</html>