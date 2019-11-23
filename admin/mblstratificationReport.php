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
                            <h2 class="text-success">Report (Middle Brain Limbic & Signal Stratification)</h2>
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

                            <form class="form-horizontal form-label-left" novalidate action="#" method="post">
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

                                <table class="table table-striped projects">
                                    <div class="form-group pull-right">
                                        <a href="#" target="_blank" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i>&nbsp;Print Report</a>                                    </div>
                                    <thead>
                                    <tr>
                                        <th style="width: 2%"></th>
                                        <th style="width: 10%">Domicile Description</th>
                                        <th style="width: 3%">Score</th>
                                        <th style="width: 10%">Expert Descriptor</th>
                                        <th style="width: 10%">Expert Prescription</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $query = "SELECT * FROM `mblstratification_domicile_setup` WHERE quantumCode='A'";
                                    $result = $db->query($query);
                                    $row = $result->fetch();
                                    ?>

                                    <tr>
                                        <td>
                                            <a><?php echo $row['quantumCode'];?></a>
                                        </td>
                                        <td>
                                            <a><a><?php echo $row['quantumDescription'];?></a>
                                        </td>
                                        <td>
                                            <?php
                                            $query = "SELECT * FROM `mblstratification_candidates` WHERE candidateID='$id'";
                                            $result = $db->query($query);
                                            $row = $result->fetch();
                                            ?>
                                            <a><?php echo $row['avgA'];?></a>
                                        </td>
                                        <td>
                                            <a><?php echo $row['quantumADescp'];?></a>
                                        </td>
                                        <td>
                                            <a><a><?php echo $row['quantumAPrec'];?></a></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <?php
                                        $query = "SELECT * FROM `mblstratification_domicile_setup` WHERE quantumCode='B'";
                                        $result = $db->query($query);
                                        $row = $result->fetch();
                                        ?>
                                        <td>
                                            <a><?php echo $row['quantumCode'];?></a>
                                        </td>
                                        <td>
                                            <a><a><?php echo $row['quantumDescription'];?></a>
                                        </td>
                                        <td>
                                            <?php
                                            $query = "SELECT * FROM `mblstratification_candidates` WHERE candidateID='$id'";
                                            $result = $db->query($query);
                                            $row = $result->fetch();
                                            ?>
                                            <a><?php echo $row['avgB'];?></a>
                                        </td>
                                        <td>
                                            <a><?php echo $row['quantumBDescp'];?></a>
                                        </td>
                                        <td>
                                            <a><a><?php echo $row['quantumBPrec'];?></a></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <?php
                                        $query = "SELECT * FROM `mblstratification_domicile_setup` WHERE quantumCode='C'";
                                        $result = $db->query($query);
                                        $row = $result->fetch();
                                        ?>
                                        <td>
                                            <a><?php echo $row['quantumCode'];?></a>
                                        </td>
                                        <td>
                                            <a><a><?php echo $row['quantumDescription'];?></a>
                                        </td>
                                        <td>
                                            <?php
                                            $query = "SELECT * FROM `mblstratification_candidates` WHERE candidateID='$id'";
                                            $result = $db->query($query);
                                            $row = $result->fetch();
                                            ?>
                                            <a><?php echo $row['avgC'];?></a>
                                        </td>
                                        <td>
                                            <a><?php echo $row['quantumCDescp'];?></a>
                                        </td>
                                        <td>
                                            <a><a><?php echo $row['quantumCPrec'];?></a></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <?php
                                        $query = "SELECT * FROM `mblstratification_domicile_setup` WHERE quantumCode='D'";
                                        $result = $db->query($query);
                                        $row = $result->fetch();
                                        ?>
                                        <td>
                                            <a><?php echo $row['quantumCode'];?></a>
                                        </td>
                                        <td>
                                            <a><a><?php echo $row['quantumDescription'];?></a>
                                        </td>
                                        <td>
                                            <?php
                                            $query = "SELECT * FROM `mblstratification_candidates` WHERE candidateID='$id'";
                                            $result = $db->query($query);
                                            $row = $result->fetch();
                                            ?>
                                            <a><?php echo $row['avgD'];?></a>
                                        </td>
                                        <td>
                                            <a><?php echo $row['quantumDDescp'];?></a>
                                        </td>
                                        <td>
                                            <a><a><?php echo $row['quantumDPrec'];?></a></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <?php
                                        $query = "SELECT * FROM `mblstratification_domicile_setup` WHERE quantumCode='E'";
                                        $result = $db->query($query);
                                        $row = $result->fetch();
                                        ?>
                                        <td>
                                            <a><?php echo $row['quantumCode'];?></a>
                                        </td>
                                        <td>
                                            <a><a><?php echo $row['quantumDescription'];?></a>
                                        </td>
                                        <td>
                                            <?php
                                            $query = "SELECT * FROM `mblstratification_candidates` WHERE candidateID='$id'";
                                            $result = $db->query($query);
                                            $row = $result->fetch();
                                            ?>
                                            <a><?php echo $row['avgE'];?></a>
                                        </td>
                                        <td>
                                            <a><?php echo $row['quantumEDescp'];?></a>
                                        </td>
                                        <td>
                                            <a><a><?php echo $row['quantumEPrec'];?></a></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <?php
                                        $query = "SELECT * FROM `mblstratification_domicile_setup` WHERE quantumCode='F'";
                                        $result = $db->query($query);
                                        $row = $result->fetch();
                                        ?>
                                        <td>
                                            <a><?php echo $row['quantumCode'];?></a>
                                        </td>
                                        <td>
                                            <a><a><?php echo $row['quantumDescription'];?></a>
                                        </td>
                                        <td>
                                            <?php
                                            $query = "SELECT * FROM `mblstratification_candidates` WHERE candidateID='$id'";
                                            $result = $db->query($query);
                                            $row = $result->fetch();
                                            ?>
                                            <a><?php echo $row['avgF'];?></a>
                                        </td>
                                        <td>
                                            <a><?php echo $row['quantumFDescp'];?></a>
                                        </td>
                                        <td>
                                            <a><a><?php echo $row['quantumFPrec'];?></a></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <?php
                                        $query = "SELECT * FROM `mblstratification_domicile_setup` WHERE quantumCode='G'";
                                        $result = $db->query($query);
                                        $row = $result->fetch();
                                        ?>
                                        <td>
                                            <a><?php echo $row['quantumCode'];?></a>
                                        </td>
                                        <td>
                                            <a><a><?php echo $row['quantumDescription'];?></a>
                                        </td>
                                        <td>
                                            <?php
                                            $query = "SELECT * FROM `mblstratification_candidates` WHERE candidateID='$id'";
                                            $result = $db->query($query);
                                            $row = $result->fetch();
                                            ?>
                                            <a><?php echo $row['avgG'];?></a>
                                        </td>
                                        <td>
                                            <a><?php echo $row['quantumGDescp'];?></a>
                                        </td>
                                        <td>
                                            <a><a><?php echo $row['quantumGPrec'];?></a></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <?php
                                        $query = "SELECT * FROM `mblstratification_domicile_setup` WHERE quantumCode='H'";
                                        $result = $db->query($query);
                                        $row = $result->fetch();
                                        ?>
                                        <td>
                                            <a><?php echo $row['quantumCode'];?></a>
                                        </td>
                                        <td>
                                            <a><a><?php echo $row['quantumDescription'];?></a>
                                        </td>
                                        <td>
                                            <?php
                                            $query = "SELECT * FROM `mblstratification_candidates` WHERE candidateID='$id'";
                                            $result = $db->query($query);
                                            $row = $result->fetch();
                                            ?>
                                            <a><?php echo $row['avgH'];?></a>
                                        </td>
                                        <td>
                                            <a><?php echo $row['quantumHDescp'];?></a>
                                        </td>
                                        <td>
                                            <a><a><?php echo $row['quantumHPrec'];?></a></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

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