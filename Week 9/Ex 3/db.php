<?php
  $server='localhost';
  $username='root';
  $password='root';
  $schema = 'csy2028';

  $pdo = new PDO('mysql:dbname='. $schema. ';host=' . $server, $username, $password,
          [ PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

 ?>
