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
                            <h2>Outcomes</h2>
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
                            <form class="form-horizontal form-label-left" novalidate action="outcm.php" method="post">
                                <div class="row">
                                <div class="col-md-6 item form-group"><br>
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary">Select Outcome Set</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control col-md-7 col-xs-12" id="outcomeset" name="outcomeset">
                                    <option value="Outcome Set 1">Outcome Set 1</option>
                                    <option value="Outcome Set 2">Outcome Set 2</option>
                                    <option value="Outcome Set 3">Outcome Set 3</option>
                                    <option value="Outcome Set 4">Outcome Set 4</option>
                                    <option value="Outcome Set 5">Outcome Set 5</option>
                                    <option value="Outcome Set 6">Outcome Set 6</option>
                                    <option value="Outcome Set 7">Outcome Set 7</option>
                                    <option value="Outcome Set 8">Outcome Set 8</option>
                                    <option value="Outcome Set 9">Outcome Set 9</option>
                                    <option value="Outcome Set 10">Outcome Set 10</option>
                                </select>
                            </div>
                          </div>
                                    <div class="col-md-3 item form-group">
                                        <label for="middle-name" class="control-label col-md-7 col-sm-7 col-xs-12 text-primary">Outcome Set Name</label>
                                        <div class="col-xs-12">
                                            <input id="name" class="form-control col-md-7 col-xs-12" type="text" placeholder=" name.." name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-3 item form-group">
                                        <label for="middle-name" class="control-label col-md-7 col-sm-7 col-xs-12 text-primary">Outcome Set Type</label>
                                        <div class="col-xs-12">
                                            <input id="outcomesettype"  class="form-control col-md-7 col-xs-12"  type="text" name="outcomesettype">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6 item form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary">Description</label>
                                        <div class="col-xs-12">
                                            <textarea id="description" class="form-control col-md-7 col-xs-12" placeholder="Enter description..." type="text" name="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-2 item form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary"><br><br></label>
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
                                                    <th style="width: 10%">Outcome Set</th>
                                                    <th style="width: 15%">Name</th>
                                                    <th style="width: 20%">Outcome Set Type</th>
                                                    <th style="width: 40%">Description</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $query = "SELECT * FROM `outcomes`";
                                                $result = $db->query($query);
                                                while($row = $result->fetch(PDO::FETCH_ASSOC)){
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <a><?php echo $row['outcomeset'];?></a>
                                                        </td>
                                                        <td>
                                                            <a><?php echo $row['name'];?></a>
                                                        </td>
                                                        <td>
                                                            <a><?php echo $row['outcomesettype'];?></a>
                                                        </td>
                                                        <td>
                                                            <a><?php echo $row['description'];?></a>
                                                        </td>
                                                        <td>
                                                            <a href="editoutcome.php?outcomeId=<?php echo $row['outcome_id'] ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                                            <a href="delete.php?deleteOutcomeId=<?php echo $row['outcome_id'] ?>&&action=parmdel" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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