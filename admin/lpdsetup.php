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
                            <h2>Key Talent/Learning Prescription Delimeters(LPD)</h2>
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
                            <form class="form-horizontal form-label-left" novalidate action="lpd.php" method="post">
                                <div class="row">
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-2 col-sm-2 col-xs-12">LPD 1</label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea type="text" id="lpd1" name="lpd1" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-2 col-sm-2 col-xs-12">LPD 2</label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea type="text" id="lpd2" name="lpd2" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-2 col-sm-2 col-xs-12">LPD 3</label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea type="text" id="lpd3" name="lpd3" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-2 col-sm-2 col-xs-12">LPD 4</label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea type="text" id="lpd4" name="lpd4" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-2 col-sm-2 col-xs-12">LPD 5</label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea type="text" id="lpd5" name="lpd5" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-2 col-sm-2 col-xs-12">LPD 6</label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea type="text" id="lpd6" name="lpd6" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-2 col-sm-2 col-xs-12">LPD 7</label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea type="text" id="lpd7" name="lpd7" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-2 col-sm-2 col-xs-12">LPD 8</label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea type="text" id="lpd8" name="lpd8" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>
                                </div>
                                    <div class="col-md-2 item form-group float-right">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary"><br></label>
                                        <div class="col-xs-12">
                                            <button id="send" type="submit" name="save" class="form-control btn btn-success">Save</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                        <div class="x_content">
                                            <!-- start project list -->
                                            <table class="table table-striped projects">
                                                <thead>
                                                <tr>
                                                    <th style="width: 2%">No.</th>
                                                    <th style="width: 11%">LPD 1</th>
                                                    <th style="width: 11%">LPD 2</th>
                                                    <th style="width: 11%">LPD 3</th>
                                                    <th style="width: 11%">LPD 4</th>
                                                    <th style="width: 11%">LPD 5</th>
                                                    <th style="width: 11%">LPD 6</th>
                                                    <th style="width: 11%">LPD 7</th>
                                                    <th style="width: 11%">LPD 8</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $query = "SELECT * FROM `learning_prescription_delimiters`";
                                                $result = $db->query($query);
                                                $i=1;
                                                while($row = $result->fetch(PDO::FETCH_ASSOC)){
                                                    ?>
                                                    <tr>
                                                        <td>
                                                        <?php 
                                                        echo $i;
                                                        $i++;
                                                        ?>
                                                        </td>
                                                        <td>
                                                            <a><?php echo $row['lpd1'];?></a>
                                                        </td>
                                                        <td>
                                                            <a><?php echo $row['lpd2'];?></a>
                                                        </td>
                                                        <td>
                                                            <a><?php echo $row['lpd3'];?></a>
                                                        </td>
                                                        <td>
                                                            <a><?php echo $row['lpd4'];?></a>
                                                        </td>
                                                        <td>
                                                            <a><?php echo $row['lpd5'];?></a>
                                                        </td>
                                                        <td>
                                                            <a><?php echo $row['lpd6'];?></a>
                                                        </td>
                                                        <td>
                                                            <a><?php echo $row['lpd7'];?></a>
                                                        </td>
                                                        <td>
                                                            <a><?php echo $row['lpd8'];?></a>
                                                        </td>
                                                        <td>
                                                            <a href="editlpd.php?lpdId=<?php echo $row['lpd_id'] ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                                            <a href="delete.php?deletelpdId=<?php echo $row['lpd_id'] ?>&&action=parmdel" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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