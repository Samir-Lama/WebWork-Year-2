<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercise 1</title>
  </head>
  <body>
    <!-- Exercise 1.1 -->
    <h1>Exercise 1.1</h1>
    <form  action = "1.php" method = "GET">
      Name: <input type = "text" name = "name">
      <input type = "submit" value = "Submit">
    </form>
    <?php
    if(isset($_GET['name'])){
      $name = $_GET['name'];
      echo 'Hello '.$name;
    }
    ?>
    <br>

    <!-- Exercise 1.2 -->
    <h1>Exercise 1.2</h1>
    <form action = "1.php" method = "GET">
      First Number: <input type = "number" name = "n1">
      Second Number: <input type = "number" name = "n2">
      <input type="submit" value="Calculate">
    </form>
    <?php
      if(isset($_GET['n1']) && isset($_GET['n2'])){
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        echo 'Your result of '. $n1 . " X " . $n2 ." = ". $n1*$n2 ;
      }
    ?>

    <!-- Exercise 1.3 -->
    <h1>Exercise 1.3</h1>
    <form action="1.php" method="GET">
      First Number: <input type = "number" name = "n1">
      Second Number: <input type = "number" name = "n2">
      Operation : <input type="text" name="operation">
      <input type="submit" value="Calculate">
    </form>
    <?php
      if(isset($_GET['n1']) && isset($_GET['n2']) && isset($_GET['operation'])){
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $operation = $_GET['operation'];
        if($operation == "*"){
          $result = $n1 * $n2;
          echo 'Your result of '. $n1 . " X " . $n2 ." = ". $result ;
        }else if($operation == "+"){
          $result = $n1 + $n2;
          echo 'Your result of '. $n1 . " + " . $n2 ." = ". $result ;
        }else if($operation == "-"){
          $result = $n1 - $n2;
          echo 'Your result of '. $n1 . " - " . $n2 ." = ". $$result ;
        }else if($operation == "/"){
          $result = $n1 / $n2;
          echo 'Your result of '. $n1 . " / " . $n2 ." = ". $result ;
        }else{
          echo "Invalid Operation";
        }
      }
    ?>
  </body>
</html>
