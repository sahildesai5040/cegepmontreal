
<!-- header -->
<?php include 'common/header.php'; ?>
<!-- sidebar menu -->
<?php include 'common/sidebar.php'; ?>
                    
             <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Update Student Information</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Update Information</li>
                        </ol>
                       
                        <div class="card-body col-md-8 justify-content-center">
                                    <form action="controller.php" method="post" enctype="multipart/form-data">
                                            
                                        <?php 
                                            $user_id=$_GET['user_id'];
                                            

                                            $q=$d->select("users INNER JOIN course_details ON course_details.course_id = users.course_id" ,"user_id='$user_id'","");

                                            $data=mysqli_fetch_array($q);
                                                extract($data);

                                                $c_n=$course_name;
                                        ?>

                                              <div class="form-row">
                                                <div class="col-md-4">
                                                    <label class="big mb-1">User Id</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                               
                                                       <input class="form-control py-4" type="text" name="user_id" value="<?php echo $user_id; ?>" readonly="readonly"/>

                                                    </div>
                                                </div>
                                            </div>

                                             

                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label class="big mb-1">User Name</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                               
                                                       <input class="form-control py-4" type="text" name="username" value="<?php echo $username; ?>"/>

                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                           

                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label class="big mb-1">Email Id</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                               
                                                       <input class="form-control py-4" type="text" name="email" value="<?php echo $email; ?>" />

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label class="big mb-1">Password</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                               
                                                       <input class="form-control py-4" type="text" name="password" value="<?php echo $password; ?>" />

                                                    </div>
                                                </div>
                                            </div>

                                             <div class="form-row">
                                                <div class="col-md-4">
                                                    <label class="big mb-1">Course Name</label>
                                                </div>
                                               <div class="col-md-8">
                                                    <div class="form-group">
                                               
                                                       <select class="form-control" name="course_id">
                                                             

                                                            <?php 
                                                                   
                                                                $q=$d->select("course_details","",""); 
                                                
                                                                 while ($data=mysqli_fetch_array($q))
                                                                 {
                                                                    extract($data);

                                                                    
                                                            ?>
                                                                
                                                                    <option value="<?php echo $course_id; ?>" <?php if($c_n==$course_name){ ?> selected="selected"<?php } ?>><?php echo $course_name; ?></option>
                                                                
                                                            <?php } ?>

                                                            </select>

                                                    </div>
                                                </div>
                                               
                                                    


                                            </div>

                                             <div class="form-row">
                                                <div class="col-md-3">
                                                  
                                                </div>
                                                <div class="col-md-3">
                                                   
                                                </div>
                                                <div class="col-md-3">
                                                   
                                                </div>

                                                <div class="col-md-3">
                                                   <button class="btn btn-primary btn-block" name="updatestudent" value="updatestudent">Update Data</button>
                                                </div>
                                                
                                            </div>


                                            
                                           
                                        </form>
                                    </div>

                        </div>
                    </div>
                </main>
            </div>
<?php include 'common/footer.php'; ?>
