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
                            <h2>SETUP</h2>
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
                            <form class="form-horizontal form-label-left" novalidate action="hbdiametricsdsetup.php" method="post">
                                <?php
                                $query = "SELECT quantumDescription FROM `hbdiametric_domicile_setup` WHERE quantumCode='A'";
                                $result = $db->query($query);
                                $row1 = $result->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary">Enter Head & Brain Diametric Domicile A</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="domicileA" value="<?php echo $row1['quantumDescription']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="domicileA">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <?php
                                    $query = "SELECT quantumDescription FROM `hbdiametric_domicile_setup` WHERE quantumCode='B'";
                                    $result = $db->query($query);
                                    $row2 = $result->fetch(PDO::FETCH_ASSOC);
                                    ?>
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary">Enter Head & Brain Diametric Domicile B</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="domicileB" value="<?php echo $row2['quantumDescription']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="domicileB">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <?php
                                    $query = "SELECT quantumDescription FROM `hbdiametric_domicile_setup` WHERE quantumCode='C'";
                                    $result = $db->query($query);
                                    $row3 = $result->fetch(PDO::FETCH_ASSOC);
                                    ?>
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary">Enter Head & Brain Diametric Domicile C</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="domicileC" value="<?php echo $row3['quantumDescription']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="domicileC">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <?php
                                    $query = "SELECT quantumDescription FROM `hbdiametric_domicile_setup` WHERE quantumCode='D'";
                                    $result = $db->query($query);
                                    $row4 = $result->fetch(PDO::FETCH_ASSOC);
                                    ?>
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary">Enter Head & Brain Diametric Domicile D</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="domicileD" value="<?php echo $row4['quantumDescription']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="domicileD">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <?php
                                    $query = "SELECT quantumDescription FROM `hbdiametric_domicile_setup` WHERE quantumCode='E'";
                                    $result = $db->query($query);
                                    $row5 = $result->fetch(PDO::FETCH_ASSOC);
                                    ?>
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary">Enter Head & Brain Diametric Domicile E</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="domicileE" value="<?php echo $row5['quantumDescription']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="domicileE">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <?php
                                    $query = "SELECT quantumDescription FROM `hbdiametric_domicile_setup` WHERE quantumCode='F'";
                                    $result = $db->query($query);
                                    $row6 = $result->fetch(PDO::FETCH_ASSOC);
                                    ?>
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary">Enter Head & Brain Diametric Domicile F</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="domicileF" value="<?php echo $row6['quantumDescription']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="domicileF">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <?php
                                    $query = "SELECT quantumDescription FROM `hbdiametric_domicile_setup` WHERE quantumCode='G'";
                                    $result = $db->query($query);
                                    $row7 = $result->fetch(PDO::FETCH_ASSOC);
                                    ?>
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary">Enter Head & Brain Diametric Domicile G</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="domicileG" value="<?php echo $row7['quantumDescription']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="domicileG">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <?php
                                    $query = "SELECT quantumDescription FROM `hbdiametric_domicile_setup` WHERE quantumCode='H'";
                                    $result = $db->query($query);
                                    $row8 = $result->fetch(PDO::FETCH_ASSOC);
                                    ?>
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary">Enter Head & Brain Diametric Domicile H</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="domicileH" value="<?php echo $row8['quantumDescription']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="domicileH">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-info">Edit</button>
                                        <button id="send" type="submit" class="btn btn-danger">Delete</button>
                                        <button type="text" class="btn btn-primary">Preview</button>
                                        <button id="send" type="submit" name="save" class="btn btn-success">Save</button>
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