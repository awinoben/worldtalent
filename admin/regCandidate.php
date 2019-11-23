<?php
include ('../connect/dbconn.php');
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="images/wtlogo.png" type="image/ico" />

    <title>World Talent | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
      <script>
          function getCity(val) {
              $.ajax({
                  type: "POST",
                  url: "get_city.php",
                  data:'country='+val,
                  success: function(data){
                      $("#region").html(data);
                  }
              });
          }
      </script>

      <script type="text/javascript">

          function getAge(){
              var dob = document.getElementById('date').value;
              dob = new Date(dob);
              var today = new Date();
              var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
              document.getElementById('age').value=age;
          }

      </script>
  </head>

  <body class="nav-md">
    <div class="container body">
	<!-- master page-->
        <?php
		require "master.php";
		?>
        <!-- /master page -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
              <div class="x_panel">
                  <div class="col-md-2 col-md-offset-5">
                      <h2><img src="images/wtlogo.png" alt="..." class="img-circle profile_img"></h2>
                  </div>
              </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                      <h2 class="text-success">Candidate Registration</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" action="reg.php" method="post" enctype="multipart/form-data" novalidate>
                      <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" name="firstName" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
						  <div class="item form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middleName">
                            </div>
                          </div>
                          <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="last-name" name="lastName" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
						  <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class='input-group date' id='myDatepicker2'>
                            <input type='text' class="form-control" id="date" name="dob" onblur="getAge();"/>
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                            </div>
                          </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Age<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="age" name="age" readonly required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
					   <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div id="gender" class="radio-group">
                                <label class="btn btn-info" data-toggle-class="btn-primary" data-toggle-passive-class="btn-success">
                                  <input type="radio" name="gender" value="M"> &nbsp; Male &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="gender" value="F"> Female
                                </label>
                              </div>
                            </div>
                          </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Phone Number<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="tel" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Country Of Residence</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="country" id="country" onChange="getCity(this.value);" required>
                            <option>Select Country...</option>
                              <?php
                              $query = "SELECT * FROM `countries` ORDER BY Name ASC ";
                              $result = $db->query($query);
                              for ($i = 0; $row = $result->fetch(); $i++) {
                                  ?>
                                  <option value="<?php echo $row['Name']; ?>"><?php echo $row['Name']; ?></option>
                                  <?php
                              }
                              ?>
                          </select>
                        </div>
                      </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">City/Town</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="region" id="region" required>

                                </select>
                            </div>
                        </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">This Gift Clinic Manager</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="clinic_manager" readonly name="clinicManager" value="<?php echo $_SESSION['firstName'] . " " . $_SESSION['middleName'] . " " . $_SESSION['lastName']; ?>" class="form-control" placeholder="e.g John Doe">
                        </div>
                      </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Username <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="last-name" name="username" value="Gnt792" readonly required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="password" class="control-label col-md-3">Password</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="password" type="password" name="password" value="Gnt792" class="form-control col-md-7 col-xs-12" required="required">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="password" class="control-label col-md-3">Why this Assessment is important for you?</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea type="text" required rows="5" name="importance" class="form-control col-md-7 col-xs-12" Placeholder="Why is this Assessment important..?"></textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label for="password" class="control-label col-md-3">Edit Profile</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea type="text" required rows="5" name="profile" class="form-control col-xs-12" Placeholder="Your Brief Profile...">George was born in an urban setting and taken care of by both parents.
George described his grades as average in math, average in science, average in reading, and average in social studies. He seems to have several areas of interest. His primary interest appears to be in business.He seems to show an interest in organizing or starting a business or assuming a leadership role in working with people, such as stage managing the play or becoming editor of the yearbook.

George&#39;s second area of interest appears to be in science. He seems to enjoy learning about scientific subjects such as biology, chemistry, environmental protection, animals, or geology and doing something with this knowledge, such as working on an experiment or a science project, or collecting items such as leaves or insects.

George&#39;s third area of interest appears to be in video/photography, as he seems to enjoy photography, making a movie, or creating a video. George is currently in college and pursuing a degree course in Business and IT, at Nairobi University.
                            </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Your Resume/CV</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file"  id="resume" name="resume" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Your Photo</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file"  id="photo" name="photo" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Your Youtube Channel</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text"  id="video" name="video" Placeholder="Insert youtube link for videos if any..." class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <a href="viewCandidate.php" class="btn btn-warning btn-group-lg">Cancel</a>
                          <input id="send" type="submit" name="register" Value="Register" class="btn btn-success">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            World Talent Federation <a href="#">&copy; 2018</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="../vendors/validator/validator.js"></script>
	 <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	<script>
    $('#myDatepicker').datetimepicker();
    
    $('#myDatepicker2').datetimepicker({
        format: 'YYYY-MM-DD'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();
    
    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>
	
  </body>
</html>