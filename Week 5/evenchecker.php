<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="evenchecker.php" method="get">
      Enter a number = <input type="text" name="num"><br>
      <input type="submit" name="Submit">
    </form>
  </body>
</html>
<?php
  $num = $_GET['num'];
  function isEven($num){
    if($num%2 == 0){
      return true;
    }
    return false;
  }

  if(isEven($num) == true){
    echo "Entered number is even";
  }else {
    echo "Entered number is odd";
  }
 ?>
