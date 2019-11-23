 <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="dashboard.php" class="site_title"><i class="fa fa-bell text-primary"></i> <span>Clinic</span>&nbsp;:<span class="text-success"><?php echo $_SESSION['region'];?></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['userTitle']." ". $_SESSION['firstName']." ".$_SESSION['lastName'];?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-dashboard"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="dashboard.php">Dashboard</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i> Candidates<span class="fa fa-chevron-down"></span></a>
                   <ul class="nav child_menu">
                      <li><a href="regCandidate.php">Register Candidate</a></li>
					  <li><a href="viewCandidate.php">View Candidates</a></li>
                    </ul>
                  </li>
                    <li><a><i class="fa fa-user-md"></i> Oral Screens(Pregnancy to Birth Tables)<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a>Pregnancy Screens<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="pregnancyHome.php">Assign Domiciles</a></li>
                                </ul>
                            </li>
                            <li><a>Birth Scales<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="birthHome.php">Assign Domiciles</a></li>
                                </ul>
                            </li>
                            <li><a>Labour Rubrics<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="labourHome.php">Assign Domiciles</a></li>
                                </ul>
                            </li>
                            <li><a>Infant Milestone (0-2 Years)<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="infantHome.php">Assign Domiciles</a></li>
                                </ul>
                            </li>
                            <li><a>Early Talent Rigows(3-6 Years)<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="earlytrHome.php">Assign Domiciles</a></li>
                                </ul>
                            </li>
                            <li><a>Early Depository Talent Domiciles (6+ years)<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="earlydtHome.php">Assign Domiciles</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-hospital-o"></i> Psycho-Screen Statements<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a>BPT Evaluation<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="bptevaluationHome.php">Assign Domiciles</a></li>
                                </ul>
                            </li>
                            <li><a>Rigow Scales-Generic Personality Scales<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="rsgpscalesHome.php">Assign Domiciles</a></li>
                                </ul>
                            </li>
                            <li><a>Rigow Scales-Natural Aptitudes<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="rsnaptitudesHome.php">Assign Domiciles</a></li>
                                </ul>
                            </li>
                            <li><a>Rigow Scales-Learning and Product Styles<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="learningHome.php">Assign Domiciles</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-plus-square"></i> Clinical Screen Findings<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a>Natural Depositions and Endowments<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="depositionHome.php">Assign Domiciles</a></li>
                                </ul>
                            </li>
                            <li><a>Quantum Points<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="assignHome.php">Assign Domiciles</a></li>
                                </ul>
                            </li>
                            <li><a>Head and Brain Diametrics<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="hbdiametricHome.php">Assign Domiciles</a></li>
                                </ul>
                            </li>
                            <li><a>Left Brain Limbic and Signal Stratification<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="lblStratificationHome.php">Assign Domiciles</a></li>
                                </ul>
                            </li>
                            <li><a>Middle Brain Limbic and Signal Stratification<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="mblStratificationHome.php">Assign Domiciles</a></li>
                                </ul>
                            </li>
                            <li><a>Right Brain Limbic and Signal Stratification<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="rblStratificationHome.php">Assign Domiciles</a></li>
                                </ul>
                            </li>
                            <li><a>Anthropometric Stratification<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="anthropometricHome.php">Assign Domiciles</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-plus-square"></i> Talent Prescriptions<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                            <li><a href="preambleHome.php">Preambles</a>  
                            <li><a href="#">Key Talent/Leraning Prescription Delimiters(LPD)</a> 
                            <li><a href="#">Talent Prescription Tasks</a> 
                            <li><a href="#">Resources</a> 
                            <li><a href="#">Activities</a> 
                            <li><a href="#">Outcomes</a>  
                            </li>
                            </ul>
                            </li>
                    <li><a href="statementhome.php"><i class="fa fa-edit"></i>Expert Statements</a></li>
                    <li><a href="professionalhome.php"><i class="fa fa-dashcube"></i>Professional Delimeters</a></li>
                    <li><a href="conclusionshome.php"><i class="fa fa-pencil-square"></i> Conclusions and Recommendations</a></li>
                    <li><a href="endorsehome.php"><i class="fa fa-pencil-square"></i> Assign Experts to Cndidates</a></li>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
<!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/user.png" alt=""><?php echo $_SESSION['userTitle']." ".$_SESSION['firstName']." ".$_SESSION['middleName']." ".$_SESSION['lastName'];?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;">My Profile</a></li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green"></span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->