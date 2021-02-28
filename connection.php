
<?php
 
 $conn = "";
   
 try {
     $servername = "localhost";
     $dbname = "admin";
     $username = "root";
     $password = "";
   
     $conn = new PDO(
         "mysql:host=$servername; dbname=ipsel_chamoli",
         $username, $password
         
     );
      
    $conn->setAttribute(PDO::ATTR_ERRMODE,
                     PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
 }
  
 ?>