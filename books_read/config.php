<?php

class Connection{
    
    public $host = "localhost"; // Database host name
    public $username = "Manishvj02"; // Database username
    public $password = "Manish123#"; // Database password
    public $database = "userdb"; // Database name
    public $connect; // Variable to store the database connection
    
    public function __construct(){
        // Constructor method that is called when a new object is created from the Connection class
    
        $this->connect = new mysqli($this->host,$this->username,$this->password,$this->database);
        // Create a new mysqli object and store it in the $connect variable. Pass in the host name, username, password, and database name as arguments.
        
        if ($this->connect->connect_error) {
            // If there is an error connecting to the database, display an error message
            echo "No conncection";
        }

       
    }
    
    public function fetchBooks(){
        // Method to fetch all the books from the database
        
        $query="select * from book_entries"; // SQL query to select all the books from the book_entries table
        $res=mysqli_query($this->connect,$query); // Execute the query and store the result in the $res variable
        
        $bookslistArray = array(); // Initialize an empty array to store the books
        
        // Loop through the result set and push each book into the $bookslistArray
        while ($bookslist = mysqli_fetch_assoc($res)) {
            array_push($bookslistArray, $bookslist);
        }
        
        // Return the array of books
        return $bookslistArray;
    }
}
