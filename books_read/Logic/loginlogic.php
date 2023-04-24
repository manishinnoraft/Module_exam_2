<?php
require_once '../config.php';
session_start();
class Login extends Connection{
    public function loginAction($username,$password){
        
        $finduser=mysqli_query($this->connect,"select * from users where Username='$username' and password='$password'");
        if(mysqli_num_rows($finduser)==1){
             return true;
         }
         else{
                return false;
            }
    }
}

?>
