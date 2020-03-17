<!-- header -->
<?php include 'common/header.php'; ?>
<!-- sidebar menu -->
<?php include 'common/sidebar.php'; ?>
                    
             <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Student Information</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Student Information</li>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-header">Update Student Status</div>
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
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>

                                         <?php 
                                            $i=1;
                                            $user_id=$_GET['user_id'];
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

                                                 <td>
                                                    <a class="btn btn-primary" href="update_status.php?user_id=<?php echo $user_id; ?>&subject_id=<?php echo $subject_id; ?>">Update Status</a>
                                                    </td>
                                                
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
