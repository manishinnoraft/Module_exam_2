<?php

require_once '../config.php';
class Register extends Connection{
    public function registerAction($name,$username,$password,$confirmpassword){
        $duplicate=mysqli_query($this->connect,"select * from users where Username='$username'");
        if(mysqli_num_rows($duplicate) > 0){
            echo "User already Exist";
        }
        else{
            if($password==$confirmpassword){
                $sqlquery1="insert into users values( '$name','$username','$password','$confirmpassword')";

                $query=mysqli_query($this->connect,$sqlquery1);
                
                echo "All run successfully";
            }
            else {
                echo "Password Does Not Match";
            }
        }
    }
}

?>