<!-- header -->
<?php include 'common/header.php'; ?>
<!-- sidebar menu -->
<?php include 'common/sidebar.php'; ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Add Assignment</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Assignment</li>
                        </ol>
                       
                       

                          <div class="card-body col-md-8 justify-content-center">
                                    <form action="controller.php" method="post" enctype="multipart/form-data">
                                            


                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label class="big mb-1">Assignment Name</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                               
                                                       <input class="form-control py-4" type="text" name="assignment_name" placeholder="Enter Assignment" />

                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label class="big mb-1">Assignment Deadline</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                               
                                                       <input class="form-control py-4" type="date" name="submission_deadline" placeholder="Select Date and Time" />

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
                                                   <button class="btn btn-primary btn-block" name="addassignment" value="addassignment">Add Assignment</button>
                                                </div>
                                                
                                            </div>


                                            
                                           
                                        </form>
                                    </div>

                    </div>
                </main>
<?php include 'common/footer.php'; ?>
