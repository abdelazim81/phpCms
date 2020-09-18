
<?php include './header.php'; ?>
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
<?php include './includes/add_category.php'; ?>                     
                        
                        
                        <!-- add category -->
                        <div class="col-xs-6">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat_title" class="label label-info">Category Title</label>
                                    <input class="form-control" type="text" name="cat_title"/>
                                </div>
                                 <div class="form-group">
                                     <input class="btn btn-primary" type="submit" name="submit" value="Add Category"/>
                                </div>
                            </form>
                        </div>
    <!---------------------------------------------------------------------------------------------------------------------------->
                        <!-- edit category -->
             <div class="col-xs-6">
                 <form action="" method="post">
                    <div class="form-group">
<?php
if(isset($_GET['update'])){
    $cat_id = $_GET['update'];
    $category_select_query = "SELECT * FROM categories WHERE cat_id='$cat_id' ";
    $result = mysqli_query($connection, $category_select_query);
    if($result){
        while ($row = mysqli_fetch_assoc($result)) {
            
        
        $cat_title = $row['cat_title'];
        $cat_id    = $row['cat_id'];   
?>
                     <label for="cat_title_update" class="label label-info">Category Title to edit</label>
                     <input class="form-control" type="text" name="cat_title_update" value="<?php echo $cat_title;?>"/>
                         </div>
                            <div class="form-group">
                                 <input class="btn btn-primary" type="submit" name="update" value="update Category"/>
                           </div>
                </form>
             </div>
    <?php }}} ?>
<?php include './includes/update_category.php';?>
    <!---------------------------------------------------------------------------------------------------------------------------->
                        <div class="col-xs-6">
                          <!-- display categories -->
                          <?php include './includes/display_categories.php'; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include './footer.php'; ?>