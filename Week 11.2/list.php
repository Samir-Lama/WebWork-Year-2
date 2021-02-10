<form action="list.php" method="POST">
	<input type="text" name="search" />
	<select name="field">
		<option value="firstname">First name</option>
		<option value="surname">Surname</option>
		<option value="email">Email address</option>
	</select>
	<input type="submit" value="Search" name="submit" />
</form>
<?php
include 'config.php';
include 'functions.php';

if (isset($_POST['search'])) {
	//Prevent SQL injection by only allowing specific values for $_POST['field']
	if ($_POST['field'] == 'firstname' || $_POST['field'] == 'email' || $_POST['field'] == 'surname') {

		$stmt = find($pdo, 'person', $_POST['field'], $_POST['search']);

	}
}
else {
	$stmt = findAll($pdo, 'person');
}


echo '<ul>';
foreach ($stmt as $row) {
	echo '<li><a href="edit.php?person=' . $row['email'] . '">' . $row['firstname'] . ' ' . $row['surname'] . '</a> was born on ' . $row['birthday'] .
	 	  ' and their email address is ' . $row['email'] . '</li>';
}


echo '</ul>';


?>
