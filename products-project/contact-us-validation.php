<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php require __DIR__ . "/views/_layout/v-header.php"; ?>

<?php

if(!empty($name_contact) && (!empty($email_contact) && (!empty($message_contact)))) {
    echo "<img src='public/theme/img/thanks.png' alt='thanks'>";
   
} elseif(empty($name_contact) || (empty($email_contact) || (empty($message_contact)))) {
    echo "<img src='public/theme/img/error.png' alt='error' class=''>";
    
}
if (empty($name_contact)) {
    
    echo "<br>";
    echo "<div class='h2 text-center text-danger'>You must enter a name!</div>";
} else {
    echo "<div class='h2 text-center'>Your name is $name_contact </div>";
}

echo "<br>";

if (empty($email_contact)) {
    
    echo "<div class='h2 text-center text-danger'>You must enter an email!</div>";
} else {
    echo "<div class='h2 text-center'>Your email is $email_contact </div>";
}

echo "<br>";

if (empty($message_contact)) {
    
    echo "<div class='h2 text-center text-danger'>You must enter a message!</div>";
    echo "<br>";
} else {
    echo "<div class='h2 text-center'>Your message is $message_contact </div>";
}

echo "<div class='text-center mb-5'><button class='rounded btn btn-primary'><a href='contact-us-page.php' class='font-weight-bold text-light text-decoration-none'>Go back</a></button></div>";

?>



<?php require __DIR__ . "/views/_layout/v-footer.php"; ?>
</body>
</html>




