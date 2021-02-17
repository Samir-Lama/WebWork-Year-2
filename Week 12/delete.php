<?php
include 'function.php';
delete($pdo, 'person', $_GET['id']);

header("location: http://localhost:8888/CSY2028/Week%2012/list.php");
 ?>
