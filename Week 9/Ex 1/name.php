<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ex 1</title>
  </head>
  <body>
    <?php
  session_start();
  if (isset($_POST['submit'])) {
  //Check they entered the correct username/password
  if ($_POST['username'] === 'csy2028' && $_POST['password'] === 'secret') {
  $_SESSION['loggedin'] = true;
  echo '<p>Welcome back ' . $_POST['username'] .'</p>';
  echo '<p>This page is only visible if you entered the correct password!</p>';
  }
  //If they didn't, display an error message
  else {
  echo '<p>You did not enter the correct username and password</p>';
  }
  }
  else { //The submit button was not pressed, show the log-in form
  ?>
    <form action="name.php" method="POST">
      <label>Username: </label>
      <input type="text" name="username" />
      <label>Password: </label>
      <input type="password" name="password" />
      <input type="submit" name="submit" value="Log In" />
    </form>
  <?php
}?>
  </body>
</html>
