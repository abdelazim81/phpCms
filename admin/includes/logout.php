<?php session_start(); ?>
<?php
      $_SESSION['username'] = NULL;
      $_SESSION['user_id'] = NULL;
      $_SESSION['user_email'] = NULL;
      $_SESSION['user_firstname'] = NULL;
      $_SESSION['user_lastname'] = NULL;
      $_SESSION['user_role'] = NULL;
      session_destroy();
      header("Location: ../../index.php");
?>
