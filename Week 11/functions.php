<?php
include('config.php');
function findPersonById($pdo, $id)
{
    $stmt = $pdo->prepare('SELECT * FROM persons WHERE id = :id');

    $criteria = [
        'id' => $id
    ];

    $stmt->execute($criteria);
    return $stmt->fetch();
}

function insertPerson($pdo, $name, $email, $phone){
    $stmt = $pdo->prepare('INSERT INTO persons(`name`, `email`, `phone`) VALUES( :name, :email, :phone)');
    $criteria = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone
    ];
    $stmt->execute($criteria);
}
function personsFetcher($pdo)
{
    $stmt = $pdo->prepare('SELECT * FROM persons');
    $stmt->execute();
    return $stmt->fetchAll();
}
function personDelete($pdo, $id)
{
  $stmt = $pdo->prepare('DELETE FROM `persons` WHERE id = :id');
  $criteria = [
    'id' => $id
  ];
  $stmt->execute($criteria);
}

?>
