
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Main Screen</div>
                            <a class="nav-link" href="index.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Home </a>


                            <div class="sb-sidenav-menu-heading">Documents</div>
                            <a class="nav-link" href="assignments.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Asignments</a>
                                <a class="nav-link" href="exams.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Exams</a>  

                            <div class="sb-sidenav-menu-heading">Send/Receive Messages</div>
                            <a class="nav-link" href="inbox.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Inbox</a>
                                <a class="nav-link" href="sent_messages.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Sent Messages</a> 
                                <a class="nav-link" href="compose.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Compose</a> 
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as: <?php echo "  ".$_SESSION['username']; ?></div>
                        
                    </div>
                </nav>
            </div>