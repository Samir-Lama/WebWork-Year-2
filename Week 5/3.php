<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="3.php" method="gets">
      Choose wisely: <br>
      <input type="radio" name="player" value="Rock">Rock <br>
      <input type="radio" name="player" value="Paper">Paper <br>
      <input type="radio" name="player" value="Scissor">Scissor <br>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
<?php
  $player = $_GET['player'];
  $decision = array('Rock', 'Paper', 'Scissor');
  $computer_decision = $decision[array_rand($decision)];
  $p_win = "PLAYER WINS";
  $c_win = "COMPUTER WINS";
  echo "You chose {$player}<br>
        Computer chose {$computer_decision}<br> So,";
  if($player  == $computer_decision){
    echo "It's a TIE!!";
  }elseif ($player == 'Rock' && $computer_decision == 'Paper') {
    echo $c_win;
  }elseif ($player == 'Paper' && $computer_decision == 'Rock') {
    echo $p_win;
  }elseif ($player == 'Scissor' && $computer_decision == 'Paper'){
    echo $p_win;
  }elseif ($player == 'Paper' && $computer_decision == 'Scissor') {
    echo $c_win;
  }elseif ($player == 'Scissor' && $computer_decision == 'Rock') {
    echo $c_win;
  }elseif ($player == 'Rock' && $computer_decision == 'Scissor') {
    echo $p_win;
  }else{
    echo "Empty input from user so no result";
  }
 ?>
