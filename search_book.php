
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
      <h1 class="h6 mb-0 text-white lh-1">E-Library Search Result</h1>
      <small>Book keeping </small>
    </div>
  </div>

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Search Result</h6>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $searchq = $_POST['search'];
         
          $sql_query = "SELECT * FROM mybooks WHERE name LIKE '%$searchq%' or Author_name LIKE '%$searchq%' or book_isbn LIKE '%$searchq%' ";
          $Books = mysqli_query($conn,$sql_query);
          if (mysqli_num_rows($Books) > 0) {
              foreach ($Books as $book){ ?>

                  <div class="d-flex text-muted pt-3" id="data">
                  <img class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" src="<?php echo $book['cover_image']?>" role="img">
            
                  <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                    <div class="d-flex justify-content-between">
                      <strong class="text-gray-dark"><?php echo $book['name']?></strong>
                    </div>
                    <span class="d-block"><?php echo $book['Author_name']?></span>
                  </div>
                </div>
          <?php 
            }}} ?>


    <small class="d-block text-end mt-3">
      <a href="#">All suggestions</a>
    </small>
  </div>
</main>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/dist/js/offcanvas.js"></script>

  </body>
</html>
