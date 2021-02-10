<?php
  session_start();
  if(!isset($_SESSION['logged_in'])){
      echo "Invalid homepage";
  }else {
      echo "This is a homepage";
  }
 ?>
