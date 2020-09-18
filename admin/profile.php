<?php include './header.php'; ?>
<div id="wrapper">
        <!-- Navigation -->
      <?php include './nav.php'; ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To Admin Page
                            <small><?php if(isset($_SESSION['username'])){ echo $_SESSION['username'];}?></small>
                        </h1>
                        
<?php 
include '../includes/db_connect.php';
if(isset($_SESSION['username'])){
$username = $_SESSION['username'];
$query = "SELECT * FROM users WHERE username='$username' ";
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
    }}}
?>

                        <form method="POST">
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="text" class="form-control" name="username" value="<?php echo $username?>"/>
                        </div>
                           <div class="form-group">
                               <label for="id">ID</label>
                               <input type="text" class="form-control" name="id" value="<?php echo $user_id; ?>" readonly=""/>
                        </div>
                        <div class="form-group">
                            <label for="userpassword">Password</label>
                            <input type="password" class="form-control" name="userpassword" value="<?php echo $user_password; ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="user_firstname">First Name</label>
                            <input type="text" class="form-control" name="user_firstname" value="<?php echo $user_firstname; ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="user_lastname">Last Name</label>
                            <input type="text" class="form-control" name="user_lastname" value="<?php echo $user_lastname; ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="user_email">Email</label>
                            <input type="email" class="form-control" name="user_email" value="<?php echo $user_email; ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="userrole">Role</label>
                            <input type="text" class="form-control" name="user_role" value="<?php echo $user_role; ?>"/>
                        </div>
                        <button type="submit" name="update" class="btn-primary">Update</button>
                    </form>
<?php 
if(isset($_POST['update'])){
    $fuser_id = $_POST['id'];
    $fuser_name = $_POST['username'];
    $fuser_password = $_POST['userpassword'];
    $fuser_firstname = $_POST['user_firstname'];
    $fuser_lastname = $_POST['user_lastname'];
    $fuser_email = $_POST['user_email'];
    $fuser_role = $_POST['user_role'];
    
$query = "UPDATE users SET username = '$fuser_name', user_password = '$fuser_password', user_firstname = '$fuser_firstname', user_lastname = '$fuser_lastname', user_email = '$fuser_email', user_role = '$fuser_role' WHERE user_id = '$fuser_id' "; 
$result = mysqli_query($connection, $query);
if(!$result){
    die('there is an error' . mysqli_errno($connection));
}
      $_SESSION['username'] = $fuser_name;
      $_SESSION['password'] = $fuser_password;
      $_SESSION['user_id'] = $fuser_id;
      $_SESSION['user_email'] = $fuser_email;
      $_SESSION['user_firstname'] = $fuser_firstname;
      $_SESSION['user_lastname'] = $fuser_lastname;
      $_SESSION['user_role'] = $fuser_role;
header("Location: ./display_users.php");
}
?>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include './footer.php'; ?>