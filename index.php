<!-- header -->
<?php include 'includes/header.php'; ?>
<!-- connection to database -->
<?php include 'includes/db_connect.php';?>
<!-- navigation -->
<?php include 'includes/nav.php'; ?>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <!-- display all posts in database -->
                <?php
                $post_query_count = "SELECT * FROM posts ";
                $post_query_result_count = mysqli_query($connection, $post_query_count);
                $count = mysqli_num_rows($post_query_result_count);
                $post_query = "SELECT * FROM posts";
                    $post_results = mysqli_query($connection, $post_query);
                    while($data = mysqli_fetch_assoc($post_results)){
                        $post_id = $data['post_id'];
                        $post_title = $data['post_title'];
                        $post_author = $data['post_author'];
                        $post_date = $data['post_date'];
                        $post_content = $data['post_content'];
                        $post_image = $data['post_image'];
                ?>
                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>
                <!-- First Blog Post -->
                <h2>
                    <a href="./id_posts.php?post_id=<?php echo $post_id;?>"><?php echo $post_title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="author_posts.php?post_author=<?php echo $post_author ?>"><?php echo $post_author; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date; ?></p>
                <hr>
                <img class="img-responsive" src="./admin/images/<?php echo $post_image; ?>" alt="<?php echo $post_image;?>">
                <hr>
                <p><?php echo $post_content; ?></p>
                <div class="well">
                    <h4>Leave a Comment : </h4>
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
                        <div class="form-group">
                            <input class="form-control" type="hidden" name="post_id" value="<?php echo $post_id;?>" readonly hidden/>
                        </div>
                        <button type="submit"  name="send_comment" class="btn-warning" >PUBLISH
                        </button>
                    </form>
                </div>
                <hr>
                <?php } ?>
                <?php  include './admin/includes/send_comment.php'; ?>
            </div>
             <!-- end of displaying all posts -->
             <!-- side bar -->
<?php include 'includes/sidebar.php'; ?>
        </div>
        <!-- /.row -->
        <hr>
        <ul class="pager">
            <?php
            for($i=1;$i<=$count;$i++){
                ?>
            <li class="active"><a href="#?page=<?php echo $i;?>"> <?php echo $i;?> </a></li>
            <?php } ?>
            
        </ul>
        <!-- footer -->
<?php include 'includes/footer.php';  ?>
