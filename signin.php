<?php
     

     include_once 'user.php';
    $aadhar_no = "";
    $contact_no = "";
   
    
    
    if(isset($_GET['aadhar_no'])){
        
        $aadhar_no= $_GET['aadhar_no'];
        
    }
    if(isset($_GET['contact_no'])){
        
        $contact_no = $_GET['contact_no'];
    }

   
   
    
    $userObject = new User();
    

    
    // Login
    
    if(!empty($aadhar_no) && !empty($contact_no) ){
        
        //$hashed_contact_no = md5($contact_no);
        
        $json_array = $userObject->loginUsers($aadhar_no, $contact_no);
        
        echo json_encode($json_array);
    }
    ?>