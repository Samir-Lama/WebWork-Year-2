<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="2.css">
    <title>Exercise 2</title>
  </head>
  <body>
    <div class="container">
      <div class="contents">
        Number Display: <br>
        <?php
          echo '<ul>';
         for ($i=1; $i <=10 ; $i++) {
          echo '<li>'. $i.'</li>';
        }
        echo '</ul>;'?>
      </div>
      <div class="contents">
        Number Text Display<br>
        <?php
        $number = array("One","Two","Three","Four","Five","Six", "Seven","Eight", "Nine","Ten");
        echo '<ul>';
        for ($i=0; $i <10 ; $i++) {
          echo '<li>'. $number[$i].'</li>';
        }
        echo '<ul>';?>
      </div>
      <div class="contents">
        Displaying Odd Number from 21 to 99
        <?php
        echo '<ul>';
        for ($i=21; $i < 100 ; $i = $i + 2) {
          echo '<li>'. $i.'</li>';
        }
        echo '</ul>';?>
      </div>
      <div class="contents">
        Multiplication table of 9 <br>
        <?php
        echo '<ul>';
        $nine = 9;
          for ($i=1; $i <= 12 ; $i++) {
            // $nine = $nine +9;
            echo '<li> 9 X '. $i.' = '.$nine * $i.'</li>';
          }
          echo '</ul>';?>
      </div>
    </div>
  </body>
</html>
