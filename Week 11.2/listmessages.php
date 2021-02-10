<?php
include 'config.php';
include 'functions.php';

$stmt = findAll($pdo, 'message');

$userQuery = $pdo->prepare('SELECT * FROM person WHERE id = :id');

$stmt->execute();

echo '<ul>';
foreach ($stmt as $row) {
	$criteria = [
		'id' => $row['userId']
	];

	$userQuery->execute($criteria);

	$user = $userQuery->fetch();

	$date = new DateTime($row['messageDate']);

	echo '<li>' . $row['messageText'] . ' posted by
		<strong>' . $user['firstname'] . ' ' . $user['surname'] . '</strong>
		on <em>' . $date->format('d/m/Y') . '</em>';

}
echo '</ul>';

echo '<a href="addmessage.php">Add a new message</a>';
?>
