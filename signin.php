<?php
     include_once 'user.php';
    $aadhar_no = "";
    $contact_no = "";
    
    if(isset($_POST['aadhar_no'])){
          $aadhar_no= $_POST['aadhar_no'];
    }
    if(isset($_POST['contact_no'])){
        $contact_no = $_POST['contact_no'];
    }

    $userObject = new User();
    
    // Login
    if(!empty($aadhar_no) && !empty($contact_no) ){
        $json_array = $userObject->loginUsers($aadhar_no, $contact_no);
        echo json_encode($json_array);
    }
   
    ?>