<?php
if(isset($_GET['delete_comment'])){
    $comment_id = $_GET['delete_comment'];
    $delete_comment_query = "DELETE FROM comments WHERE comment_id='$comment_id' ";
    $delete_comment_result = mysqli_query($connection, $delete_comment_query);
    header("Location: comments.php");
}
?>

