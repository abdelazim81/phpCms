  <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Title</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
if($connection){
    $categories_query = "SELECT * FROM categories";
    $categories_result = mysqli_query($connection, $categories_query);
    if($categories_result){
        while ($data = mysqli_fetch_assoc($categories_result)){
            $cat_id    = $data['cat_id'];
            $cat_title = $data['cat_title'];

?>                                    
                                    <tr>
                                        <th><?php echo $cat_id; ?></th>
                                        <th><?php echo $cat_title ; ?></th>
                                        <th><a onclick="javascript: return confirm('Are You Sure To Delete This Categoty?!!!!!')" href="categories.php?delete=<?php echo $cat_id ?>">DELETE</a></th>
                                        <th><a href="categories.php?update=<?php echo $cat_id ?>">UPDATE</a></th>
                                    </tr>
<?php } } } ?>
<?php include './includes/delete_category.php'; ?>
                                </tbody>
                            </table>