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
// PHP String

$s = "Hello world!";
echo $s;
echo "<br><br>";

// PHP Integer
$int = 5985;
echo $int;
var_dump($int); //The PHP var_dump() function returns the data type and value:

echo "<br><br>";

//PHP Float
$f = 10.365;
echo $f;
echo "<br><br>";
//PHP Boolean
$x = true;
$y = false;

echo "<br><br>";

//PHP NULL Value
$x = "Hello world!";
$x = null;
var_dump($x);

echo "<br><br>";

//PHP Array
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

echo "<br><br>";

//PHP Object
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();


?>   
</body>
</html>