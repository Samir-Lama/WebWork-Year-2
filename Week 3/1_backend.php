<?php
  $first_dice = rand(1,6);
  $second_dice = rand(1,6)
  if($first_dice == 6 && $second_dice == 6){
    echo "You got 6 on both sides!!! You Win";
  }else{
    echo 'You got '.$first_dice . ' and '. $second_dice.', You Lose';
  }
  echo '<a href = "1.php"> Do you want to Continue </a>';
 ?>
