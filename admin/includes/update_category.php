<?php
if(isset($_POST['update'])){
    $cat_title  = $_POST['cat_title_update'];
    $update_category_query = "UPDATE categories SET cat_title='$cat_title' WHERE cat_id='$cat_id' ";
    $flag = mysqli_query($connection, $update_category_query);
    if(!$flag){die("there is an error at update query " . mysqli_errno($connection));}
    header("Location: categories.php");  
}
?>
