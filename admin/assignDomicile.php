
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
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
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
                   <?php
                      $query = "SELECT * FROM `candidates` WHERE id='$candidateID'";
                      $result = $db->query($query);
                      ?>
                    <form class="form-horizontal form-label-left" novalidate method="get">
                      </p>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Full name e.g Jon Doe" required="required" type="text">
                        </div>
                      </div>
						  <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Age<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                            </div>
                          </div>
					   <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div id="gender" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-success">
                                  <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="gender" value="female"> Female
                                </label>
                              </div>
                            </div>
                          </div>
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Country Of Residence</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>Choose Country</option>
                            <option>Kenya</option>
                            <option>Uganda</option>
                            <option>Tanzania</option>
                            <option>Rwanda</option>
                          </select>
                        </div>
                      </div>
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Location <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="occupation" type="text" name="occupation" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Quantum Domicile A</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>Select Option</option>
                            <option>Null</option>
                            <option>Stunted</option>
                            <option>Normal</option>
                            <option>Enhanced</option>
                          </select>
                        </div>
                      </div>
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Quantum Domicile B</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>Select Option</option>
                            <option>Null</option>
                            <option>Stunted</option>
                            <option>Normal</option>
                            <option>Enhanced</option>
                          </select>
                        </div>
                      </div>
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Quantum Domicile C</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>Select Option</option>
                            <option>Null</option>
                            <option>Stunted</option>
                            <option>Normal</option>
                            <option>Enhanced</option>
                          </select>
                        </div>
                      </div>
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Quantum Domicile D</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>Select Option</option>
                            <option>Null</option>
                            <option>Stunted</option>
                            <option>Normal</option>
                            <option>Enhanced</option>
                          </select>
                        </div>
                      </div>
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Quantum Domicile E</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>Select Option</option>
                            <option>Null</option>
                            <option>Stunted</option>
                            <option>Normal</option>
                            <option>Enhanced</option>
                          </select>
                        </div>
                      </div>
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Quantum Domicile F</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>Select Option</option>
                            <option>Null</option>
                            <option>Stunted</option>
                            <option>Normal</option>
                            <option>Enhanced</option>
                          </select>
                        </div>
                      </div>
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Quantum Domicile G</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>Select Option</option>
                            <option>Null</option>
                            <option>Stunted</option>
                            <option>Normal</option>
                            <option>Enhanced</option>
                          </select>
                        </div>
                      </div>
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Quantum Domicile H</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>Select Option</option>
                            <option>Null</option>
                            <option>Stunted</option>
                            <option>Normal</option>
                            <option>Enhanced</option>
                          </select>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
						<button type="submit" class="btn btn-info">Edit</button>
                          <button id="send" type="submit" class="btn btn-danger">Delete</button>
                          <button type="submit" class="btn btn-primary">Preview</button>
                          <button id="send" type="submit" class="btn btn-success">Save</button>
						  <button id="send" type="submit" class="btn btn-default">Exit</button>
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

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>