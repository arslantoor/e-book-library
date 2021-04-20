<?php
include '../db_connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $upload_dir = "assets/uploads";
    
    $name = $_POST["name"];
    $book_id = $_POST["id"];
    $Author_name = $_POST["author_name"];
    $book_isbn = $_POST["book_isbn"];
    $cover_image = $_FILES["cover_image"];

    $img_name = $_FILES['cover_image']['name'];
    $error = $_FILES['cover_image']['error'];
    $image_path = $_FILES['cover_image']['tmp_name'];
    
   
    if($error === 0){
      $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
      $img_ext_lc = strtolower($img_ex);
      $new_img_name = uniqid("img-",true).'.'.$img_ext_lc;
      $img_upload = $upload_dir.basename($img_name);

      move_uploaded_file($image_path, $img_upload);
      //insert into db
      $sql_query = "UPDATE mybooks set name='$name',Author_name='$Author_name', book_isbn='$book_isbn', cover_image='$new_img_name' where id=$book_id ";
      $data= mysqli_query($conn, $sql_query);
      
      if (mysqli_query($conn, $sql_query)) {
          header("Location:/phpTraining/book_library/all_books.php");
     
     } else {
       echo "Error: " . $sql_query . "<br>" . $conn->mysqli_error;
     }
   
    }
  } 
  
  else{
            echo "else working";
        }
?>