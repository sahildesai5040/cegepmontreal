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
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label class="big mb-1">Send To</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                               
                                                    <select class="form-control" name="user_id_to">
                                                               

                                                            <?php 
                                                                   
                                                                $q=$d->select("users","",""); 
                                                
                                                                 while ($data=mysqli_fetch_array($q))
                                                                 {
                                                                    extract($data);

                                                                    
                                                            ?>
                                                                
                                                                     <?php if ($flag==0) {?>

                                                                    <option value="<?php echo $user_id; ?>"><?php echo $username; ?></option>
                                                                <?php }else{?>
                                                                    <option value="<?php echo $user_id; ?>"><?php echo $username . " - Teacher"; ?></option>
                                                                <?php }?>
                                                                
                                                            <?php } ?>

                                                            </select>


                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label class="big mb-1">Subject</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                               
                                                       <input class="form-control py-4" type="text" name="subject" placeholder="Enter Subject" />

                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label class="big mb-1">Message</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                               
                                                       <textarea class="form-control py-4" type="text" name="message" placeholder="Enter Subject" rows=10 cols=10>
                                                           
                                                       </textarea>

                                                    </div>
                                                </div>
                                            </div>

                                             <div class="form-row">
                                                <div class="col-md-3">
                                                   <div class="upload-btn-wrapper2">
                                                      <button class="btn btn-primary">Attach file</button>
                                                      <input type="file" name="file" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                   
                                                </div>
                                                <div class="col-md-3">
                                                   
                                                </div>

                                                <div class="col-md-3">
                                                   <button class="btn btn-primary btn-block" name="sendmsgbtn" value="sendmsgbtn">Send Message</button>
                                                </div>
                                                
                                            </div>


                                            
                                           
                                        </form>
                                    </div>

                    </div>
                </main>
<?php include 'common/footer.php'; ?>
