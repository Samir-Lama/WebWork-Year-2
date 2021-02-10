<?php
  session_start();
  if(!isset($_SESSION['logged_in'])){
    echo 'Invalid Address';
  }else{
    unset($_SESSION['logged_in']);
    echo "You are logged out";
  }

 ?>
