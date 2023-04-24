<?php
session_start();
require_once '../Logic/loginlogic.php';
if(isset($_POST['login'])){        
    
    $_SESSION['eusername']=$_POST['eusername'];
    $_SESSION['epassword']=$_POST['epassword'];
    $newuser=new Login();
    $user = $newuser->loginAction($_SESSION['eusername'],$_SESSION['epassword']);
   
     if($user){
         header("Location: ../View/ProfilePage.php");
     }else{
         echo "User Not exist";
 }
}
?>