      <div class="col-md-4">
                <!-- Blog Search Well -->
                <form action="search.php" method="post">
                    <div class="well">
                        <h4>Blog Search</h4>
                        <div class="input-group">
                            <input name="search" type="text" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit" name="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                            </button>
                            </span>
                        </div>
                        <!-- /.input-group -->
                    </div>
                </form>
                
                
                <!-- Blog login Well -->
                <form action="./includes/login.php" method="post">
                    <div class="well">
                        <h4>Log In</h4>
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input name="username" type="text" class="form-control" placeholder="Leave Your User Name Please"/>
                            
                        </div>
                        <div class="form-group">
                           <label for="password">Password</label>
                           <input type="password" name="password" class="form-control" placeholder="Leave Your Password Please"/> 
                        </div>
                        <span class="input-group-btn">
                            <button type="submit" name="login" class="btn btn-primary">Log In</button>
                        </span>
                    </div>
                </form>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <?php 
                       $query_categories_sidebar = "SELECT * FROM categories";
                       $result_categories_sidebar = mysqli_query($connection, $query_categories_sidebar);
                       if(!$result_categories_sidebar){
                           echo '<h1> there is an error of query categorey side bar</h1>' . mysqli_error($connetion);
                       }
                       while($data = mysqli_fetch_assoc($result_categories_sidebar)){
                           $title = $data['cat_title'];
                       
                    ?>
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#"><?php echo $title ?></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <?php } ?>
                    <!-- /.row -->
                </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>