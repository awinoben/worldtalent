<?php
require_once "../connect/dbconn.php";
include ('session.php');// connect to database
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
                            <h2>Update Base Standards</h2>
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
                            if (isset($_GET['baseId'])) {
                                $id = $_GET['baseId'];
                            } else {
                                echo "No ID FOUND!!";
                            }
                            $Query = "SELECT * FROM `base_standards` WHERE `Id`='$id'";
                            $Result = $db->query($Query);
                            if ($Result->rowCount() == 1) {
                                $row = $Result->fetch();

                            } else {
                                echo "No Data Found!!";
                            }
                            ?>
                            <form class="form-horizontal form-label-left" novalidate action="bstds.php" method="post">
                                <div class="row">
                                    <div class="col-md-2 item form-group" hidden>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary">Id</label>
                                        <div class="col-xs-12">
                                            <input id="baseId" value="<?php echo $id;?>" class="form-control col-md-7 col-xs-12" type="text" placeholder="code.." name="baseId">
                                        </div>
                                    </div>
                                    <div class="col-md-2 item form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary">Code</label>
                                        <div class="col-xs-12">
                                            <input id="code" class="form-control col-md-7 col-xs-12" value="<?php echo $row['Code'];?>" type="text" placeholder="code.." name="code">
                                        </div>
                                    </div>
                                    <div class="col-md-2 item form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary">Group</label>
                                        <div class="col-xs-12">
                                            <input id="group"  class="form-control col-md-7 col-xs-12" value="<?php echo $row['Grp'];?>" placeholder="group.." type="text" name="group">
                                        </div>
                                    </div>
                                    <div class="col-md-6 item form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary">Description</label>
                                        <div class="col-xs-12">
                                            <input id="description" value="<?php echo $row['Description'];?>" class="form-control col-md-7 col-xs-12" placeholder="Enter description..." type="text" name="description">
                                        </div>
                                    </div>
                                    <div class="col-md-2 item form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary"><br></label>
                                        <div class="col-xs-12">
                                            <button id="send" type="submit" name="save" class="form-control btn btn-success">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="ln_solid"></div>
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
<!-- Modal -->
<!-- /.modal-dialog -->
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
