<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercise 2</title>
  </head>
  <body>
    <form action="2.php" method="post">
      First Name: <input type="text" name="name" required>
      <br>
      Surname: <input type="text" name="surname" required>
      <br>
      Favourite Color:
      <select class="color" name="color">
        <option value="red">Red</option>
        <option value="blue">Blue</option>
        <option value="green">Green</option>
        <option value="yellow">Yellow</option>
        <option value="black">Black</option>
      </select>
      <br>
      <input type="checkbox" name="term" value="true"> Agree Terms and Services
      <br>
      <input type="submit" value="Submit">
    </form>
    <?php
      if(isset($_POST['term'])){
          $name = $_POST['name'];
          $surname = $_POST['surname'];
          $color = $_POST['color'];
          echo "Name: " . $name. '<br> ' . 'Surname: ' . $surname . '<br>' . 'Color: ' . $color;
      }else {
        echo "Please accept the terms and services!!";
      }
     ?>
  </body>
</html>
