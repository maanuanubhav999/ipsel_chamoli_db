<?php
include_once('connection.php');
$aadhar_no="";
if(isset($_POST['aadhar_no'])){
        
$aadhar_no = $_POST['aadhar_no'];}
    
	//$stmt = $conn->prepare("SELECT status, text FROM users where aadhar_no='$aadhar_no'");
  $stmt = $conn->prepare("SELECT status, text FROM users where aadhar_no='$aadhar_no'");
	$stmt->execute();
    //can make functionality for accepted or rejected here also//
	$user = $stmt->fetch();
    $value1=$user["status"];
    $value2=$user["text"];
  $json['success'] = 1;
  $json['message'] = "$value1 $value2";
//   $json['success'] = 2;
//   $json['message'] = "$value2";
               

echo json_encode($json);
// var_dump($GLOBALS);


?>