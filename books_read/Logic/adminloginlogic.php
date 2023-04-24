<?php

require_once '../config.php';

class AdminLogin extends Connection{
    // Admin Login method is created which checks the admin database
    public function loginAdmin($username,$password){
        
        $finduser=mysqli_query($this->connect,"select * from admin where Username='$username' and password='$password'");
        if(mysqli_num_rows($finduser)==1){
            header("Location: ../View/AddBookPage.php");  
         }
         else{
                return false;
            }
    }
}
// when submit button is clicked
if(isset($_POST['submit'])){
//  New object is created
    $admin=new AdminLogin();
//  loginAdmin method is callled
    $admin->loginAdmin($_POST['username'],$_POST['password']);
}


