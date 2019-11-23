<?php
require_once "../connect/dbconn.php";
include ('session.php');
//deleting observation
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
                            <h2>Augmenting Models</h2>
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
                            <form class="form-horizontal form-label-left" novalidate action="augm.php" method="post">
                                <div class="row">
                                    <div class="col-md-2 item form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary">Code</label>
                                        <div class="col-xs-12">
                                            <input id="code" class="form-control col-md-7 col-xs-12" type="text" placeholder="code.." name="code">
                                        </div>
                                    </div>
                                    <div class="col-md-2 item form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary">Group</label>
                                        <div class="col-xs-12">
                                            <input id="group"  class="form-control col-md-7 col-xs-12" placeholder="group.." type="text" name="group">
                                        </div>
                                    </div>
                                    <div class="col-md-6 item form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary">Description</label>
                                        <div class="col-xs-12">
                                            <input id="description" class="form-control col-md-7 col-xs-12" placeholder="Enter description..." type="text" name="description">
                                        </div>
                                    </div>
                                    <div class="col-md-2 item form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary"><br></label>
                                        <div class="col-xs-12">
                                            <button id="send" type="submit" name="save" class="form-control btn btn-success">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="ln_solid"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="x_title">
                                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search for delimeter...">
                                                <span class="input-group-btn">
                      <button class="btn btn-primary" type="button">Go</button>
                    </span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <!-- start project list -->
                                        <table class="table table-striped projects">
                                            <thead>
                                            <tr>
                                                <th style="width: 15%">Code</th>
                                                <th style="width: 5%">Group</th>
                                                <th style="width: 20%">Description</th>
                                                <th style="width: 20%">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $query = "SELECT * FROM `augmenting_models`";
                                            $result = $db->query($query);
                                            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                                                $augmId = $row['Id'];
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['Code'];?></td>
                                                    <td><?php echo $row['Grp'];?></td>
                                                    <td><?php echo $row['Description'];?></td>
                                                    <td>
                                                        <a href="editaugmodels.php?augmId=<?php echo $augmId; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Update</a>
                                                        <a href="delete.php?delete10Id=<?php echo $augmId; ?>&&action=parmdel" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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