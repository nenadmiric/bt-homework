<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <?php
if(!isset($_SESSION['counter'])) {
    $_SESSION['COUNTER'] = 1;
}
++$_SESSION['counter'];


if($_SESSION['counter'] > 5) {
    echo "Vasa sesija je istekla";
    session_destroy();
}

?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Dobro dosli!</strong> Ovaj sajt koristi kolacice radi boljeg funkcionisanja.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


<script src="js/bootstrap.js"></script>
</body>
</html>