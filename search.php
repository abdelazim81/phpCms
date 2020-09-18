
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
                <!-- find specific posts by usin tags -->
<?php
    if(isset($_POST['submit'])){
        $search = $_POST['search'];
        $search_query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
        $search_result = mysqli_query($connection , $search_query);
        if(!$search_result){
            die('there is an error in search ' . mysqli_error($connection));
        }
        $count = mysqli_num_rows($search_result);
        if($count==0){
            echo '<h2> there is no tag like entered </h2>';
        }
    }
?>
                <!-- display founded posts not all -->
 <?php
                
 $post_results = mysqli_query($connection, $search_query);
while($data = mysqli_fetch_assoc($post_results)){
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
                    <a href="#"><?php echo $post_title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date; ?></p>
                <hr>
                <img class="img-responsive" src="./admin/images/<?php echo $post_image; ?>" alt="">
                <hr>
                <p><?php echo $post_content; ?></p>
                <hr>
                <?php } ?>
            </div>
            <!-- Blog Sidebar Widgets Column -->
      <?php include 'includes/sidebar.php'; ?>
        </div>
        <!-- /.row -->
        <hr>
<?php include 'includes/footer.php'; ?>
