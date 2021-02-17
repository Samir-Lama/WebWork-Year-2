<!DOCTYPE html>
<?php include 'function.php' ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <table class="table">
      <thead>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </thead>
      <?php
      $persons = findAll($pdo, 'person');
      foreach ($persons as $person): ?>
      <tr>
        <td><?=$person['id']?></td>
        <td><?=$person['name']?></td>
        <td><?=$person['email']?></td>
        <td>
          <a href="edit-add.php?id=<?=$person['id']?>" class="btn btn-primary btn-sm">Edit</a>
          <a href="delete.php?id=<?=$person['id']?>" class="btn btn-danger btn-sm">Delete</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>
