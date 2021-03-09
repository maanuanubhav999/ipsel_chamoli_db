<?php
    include_once 'db-connect.php';
    class User{
        private $db;
        private $db_table = "users";
        public $json = array();
        public function __construct(){
            $this->db = new DbConnect();
            header('content-type: application/json; charset=utf-8');
        }
        //if user already exits (we also want if user exits to continue the login process)
        public function isLoginExist($date_of_birth,$contact_no){
            $query = "select * from ".$this->db_table." where contact_no = '$contact_no' And date_of_birth ='$date_of_birth'";
            $result = mysqli_query($this->db->getDb(), $query);
            if(mysqli_num_rows($result) > 0){
              //  mysqli_close($this->db->getDb());  
                return true;
            }
           // mysqli_close($this->db->getDb());
            return false;
        }

        //registrying new user
        public function createNewRegisterUser($contact_no, $name, $fathers_name, $address, $options,$date_of_birth,$email_id,$gender,$pincode,$activity_work,$activity_desc){
           $isExisting = $this->isLoginExist($date_of_birth,$contact_no);  
           
            if($isExisting){  
                $json['success'] = 0;
                $json['message'] = "Error in registering. Probably the aadhar_no/contact_no already exists";
            }   
            else{
                $query = "insert into ".$this->db_table." (contact_no, name,email_id,gender,pincode,activity_work,activity_desc,fathers_name, address,date_of_birth, options) values ( '$contact_no', '$name','$email_id', '$gender','$pincode','$activity_work','$activity_desc','$fathers_name','$address','$date_of_birth','$options')";
                $inserted = mysqli_query($this->db->getDb(), $query);                
                if($inserted == 1){
                    $json['success'] = 1;
                    $json['message'] = "Successfully registered the user";
                }else{
                    $json['success'] = 0;
                    $json['message'] = "Error in registering. ";
                }
               //mysqli_close($this->db->getDb());
        }
        return $json;
    }
        public function loginUsers($aadhar_no, $contact_no){
            // $json = object();
            $canUserLogin = $this->isLoginExist($aadhar_no, $contact_no);
            if($canUserLogin){
                $json['success'] = 1;
                $json['message'] = "Successfully logged in";
            }else{
                $json['success'] = 0;
                $json['message'] = "Incorrect details";
            }
            return $json;
        }    
    }?>