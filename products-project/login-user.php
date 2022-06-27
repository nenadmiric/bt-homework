<?php
include ('user-connection.php');

class User {
    private $db;

    public function __construct () {
        $this->db = new Connection ();
        $this->db = $this->db->dbConnect();
    }
    public function Login ($email, $password) {
        if (!empty($email) && !empty($password)) {
            $st = $this->db->prepare("SELECT * FROM users WHERE email=? and password=?");
            $st->bindParam(1, $email);
            $st->bindParam(2, $password);
            $st->execute();
        }
        if ($st->rowCount()==1) {
            echo "<h1 class='text-center'>You are logged in succesfully</h1>";
        } else {
            echo "<h1 class='text-center'>There is no account with that email address. Please <a href='reg-index.php'>register</a> your account.</h1>";
        }
    }
}


?>