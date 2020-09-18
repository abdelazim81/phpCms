<?php include './header.php';?>
<?php include '../includes/db_connect.php' ?>

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
<table class="table table-condensed table-hover">
                            <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Password</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Image</th>
                                <th>Role</th>
                                <th>RandSalt</th>
                            </thead>
                            <tbody>
<?php 
include '../includes/db_connect.php';
$query = "SELECT * FROM users ";
$result = mysqli_query($connection, $query);
if(!$result){
    die('There is an error');
}  else {
while ($row = mysqli_fetch_assoc($result)) {
    $user_id = $row['user_id'];
    $user_name = $row['username'];
    $user_password = $row['user_password'];
    $user_firstname = $row['user_firstname'];
    $user_lastname = $row['user_lastname'];
    $user_email = $row['user_email'];
    $user_image = $row['user_image'];
    $user_role = $row['user_role'];
    $randsalt = $row['randSalt'];
?>
                            <tr>
                                <td><?php echo $user_id;?></td>
                                <td><?php echo $user_name;?></td>
                                <td><?php echo $user_password;?></td>
                                <td><?php echo $user_firstname;?></td>
                                <td><?php echo $user_lastname;?></td>
                                <td><?php echo $user_email;?></td>
                                <td><?php echo $user_image;?></td>
                                <td><?php echo $user_role;?></td>
                                <td><?php echo $randsalt;?></td>
                                <th><a href="display_users.php?delete_user=<?php echo $user_id ?>">DELETE</a></th>
                                <th><a href="update_user.php?update_user=<?php echo $user_id ?>">UPDATE</a></th>
                            </tr>
<?php  }} ?>
<?php include './includes/delete_user.php'; ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include './footer.php';?>