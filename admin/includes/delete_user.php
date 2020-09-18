<?php 
if(isset($_GET['delete_user'])){
    $user_id  = $_GET['delete_user'];
    $delete_category_query = "DELETE FROM users WHERE user_id='$user_id' ";
    $flag = mysqli_query($connection, $delete_category_query);
    if(!$flag){
                die('there is an error');
                
    }  else {
        
    
    header("Location: display_users.php");
    }
}
?>