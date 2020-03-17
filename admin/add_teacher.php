
<!-- header -->
<?php include 'common/header.php'; ?>
<!-- sidebar menu -->
<?php include 'common/sidebar.php'; ?>
                    
             <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Teacher Information</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Add Teacher</li>
                        </ol>
                       
                        <div class="card-body col-md-8 justify-content-center">
                                    <form action="controller.php" method="post" enctype="multipart/form-data">
                                     

                                             

                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label class="big mb-1">First name</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                               
                                                       <input class="form-control py-4" type="text" name="firstname"/>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label class="big mb-1">Last name</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                               
                                                       <input class="form-control py-4" type="text" name="lastname"/>

                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                           

                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label class="big mb-1">Email Id</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                               
                                                       <input class="form-control py-4" type="text" name="email"/>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label class="big mb-1">Password</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                               
                                                       <input class="form-control py-4" type="text" name="password"/>

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
                                                                
                                                                    <option value="<?php echo $course_id; ?>"><?php echo $course_name; ?></option>
                                                                
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
                                                   <button class="btn btn-primary btn-block" name="addteacher" value="addteacher">Add Teacher</button>
                                                </div>
                                                
                                            </div>


                                            
                                           
                                        </form>
                                    </div>

                        </div>
                    </div>
                </main>
            </div>
<?php include 'common/footer.php'; ?>
