
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/songstyle.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="../js/jsfile.js"></script>
</head>

<body>
    <form class="music_add_section" action="../Logic/addBook.php" method="post" enctype="multipart/form-data">
        <input type="file" name="book_img">
        <label>Book Title: </label>
        <input type="text" name="book_title">
        <label>Book Author: </label>
        <input type="textfield" rows='3' cold='3' name="author_name">
        <label>Book Description: </label>
        <input type="textfield" rows='5' cold='3' name="book_description">
        <label>Book Cost (in Rs): </label>
        <input type="number" name="book_cost" >
        <input type="submit" value="Add Book" name="add_book">
    </form>

</body>

</html> 