<?php
  $obj = new stdClass;
  $obj -> hello = "Hello";
  $obj -> world = "World";
  foreach ($obj as $key => $value) {
    echo $key . ' => ' . $value . '<br>';
  }
 ?>
