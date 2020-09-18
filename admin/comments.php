<?php include './header.php';?>
<?php include '../includes/db_connect.php'; ?>

     <!---------------------------------------------------------------------------------------------------------------------------->
      <!--                         //########################## display comments                                                  -->
      

      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
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
                        
                        
    <!---------------------------------------------------------------------------------------------------------------------------->
                <!-- table to display posts information -->
                   <table class="table table-hover">
                            <thead>
                                <th>ID</th>
                                <th>POST ID</th>
                                <th>Author</th>
                                <th>Email</th>
                                <th>Content</th>
                                <th>Status</th>
                                <th>Date</th>
                            </thead>
                            <tbody>
<?php
     $select_comment_query = "SELECT * FROM comments ";
     $select_comment_query_result = mysqli_query($connection, $select_comment_query);
     if(!$select_comment_query_result){
         die('there is an error in executing the query' . mysqli_error($connection));}
while ($row = mysqli_fetch_assoc($select_comment_query_result)) {
    $comment_id = $row['comment_id'];
    $comment_post_id = $row['comment_post_id'];
    $comment_author = $row['comment_author'];
    $comment_email = $row['comment_email'];
    $comment_content = $row['comment_content'];
    $comment_status = $row['comment_status'];
    $comment_date = $row['comment_date'];
         
 ?>                                 
                                <tr>
                                    <td><?php echo $comment_id   ?></td>
                                    <td><?php echo $comment_post_id  ?></td>
                                    <td><?php echo $comment_author   ?></td>
                                    <td><?php echo $comment_email  ?></td>
                                    <td><?php echo $comment_content  ?></td>
                                    <td><?php echo $comment_status  ?></td>
                                    <td><?php echo $comment_date;  ?></td>
                                    <th><a href="comments.php?delete_comment=<?php echo $comment_id?>">DELETE</a></th>
                                    <th><a href="update_comment.php?update_comment=<?php echo $comment_id?>">UPDATE</a></th>
                                </tr>
<?php } ?>

                            </tbody>
                        </table>
    <!---------------------------------------------------------------------------------------------------------------------------->
                        
<?php include './includes/delete_comment.php';?>
    
    <!---------------------------------------------------------------------------------------------------------------------------->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include './footer.php';?>