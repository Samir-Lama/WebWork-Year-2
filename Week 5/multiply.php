<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="multiply.php" method="num">
      Number 1: <input type="text" name="num1"><br>
      Number 2: <input type="text" name="num2"><br>
      <input type="submit" name="Submit">
    </form>
  </body>
</html>
<?php
if(empty($_GET['num1']) || empty($_GET['num2'])){
  echo 'Please fill the form completely';
  return 0;
}
  if(!isset($_GET['num1']) || !isset($_GET['num2'])){
    echo 'Please fill the form completely';
    return 0;
  }

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $result = $num1 * $num2;
    echo "{$num1} * {$num2} = {$result}";
 ?>
