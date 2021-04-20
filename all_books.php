
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
    <!-- Custom styles for this template -->
    <link href="assets/dist/css/style.css" rel="stylesheet">
    <link href="assets/dist/css/offcanvas.css" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  </head>
<body class="bg-light">
<?php include 'header.php'?>
<main class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
    <img class="me-3" src="assets/brand/logo.png" alt="" width="48" height="38">
    <div class="lh-1">
      <h1 class="h6 mb-0 text-white lh-1">Book Zone</h1>
      <small>Available</small>
    </div>
  </div>



  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Suggestions</h6>
  
    <div id="table-data">
    </div>
  
    <!-- close script -->
    <small class="d-block text-end mt-3">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
        <?php 
        $limit_per_page = 3;
        $page = "";
        $sql_query = "SELECT * from mybooks";
        $Books = mysqli_query($conn,$sql_query);
        $total_record = mysqli_num_rows($Books);
        $total_pages = ceil($total_record/$limit_per_page);

        if (mysqli_num_rows($Books) > 0) {
            for ($i=1; $i<= $total_pages; $i++){ ?>
          <li class="page-item">
            <a class="page-link" id="<?php echo $i ?>" href="#">
              <?php echo $i ?>
            </a>
          </li>
          <?php 
            }} ?>  
        </ul>
      </nav>
    </small>
  </div>
</main>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/dist/js/offcanvas.js"></script>
    <script src="assets/dist/js/custom.js"></script>
  </body>
</html>
