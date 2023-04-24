<?php
require_once ('config.php');

// Book class is created
class Book extends Connection{
    // dir variable created to store images to the folder directory
    public $dir;
    function add_book(){
    // Add Book adds the book to the database
    if(isset($_POST["add_book"])){
    $file = $_FILES["book_img"]["name"];
    $file_tmp = $_FILES["book_img"]["tmp_name"];
    $file_size = $_FILES["book_img"]["size"];   
    $book_title=$_POST['book_title'];
    $author_name=$_POST['author_name'];
    $book_des=$_POST['book_description'];
    $cost=$_POST['book_cost'];
    $upload_dir="Images/";
    $file_ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    // File is uploaded to directory
    if($file){
        move_uploaded_file($file_tmp, $upload_dir.$file);
    }
    $file_path = $upload_dir.$file;
    $query = "INSERT INTO book_entries (title,image,description,cost,author) VALUES ('$book_title','$file_path','$book_des','$cost','$author_name')";
    mysqli_query($this->connect, $query);
    mysqli_close($this->connect);
    header("Location: ../View/AddBookPage.php");
    echo "Book Added";    
}

    }
}

// Object is created and add_book() function is called
$newbook = new Book();
$newbook->add_book();
