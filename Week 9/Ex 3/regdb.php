<?php
  include 'db.php';
    $stmt = $pdo->prepare('INSERT INTO test(name, email, username, password) VALUES(
      :name, :email, :username, :password
    )');
    $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $criteria = ['name' => $_POST['name'],
                  'email' => $_POST['email'],
                  'username' => $_POST['username'],
                  'password' => $hash
    ];
    $stmt->execute($criteria);

 ?>
