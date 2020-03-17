<!-- header -->
<?php include 'common/header.php'; ?>
<!-- sidebar menu -->
<?php include 'common/sidebar.php'; ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Compose</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Compose</li>
                        </ol>
                       
                       

                          <div class="card-body col-md-8 justify-content-center">
                                    <form action="controller.php" method="post" enctype="multipart/form-data">

                                        <?php 
                                            $message_id=$_GET['message_id'];
                                           

                                           $q=$d->select("message_details INNER JOIN users ON  users.user_id = message_details.user_id_to INNER JOIN file_details ON  file_details.file_id = message_details.file_id" ,"message_id='$message_id'","");

                                            $data=mysqli_fetch_array($q);
                                            extract($data);
                                        ?>

                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label class="big mb-1">Send To</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <label class="big mb-1"><?php echo $username; ?></label>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label class="big mb-1">From</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <label class="big mb-1"><?php echo "Jayesh Harsiyani"; ?></label>
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label class="big mb-1">Date & Time</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <label class="big mb-1"><?php echo $date_time; ?></label>
                                                </div>
                                            </div>

                                             <div class="form-row">
                                                <div class="col-md-4">
                                                    <label class="big mb-1">Subject</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <label class="big mb-1"><?php echo $subject; ?></label>
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label class="big mb-1">Message</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        
                                                      
                                                        <textarea class="form-control py-4" type="text" rows=10 cols=10 disabled="disabled">
                                                            <?php echo $message_details; ?>
                                                       </textarea>
                                                    </div>
                                                </div>
                                            </div>

                                              <div class="form-row">
                                                <div class="col-md-4">
                                                    <label class="big mb-1">Attached File</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <label class="big mb-1"><a href="files/<?php echo $file_name ?>" target="_blank"><?php echo $file_name ?></a>
                                                    </label>
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
                                                    <a class="btn btn-danger" href="controller.php?message_id=<?php echo $message_id; ?>">Delete Message</a>
                                                </div>
                                                
                                            </div>


                                            
                                           
                                        </form>
                                    </div>

                    </div>
                </main>
<?php include 'common/footer.php'; ?>
