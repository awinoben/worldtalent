 <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="dashboard.php" class="site_title"><i class="fa fa-bell text-primary"></i> <span>Admin Account</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['userTitle']."". $_SESSION['firstName']." ".$_SESSION['lastName'];?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a>
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
                                    <li><a href="pregnancydomicilesetup.php">Pregnancy Screen Domicile Setup</a></li>
                                    <li><a href="pregnancydomiciles.php">Pregnancy Screen Domiciles</a></li>
                                    <li><a href="pregnancyReportHome.php">Individual Reports</a></li>
                                </ul>
                            </li>
                            <li><a>Birth Scales<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="birthdomicilesetup.php">Birth Scale Domicile Setup</a></li>
                                    <li><a href="birthdomiciles.php">Birth Scale Domiciles</a></li>
                                    <li><a href="birthReportHome.php">Individual Reports</a></li>
                                </ul>
                            </li>
                            <li><a>Labour Rubrics<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="labourdomicilesetup.php">Labour Rubric Domicile Setup</a></li>
                                    <li><a href="labourdomiciles.php">Labour Rubric Domiciles</a></li>
                                    <li><a href="labourReportHome.php">Individual Reports</a></li>
                                </ul>
                            </li>
                            <li><a>Infant Milestone (0-2 years)<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="infantdomicilesetup.php">Infant Milestone Domicile Setup</a></li>
                                    <li><a href="infantdomiciles.php">Infant Milestone Domiciles</a></li>
                                    <li><a href="infantReportHome.php">Individual Reports</a></li>
                                </ul>
                            </li>
                            <li><a>Early Talent Rigows (3-6 years)<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="earlytrdomicilesetup.php"> Domicile Setup</a></li>
                                    <li><a href="earlytrdomiciles.php">Domiciles</a></li>
                                    <li><a href="earlytrReportHome.php">Individual Reports</a></li>
                                </ul>
                            </li>

                            <li><a>Early Depository Talent (6+ Years)<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="earlydtdomicilesetup.php"> Domicile Setup</a></li>
                                    <li><a href="earlydtdomiciles.php">Domiciles</a></li>
                                    <li><a href="earlydtReportHome.php">Individual Reports</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-hospital-o"></i> Psycho-Screen Statements<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a>BPT Evaluation<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="bptevaluationdomicilesetup.php"> Domicile Setup</a></li>
                                    <li><a href="bptevaluationdomiciles.php">Domiciles</a></li>
                                    <li><a href="bptevaluationReportHome.php">Individual Reports</a></li>
                                </ul>
                            </li>
                            <li><a>Rigow Scales-Generic Personality Scales<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="rsgpscaledomicilesetup.php"> Domicile Setup</a></li>
                                    <li><a href="rsgpscaledomiciles.php">Domiciles</a></li>
                                    <li><a href="rsgpscaleReportHome.php">Individual Reports</a></li>
                                </ul>
                            </li>
                            <li><a>Rigow Scales-Natural Aptitudes<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="rsnaptitudesdomicilesetup.php"> Domicile Setup</a></li>
                                    <li><a href="rsnaptitudesdomiciles.php">Domiciles</a></li>
                                    <li><a href="rsnaptitudesReportHome.php">Individual Reports</a></li>
                                </ul>
                            </li>
                            <li><a>Rigow Scales-Learning and Product Styles<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="learningdomicilesetup.php"> Domicile Setup</a></li>
                                    <li><a href="learningdomiciles.php">Domiciles</a></li>
                                    <li><a href="learningReportHome.php">Individual Reports</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-plus-square"></i> Clinical Screen Findings<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a>Natural Depositions and Endowments<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="depositiondomicilesetup.php">Domicile Setup</a></li>
                                    <li><a href="depositiondomiciles.php">Domiciles</a></li>
                                    <li><a href="depositionReportHome.php">Individual Reports</a></li>
                                </ul>
                            </li>
                            <li><a>Quantum Points<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="domicilesetup.php">Quantum Point Domicile Setup</a></li>
                                    <li><a href="domiciles.php">Quantum Point Domiciles</a></li>
                                    <li><a href="qReportHome.php">Individual Reports</a></li>
                                </ul>
                            </li>
                            <li><a>Head and Brain Diametrics<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="hbdiametricsdomicilesetup.php">Domicile Setup</a></li>
                                    <li><a href="hbdiametricsdomiciles.php">Domiciles</a></li>
                                    <li><a href="hbdiametricsReportHome.php">Individual Reports</a></li>
                                </ul>
                            </li>
                            <li><a>Left Brain Limbic and Signal Stratification<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="lblstratificationdomicilesetup.php">Domicile Setup</a></li>
                                    <li><a href="lblstratificationdomiciles.php">Domiciles</a></li>
                                    <li><a href="lblstratificationReportHome.php">Individual Reports</a></li>
                                </ul>
                            </li>
                            <li><a>Middle Brain Limbic and Signal Stratification<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="mblstratificationdomicilesetup.php">Domicile Setup</a></li>
                                    <li><a href="mblstratificationdomiciles.php">Domiciles</a></li>
                                    <li><a href="mblstratificationReportHome.php">Individual Reports</a></li>
                                </ul>
                            </li>
                            <li><a>Right Brain Limbic and Signal Stratification<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="rblstratificationdomicilesetup.php">Domicile Setup</a></li>
                                    <li><a href="rblstratificationdomiciles.php">Domiciles</a></li>
                                    <li><a href="rblstratificationReportHome.php">Individual Reports</a></li>
                                </ul>
                            </li>
                            <li><a>Anthropometric Stratification<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="anthropometricdomicilesetup.php">Domicile Setup</a></li>
                                    <li><a href="anthropometricdomiciles.php">Domiciles</a></li>
                                    <li><a href="anthropometricReportHome.php">Individual Reports</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Expert Statements<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="gobservations.php">General Observations</a></li>
                            <li><a href="prubrics.php">Personality Rubrics</a></li>
                            <li><a href="lstyles.php">Learning Styles</a></li>
                            <li><a href="tdomains.php">Talent Domains</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-pencil-square"></i> Conclusions and Recommendations<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="talentgenre.php">Talent Genre Development</a></li>
                            <li><a href="modifiers.php">Modifiers and Enrichment Modules</a></li>
                            <li><a href="academictheme.php">Typical Academic Theme Scales</a></li>
                            <li><a href="potentialoccupation.php">Typical Potential Occupation Themes</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-pencil-square"></i> Professional Delimeters<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="bstandards.php">Base Standards</a></li>
                            <li><a href="augmodels.php">Augmenting Models</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-bookmark"></i>System Summary<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="summary.php">Summary Setup</a></li>
                            <li><a href="general.php">General Report</a></li>
                            <li><a href="talentreport.php">Talent Report</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bookmark"></i>Talent Prescriptions<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="preamblesetup.php">Preamble</a></li>
                            <li><a href="lpdsetup.php">Key Talent/Learning Prescription Delimeters(LPD)</a></li>
                            <li><a href="talentpresctasks.php">Talent Prescription Tasks</a></li>
                            <li><a href="resources.php">Resources</a></li>
                            <li><a href="activities.php">Activities</a></li>
                            <li><a href="outcomes.php">Outcomes</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-user"></i>Users<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="regManager.php">Add User</a></li>
                            <li><a href="viewExperts.php">Talent Experts</a></li>
                            <li><a href="viewManager.php">Psycho-Screeners</a></li>
                            <li><a href="viewScreeners.php">Oral Screeners</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-globe"></i>Countries & Cities<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="add-country.php">Add Country</a></li>
                            <li><a href="add-city.php">Add City/Town</a></li>
                        </ul>
                    </li>
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
                    <img src="images/user.png" alt=""><?php echo $_SESSION['firstName']." ".$_SESSION['middleName']." ".$_SESSION['lastName'];?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profile.php"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-green pull-right">100%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green"></span>
                  </a>
                  <!--<ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>-->
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->