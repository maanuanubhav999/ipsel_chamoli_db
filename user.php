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
        public function isLoginExist($aadhar_no, $contact_no){
            $query = "select * from ".$this->db_table." where aadhar_no = '$aadhar_no' AND contact_no = '$contact_no'";
            $result = mysqli_query($this->db->getDb(), $query);
            if(mysqli_num_rows($result) > 0){
              //  mysqli_close($this->db->getDb());  
                return true;
            }
           // mysqli_close($this->db->getDb());
            return false;
        }

        //registrying new user
        public function createNewRegisterUser($aadhar_no, $contact_no, $name, $fathers_name, $address, $options){
            $isExisting = $this->isLoginExist($aadhar_no, $contact_no);    
            if($isExisting){  
                $json['success'] = 0;
                $json['message'] = "Error in registering. Probably the aadhar_no/contact_no already exists";
            }   
            else{
                $query = "insert into ".$this->db_table." (aadhar_no, contact_no, name, fathers_name, address, options) values ('$aadhar_no', '$contact_no', '$name', '$fathers_name','$address','$options')";
                $inserted = mysqli_query($this->db->getDb(), $query);                
                if($inserted == 1){
                    $json['success'] = 1;
                    $json['message'] = "Successfully registered the user";
                }else{
                    $json['success'] = 0;
                    $json['message'] = "Error in registering. Probably the aadhar_no_no_no/contact_no already exists";
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