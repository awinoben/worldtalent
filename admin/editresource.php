<?php
require_once "../connect/dbconn.php";
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
                            <h2>Resources</h2>
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
                            <p></p>
                            <?php
                            $id = "";
                            if (isset($_GET['resourceId'])) {
                                $id = $_GET['resourceId'];
                            } else {
                                echo "No ID FOUND!!";
                            }
                            $Query = "SELECT * FROM `resources` WHERE `resource_id`='$id'";
                            $Result = $db->query($Query);
                            if ($Result->rowCount() == 1) {
                                $row = $Result->fetch();

                            } else {
                                echo "No Data Found!!";
                            }
                            ?>
                            <form class="form-horizontal form-label-left" novalidate action="updateresource.php" method="post">
                                <div class="row">
                                <div class="col-md-2 item form-group" hidden>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary">Id</label>
                                        <div class="col-xs-12">
                                            <input id="resourceId" value="<?php echo $id; ?>" class="form-control col-md-7 col-xs-12" type="text" placeholder="id.." name="resourceId">
                                        </div>
                                    </div>
                                <div class="col-md-6 item form-group"><br>
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary">Select Resource Set</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control col-md-7 col-xs-12" id="resourceset" name="resourceset" readonly="true">
                                    <option value="<?php echo $row['resourceset']; ?>"><?php echo $row['resourceset']; ?></option>
                                </select>
                            </div>
                          </div>
                                    <div class="col-md-3 item form-group">
                                        <label for="middle-name" class="control-label col-md-7 col-sm-7 col-xs-12 text-primary">Resource Set Name</label>
                                        <div class="col-xs-12">
                                            <input id="name" value="<?php echo $row['name']; ?>" class="form-control col-md-7 col-xs-12" type="text" placeholder=" name.." name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-3 item form-group">
                                        <label for="middle-name" class="control-label col-md-7 col-sm-7 col-xs-12 text-primary">Resource Set Type</label>
                                        <div class="col-xs-12">
                                            <input id="activitysettype" value="<?php echo $row['resourcesettype']; ?>" class="form-control col-md-7 col-xs-12"  type="text" name="resourcesettype">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6 item form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary">Description</label>
                                        <div class="col-xs-12">
                                            <textarea id="description" class="form-control col-md-7 col-xs-12" placeholder="Enter description..." type="text" name="description"><?php echo $row['description']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-2 item form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary"><br><br></label>
                                        <div class="col-xs-12">
                                            <button id="send" type="submit" name="save" class="form-control btn btn-info">Update</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                        <div class="x_content">
                                            <!-- start project list -->

                                            <!-- end project list -->

                                        </div>
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