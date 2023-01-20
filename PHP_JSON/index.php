<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>PHP - json_encode()</h1> 
<?php
//an associative array into a JSON object
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);

//indexed array into a JSON array
$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars);
?>
<h1>PHP - json_decode()</h1>
<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);

echo $obj->Peter."<br>";
echo $obj->Ben."<br>";
echo $obj->Joe."<br>";

foreach($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";
  }
//The json_decode() function returns an object by default.
//  The json_decode() function has a second parameter,
//  and when set to true, JSON objects are decoded into associative arrays.
$arr = json_decode($jsonobj, true);
echo $arr["Peter"]."<br>";
echo $arr["Ben"]."<br>";
echo $arr["Joe"]."<br>";

foreach($arr as $key => $value) {
    echo $key . " => " . $value . "<br>";
  }

?>

</body>
</html>