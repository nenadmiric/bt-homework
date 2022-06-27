<?php 


    $dsn = "mysql:host=localhost;dbname=registration";
    $pdo = new PDO ($dsn, "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
