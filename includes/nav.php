<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">HOME</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php
                    //include './db_connect.php';
                    $q = "SELECT * FROM `categories`";
                    $Q_RESULT = mysqli_query($connection, $q);
                    while($data = mysqli_fetch_assoc($Q_RESULT)){
                        $title = $data['cat_title'];
                       
                    ?>
                     <li>
                    <a href="<?php echo '#' .  $title;?>"><?php  echo "<li>{$title}</li>";} ?></a>
                    </li>
                    <li>
                        <a href="./admin/index.php">Admin</a>
                    </li>
                    <li>
                        <a href="registration.php">REGISTER NOW</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>