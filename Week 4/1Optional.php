<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="1Optional.css">
    <title></title>
  </head>
  <body>
    <?php
        function drawSquare(){
          $val = rand(1,5);
          return $val;
        }
     ?>
     <div class="square<?php echo drawSquare();?>">

     </div>
  </body>
</html>
