<?php
include('functions.php');
$persons = personsFetcher($pdo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 1</title>
</head>
<body>
  <table>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
    </tr>
    <?php foreach ($persons as $person): ?>
      <tr>
        <td><?=$person['name']?></td>
        <td><?=$person['email']?></td>
        <td><?=$person['phone']?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>
