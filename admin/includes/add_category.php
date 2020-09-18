<?php
if(isset($_POST['submit'])){
    $cat_title = $_POST['cat_title'];
    if($cat_title == "" || empty($cat_title))
    {
        echo '<h1> this field must be not empty</h1>';
    }
 else {
        $insert_category_query = "INSERT INTO categories(cat_title) " . "VALUES (  '$cat_title') ";
        $insert_category_result = mysqli_query($connection, $insert_category_query);
        if(!$insert_category_result){
            echo '<h1> inserting failed</h1>';
        }  else {
            echo '<h1>Insert Process Done </h1>';
        }
    }
}
?>  