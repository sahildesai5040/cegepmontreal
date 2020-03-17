<!-- header -->
<?php include 'common/header.php'; ?>
<!-- sidebar menu -->
<?php include 'common/sidebar.php'; ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Exam Details</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Exam</li>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-header"><?php $_SESSION['username']; ?></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Exam Name</th>
                                                <th>Attached File</th>
                                                <th>Submission Deadline</th>
                                                <th>Submission Status</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>

                                         <?php 
                                            $i=1;
                                           
                                            $q=$d->select("exam_details INNER JOIN file_details ON  file_details.file_id = exam_details.file_id" ,"","");

                                            while ($data=mysqli_fetch_array($q)) {
                                                extract($data);
                                             ?>

                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $exam_name; ?></td>
                                                <td><a href="files/<?php echo $file_name ?>" target="_blank"><?php echo $file_name ?></a>
                                                </td>
                                                <td><?php echo $submission_deadline; ?></td>
                                            
                                                 <td>
                                                    <?php if($submission_status==0){echo " Not Submitted";}else{echo "Submitted";} ?>

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
