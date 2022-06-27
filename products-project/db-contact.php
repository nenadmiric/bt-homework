<?php 


    $dsn = "mysql:host=localhost;dbname=contactdb";
    $pdo = new PDO ($dsn, "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);