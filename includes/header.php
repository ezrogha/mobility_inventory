<nav class="navbar navbar-default top-navbar" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><strong><img class="fh" src="images/FHMM.png" style="width: 40px; height: 40px;" /><!--<i class="icon fa fa-heart"></i>--> FATHER'S HEART</strong></a>

            <div id="sideNav" href="">
            <i class="fa fa-bars icon"></i> 
            </div>
                </div>

                <ul class="nav navbar-top-links navbar-right">
                    <!-- /.dropdown -->
                    <li>
                        
                            <?php
                            if(isset($_SESSION['name'])){
                                echo "<b>".$_SESSION['name']."</b>";
                            }
                        ?>
                        <!-- /.dropdown-user -->
                    </li>
                    <li class="dropdown">
                        
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </nav>
            
            <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="home" href="index.php"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <?php if($_SESSION['user'] == 'partner' || $_SESSION['user'] == 'staff'){ ;?>
                    <li>
                        <a class="inventory" href="inventory.php"><i class="fa fa-desktop"></i> View Inventory</a>
                    </li> 
					 <li>
                        <a class="recipient" href="#"><i class="fa fa-wheelchair"></i> Recipients<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="recipients_all.php"><i class="fa fa-list"></i>New Recipients</a>
                            </li>
                            <!--<li>
                                <a href="alll_recipients.php"><i class="fa fa-list"></i>Prev Recipients</a>
                            </li>--><!--
                            <li>
                                <a href="wait_list.php"><i class="fa fa-list"></i>View Wait List</a>
                            </li>-->
                            <li>
                                <a href="welcome.php"><i class="fa fa-user-plus"></i>Add A Recipient</a>
                            </li>
							</ul>
						</li>
                    <li>
                        <a class="reports" href="reports.php"><i class="fa fa-bar-chart-o"></i> Reports</a>
                    </li>
                    <?php } else if($_SESSION['user'] == 'volunteer') {;?>
                       
                    <?php }; ?>
                    <li>
                        <a class="distribution" href="#"><i class="fa fa-sitemap"></i> Distributions<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="welcome.php"><i class="fa fa-sitemap"></i>View Distributions</a>
                            </li>
                            <?php if($_SESSION['user'] == 'partner' || $_SESSION['user'] == 'staff'){ ;?>
                            <li>
                                <a href="distribution.php"><i class="fa fa-plus"></i>Add Distribution</a>
                            </li>
                            <?php } else {;?>
                                
                            <?php }; ?>
				        </ul>
				    </li>	
                    <?php if($_SESSION['user'] == 'partner'){ ;?>
                    <li>
                        <a class="volunteer" href="signup.php"><i class="fa fa-user-plus"></i> Add A Volunteer</a>
                    </li>
                    <li>
                        <a class="staff" href="staff.php"><i class="fa fa-user-plus"></i> Add A Staff</a>
                    </li>
                    <?php } else if($_SESSION['user'] == 'volunteer') {;?>
                        &nbsp;
                    <?php }; ?>
                </ul>

            </div>

        </nav>