<?php
 session_start();
include_once('connection.php');

if ($_SERVER["REQUEST_METHOD"]== "GET") {
	
    if(isset($_GET['aadhar_no'])){
        $aadhar_no = $_GET['aadhar_no'];}
    
    if(isset($_GET['acceptreject'])){
            $pending = $_GET['acceptreject'];}
    if(isset($_GET['text'])){
        $text = $_GET['text'];}

    
    //update status and text 
	$stmt = $conn->prepare("update users set status='$pending', text='$text' where aadhar_no='$aadhar_no' ");
	$stmt->execute();
    $selected_val=$_SESSION['selected_val'];
    $selected_val=urldecode($selected_val);
    $url="admin.php?option=$selected_val&submit=submit";
	header('Location: '.$url);
    	
	
}

?>