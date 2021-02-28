<?php

include_once('connection.php');

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {
	
    if(isset($_POST['adminname'])){
        
        $username = $_POST['adminname'];}
    
    if(isset($_POST['password'])){
        $password = ($_POST["password"]);
    }
	
	
    
	$stmt = $conn->prepare("SELECT * FROM admin");
	$stmt->execute();
	$users = $stmt->fetchAll();
    
    

	
	foreach($users as $user) {
		

		if(($user['username'] == $username) && 
			($user['password'] == $password)) {

				header("Location: admin.php");

		}
		else {
			echo "<script language='javascript'>";
			echo "alert('WRONG INFORMATION')";
			echo "</script>";
			die();
		}
	}
}

?>
