<?php
    class User{
        public function __construct(){ 
        }
   
         public function userRegistration($data){
            $name     = $data['name'];
            $username = $data['username'];
            $email    = $data['email'];
            $password = md5($data['password']);
            
           //$chk_email = $this->emailCheck($email);
            if($name == "" || $username =="" || $email == "" || $password ==""){
                $msg = "<div class='alert alert-danger'><strong>Error ! </strong>Field must not 
                    be empty</div>";
                return $msg;
            }
            if($username < 3){
                $msg = "<div class='alert alert-danger'><strong>Error ! </strong>Field Username is too
                    short</div>";
                 return $msg;
            }
            elseif(preg_match('/[^a-z0-9_-]+/i',$username)){
                $msg = "<div class='alert alert-danger'><strong>Error ! </strong>Username must contain
                    alphanumeric ,dashes, underscore.</div>";
                 return $msg;
            }
            if(filter_var($email, FILTER_VALIDATE_EMAIL) ===  false){
                $msg = "<div class='alert alert-danger'><strong>Error ! </strong>Email address is not
                valid</div>";
                return $msg;
            }
         }
}
?>