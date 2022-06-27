<?php
include 'db-contact.php';
session_start();

if(isset($_POST['contacts'])) {
    $name_contact = !empty($_POST['name_contact']) ? trim ($_POST['name_contact']) : null;
    $email_contact = !empty($_POST['email_contact']) ? trim ($_POST['email_contact']) : null;
    $message_contact = !empty($_POST['message_contact']) ? trim ($_POST['message_contact']) : null;
    

    $sql = "SELECT count(name_contact) AS num FROM contacts WHERE name_contact LIKE :name_contact;";    
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':name_contact', $name_contact);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row['num']>0) {
        require __DIR__ . "/views/_layout/v-header.php";
        die ("<h2>You have already contacted us.</h2>");
        require __DIR__ . "/views/_layout/v-footer.php";;
    }
    
    $sql="INSERT INTO contacts (name_contact,email_contact,message_contact) VALUES (:name_contact,:email_contact,:message_contact);";
    $stmt=$pdo->prepare($sql);
    $stmt->bindValue(':name_contact',$name_contact);
    $stmt->bindValue(':email_contact',$email_contact);
    $stmt->bindValue(':message_contact',$message_contact);
  
    

    if(!empty($name_contact) && (!empty($email_contact) && (!empty($message_contact)))) {
        echo "<img src='public/theme/img/thanks.png' alt='thanks'>";
        $rez = $stmt->execute();
       
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

    
}
?>
<?php require __DIR__ . "/views/_layout/v-header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main class="mt-3 mb-3 text-center">
   
   <img src="public/theme/img/contactus.png" alt="contactus" width="60%"><br>
   <form action="contact-us-page.php" method="POST"">
   <label for="name_contact">Name:</label><br>
   <input type="text" id="name_contact" name="name_contact" placeholder="Your name" class="rounded col-3"><br><br>
   <label for="email_contact">Email:</label><br>
   <input type="email" id="email_contact" name="email_contact" placeholder="Your email" class="rounded col-3"><br><br>
   <label for="message_contact">Message:</label><br>
   <input type="text" id="message_contact" name="message_contact" placeholder="Your message" class="rounded col-3"><br><br>
   <input type="submit" name="contacts" id="contacts" value="Sent" class="rounded bg-success col-1 text-white">

   </form>
</main>
    <?php require __DIR__ . "/views/_layout/v-footer.php"; ?>
</body>
</html>

