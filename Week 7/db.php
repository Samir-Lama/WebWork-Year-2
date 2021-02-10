<?php
  $server='localhost';
  $username='root';
  $password='root';
  $schema = 'csy2028';

  $pdo=new PDO('mysql:dbname='. $schema. ';host=' . $server, $username, $password,
          [ PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

  $result = $pdo->query('SELECT * FROM persons');

  echo "Persons info:";
  foreach ($result as $key) {
      echo 'Name: '.$key['name'] . '<br>';
      echo 'Surname: '.$key['surname'] . '<br>';
      echo 'DOB: '.$key['dob'] . '<br>';
      echo 'Email: '.$key['email']. '<br>';
      echo "<hr>";
  }

  $name = 'Ghan';
  $surname = 'Shyam';
  $dob = '2020-12-1';
  $email = 'email6@email.com'

  $query = "INSERT INTO persons('mame')"
  $pdo->query(INSERT INTO persons('name', 'surname', 'dob', 'email') VALUES ($name, $surname, $dob, $email));

  $result = $pdo->query('SELECT * FROM persons');

  echo "Persons info:";
  foreach ($result as $key) {
      echo 'Name: '.$key['name'] . '<br>';
      echo 'Surname: '.$key['surname'] . '<br>';
      echo 'DOB: '.$key['dob'] . '<br>';
      echo 'Email: '.$key['email']. '<br>';
      echo "<hr>";
  }

 ?>
