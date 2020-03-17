<!-- header -->
<?php include 'common/header.php'; ?>
<!-- sidebar menu -->
<?php include 'common/sidebar.php'; ?>
                    
            <div id="layoutSidenav_content">
                <main>
                     <?php
                                    
                                    $q=$d->select("company_info" ,"",""); 
                                    $data=mysqli_fetch_array($q);
                                    extract($data);
                                ?>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?php echo $c_name; ?></h1>
                        <ol class="breadcrumb mb-4">
                               
                            <li class="breadcrumb-item active"><h5>Student And Teacher Infromation</h5></li>
                            
                        </ol>

                                             
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Student/Teacher</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>User ID</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>User_Type</th>
                                              
                                            </tr>
                                        </thead>
                                        
                                        <tbody>

                                         <?php 
                                            $i=1;
                                           
                                            $q=$d->select("users","","");

                                            while ($data=mysqli_fetch_array($q)) {
                                                extract($data);
                                             ?>

                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $user_id; ?></td>
                                                <td><?php echo $username; ?></td>
                                                <td><?php echo $email; ?></td>
                                                <td><?php echo $password; ?></td>

                                                <?php if($flag==0){ ?>
                                                    <td>Student</td>
                                                <?php }else{ ?>
                                                    <td>Teacher</td>
                                                <?php } ?>
                                           
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