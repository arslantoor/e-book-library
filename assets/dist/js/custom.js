$(document).ready(function(){
   
    
    // pagination script //
    function loadTable(page){
        $.ajax({
            url: "pagination.php",
            type: "POST",
            data: {page_no : page},
            success:function(data){
                $("#table-data").html(data);
            }
        });
    }
    loadTable();
    $(".page-link").click(function(){
        var page_id=$(this).attr("id");
        loadTable(page_id);
    });
    
    $(document).on('click', '.delete-book', function (){
        var data_id = $(this).attr("id");
        $.ajax({
            url: "crud/delete.php",
            type: "POST",
            data: {id : data_id},
            dataType: "html",
            success:$(this).closest("#data").remove()
        });
    })
   
});