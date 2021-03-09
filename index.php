<?php
    include_once 'user.php';
   // $aadhar_no = "";
    $contact_no = "";
    $name= "";
    $fathers_name="";
    $address="";
    $options="";
    $date_of_birth="";
    $email_id="";
    $gender="";
    $pincode="";
$activity_work="";
$activity_desc="";  


    // if(isset($_POST['aadhar_no'])){
    //     $aadhar_no= $_POST['aadhar_no'];
    // }
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
     if(isset($_POST['date_of_birth'])){
        $date_of_birth= $_POST['date_of_birth'];
    }
     if(isset($_POST['email_id'])){
        $email_id= $_POST['email_id'];
    }
      if(isset($_POST['gender'])){
        $gender= $_POST['gender'];
    }
      if(isset($_POST['pincode'])){
        $pincode= $_POST['pincode'];
    }
       if(isset($_POST['activity_work'])){
        $activity_work= $_POST['activity_work'];
    }
if(isset($_POST['activity_desc'])){
        $activity_desc= $_POST['activity_desc'];
    }

    // $rawdata = file_get_contents("php://input");
    
   
    $userObject = new User();
    
    // Registrationacgh$json = array();
    //!empty($aadhar_no) &&
    
    if(!empty($contact_no) ){
        
        //$hashed_contact_no = md5($contact_no);
        
        $json_registration = $userObject->createNewRegisterUser( $contact_no, $name, $fathers_name, $address, $options,$date_of_birth,$email_id,$gender,$pincode,$activity_work,$activity_desc);
        echo json_encode($json_registration);  
       

      
    }?>