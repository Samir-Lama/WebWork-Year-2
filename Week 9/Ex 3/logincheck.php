<?php
  include 'db.php';
  session_start();
  $stmt = $pdo->prepare('SELECT * FROM test WHERE username = :username');

  $criteria = ['username' => $_POST['username']];
  $stmt->execute($criteria);
  $user = $stmt->fetch();

  if(isset($_POST['submit'])){
    $_SESSION['logged_in'] = true;
    if(password_verify($_POST['password'], $user['password'])){
      echo '<p> Logged in Successfully</p>
            <br>
            Click the button to logout<br>
            <a href = "logout.php">Logout</a> <br>
            <a href = "home.php"><?php">Home</a>';
    }else{
      echo "Invalid User and Password";
    }
  }else{
    echo "You are not allowed in this page";
  }
 ?>
