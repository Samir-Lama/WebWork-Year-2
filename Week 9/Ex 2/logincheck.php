<?php
  include 'db.php'
  session_start();
  if(isset($_POST['submit'])){
    $_SESSION['logged_in'] = true;
    if($_POST['name'] === 'csy2028' && $_POST['password'] === 'secret'){
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
