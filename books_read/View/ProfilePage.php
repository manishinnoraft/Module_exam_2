<?php
require '../config.php';
$obj=new Connection();  // Connection is established
$res=$obj->fetchBooks();// Fetch Books function is called

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form action="">        
    </form>
    <?php 
    $srno=0;
    foreach($res as $list){
        $srno+=1;
        ?>
        <div class="container">
         <div>
            <div class="card">
            <p> <b> Sr. No. : </b> :<?php echo $srno; ?></p>
            <img src="../<?php echo $list['image']; ?>" alt="Image description" class="poster">
            <p><b>Book Title : </b><?php echo $list['title'] ;?></p>
            <p><b>Book Cost : </b><?php echo $list['cost'] ;?></p>
            <p><b>Book Author : </b><?php echo $list['author']; ?></p>
            <p><b>Book Description : </b><?php echo $list['description']; ?></p>
        </div>
        </div>
        </div>
       
 <?php   }

?>

    
    </div>
    
    
</body>
</html>