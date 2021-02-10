<?php
  $num = array('zero','one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine','ten','eleven', 'twelve',
                'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen');
  $tens = array('zero','ten','twenty' , 'thirty' , 'forty', 'fifty','sixty', 'seventy', 'eighty', 'ninety');

  echo "<h1> NUMBERS IN WORD </h1><br>";
  for($i = 1; $i <= 9; $i++) {
    echo "{$num[$i]}<br>";
  }
  echo "<h1> NINE TABLE </h1>";
  for ($i=1; $i <= 12; $i++) {
    $result = 9 * $i;
    if($result < 20){
      echo "{$num[$result]}<br>";
    }else{
      $word = (string)$result;
      echo "$word";
      // $first = (int)$result[0];
      // echo $first;
      // echo $ten[number_format($first)];
    }

  }
 ?>
