<!-- header -->
<?php include 'common/header.php'; ?>
<!-- sidebar menu -->
<?php include 'common/sidebar.php'; ?>
                    
             <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?php echo "  ".$_SESSION['teacher_username']; ?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"> Student Information</li>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>User ID</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                               
                                                <th>Course</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>

                                         <?php 
                                            $i=1;
                                           
                                            $q=$d->select("users INNER JOIN course_details ON course_details.course_id = users.course_id","flag='0'","");

                                            while ($data=mysqli_fetch_array($q)) {
                                                extract($data);
                                             ?>

                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $user_id; ?></td>
                                                <td><?php echo $username; ?></td>
                                                <td><?php echo $email; ?></td>
                                                
                                                <td><?php echo $course_name; ?></td>


                                                  <td>
                                                    <a class="btn btn-primary" href="update_info.php?user_id=<?php echo $user_id; ?>">View More</a>
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