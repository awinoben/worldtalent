<?php
include('../connect/dbconn.php');
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
    <link rel="icon" href="images/wtlogo.png" type="image/ico"/>

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
                            <h2 class="text-success">Assigning Expert Statements</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false"><i class="fa fa-wrench"></i></a>
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

                            <form class="form-horizontal form-label-left" novalidate action="statementa.php"
                                  method="post">
                                <table class="table table-striped projects">
                                    <thead>
                                    <tr>
                                        <th style="width: 2%"></th>
                                        <th style="width: 15%">Candidate Name</th>
                                        <th style="width: 5%">Gender</th>
                                        <th style="width: 5%">Age</th>
                                        <th style="width: 10%">Country</th>
                                        <th style="width: 10%">Location</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $id = "";
                                    if (isset($_GET['candidateID'])) {
                                        $id = $_GET['candidateID'];
                                    } else {
                                        echo "No ID FOUND!!";
                                    }
                                    $feedbackQuery = "SELECT * FROM `candidates` WHERE `candidateID`='$id'";
                                    $feedbackResult = $db->query($feedbackQuery);
                                    if ($feedbackResult->rowCount() == 1) {
                                        $fname = "";
                                        $mname = "";
                                        $lname = "";
                                        $gender = "";

                                        while ($row = $feedbackResult->fetch()) {
                                            $fname = $row['firstName'];
                                            $mname = $row['middleName'];
                                            $mname = $row['lastName'];
                                            $gender = $row['gender'];
                                            $country = $row['country'];
                                            $region = $row['region'];
                                            $age = $row['age'];
                                            ?>

                                            <tr>
                                                <td><i class="fa fa-user"></i></td>
                                                <td>
                                                    <a><?php echo $row['firstName'] . " " . $row['middleName'] . " " . $row['lastName']; ?></a>
                                                </td>
                                                <td>
                                                    <a><?php echo $gender; ?></a>
                                                </td>
                                                <td>
                                                    <a><?php echo $age; ?></a>
                                                </td>
                                                <td>
                                                    <a><?php echo $country; ?></a>
                                                </td>
                                                <td>
                                                    <a><?php echo $region; ?></a>
                                                </td>
                                            </tr>

                                            <?php
                                        }
                                    } else {
                                        echo "No data found!!";
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                <div class="item form-group" hidden>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Expert
                                        ID
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="last-name" name="expert" readonly
                                               value="<?php echo $_SESSION['firstName']." ".$_SESSION['middleName']." ".$_SESSION['lastName'];?>" required="required"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="item form-group" hidden>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Candidate
                                        ID
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="last-name" name="candidateID" readonly
                                               value="<?php echo $id; ?>" required="required"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">General
                                        Observations</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" id="observation" name="observation[]" multiple="multiple">
                                            <option value="">Select Observation...</option>
                                            <?php
                                            $query = "SELECT * FROM `general_observation`";
                                            $result = $db->query($query);
                                            for ($i = 0; $row = $result->fetch(); $i++) {
                                                ?>
                                                <option><?php echo $row['Description']; ?></option>
                                                <?php
                                            }
                                            ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Personality Rubrics</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" id="rubric" name="rubric[]" multiple="multiple">
                                        <option value="">Select Personality Rubric...</option>
                                        <?php
                                        $query = "SELECT * FROM `personality_rubric`";
                                        $result = $db->query($query);
                                        for ($i = 0; $row = $result->fetch(); $i++) {
                                            ?>
                                            <option><?php echo $row['Description']; ?></option>
                                            <?php
                                        }
                                        ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Learning Styles</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" id="style" name="style[]" multiple="multiple">
                                            <option value="">Select Learning Style...</option>
                                            <?php
                                            $query = "SELECT * FROM `learning_styles`";
                                            $result = $db->query($query);
                                            for ($i = 0; $row = $result->fetch(); $i++) {
                                                ?>
                                                <option><?php echo $row['Description']; ?></option>
                                                <?php
                                            }
                                            ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Talent Domains</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" id="domain" name="domain[]" multiple="multiple">
                                            <option value="">Select Talent Domain...</option>
                                            <?php
                                            $query = "SELECT * FROM `talent_domains`";
                                            $result = $db->query($query);
                                            for ($i = 0; $row = $result->fetch(); $i++) {
                                                ?>
                                                <option><?php echo $row['Description']; ?></option>
                                                <?php
                                            }
                                            ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-3 col-md-offset-4">
                                        <button id="send" type="submit" class="btn btn-success">Save</button>
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