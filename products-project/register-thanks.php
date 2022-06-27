<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php require __DIR__ . "/views/_layout/v-header.php"; 

$inputName3=$_POST['inputName3'];
$inputLastname3=$_POST['inputLastname3'];
$inputPassword3=$_POST['inputPassword3'];
$inputrePassword3=$_POST['inputrePassword3'];
$inputEmail3=$_POST['inputEmail3'];
$inputAge3=$_POST['inputAge3'];
$gridRadios=$_POST['gridRadios'];
$gridCheck1=$_POST['gridCheck1'];

if($inputPassword3 !==$inputrePassword3) {
    echo "<div class='h2 text-center text-danger mt-3 mb-3'>Passwords do not match!</div>";
    echo "<div class='text-center mb-5'><button class='rounded btn btn-primary'><a href='register-page.php' class='font-weight-bold text-light text-decoration-none'>Go back and try again</a></button></div>";
} else {
    echo "<div class='h2 text-center mt-3 mb-3'>You have successfully registered!</div>";
    echo "<div class='text-center mb-5'><button class='rounded btn btn-primary'><a href='login-page.php' class='font-weight-bold text-light text-decoration-none'>Log in to your account</a></button></div>";
}





require __DIR__ . "/views/_layout/v-footer.php"; ?>
</body>
</html>






