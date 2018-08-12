<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin
                            <small>Subheading</small>
                        </h1>
                   <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $session->count;?></div>
                                        <div>New Views</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                  <span class="pull-left">View Details</span> 
                               <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> 
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-photo fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo Photo::count_all();?></div>
                                        <div>Photos</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Total Photos in Gallery</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo User::count_all();?>

                                        </div>

                                        <div>Users</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Total Users</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                      <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo Comment::count_all();?></div>
                                        <div>Comments</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Total Comments</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                        </div>
                        
                        <div class="row">
                          <div id="piechart" style="width: 900px; height: 500px;"></div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <?php
                          /* $sql = "SELECT * FROM users WHERE  id=1";
                           $result = $database->query($sql);
                           $user_found = mysqli_fetch_array($result);
                        
                           echo $user_found['username'];*/
                        
                           /* $user = new User();
                           $result_set = $user->find_all_users();
                            while($row=mysqli_fetch_array($result_set)){
                                echo $row['username'];
                            }*/
                        
                        //when using static method
                            /*$result_set = User::find_all_users();
                            while($row=mysqli_fetch_array($result_set)){
                                echo $row['username'];
                            }
                        */
                        
                          /* $found_user= User::find_user_by_id(1);
                           $user=User::instantation($found_user);
                        
                           echo $user->username;
                        
                           echo "<br>";*/
                        
                   /*     $users = User::find_all();
                        foreach($users as $user){
                            echo $user->username.'<br>';
                        }
                        */
                        
                       /* $found_user = User::find_user_by_id(1);
                        echo $found_user->username;*/
                        
                       /* $user = new User();
                        $user->username = "Example_username";
                        $user->password = "Example_password";
                        $user->first_name = "John";
                        $user->last_name = "Doe";
                        
                        $user->create();*/
                        
                      /*  $user = User::find_by_id(2);
                        $user->last_name = "WILLIAMS";
                        
                        $user->update();*/
                        
                    /*    $user = User::find_by_id(2);
                        $user->delete();*/
                        
                       /* $user = User::find_user_by_id(2);
                        $user->last_name = "Hello";
                        $user->save();*/
                        
                        /*  $user = new User();
                          $user->username = "Example_username";
                          $user->save();*/
                        
                   /*     $photos = Photo::find_all();
                        foreach($photos as $photo){
                            echo $photo->title;
                        }*/
                        
                        /*$photo = new Photo();
                        $photo->title = "Example_username";
                        $photo->size = 20;
                        
                        
                        $photo->create();*/
                        
                       /* echo SITE_ROOT;*/
                         ?>
                       
                    </div>
                </div>
                <!-- /.row -->

            </div>

