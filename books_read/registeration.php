<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <h1>Register Here</h1>
    <form action="controller/registercontroller.php" method="post">
        <label>Name</label>
        <input type="text" name="fullname"><br>
        <label>Username</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <label>Confirm Password</label>
        <input type="password" name="confirmpassword"><br>
        <input type="submit" name="submit" value="Register">
        <a href="View/loginview.php">Already a Member</a> <br>
        <a href="Admin/loginAdmin.php">Login as Admin?</a>
    </form>

</body>

</html>