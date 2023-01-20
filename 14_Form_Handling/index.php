<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <form action="index.php" method="POST">
    Name: <input type="text" name="name">
    <button type="submit" name="add">ADD</button>
   </form>

<?php 
if(isset($_POST['add'])){
    echo $_POST['name'];
}

?>
</body>
</html>
