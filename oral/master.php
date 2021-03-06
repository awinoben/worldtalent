 <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="dashboard.php" class="site_title"><i class="fa fa-bell text-primary"></i> <span>Oral Screener</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['userTitle']." ".$_SESSION['firstName']." ".$_SESSION['lastName'];?></h2>
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
                    <li><a><i class="fa fa-user-md"></i> Pregnancy Screens<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="pregnancyHome.php">Assign Domiciles</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-user-md"></i> Birth Scales<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="birthHome.php">Assign Domiciles</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-user-md"></i> Labour Rubrics<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="labourHome.php">Assign Domiciles</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-user-md"></i> Infant Milestone (0-2 Years)<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="infantHome.php">Assign Domiciles</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-user-md"></i> Early Talent Rigows(3-6 Years)<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="earlytrHome.php">Assign Domiciles</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-user-md"></i> Early Depository Talent Domiciles (6+ years)<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="earlydtHome.php">Assign Domiciles</a></li>
                        </ul>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
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
                    <li><a href="javascript:;">My Profile</a></li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">2</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
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
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->