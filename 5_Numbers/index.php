<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));

$x = 10.365;
var_dump(is_float($x));

$x = 1.9e411;
var_dump($x);

//PHP Numerical Strings
$x = 5985;
var_dump(is_numeric($x)); //bool(true)

$x = "5985";
var_dump(is_numeric($x)); //bool(true)

$x = "59.85" + 100;
var_dump(is_numeric($x)); //bool(true)

$x = "Hello";
var_dump(is_numeric($x)); //bool(false)

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x; //23465
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x; //23465
echo $int_cast;
?>
</body>
</html>