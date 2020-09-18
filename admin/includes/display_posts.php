<table class="table table-condensed table-hover">
                            <thead>
                                <th>ID</th>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Image</th>
                                <th>Tags</th>
                                <th>Date</th>
                                <th>Comments</th>
                            </thead>
                            <tbody>
<?php 
include '../includes/db_connect.php';
if(!$connection){
    die("there is an error in connection" . mysqli_errno($connection));
}
$select_posts_query  = "SELECT * FROM posts";
$select_posts_result = mysqli_query($connection, $select_posts_query);
if(!$select_posts_result){
    die("there is an error of executing the query" . mysqli_errno($connection));
}
while ($data = mysqli_fetch_assoc($select_posts_result)){
    $post_id = $data['post_id'];
    $post_category_id = $data['post_category_id'];
    $post_title = $data['post_title'];
    $post_author = $data['post_author'];
    $post_date = $data['post_date'];
    $post_image = $data['post_image'];
    $post_tags = $data['post_tags'];
    $post_comment_count = $data['post_comment_count'];
    $post_status = $data['post_status'];
    


?>
                            <tr>
                                <td><?php echo $post_id ; ?></td>
                                <td><?php echo $post_author ; ?></td>
                                <td><?php echo $post_title ; ?></td>
                                <td><?php echo $post_category_id ; ?></td>
                                <td><?php echo $post_status ; ?></td>
                                <td><img src="./images/<?php echo $post_image ; ?>" width="100"  alt="Image"></td>
                                <td><?php echo $post_tags ; ?></td>
                                <td><?php echo $post_date ; ?></td>
                                <td><?php echo $post_comment_count ; ?></td>
                                <td><a onclick="javascript: return confirm('Are You Sure To Delete');" href="posts.php?deletePost=<?php echo $post_id ?>">DELETE</a></td>
                            </tr>
<?php } ?>

                            </tbody>
                        </table>
<?php 
if(isset($_GET['deletePost'])){
    $post_id_del  = $_GET['deletePost'];
    $delete_post_query = "DELETE FROM posts WHERE post_id='$post_id_del' ";
    $flag = mysqli_query($connection, $delete_post_query);
    header("Location: posts.php");
}
?>
