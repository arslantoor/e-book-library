
<?php
  include 'db_connection.php';
  ?>
<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>E-Library</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/offcanvas-navbar/">
    <!-- Bootstrap core CSS --> 
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">    
    <!-- Custom styles for this template -->
    <link href="assets/dist/css/style.css" rel="stylesheet">
    <link href="assets/dist/css/offcanvas.css" rel="stylesheet">
  </head>

  <body class="bg-light">
    
<?php include 'header.php'?>

<main class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
    <img class="me-3" src="assets/brand/logo.png" alt="" width="48" height="38">
    <div class="lh-1">
      <h1 class="h6 mb-0 text-white lh-1">E-Library</h1>
      <small>Book keeping </small>
    </div>
  </div>

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Add Books</h6>
    <div class="d-flex w-100 my-4">
        <div class="container">
            <form  action="/phpTraining/book_library/upload.php" method="POST" enctype="multipart/form-data">
                <label for="book_title">Book title:</label>
                <input type="text" name="name" id="book_title" required placeholder="Type Book Title or Name" class="form-control w-100">
                <label for="author_name">Book publisher name:</label>
                <input type="text" name="author_name" id="author_name" required placeholder="Type Author name" class="form-control">
                <label for="book_isbn">Book ISBN:</label>
                <input type="text" name="book_isbn" id="book_isbn" required placeholder="Type Book ISBN" class="form-control">
                <label for="cover_image">Book cover image: </label>
                <input type="file" name="cover_image" id="cover_image" accept="image/x-png,image/gif,image/jpeg" required placeholder="Cover Image" class="form-control">
                <br>
                
        </div>
    </div>
    <small class="d-block text-end mt-3">
                <input type="submit" class="btn btn-outline-primary" value="Add Book">
            </form>
    </small>
  </div>
</main>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="assets/dist/js/offcanvas.js"></script>
  </body>
</html>
