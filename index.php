<!-- header -->
<?php include 'common/header.php'; ?>
<!-- sidebar menu -->
<?php include 'common/sidebar.php'; ?>
                    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Home Screen</h1>
                        <ol class="breadcrumb mb-4">
                                <?php
                                    $user_id=$_SESSION['user_id'];
                                    $q=$d->select("users INNER JOIN course_details ON course_details.course_id = users.course_id" ,"user_id='$user_id'",""); 
                                    $data=mysqli_fetch_array($q);
                                    extract($data);
                                ?>
                            <li class="breadcrumb-item active"><h5>Course Name</h5></li>
                            <li class="breadcrumb-item active"><?php echo $course_name; ?></li>
                        </ol>

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><h5>Student ID</h5></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                         <h7 class="mt-2"><?php echo $user_id; ?></h7>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><h5>Name</h5></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                       <h7 class="mt-2"><?php echo $username; ?></h7>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><h5>Email</h5></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                       <h7 class="mt-2"><?php echo $email; ?></h7>
                                        
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                       
                        <div class="card mb-4">
                            <div class="card-header">Your Course Status</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Subject Name</th>
                                                <th>Subject Code</th>
                                                <th>Total Hours</th>
                                                <th>Grade</th>
                                                <th>Absence</th>
                                                <th>Subject Points</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>

                                         <?php 
                                            $i=1;
                                           
                                            $q=$d->select("student_details INNER JOIN subject_details ON subject_details.subject_id = student_details.subject_id" ,"user_id='$user_id'","");

                                            while ($data=mysqli_fetch_array($q)) {
                                                extract($data);
                                             ?>

                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $subject_name; ?></td>
                                                <td><?php echo $subject_code; ?></td>
                                                <td><?php echo $no_of_hours; ?></td>
                                                <td><?php echo $grade. "/100";?></td>
                                                <td><?php echo $absents;?></td>
                                                <td><?php echo $subject_points; ?></td>
                                                
                                            </tr>
                                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php include 'common/footer.php'; ?>
