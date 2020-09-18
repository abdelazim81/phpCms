<?php  include "includes/db_connect.php"; ?>
 <?php  include "includes/header.php"; ?>
<?php
if(isset($_POST['register'])){
    $reg_username = mysqli_real_escape_string($connection,$_POST['username']);
    $reg_email    = mysqli_real_escape_string($connection,$_POST['email']);
    $reg_password = mysqli_real_escape_string($connection,$_POST['password']);
    $select_randsalt_query = "SELECT randSalt FROM users ";
    $randsalt_query_result = mysqli_query($connection, $select_randsalt_query);
    if(!$randsalt_query_result){
        die("QUERY FAILED " . mysqli_errno($connection));
    }
      $row = mysqli_fetch_array($randsalt_query_result);
      $salt = $row['randSalt'];
    $reg_query = "INSERT INTO users(username,user_email,user_password,user_role) ";
    $reg_query .= "VALUES('$reg_username','$reg_email','$reg_password','subscriber') ";
    $reg_result = mysqli_query($connection, $reg_query);
    if(!$reg_result){
        die("QUERY FAILED " . mysqli_errno($connection));
    }
}
?>


    <!-- Navigation -->
    
    <?php  include "includes/nav.php"; ?>
    
 
    <!-- Page Content -->
    <div class="container">
    
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1>Register</h1>
                    <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="username" class="sr-only">username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter Desired Username" required>
                        </div>
                         <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com" required>
                        </div>
                         <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password" required>
                        </div>
                
                        <input type="submit" name="register" id="btn-login" class="btn btn-primary btn-lg btn-block" value="Register">
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


        <hr>



<?php include "includes/footer.php";?>
