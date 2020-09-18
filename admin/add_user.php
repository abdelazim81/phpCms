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
                        <h1 class="page-header">Welcome To Admin Page<small>Author</small> </h1>
                    </div>
                    <form method="POST">
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="text" class="form-control" name="username" required=""/>
                        </div>
                        <div class="form-group">
                            <label for="userpassword">Password</label>
                            <input type="password" class="form-control" name="userpassword" required=""/>
                        </div>
                        <div class="form-group">
                            <label for="user_firstname">First Name</label>
                            <input type="text" class="form-control" name="user_firstname" required=""/>
                        </div>
                        <div class="form-group">
                            <label for="user_lastname">Last Name</label>
                            <input type="text" class="form-control" name="user_lastname" required=""/>
                        </div>
                        <div class="form-group">
                            <label for="user_email">Email</label>
                            <input type="email" class="form-control" name="user_email" required=""/>
                        </div>
                        <div class="form-group">
                            <label for="userrole">Role</label>
                            <input type="text" class="form-control" name="user_role" required=""/>
                        </div>
                        <button type="submit" name="add_user" class="btn-primary">Add User</button>
                    </form>
               
    
<?php 
if(isset($_POST['add_user'])){
    $user_name = $_POST['username'];
    $user_password = $_POST['userpassword'];
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_email = $_POST['user_email'];
    $user_role = $_POST['user_role'];
    
$query = "INSERT INTO users (username, user_password, user_firstname, user_lastname, user_email, user_role) ";
$query .= "VALUES('$user_name', '$user_password', '$user_firstname', '$user_lastname', '$user_email', '$user_role') ";  
$result = mysqli_query($connection, $query);
if(!$result){
    die('there is an error');
}  else {
    echo '<hr><center>' . 'User Created: ' . ' ' . "<a href='display_users.php'> View Users</a></center>";
//    header("Location: display_users.php");
}
}

?>
        </div>
                 </div>
            </div>
        </div>
<?php include './footer.php';?>