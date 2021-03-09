<?php
     include_once 'user.php';
    $date_of_birth = "";
    $contact_no = "";
    
    if(isset($_POST['date_of_birth'])){
          $date_of_birth= $_POST['date_of_birth'];
    }
    if(isset($_POST['contact_no'])){
        $contact_no = $_POST['contact_no'];
    }


    $userObject = new User();
    
    // Login
    if(!empty($date_of_birth) && !empty($contact_no) ){
        $json_array = $userObject->loginUsers($date_of_birth, $contact_no);
        echo json_encode($json_array);
    }
   
    ?>