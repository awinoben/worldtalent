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
                            <form class="form-horizontal form-label-left" novalidate action="rsnaptitudesd.php" method="post">
                                </p>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Natural Aptitude</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="quantumPoint" name="quantumPoint" onchange = "go()" id="quantumPoint">
                                            <option value="A">Natural Aptitude A</option>
                                            <option value="B">Natural Aptitude B</option>
                                            <option value="C">Natural Aptitude C</option>
                                            <option value="D">Natural Aptitude D</option>
                                            <option value="E">Natural Aptitude E</option>
                                            <option value="F">Natural Aptitude F</option>
                                            <option value="G">Natural Aptitude G</option>
                                            <option value="H">Natural Aptitude H</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="qpointA">
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Ai'";
                                        $result = $db->query($query);
                                        $row1 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Ai_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Ai_Descp" class="form-control col-md-7 col-xs-12" value="<?php echo $row1['Descriptor']; ?>" type="text" name="Ai_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Aii'";
                                        $result = $db->query($query);
                                        $row2 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Aii_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Aii_Descp" value="<?php echo $row2['Descriptor']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="Aii_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Aiii'";
                                        $result = $db->query($query);
                                        $row3 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Aiii_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Aiii_Descp" value="<?php echo $row3['Descriptor']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="Aiii_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Aiv'";
                                        $result = $db->query($query);
                                        $row3 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Aiv_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Aiv_Descp" value="<?php echo $row3['Descriptor']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="Aiv_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Ai'";
                                        $result = $db->query($query);
                                        $row4 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Ai_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Ai_Prec" value="<?php echo $row4['Prescriptor']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="Ai_Prec">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Aii'";
                                        $result = $db->query($query);
                                        $row5 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Aii_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Aii_Prec" value="<?php echo $row5['Prescriptor']; ?>"  class="form-control col-md-7 col-xs-12" type="text" name="Aii_Prec">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Aiii'";
                                        $result = $db->query($query);
                                        $row6 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Aiii_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Aiii_Prec" value="<?php echo $row6['Prescriptor']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="Aiii_Prec">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Aiv'";
                                        $result = $db->query($query);
                                        $row6 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Aiv_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Aiv_Prec" value="<?php echo $row6['Prescriptor']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="Aiv_Prec">
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="submit" class="btn btn-info">Edit</button>
                                            <button id="send" type="submit" class="btn btn-danger">Delete</button>
                                            <button type="submit" class="btn btn-primary">Preview</button>
                                            <button id="send" type="submit" name="qpointA" class="btn btn-success">Save</button>
                                            <button id="send" type="submit" class="btn btn-default">Exit</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="qpointB" hidden>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Bi'";
                                        $result = $db->query($query);
                                        $row7 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Bi_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Bi_Descp" value="<?php echo $row7['Descriptor']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="Bi_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Bii'";
                                        $result = $db->query($query);
                                        $row8 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Bii_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Bii_Descp" value="<?php echo $row8['Descriptor']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="Bii_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Biii'";
                                        $result = $db->query($query);
                                        $row9 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Biii_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Biii_Descp" value="<?php echo $row9['Descriptor']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="Biii_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Biv'";
                                        $result = $db->query($query);
                                        $row9 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Biv_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Biv_Descp" value="<?php echo $row9['Descriptor']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="Biv_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Bi'";
                                        $result = $db->query($query);
                                        $row10 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Bi_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Bi_Prec" value="<?php echo $row10['Prescriptor']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="Bi_Prec">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Bii'";
                                        $result = $db->query($query);
                                        $row11 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Bii_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Bii_Prec" value="<?php echo $row11['Prescriptor']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="Bii_Prec">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Biii'";
                                        $result = $db->query($query);
                                        $row12 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Biii_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Biii_Prec" value="<?php echo $row12['Prescriptor']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="Biii_Prec">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Biv'";
                                        $result = $db->query($query);
                                        $row12 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Biv_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Biv_Prec" value="<?php echo $row12['Prescriptor']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="Biv_Prec">
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="submit" class="btn btn-info">Edit</button>
                                            <button id="send" type="submit" class="btn btn-danger">Delete</button>
                                            <button type="submit" class="btn btn-primary">Preview</button>
                                            <button id="send" type="submit" name="qpointB" class="btn btn-success">Save</button>
                                            <button id="send" type="submit" class="btn btn-default">Exit</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="qpointC" hidden>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Ci'";
                                        $result = $db->query($query);
                                        $row13 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Ci_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Ci_Descp" value="<?php echo $row13['Descriptor']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="Ci_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Cii'";
                                        $result = $db->query($query);
                                        $row14 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Cii_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Cii_Descp" value="<?php echo $row14['Descriptor']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="Cii_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Ciii'";
                                        $result = $db->query($query);
                                        $row15 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Ciii_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Ciii_Descp" value="<?php echo $row15['Descriptor']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="Ciii_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Civ'";
                                        $result = $db->query($query);
                                        $row15 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Civ_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Civ_Descp" value="<?php echo $row15['Descriptor']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="Civ_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Ci'";
                                        $result = $db->query($query);
                                        $row16 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Ci_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Ci_Prec" value="<?php echo $row16['Prescriptor']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="Ci_Prec">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Cii'";
                                        $result = $db->query($query);
                                        $row17 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Cii_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Cii_Prec" value="<?php echo $row17['Prescriptor']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="Cii_Prec">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Ciii'";
                                        $result = $db->query($query);
                                        $row18 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Ciii_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Ciii_Prec" value="<?php echo $row18['Prescriptor']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="Ciii_Prec">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Civ'";
                                        $result = $db->query($query);
                                        $row18 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Civ_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Civ_Prec" value="<?php echo $row18['Prescriptor']; ?>" class="form-control col-md-7 col-xs-12" type="text" name="Civ_Prec">
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="submit" class="btn btn-info">Edit</button>
                                            <button id="send" type="submit" class="btn btn-danger">Delete</button>
                                            <button type="submit" class="btn btn-primary">Preview</button>
                                            <button id="send" type="submit" name="qpointC" class="btn btn-success">Save</button>
                                            <button id="send" type="submit" class="btn btn-default">Exit</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="qpointD" hidden>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Di'";
                                        $result = $db->query($query);
                                        $row19 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Di_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Di_Descp" value="<?php echo $row19['Descriptor'];?>" class="form-control col-md-7 col-xs-12" type="text" name="Di_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Dii'";
                                        $result = $db->query($query);
                                        $row20 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Dii_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Dii_Descp" value="<?php echo $row20['Descriptor'];?>"  class="form-control col-md-7 col-xs-12" type="text" name="Dii_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Diii'";
                                        $result = $db->query($query);
                                        $row21 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Diii_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Diii_Descp" value="<?php echo $row21['Descriptor'];?>" class="form-control col-md-7 col-xs-12" type="text" name="Diii_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Div'";
                                        $result = $db->query($query);
                                        $row21 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Div_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Div_Descp" value="<?php echo $row21['Descriptor'];?>" class="form-control col-md-7 col-xs-12" type="text" name="Div_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Di'";
                                        $result = $db->query($query);
                                        $row22 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Di_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Di_Prec" value="<?php echo $row22['Prescriptor'];?>" class="form-control col-md-7 col-xs-12" type="text" name="Di_Prec">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Dii'";
                                        $result = $db->query($query);
                                        $row23 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Dii_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Dii_Prec" value="<?php echo $row23['Prescriptor'];?>" class="form-control col-md-7 col-xs-12" type="text" name="Dii_Prec">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Diii'";
                                        $result = $db->query($query);
                                        $row24 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Diii_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Diii_Prec" value="<?php echo $row24['Prescriptor'];?>" class="form-control col-md-7 col-xs-12" type="text" name="Diii_Prec">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Div'";
                                        $result = $db->query($query);
                                        $row24 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Div_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Div_Prec" value="<?php echo $row24['Prescriptor'];?>" class="form-control col-md-7 col-xs-12" type="text" name="Div_Prec">
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="submit" class="btn btn-info">Edit</button>
                                            <button id="send" type="submit" class="btn btn-danger">Delete</button>
                                            <button type="submit" class="btn btn-primary">Preview</button>
                                            <button id="send" type="submit" name="qpointd" class="btn btn-success">Save</button>
                                            <button id="send" type="submit" class="btn btn-default">Exit</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="qpointE" hidden>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Ei'";
                                        $result = $db->query($query);
                                        $row25 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Ei_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Ei_Descp" value="<?php echo $row25['Descriptor']?>" class="form-control col-md-7 col-xs-12" type="text" name="Ei_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Eii'";
                                        $result = $db->query($query);
                                        $row26 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Eii_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Eii_Descp" value="<?php echo $row26['Descriptor']?>" class="form-control col-md-7 col-xs-12" type="text" name="Eii_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Eiii'";
                                        $result = $db->query($query);
                                        $row27 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Eiii_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Eiii_Descp" value="<?php echo $row27['Descriptor']?>" class="form-control col-md-7 col-xs-12" type="text" name="Eiii_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Eiv'";
                                        $result = $db->query($query);
                                        $row27 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Eiv_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Eiv_Descp" value="<?php echo $row27['Descriptor']?>" class="form-control col-md-7 col-xs-12" type="text" name="Eiv_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Ei'";
                                        $result = $db->query($query);
                                        $row28 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Ei_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Ei_Prec" value="<?php echo $row28['Prescriptor']?>" class="form-control col-md-7 col-xs-12" type="text" name="Ei_Prec">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Eii'";
                                        $result = $db->query($query);
                                        $row29 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Eii_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Eii_Prec" value="<?php echo $row29['Prescriptor']?>"  class="form-control col-md-7 col-xs-12" type="text" name="Eii_Prec">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Eiii'";
                                        $result = $db->query($query);
                                        $row30 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Eiii_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Eiii_Prec" value="<?php echo $row30['Prescriptor']?>" class="form-control col-md-7 col-xs-12" type="text" name="Eiii_Prec">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Eiv'";
                                        $result = $db->query($query);
                                        $row30 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Eiv_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Eiv_Prec" value="<?php echo $row30['Prescriptor']?>" class="form-control col-md-7 col-xs-12" type="text" name="Eiv_Prec">
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="submit" class="btn btn-info">Edit</button>
                                            <button id="send" type="submit" class="btn btn-danger">Delete</button>
                                            <button type="submit" class="btn btn-primary">Preview</button>
                                            <button id="send" type="submit" name="qpointE" class="btn btn-success">Save</button>
                                            <button id="send" type="submit" class="btn btn-default">Exit</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="qpointF" hidden>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Fi'";
                                        $result = $db->query($query);
                                        $row31 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Fi_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Fi_Descp" value="<?php echo $row31['Descriptor'];?>" class="form-control col-md-7 col-xs-12" type="text" name="Fi_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Fii'";
                                        $result = $db->query($query);
                                        $row32 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Fii_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Fii_Descp" value="<?php echo $row32['Descriptor'];?>" class="form-control col-md-7 col-xs-12" type="text" name="Fii_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Fiii'";
                                        $result = $db->query($query);
                                        $row33= $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Fiii_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Fiii_Descp" value="<?php echo $row33['Descriptor'];?>" class="form-control col-md-7 col-xs-12" type="text" name="Fiii_Descp">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Fiv'";
                                        $result = $db->query($query);
                                        $row33= $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Fiv_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Fiv_Descp" value="<?php echo $row33['Descriptor'];?>" class="form-control col-md-7 col-xs-12" type="text" name="Fiv_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Fi'";
                                        $result = $db->query($query);
                                        $row34 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Fi_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Fi_Prec" value="<?php echo $row34['Prescriptor'];?>" class="form-control col-md-7 col-xs-12" type="text" name="Fi_Prec">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Fii'";
                                        $result = $db->query($query);
                                        $row35 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Fii_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Fii_Prec" class="form-control col-md-7 col-xs-12" type="text" name="Fii_Prec">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Fiii'";
                                        $result = $db->query($query);
                                        $row36 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Fiii_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Fiii_Prec" value="<?php echo $row36['Prescriptor'];?>" class="form-control col-md-7 col-xs-12" type="text" name="Fiii_Prec">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Fiv'";
                                        $result = $db->query($query);
                                        $row36 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Fiv_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Fiv_Prec" value="<?php echo $row36['Prescriptor'];?>" class="form-control col-md-7 col-xs-12" type="text" name="Fiv_Prec">
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="submit" class="btn btn-info">Edit</button>
                                            <button id="send" type="submit" class="btn btn-danger">Delete</button>
                                            <button type="submit" class="btn btn-primary">Preview</button>
                                            <button id="send" type="submit" name="qpointF" class="btn btn-success">Save</button>
                                            <button id="send" type="submit" class="btn btn-default">Exit</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="qpointG" hidden>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Gi'";
                                        $result = $db->query($query);
                                        $row37 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Gi_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Gi_Descp" value="<?php echo $row37['Descriptor'] ?>" class="form-control col-md-7 col-xs-12" type="text" name="Gi_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Gii'";
                                        $result = $db->query($query);
                                        $row38 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Gii_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Gii_Descp" value="<?php echo $row38['Descriptor'] ?>" class="form-control col-md-7 col-xs-12" type="text" name="Gii_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Giii'";
                                        $result = $db->query($query);
                                        $row39 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Giii_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Giii_Descp" value="<?php echo $row39['Descriptor'] ?>" class="form-control col-md-7 col-xs-12" type="text" name="Giii_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Giv'";
                                        $result = $db->query($query);
                                        $row39 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Giv_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Giv_Descp" value="<?php echo $row39['Descriptor'] ?>" class="form-control col-md-7 col-xs-12" type="text" name="Giv_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Gi'";
                                        $result = $db->query($query);
                                        $row40 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Gi_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Gi_Prec" value="<?php echo $row40['Prescriptor'] ?>" class="form-control col-md-7 col-xs-12" type="text" name="Gi_Prec">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Gii'";
                                        $result = $db->query($query);
                                        $row41 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Gii_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Gii_Prec" value="<?php echo $row41['Prescriptor'] ?>" class="form-control col-md-7 col-xs-12" type="text" name="Gii_Prec">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Giii'";
                                        $result = $db->query($query);
                                        $row42 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Giii_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Giii_Prec" value="<?php echo $row42['Prescriptor'] ?>" class="form-control col-md-7 col-xs-12" type="text" name="Giii_Prec">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Giv'";
                                        $result = $db->query($query);
                                        $row42 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Giv_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Giv_Prec" value="<?php echo $row42['Prescriptor'] ?>" class="form-control col-md-7 col-xs-12" type="text" name="Giv_Prec">
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="submit" class="btn btn-info">Edit</button>
                                            <button id="send" type="submit" class="btn btn-danger">Delete</button>
                                            <button type="submit" class="btn btn-primary">Preview</button>
                                            <button id="send" type="submit" name="qpointG" class="btn btn-success">Save</button>
                                            <button id="send" type="submit" class="btn btn-default">Exit</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="qpointH" hidden>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Hi'";
                                        $result = $db->query($query);
                                        $row43 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Hi_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Hi_Descp" value="<?php echo $row43['Descriptor'];?>" class="form-control col-md-7 col-xs-12" type="text" name="Hi_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Hii'";
                                        $result = $db->query($query);
                                        $row44 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Hii_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Hii_Descp" value="<?php echo $row44['Descriptor'];?>" class="form-control col-md-7 col-xs-12" type="text" name="Hii_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Hiii'";
                                        $result = $db->query($query);
                                        $row45 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Hiii_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Hiii_Descp" value="<?php echo $row45['Descriptor'];?>" class="form-control col-md-7 col-xs-12" type="text" name="Hiii_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Descriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Hiv'";
                                        $result = $db->query($query);
                                        $row45 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Hiv_Descp</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Hiv_Descp" value="<?php echo $row45['Descriptor'];?>" class="form-control col-md-7 col-xs-12" type="text" name="Hiv_Descp">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Hi'";
                                        $result = $db->query($query);
                                        $row46 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Hi_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Hi_Prec" value="<?php echo $row46['Prescriptor'];?>" class="form-control col-md-7 col-xs-12" type="text" name="Hi_Prec">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Hii'";
                                        $result = $db->query($query);
                                        $row47 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Hii_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Hii_Prec" value="<?php echo $row47['Prescriptor'];?>" class="form-control col-md-7 col-xs-12" type="text" name="Hii_Prec">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Hiii'";
                                        $result = $db->query($query);
                                        $row48 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Hiii_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Hiii_Prec" value="<?php echo $row48['Prescriptor'];?>" class="form-control col-md-7 col-xs-12" type="text" name="Hiii_Prec">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <?php
                                        $query = "SELECT Prescriptor FROM `rsnaptitudes_descp_prec` WHERE quantumDomicile='Hiv'";
                                        $result = $db->query($query);
                                        $row48 = $result->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Enter Natural Aptitude Domicile Hiv_Prec</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="Hiv_Prec" value="<?php echo $row48['Prescriptor'];?>" class="form-control col-md-7 col-xs-12" type="text" name="Hiv_Prec">
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="submit" class="btn btn-info">Edit</button>
                                            <button id="send" type="submit" class="btn btn-danger">Delete</button>
                                            <button type="submit" class="btn btn-primary">Preview</button>
                                            <button id="send" type="submit" name="qpointH" class="btn btn-success">Save</button>
                                            <button id="send" type="submit" class="btn btn-default">Exit</button>
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
<script type="text/javascript">
    function go()
    {
        var Count = document.getElementById("quantumPoint").options[document.getElementById("quantumPoint").selectedIndex].value;
        if(Count=="A")
        {
            document.getElementById("qpointA").style.display = 'inline';
            document.getElementById("qpointB").style.display = 'none';
            document.getElementById("qpointC").style.display = 'none';
            document.getElementById("qpointD").style.display = 'none';
            document.getElementById("qpointE").style.display = 'none';
            document.getElementById("qpointF").style.display = 'none';
            document.getElementById("qpointG").style.display = 'none';
            document.getElementById("qpointH").style.display = 'none';
        }
        if(Count=="B")
        {
            document.getElementById("qpointA").style.display = 'none';
            document.getElementById("qpointB").style.display = 'inline';
            document.getElementById("qpointC").style.display = 'none';
            document.getElementById("qpointD").style.display = 'none';
            document.getElementById("qpointE").style.display = 'none';
            document.getElementById("qpointF").style.display = 'none';
            document.getElementById("qpointG").style.display = 'none';
            document.getElementById("qpointH").style.display = 'none';
        }
        if(Count=="C")
        {
            document.getElementById("qpointA").style.display = 'none';
            document.getElementById("qpointB").style.display = 'none';
            document.getElementById("qpointC").style.display = 'inline';
            document.getElementById("qpointD").style.display = 'none';
            document.getElementById("qpointE").style.display = 'none';
            document.getElementById("qpointF").style.display = 'none';
            document.getElementById("qpointG").style.display = 'none';
            document.getElementById("qpointH").style.display = 'none';
        }
        if(Count=="D")
        {
            document.getElementById("qpointA").style.display = 'none';
            document.getElementById("qpointB").style.display = 'none';
            document.getElementById("qpointC").style.display = 'none';
            document.getElementById("qpointD").style.display = 'inline';
            document.getElementById("qpointE").style.display = 'none';
            document.getElementById("qpointF").style.display = 'none';
            document.getElementById("qpointG").style.display = 'none';
            document.getElementById("qpointH").style.display = 'none';
        }
        if(Count=="E")
        {
            document.getElementById("qpointA").style.display = 'none';
            document.getElementById("qpointB").style.display = 'none';
            document.getElementById("qpointC").style.display = 'none';
            document.getElementById("qpointD").style.display = 'none';
            document.getElementById("qpointE").style.display = 'inline';
            document.getElementById("qpointF").style.display = 'none';
            document.getElementById("qpointG").style.display = 'none';
            document.getElementById("qpointH").style.display = 'none';
        }
        if(Count=="F")
        {
            document.getElementById("qpointA").style.display = 'none';
            document.getElementById("qpointB").style.display = 'none';
            document.getElementById("qpointC").style.display = 'none';
            document.getElementById("qpointD").style.display = 'none';
            document.getElementById("qpointE").style.display = 'none';
            document.getElementById("qpointF").style.display = 'inline';
            document.getElementById("qpointG").style.display = 'none';
            document.getElementById("qpointH").style.display = 'none';
        }
        if(Count=="G")
        {
            document.getElementById("qpointA").style.display = 'none';
            document.getElementById("qpointB").style.display = 'none';
            document.getElementById("qpointC").style.display = 'none';
            document.getElementById("qpointD").style.display = 'none';
            document.getElementById("qpointE").style.display = 'none';
            document.getElementById("qpointF").style.display = 'none';
            document.getElementById("qpointG").style.display = 'inline';
            document.getElementById("qpointH").style.display = 'none';
        }
        if(Count=="H")
        {
            document.getElementById("qpointA").style.display = 'none';
            document.getElementById("qpointB").style.display = 'none';
            document.getElementById("qpointC").style.display = 'none';
            document.getElementById("qpointD").style.display = 'none';
            document.getElementById("qpointE").style.display = 'none';
            document.getElementById("qpointF").style.display = 'none';
            document.getElementById("qpointG").style.display = 'none';
            document.getElementById("qpointH").style.display = 'inline';
        }
    }
</script>
</body>
</html>