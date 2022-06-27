<?php


class db {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $name = 'domaci';

    public function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->name;
        $pdo = new PDO ($dsn, $this->user, $this->pass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}


class Users extends db {
    public function setUser($id,$name,$email,$password, $email_verified_at, $created_at) {
        $sql = "INSERT INTO domaci1 (id, name, email, password, email_verified_at, created_at) VALUES (?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id, $name, $email, $password, $email_verified_at, $created_at]);
        
        

    }
    public function getUser() {
        $sql = "SELECT * FROM domaci1;";
        $stmt = $this->connect()->query($sql);
        while($row=$stmt->fetch()) {
            echo $row['name'] . " " . $row['name'] . " " . $row['email'] . " " . $row['password'] . " " . $row['email_verified_at'] . " " . $row['created_at'] ."<br>" . "<br>";
        }
    }
}

$user1 = new Users();
$user2 = new Users();
$user3 = new Users();
$user4 = new Users();
$user5 = new Users();
$user6 = new Users();
$user7 = new Users();
$user8 = new Users();
$user9 = new Users();
$user10 = new Users();

try {
    $user1->setUser('1','pera','pera@example.com','pera123','2022-08-06','2022-08-06');
    $user2->setUser('2','mika','mika@example.com','mika123','2022-08-06','2022-08-06');
    $user3->setUser('3','zika','zika@example.com','2022-08-06','2022-08-06');
    $user4->setUser('4','sonja','sonja@example.com','sonja123','2022-08-06','2022-08-06');
    $user5->setUser('5','nada','nadaexample.com','nada123','2022-08-06','2022-08-06');
    $user6->setUser('6','jovana','jovana@example.com','jovana123','2022-08-06','2022-08-06');
    $user7->setUser('7','milutin','milutin@example.com','milutin123','2022-08-06','2022-08-06');
    $user8->setUser('8','dragutin','dragutin@example.com','dragutin123','2022-08-06','2022-08-06');
    $user9->setUser('9','radasin','radasin@example.com','radasin123','2022-08-06','2022-08-06');
    $user10->setUser('10','jelena','jelena@example.com', 'jelena123', '2022-08-06','2022-08-06');

} catch (\Throwable $exception) {
    $user1->getUser();
$user2->getUser();
$user3->getUser();
$user4->getUser();
$user5->getUser();
$user6->getUser();
$user7->getUser();
$user8->getUser();
$user9->getUser();
$user10->getUser();
    echo $exception->getMessage();
}




    





?>