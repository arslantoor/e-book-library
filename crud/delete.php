<?php
include '../db_connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $book_id = $_POST["id"];
    $sql_query = "DELETE FROM mybooks where id=$book_id ";
    $data= mysqli_query($conn, $sql_query);
    // echo json_encode(array('success' => 1));
    }else{
        echo "not working";
    }
?>