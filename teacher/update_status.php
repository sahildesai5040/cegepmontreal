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
                                            $subject_id=$_GET['subject_id'];

                                            $q=$d->select("student_details INNER JOIN subject_details ON subject_details.subject_id = student_details.subject_id" ,"student_details.user_id='$user_id' AND student_details.subject_id='$subject_id'","");

                                            $data=mysqli_fetch_array($q);
                                                extract($data);

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
                                                    <label class="big mb-1">Subject Id</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                               
                                                       <input class="form-control py-4" type="text" name="subject_id" value="<?php echo $subject_id; ?>" readonly="readonly" />

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label class="big mb-1">Subject Name</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                               
                                                       <input class="form-control py-4" type="text" name="subject_name" value="<?php echo $subject_name; ?>" disabled="disabled" />

                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label class="big mb-1">Subject Code</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                               
                                                       <input class="form-control py-4" type="text" name="subject_code" value="<?php echo $subject_code; ?>" disabled="disabled" />

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label class="big mb-1">Grade</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                               
                                                       <input class="form-control py-4" type="text" name="grade" value="<?php echo $grade; ?>" />

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label class="big mb-1">Absents</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                               
                                                       <input class="form-control py-4" type="text" name="absents" value="<?php echo $absents; ?>" />

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
                                                   <button class="btn btn-primary btn-block" name="updateinfo" value="updateinfo">Update Info</button>
                                                </div>
                                                
                                            </div>


                                            
                                           
                                        </form>
                                    </div>

                        </div>
                    </div>
                </main>
<?php include 'common/footer.php'; ?>