<?php
include 'db_connection.php';
$limit_per_page = 3;
$output="";
$page = 1;
if (isset($_POST["page_no"])){
    $page = $_POST["page_no"];
}
else{
    $page=1;
}
// offset
$offset = ($page - 1) * $limit_per_page;
$sql_query = "SELECT * from mybooks ORDER BY id DESC LIMIT {$offset},{$limit_per_page}";
        $Books = mysqli_query($conn,$sql_query);
        if (mysqli_num_rows($Books) > 0) {
            foreach ($Books as $book){
                $output.="
                <div class='d-flex text-muted pt-3' id='data' >
                <img class='bd-placeholder-img flex-shrink-0 me-2 rounded' width='32' height='32' src='{$book["cover_image"]}' role='img'>
          
                <div class='pb-3 mb-0 small lh-sm border-bottom w-100'>
                  <div class='d-flex justify-content-between'>
                    <strong class='text-gray-dark'>{$book['name']}</strong>
                    <ul class='d-flex list-unstyled'>
                      <li class='mr-2'>
                            <a href='/phpTraining/book_library/edit_book.php?id={$book['id']}' id='{$book['id']}'><i class='fa fa-edit'></i></a>
                      </li>
                      <li>
                            <a href='javascript:void(0);' class='delete-book'  id='{$book['id']}'><i class='fa fa-trash'></i></a>
                      </li>
                    </ul>
                  </div>
                  <span class='d-block'>{$book['Author_name']}</span>
                </div>
              </div>
                ";
                
            } 
            echo $output;
        }
        // pagination //
        

?>