<?php
     include_once 'user.php';
    $aadhar_no = "";
    $contact_no = "";
    $name= "";
    $fathers_name="";
    $address="";
    $options="";
    
   // var_dump($GLOBALS);


    if(isset($_POST['aadhar_no'])){
        
        $aadhar_no= $_POST['aadhar_no'];
        
    }
    if(isset($_POST['contact_no'])){
        
        $contact_no = $_POST['contact_no'];
        
    }
    if(isset($_POST['name'])){
        
        $name = $_POST['name'];
        
    }
    if(isset($_POST['fathers_name'])){
        
        $fathers_name = $_POST['fathers_name'];
        
    }

    if(isset($_POST['address'])){
        
        $address = $_POST['address'];
        
    }


    if(isset($_POST['options'])){
        
        $options = $_POST['options'];
        
    }
    
    $userObject = new User();
    
    // Registrationacgh$json = array();
    
    if(!empty($aadhar_no) && !empty($contact_no) ){
        
        //$hashed_contact_no = md5($contact_no);
        
        $json_registration = $userObject->createNewRegisterUser($aadhar_no, $contact_no, $name, $fathers_name, $address, $options);
        echo json_encode($json_registration);   
    }
    
    ?>
   