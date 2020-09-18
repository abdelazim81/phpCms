<?php include './db_connect.php'; ?>
<?php session_start(); ?>
<?php
if(isset($_POST['login'])){
$user_name = $_POST['username'];
$password = $_POST['password'];
  $user_name = mysqli_real_escape_string($connection,$user_name);
  $password  = mysqli_real_escape_string($connection,$password);
  $query = "SELECT * FROM users WHERE username='$user_name' ";
  $result = mysqli_query($connection, $query);
  if(!$result){
      die("QUERY FAILED " . mysqli_errno($connection));
  }
  while ($row = mysqli_fetch_assoc($result)){
      $user_id = $row['user_id'];
      $db_username = $row['username'];
      $db_password = $row['user_password'];
      $db_user_firstname = $row['user_firstname'];
      $db_user_lastname = $row['user_lastname'];
      $db_user_role = $row['user_role'];
      $db_user_email = $row['user_email'];
      $randsalt = $row['randSalt'];
  }
  if($password != $db_password){
      header("Location: ../index.php");
  }  else {
      $_SESSION['username'] = $db_username;
      $_SESSION['user_id'] = $user_id;
      $_SESSION['user_email'] = $db_user_email;
      $_SESSION['user_firstname'] = $db_user_firstname;
      $_SESSION['user_lastname'] = $db_user_lastname;
      $_SESSION['user_role'] = $db_user_role;
      header("Location: ../admin/index.php");
  }
}

?>