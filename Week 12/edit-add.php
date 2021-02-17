<!DOCTYPE html>
<?php include 'function.php'; ?>
<?php if (isset($_GET['id'])) {
  $person = find($pdo,'person', 'id', $_GET['id']);
  $title = "Edit User";
}else {
  $person['id'] = null;
  $person['name'] = null;
  $person['email'] = null;
  $title = "Add User";
} ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title><?=$title?></title>
  </head>
  <body>
    <div class="row mt-3">
      <div class="col-md-6 offset-md-3">
        <span class="display-4"><?=$title?></span>
        <form class="" action="index.html" method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Name: </label>
            <input type="text" class="form-control" name="name" value="<?=$person['name']?>">
          </div>

          <div class="mb-3">
            <label for="email" form-label>Email</label>
            <input type="email" class="form-control" name="email" value="<?=$person['email']?>">
          </div>

          <button type="submit" class="btn btn-primary" name="button">Submit</button>
        </form>
      </div>
    </div>
  </body>
</html>

<?php if(isset($_POST)){
  save($pdo, 'person', $_POST, 'id');
} ?>
