<?php
 $conn = "";
 try {
     $servername = "localhost";
     $dbname = "admin";
     $username = "root";
     $password = "";
     $conn = new PDO("mysql:host=$servername; dbname=ipsel_chamoli", $username, $password);
     header('content-type: application/json; charset=utf-8');
    $conn->setAttribute(PDO::ATTR_ERRMODE,
                     PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
 }
 ?>