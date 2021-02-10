<?php
include 'functions.php';
if (isset($_POST['idSearch'])) {
  $result = findPersonById($pdo, $_POST['id']);
  var_dump($result);
}
if (isset($_POST['insertPerson'])) {
  insertPerson($pdo, $_POST['name'], $_POST['email'], $_POST['phone']);
  header("location: http://localhost:8888/CSY2028/Week%2011/personList.php");
}
if (isset($_POST['idDelete'])) {
  personDelete($pdo, $_POST['id']);
  header("location: http://localhost:8888/CSY2028/Week%2011/personList.php");
}
?>
