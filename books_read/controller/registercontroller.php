<?php

require_once '../Logic/registerlogic.php';

if(isset($_POST['submit'])){
    
$name=$_POST['fullname'];
$username=$_POST['username'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];


$user = new Register();
$user->registerAction($name,$username,$password,$confirmpassword);
}
?>