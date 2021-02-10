<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Week 4</title>
  </head>
  <body>
    <?php function diceRoll(){
        $val = rand(1,6);
        return $val;
      }
      for ($i=0; $i < 5; $i++) {
        // code...
        echo 'You rolled a : '.diceRoll();
        echo "<br>";
      }
    ?>
  </body>
</html>
