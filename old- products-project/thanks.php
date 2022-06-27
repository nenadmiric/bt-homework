<?php



echo "Thank you for your purchase!";

echo "<br>";
echo "<br>";

echo "Please check the information you entered:";

echo "<br>";
echo "<br>";

$firstname = $_POST['firstname'];
echo "Your first name is: " . $firstname;


echo "<br>";
echo "<br>";

$lastname = $_POST['lastname'];
echo "Your first name is: " . $lastname;

echo "<br>";
echo "<br>";

$email_user = $_POST['email_user'];
echo "Your email is: " . $email_user;

echo "<br>";
echo "<br>";

$phone = $_POST['phone'];

function validating($phone){
if(preg_match('/^[0-9]{10}+$/', $phone)) {
    echo "Your phone number is " . $phone;
    } else {
    echo "Invalid Phone Number. You must enter 10 digits.";
    }
}
validating($phone);


echo "<br>";
echo "<br>";

$address = $_POST['address'];
echo "Your address is: " . $address;

echo "<br>";
echo "<br>";

$city = $_POST['city'];
echo "Your city is: " . $city;

echo "<br>";
echo "<br>";

$state = $_POST['state'];
echo "Your state is: " . $state;

echo "<br>";
echo "<br>";

$zip = $_POST['zip'];
echo "Your zip is: " . $zip;

echo "<br>";
echo "<br>";

$quantity = $_POST['quantity'];

if ($quantity == "Quantity") {
    echo "You did not enter a quantity";
  } else {
      echo "The selected quantity is " . $quantity;
  }



echo "<br>";
echo "<br>";




?>