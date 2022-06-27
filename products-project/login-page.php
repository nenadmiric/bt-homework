<?php
include_once('login-user.php');
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $object = new User();
    $object->Login($email, $password);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
<?php require __DIR__ . "/views/_layout/v-header.php"; 
echo "<div class='h2 text-center mt-3 mb-4'>Log in to your account</div>";?>
<form action="login-page.php" method="post">
<div class="form-group text-center d-flex justify-content-center">
    <label for="email" class=""></label>
    <div class="col-sm-5 mb-2">
      <input type="email" class="form-control center-block mb-4" id="email" name="email" placeholder="Enter your email"  required>
    </div>
  </div>
  <div class="form-group text-center d-flex justify-content-center">
    <label for="password" class=""></label>
    <div class="col-sm-5 mb-2">
      <input type="password" class="form-control center-block mb-4" id="password" name="password" placeholder="Enter your password"  required>
    </div>
  </div>
  <div class="form-group text-center d-flex justify-content-center">
    <div class="col-sm-5 mb-2">
      <input type="submit" class="form-control center-block mb-4" id="submit" name="submit">
    </div>
  </div>
  </form>



<?php require __DIR__ . "/views/_layout/v-footer.php"; ?>
</body>
</html>