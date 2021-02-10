<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="1.php" method="post">
      Name: <input type="text" name="name">
      <br>
      <br>
      Email: <input type="email" name="email">
      <br>

      <input type="submit" name="" value="Submit">
    </form>
  </body>
</html>
<?php
    $server='localhost';
    $username='root';
    $password='root';
    $schema = 'csy2028';

    unset($_POST['submit']);
    $pdo=new PDO('mysql:dbname='. $schema. ';host=' . $server, $username, $password,
            [ PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

    if(isset($_POST['name']) && $_POST['email']){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $pdo->$query("INSERT INTO test(name, email,) VALUES (".'$name'.", ".'$email'.")");
    }

 ?>
