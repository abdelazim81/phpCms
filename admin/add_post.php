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
<?php
if(isset($_POST['createPost'])){
    $post_title          = $_POST['postTitle'];
    $post_author         = $_POST['postAuthor'];
    $post_category_id    =(int) $_POST['postCategoryId'];
    $post_status         = $_POST['postStatus'];
    $post_image          = $_POST['postImage'];
    $post_content        = $_POST['PostContent'];
    $post_date           = date("Y.m.d");
    $post_tags           = $_POST['postTags'];
    $post_comment_count  = 4;
    $query = "INSERT INTO `posts` (post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_comment_count, post_status) "; 
    $query .= "VALUES ($post_category_id, '$post_title', '$post_author','$post_date', '$post_image', '$post_content', '$post_tags',$post_comment_count, '$post_status') ";
    $do = mysqli_query($connection, $query);
    if(!$do){
        echo 'Sorry cannot finished';
    }
    
}

?>                    
    <!---------------------------------------------------------------------------------------------------------------------------->
           <!-- form to add new post --->
           <form enctype="multipart/form-data" action="" method="POST">
                    <div class="form-group">
                      <label for="postTitle">Post Title</label>
                      <input type="text" name="postTitle" class="form-control"   placeholder="Post title ">
                    </div>
                    
                    
                    <div class="form-group">
                      <label for="postCategoryId">Post Category Id</label>
                      <input type="text" name="postCategoryId" class="form-control"   placeholder="Post Category Id ">
                    </div>
                    
                    <div class="form-group">
                      <label for="postAuthor">Post Author</label>
                      <input type="text" name="postAuthor" class="form-control"   placeholder="Post Author ">
                    </div>
                    <div class="form-group">
                      <label for="postStatus">Post Status</label>
                      <input type="text" name="postStatus" class="form-control"   placeholder="Post Status ">
                    </div>
                    <div class="form-group">
                      <label for="postTags">Post Tags</label>
                      <input type="text" name="postTags" class="form-control"   placeholder="Post Tags ">
                    </div>
                    
                    <div class="form-group">
                      <label for="postImage">Post Image</label>
                      <input type="text" name="postImage" class="form-control"   placeholder="Post image ">
                    </div>
                
                    <div class="form-group">
                      <label for="postContent">Post Content</label>
                      <textarea class="form-control" name="PostContent" cols="30" rows="10"></textarea>
                    </div>
                    
                    
                    <input type="submit" class="btn btn-primary" name="createPost" value="Publish"/>
                </form>
               </div>
           </div>

               
           
                        
             
    
    <!---------------------------------------------------------------------------------------------------------------------------->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include './footer.php';?>
