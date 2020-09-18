<?php 
if(isset($_GET['delete'])){
    $cat_id_del  = $_GET['delete'];
    $delete_category_query = "DELETE FROM categories WHERE cat_id='$cat_id_del' ";
    $flag = mysqli_query($connection, $delete_category_query);
    header("Location: categories.php");
}
?>