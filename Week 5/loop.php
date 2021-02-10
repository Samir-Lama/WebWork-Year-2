<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="loop.php" method="get">
      Starting Number = <input type="text" name="start"><br>
      Ending Number = <input type="text" name="end"><br>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
<?php
  $start = $_GET['start'];
  $end = $_GET['end'];
  for ($i = $start; $i <= $end; $i++) {
    echo $start++."<br>";
  }
 ?>
