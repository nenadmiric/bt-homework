<?php
include 'reg-db.php';
session_start();

if(isset($_POST['registration'])) {
    $username = !empty($_POST['name']) ? trim ($_POST['name']) : null;
    $last_name = !empty($_POST['last_name']) ? trim ($_POST['last_name']) : null;
    $password = !empty($_POST['password']) ? trim ($_POST['password']) : null;
    $repassword = !empty($_POST['repassword']) ? trim ($_POST['repassword']) : null;
    $email = !empty($_POST['email']) ? trim ($_POST['email']) : null;
    $age = !empty($_POST['age']) ? trim ($_POST['age']) : null;
    $gender = !empty($_POST['gender']) ? trim ($_POST['gender']) : null;

    $sql = "SELECT count(username) AS num FROM users WHERE username LIKE :username;";    
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':username', $username);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row['num']>0) {
        die ('That username already exists');
    }
    //$passwordHash = password_hash($password, PASSWORD_BCRYPT, array("cost"=>12));
    //$repasswordHash = password_hash($repassword, PASSWORD_BCRYPT, array("cost"=>12));
    $sql="INSERT INTO users (username,last_name,password,repassword,email,age,gender) VALUES (:username,:last_name,:password,:repassword,:email,:age,:gender);";
    $stmt=$pdo->prepare($sql);
    $stmt->bindValue(':username',$username);
    $stmt->bindValue(':last_name',$last_name);
    $stmt->bindValue(':password',$password);
    $stmt->bindValue(':repassword',$repassword);
    $stmt->bindValue(':email',$email);
    $stmt->bindValue(':age',$age);
    $stmt->bindValue(':gender',$gender);
    
    
    

    if($password==$repassword){
        $results = $stmt->execute();
        echo "<h1 class='text-center'>Registration successful. Please log in into your new <a href='login-page.php'>account.</a></h1>";
        
    }
    else {
        require __DIR__ . "/views/_layout/v-header.php";
        die ("<h2>Passwords dont match, please go <a href='reg-index.php'>back</a> and try again.</h2>");
        require __DIR__ . "/views/_layout/v-footer.php";
    }
    
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
    <h2 class="text-center mt-3">Register your account</h2>
    <form action="reg-index.php" method="POST" class="text-center mt-3">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" class="mb-2 rounded" required><br>
        <label for="last_name">Last name:</label><br>
        <input type="text" id="last_name" name="last_name" class="mb-2 rounded" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" class="mb-2 rounded" required><br>
        <label for="repassword">Re-password:</label><br>
        <input type="password" id="repassword" name="repassword" class="mb-2 rounded" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" class="mb-2 rounded" required><br>
        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" class="mb-2 rounded" required><br>
        <label for="gender">Gender:</label><br>
        Male<input type="radio" id="gender" name="gender" value="male"><br>
        Female<input type="radio" id="gender" name="gender" value="female"><br><br>
        <input type="submit" name="registration" id="registration" class="rounded btn btn-success mb-5">
    </form>
    <?php require __DIR__ . "/views/_layout/v-footer.php"; ?>
</body>
</html>
