<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="double.php" method="get">
      Number: <input type="text" name="num">
      <input type="submit"  value="Submit">
    </form>
  </body>
  <?php
      $num = $_GET['num'];
      $result = $num * 2;
      echo "{$result} is the double of {$num}";
   ?>
</html>
