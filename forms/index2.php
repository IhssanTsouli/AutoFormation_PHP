<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="index2.php" method="post">
    first number : <input type="text" name="n1"> <br><br>
    second number : <input type="text" name="n2"> <br><br>
    operator : <input type="text" name="op">
    <button type="submit" name="add">Submit</button>
</form>

<?php

if(isset($_POST['add'])){

   
    $op = $_POST['op']; 
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    

 function add ($x,$y){
    return $x + $y;
 }
 
    if($op === "+"){
      echo add($n1,$n2);
    }
   
}

?>
</body>
</html>