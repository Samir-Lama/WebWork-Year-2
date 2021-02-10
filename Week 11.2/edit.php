<?php
include 'config.php';
include 'functions.php';
//If a person to edit is specified, display the form and load the persons's information into it
if (isset($_GET['person'])) {
	$stmt = $pdo->prepare('SELECT * FROM person WHERE email = :email');

	$criteria = [
		'email' => $_GET['person']
	];
	$stmt->execute($criteria);

	$row = $stmt->fetch();

	$personsBirthday = new DateTime($row['birthday']);
/*
or:

foreach ($results as $row) {
	//This will set the $row variable to the last result!
}
*/
?>

	<form action="edit.php" method="POST">
		<input type="hidden" name="originalemail" value="<?php echo $row['email']; ?>" />

		<label>First name:</label>
		<input type="text" name="firstname" value="<?php echo $row['firstname']; ?>" />

		<label>Surname:</label>
		<input type="text" name="surname" value="<?php echo $row['surname']; ?>" />

		<label>Email:</label>
		<input type="text" name="email" value="<?php echo $row['email']; ?>" />

		<label>Birthday:</label>
		<select name="day">
		<?php
			for ($i = 1; $i < 32; $i++) {
				if ($personsBirthday->format('d') == $i) {
					echo '<option selected="selected" value="' . $i . '">' . $i  . '</option>';
				}
				else {
					echo '<option value="' . $i . '">' . $i  . '</option>';
				}
			}
		?>
		</select>


		<select name="month">
		<?php
			$months = ['', 'January', 'Feburary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
			for ($i = 1; $i < 13; $i++) {
				if ($personsBirthday->format('m') == $i) {
					$selected = 'selected="selected"';
				}
				else {
					$selected = '';
				}

				if ($i < 10) {
					echo '<option ' . $selected . ' value="0' . $i . '">' . $months[$i]  . '</option>';
				}
				else {
					echo '<option ' . $selected  . ' value="' . $i . '">' . $months[$i]  . '</option>';
				}
			}
		?>
		</select>

		<select name="year">
		<?php
			for ($i = 1900; $i < 2016; $i++) {
				if ($personsBirthday->format('Y') == $i) {
					echo '<option selected="selected" value="' . $i . '">' . $i  . '</option>';
				}
				else {
					echo '<option value="' . $i . '">' . $i  . '</option>';

				}
			}
		?>
		</select>

		<input type="submit" value="Save" name="submit" />
	</form>

<?php
}
//Otherwise, the form was submitted, amend the record
else {
	update($pdo, 'person', $_POST, $_POST['originalemail']);
	echo '<p>Record updated</p>';
}
?>
