<?php
    if(isset($_POST['send_comment'])){
    $comment_author = $_POST['comment_author'];
    $comment_email = $_POST['comment_email'];
    $comment_content = $_POST['comment_content'];
    $post_id = $_POST['post_id'];
    $insert_comment_query = "INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date) ";
    $insert_comment_query .= "VALUES ( $post_id, '$comment_author', '$comment_email', '$comment_content', 'checked', now())";
    $insert_comment_result = mysqli_query($connection, $insert_comment_query);
    if(!$insert_comment_result){
        die("there is an error ") . mysql_error();
    }  else {
        echo '<h1> the insert done </h1>';
    }
   
}
    
?>

