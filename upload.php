<?php
include 'db_connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $upload_dir = "assets/uploads";
    
    $name = $_POST["name"];
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
       $sql_query = "INSERT INTO mybooks(name,Author_name,book_isbn,cover_image) VALUES('$name','$Author_name','$book_isbn','$new_img_name')";
       $data=mysqli_query($conn,$sql_query);
       
       if ($data) {
        header("Location:/phpTraining/book_library/all_books.php");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    
    }
  } 
  else{
            echo "else working";
        }
?>