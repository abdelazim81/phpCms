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
                         <?php
                        if(isset($_GET['update_user'])){
                            $user_id = $_GET['update_user'];
                            $query = "SELECT * FROM users WHERE user_id='$user_id' ";
                            $result = mysqli_query($connection, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $user_password = $row['user_password'];
                                $user_firstname = $row['user_firstname'];
                                $user_lastname = $row['user_lastname'];
                                $user_email = $row['user_email'];
                                $user_role = $row['user_role'];
                                $username = $row['username'];
                                
                            }
                        }
                        ?>
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="text" class="form-control" name="username" required="" value="<?php echo $username;?>"/>
                        </div>
                       
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $user_id; ?>" />
                        </div>
                        
                        <div class="form-group">
                            <label for="userpassword">Password</label>
                            <input type="password" class="form-control" name="userpassword" required="" value="<?php echo $user_password;?>"/>
                        </div>
                        <div class="form-group">
                            <label for="user_firstname">First Name</label>
                            <input type="text" class="form-control" name="user_firstname"  value="<?php echo $user_firstname;?>"/>
                        </div>
                        <div class="form-group">
                            <label for="user_lastname">Last Name</label>
                            <input type="text" class="form-control" name="user_lastname"  value="<?php echo $user_lastname;?>"/>
                        </div>
                        <div class="form-group">
                            <label for="user_email">Email</label>
                            <input type="email" class="form-control" name="user_email" required="" value="<?php echo $user_email;?>"/>
                        </div>
                        <div class="form-group">
                            <label for="userrole">Role</label>
                            <input type="text" class="form-control" name="user_role" required="" value="<?php echo $user_role;?>"/>
                        </div>
                        <button  type="submit" name="update" class="btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php 
if(isset($_POST['update'])){
    $user_id = $_POST['id'];
    $user_name = $_POST['username'];
    $user_password = $_POST['userpassword'];
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_email = $_POST['user_email'];
    $user_role = $_POST['user_role'];
    
    
    
    
    $select_randsalt_query = "SELECT randSalt FROM users ";
    $randsalt_query_result = mysqli_query($connection, $select_randsalt_query);
    if(!$randsalt_query_result){
        die("QUERY FAILED " . mysqli_errno($connection));
    }
      $row = mysqli_fetch_array($randsalt_query_result);
      $salt = $row['randSalt'];
      $user_password = crypt($user_password, $salt);
      
      
      
    
$query = "UPDATE users SET username = '$user_name', user_password = '$user_password', user_firstname = '$user_firstname', user_lastname = '$user_lastname', user_email = '$user_email', user_role = '$user_role' WHERE user_id = 1"; 
$result = mysqli_query($connection, $query);
if(!$result){
    die('there is an error');
}  else {
    header("Location: display_users.php");
}
}

?>
<?php include './footer.php';?>