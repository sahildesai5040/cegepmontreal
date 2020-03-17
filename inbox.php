<!-- header -->
<?php include 'common/header.php'; ?>
<!-- sidebar menu -->
<?php include 'common/sidebar.php'; ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Inbox</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Inbox</li>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-header"><?php $_SESSION['username']; ?></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>From</th>
                                                <th>Subject</th>
                                                <th>Date & Time</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>

                                         <?php 
                                            $i=1;
                                           $user_id=$_SESSION['user_id'];
                                           $q=$d->select("message_details INNER JOIN users ON  users.user_id = message_details.user_id_from" ,"user_id_to='$user_id'","");

                                            while ($data=mysqli_fetch_array($q)) {
                                                extract($data);
                                             ?>

                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $username; ?></td>
                                                <td><?php echo $subject; ?></td>
                                                <td><?php echo $date_time; ?></td>
                                            
                                                 <td>
                                                    <a class="btn btn-primary" href="message_details_inbox.php?message_id=<?php echo $message_id; ?>">View Details</a>
                                                    <a class="btn btn-danger" href="controller.php?message_id=<?php echo $message_id; ?>">Delete</a></td>
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
