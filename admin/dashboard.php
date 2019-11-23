<?php
include('../connect/dbconn.php');
include ('session.php');
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

    <title>World Talent| </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
      <script>
          function myFunction() {
              // Declare variables
              var input, filter, table, tr, td, i, txtValue;
              input = document.getElementById("myInput");
              filter = input.value.toUpperCase();
              table = document.getElementById("myTable");
              tr = table.getElementsByTagName("tr");

              // Loop through all table rows, and hide those who don't match the search query
              for (i = 0; i < tr.length; i++) {
                  td = tr[i].getElementsByTagName("td")[1];
                  if (td) {
                      txtValue = td.textContent || td.innerText;
                      if (txtValue.toUpperCase().indexOf(filter) > -1) {
                          tr[i].style.display = "";
                      } else {
                          tr[i].style.display = "none";
                      }
                  }
              }
          }
      </script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <!-- master page-->
        <?php
		include "master.php";
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
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-left top_search">
                          <div class="input-group">
                              <input type="text" class="form-control" id="myInput" name="candidate" onkeyup="myFunction()" placeholder="Search for candidate...">
                              <span class="input-group-btn">
                      <button class="btn btn-primary" type="button">Go</button></span>
                          </div>
                      </div>
                      <div class="pull-right">  
                     <button name="create_excel" id="create_excel" class="btn btn-success">Create Excel File</button>  
                </div> 
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
                      <!--newly registered candidates-->
                      <table class="table table-striped projects" id="myTableSearch">
                          <h2 class="text-success text-uppercase text-center">New Candidates</h2>
                          <thead>
                          <tr>
                              <th style="width: 1%">#</th>
                              <th style="width: 15%">Candidate Name</th>
                              <th style="width:5%">Age</th>
                              <th style="width: 5%">Gender</th>
                              <th style="width: 15%">Email</th>
                              <th style="width: 15%">Phone</th>
                              <!---<th style="width: 15%">Country</th>
                              <th style="width: 15%">City</th>-->
                              <th style="width: 20%">#Action</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php
                          $query = "SELECT * FROM `candidates` where status='0' ORDER BY candidateID DESC LIMIT 15";
                          $result = $db->query($query);
                          while($row = $result->fetch(PDO::FETCH_ASSOC)){
                              $candidateID = $row['candidateID'];
                              ?>
                              <tr>
                                  <td><i class="fa fa-user"></i> </td>
                                  <td>
                                      <a><?php echo $row['firstName']." ".$row['middleName']." ".$row['lastName'];?></a>
                                  </td>
                                  <td>
                                      <a><?php echo $row['age'];?></a>
                                  </td>
                                  <td>
                                      <a><?php echo $row['gender'];?></a>
                                  </td>
                                  <td>
                                      <a><?php echo $row['email'];?></a>
                                  </td>
                                  <td>
                                      <a><?php echo $row['phone'];?></a>
                                  </td>
                                 <!-- <td>
                                      <a><?php echo $row['country'];?></a>
                                  </td>
                                  <td>
                                      <a><?php echo $row['region'];?></a>
                                  </td>-->
                                  <td>
                                      <a href="editcandidate.php?candidateID=<?php echo $candidateID;?>" target="_blank" class="btn btn-info btn-xs"><i class="fa fa-eye-slash"></i> View </a>
                                      <a href="delete.php?approveID=<?php echo $candidateID;?>&&action=approve" target="_blank" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Approve </a>
                                      <a href="delete.php?declineID=<?php echo $candidateID;?>&&action=parmdel" title="Delete Permanently?" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Decline </a>
                                  </td>
                              </tr>
                              <?php
                          }
                          ?>
                          </tbody>
                      </table>
                      <hr>
                    <!-- start project list -->
                    <div class="row">
                    <div class="col-md-8">
                        <form class="form-horizontal" action="functions.php" method="post" name="upload_excel" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="filebutton">Select File</label>
                                    <div class="col-md-4">
                                        <input type="file" name="file" id="file" class="input-large form-control">
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                                    <div class="col-md-4">
                                        <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading btn-lg" data-loading-text="Loading...">Import</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="col-md-4">
                            <form class="form-horizontal" action="functions.php" method="post" name="upload_excel"   
                                    enctype="multipart/form-data">
                                <div class="form-group">
                                            <div class="col-md-4 col-md-offset-4">
                                                <input type="submit" name="Export" class="btn btn-success btn-lg" value="Export to Excel"/>
                                            </div>
                                </div>                    
                            </form>           
                    </div>
                    </div>            
                      <table class="table table-striped projects" id="myTable2">
                          <h2 class="text-success text-uppercase text-center">Recently Registered Candidates</h2>
                          <thead>
                          <tr>
                              <th style="width: 1%">#</th>
                              <th style="width: 15%">Candidate Name</th>
                              <th style="width:5%">Age</th>
                              <th style="width: 5%">Gender</th>
                              <th style="width: 15%">Email</th>
                              <th style="width: 15%">Phone</th>
                              <th style="width: 20%">#Action</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php
                          $query = "SELECT * FROM `candidates` where status='1' ORDER BY candidateID DESC";
                          $result = $db->query($query);
                          while($row = $result->fetch(PDO::FETCH_ASSOC)){
                              $candidateID = $row['candidateID'];
                              ?>
                              <tr>
                                  <td><i class="fa fa-user"></i> </td>
                                  <td>
                                      <a><?php echo $row['firstName']." ".$row['middleName']." ".$row['lastName'];?></a>
                                  </td>
                                  <td>
                                      <a><?php echo $row['age'];?></a>
                                  </td>
                                  <td>
                                      <a><?php echo $row['gender'];?></a>
                                  </td>
                                  <td>
                                      <a><?php echo $row['email'];?></a>
                                  </td>
                                  <td>
                                      <a><?php echo $row['phone'];?></a>
                                  </td>
                                  <td>
                                      <a href="editcandidate.php?candidateID=<?php echo $candidateID;?>" target="_blank" class="btn btn-success btn-xs"><i class="fa fa-eye-slash"></i> View </a>
                                      <a href="delete.php?rid=<?php echo $candidateID;?>&&action=parmdel" title="Delete Permanently?" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                  </td>
                              </tr>
                              <?php
                          }
                          ?>
                          </tbody>
                      </table>
                    <!-- end project list -->

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
            World Talent<a href="#"> &copy 2018</a>
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
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script>  
     $(document).ready(function(){  
      $('#create_excel').click(function(){  
           var excel_data = $('#myTable').html();  
           var page = "excel.php?data=" + excel_data;  
           window.location = page;  
      });  
     });  
   </script> 
  </body>
</html>
