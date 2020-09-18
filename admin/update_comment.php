<?php include './header.php';?>
<div id="wrapper">
    <!---------------------------------------------------------------------------------------------------------------------------->
    
        <!-- Navigation -->
      <?php include './nav.php'; ?>
        <div id="page-wrapper">
           
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To Admin Page
                            <small>Author</small>
                        </h1>
                        
                             <!--------------- add post function ----------------->
                    <form role="form" method="POST">
                        <div class="form-group">
                            <label for="comment_author">Author</label>
                            <input class="form-control" type="text" name="comment_author" placeholder="Leave your Name Please"/>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" name="comment_email" placeholder="Leave your Email Please"/>
                        </div>
                        <div class="form-group">
                            <label for="comment">Your comment</label>
                            <textarea rows="3" class="form-control" name="comment_content"></textarea>
                        </div>
                        <button type="submit"  name="update_comment" class="btn-warning" >Update
                        </button>
                    </form>
    <!---------------------------------------------------------------------------------------------------------------------------->
           <!-- form to add new post --->
           
               </div>
           </div>
 <!---------------------------------------------------------------------------------------------------------------------------->
 <!--                           update comment -->
 <?php
if(isset($_GET['update_comment'])){
    $comment_id = $_GET['update_comment'];
}
?>
 <?php 
if(isset($_POST['update_comment'])){
    $comment_author = $_POST['comment_author'];
    $comment_email = $_POST['comment_email'];
    $comment_content = $_POST['comment_content'];
    $date = date('y-m-d');
    
    $query = "UPDATE comments SET comment_content = '$comment_content', comment_email='$comment_email', comment_author='$comment_author', comment_date= now() ";
    $query .= "WHERE `comments`.`comment_id` = '$comment_id' ";
    $result = mysqli_query($connection, $query);
    if(!$result){
        echo '<h1> there is an error </h1>';
    }
    header("Location: comments.php");
}
 ?>

               
           
                        
             
    
    <!---------------------------------------------------------------------------------------------------------------------------->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include './footer.php';?>
