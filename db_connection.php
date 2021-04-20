<?php

    $sname = "localhost";
    $uname = "coeus";
    $password = "Arslan@coeus123";
    $db_name = "book_library";
    $conn = new mysqli($sname,$uname,$password,$db_name);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   
?>
