<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search Id</title>
  </head>
  <body>
    <h1>Id Search</h1>
    <form action="executer.php" method="post">
      <label for="id">Search</label>
      <input type="text" name="id">
      <input type="submit" name="idSearch">
    </form>

    <h1>Insert Person</h1>
    <form action="executer.php" method="post">
      <label for="name">Name</label>
      <input type="text" name="name" placeholder="Name">

      <br>
      <label for="name">Email</label>
      <input type="email" name="email" placeholder="Email">

      <br>
      <label for="name">Phone</label>
      <input type="number" name="phone" placeholder="Phone">

      <br>
      <input type="submit" name="insertPerson">
    </form>

    <h1>Delete By ID</h1>
    <form action="executer.php" method="post">
      <label for="id">ID</label>
      <input type="text" name="id">
      <input type="submit" name="idDelete">
    </form>
  </body>
</html>
