<?php
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Document</title>
</head>
<body>
<h1>Login Here</h1>
    <form action="../controller/logincontroller.php" method = "post">
        <label>Username</label>
        <input type="text" name="eusername">    
        <label>Password</label>
        <input type="password" name="epassword">
        <input type="submit" name="login" value="Login">
    </form> 
    </body>
</html> 