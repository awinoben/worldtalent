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
				  <h2>Summary Setup</h2>
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
                    <form class="form-horizontal form-label-left" action="sum.php" method="post" novalidate>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-md-6 col-sm-6 col-xs-12">Select Module</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control col-md-7 col-xs-12" id="module" name="module" onchange = "go()">
                                    <option value="A">Pregnancy Screens</option>
                                    <option value="B">Birth Scales</option>
                                    <option value="C">Labour Rubrics</option>
                                    <option value="D">Infant Milestone(0-2 years)</option>
                                    <option value="E">Early Talent Rigows (3-6 years)</option>
                                    <option value="F">Early Depository Talent (6+ years)</option>
                                    <option value="G">BPT Evaluation</option>
                                    <option value="H">Rigow Scales-Generic Personality Scales</option>
                                    <option value="I">Rigow Scales-Natural Aptitudes</option>
                                    <option value="J">Rigow Scales-Learning and Product Styles</option>
                                    <option value="K">Natural Depositions and Endowments</option>
                                    <option value="L">Quantum Points</option>
                                    <option value="M">Head and Brain Diametrics</option>
                                    <option value="N">Left Brain Limbic and Signal Stratification</option>
                                    <option value="O">Middle Brain Limbic and Signal Stratification</option>
                                    <option value="P">Right Brain Limbic and Signal Stratification</option>
                                    <option value="Q">Anthropometric Stratification</option>

                                </select>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div id="moduleA">
                            <h2 class="text-danger center">Pregnancy Screens</h2>
                            <?php
                            $query = "SELECT * FROM `summary_typea`";
                            $result = $db->query($query);
                            $row = $result->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 1 (x=100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType1a" name="summaryType1a" class="form-control col-md-7 col-xs-12"><?php echo $row['firstType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 2 (x>100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType2a" name="summaryType2a" class="form-control col-md-7 col-xs-12"><?php echo $row['secondType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 3 (10<=x>=50%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType3a" name="summaryType3a" class="form-control col-md-7 col-xs-12"><?php echo $row['thirdType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 4 (x<10%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType4a" name="summaryType4a" class="form-control col-md-7 col-xs-12"><?php echo $row['fourthType']; ?></textarea>
                                    </div>
                                </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-8">
                                    <button id="send" type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                        <div id="moduleB" hidden>
                            <h2 class="text-danger center">Birth Scales</h2>
                            <?php
                            $query = "SELECT * FROM `summary_typeb`";
                            $result = $db->query($query);
                            $row = $result->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 1 (x=100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType1b" name="summaryType1b" class="form-control col-md-7 col-xs-12"><?php echo $row['firstType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 2 (x>100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType2b" name="summaryType2b" class="form-control col-md-7 col-xs-12"><?php echo $row['secondType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 3 (10<=x>=50%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType3b" name="summaryType3b" class="form-control col-md-7 col-xs-12"><?php echo $row['thirdType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 4 (x<10%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType4b" name="summaryType4b" class="form-control col-md-7 col-xs-12"><?php echo $row['fourthType']; ?></textarea>
                                    </div>
                                </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-8">
                                    <button id="send" type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                        <div id="moduleC" hidden>
                            <h2 class="text-danger center">Labour Rubrics</h2>
                            <?php
                            $query = "SELECT * FROM `summary_typec`";
                            $result = $db->query($query);
                            $row = $result->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 1 (x=100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType1c" name="summaryType1c" class="form-control col-md-7 col-xs-12"><?php echo $row['firstType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 2 (x>100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType2c" name="summaryType2c" class="form-control col-md-7 col-xs-12"><?php echo $row['secondType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 3 (10<=x>=50%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType3c" name="summaryType3c" class="form-control col-md-7 col-xs-12"><?php echo $row['thirdType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 4 (x<10%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType4c" name="summaryType4c" class="form-control col-md-7 col-xs-12"><?php echo $row['fourthType']; ?></textarea>
                                    </div>
                                </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-8">
                                    <button id="send" type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                        <div id="moduleD" hidden>
                            <h2 class="text-danger center">Infant Milestone (0-2 years)</h2>
                            <?php
                            $query = "SELECT * FROM `summary_typed`";
                            $result = $db->query($query);
                            $row = $result->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 1 (x=100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType1d" name="summaryType1d" class="form-control col-md-7 col-xs-12"><?php echo $row['firstType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 2 (x>100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType2d" name="summaryType2d" class="form-control col-md-7 col-xs-12"><?php echo $row['secondType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 3 (10<=x>=50%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType3d" name="summaryType3d" class="form-control col-md-7 col-xs-12"><?php echo $row['thirdType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 4 (x<10%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType4d" name="summaryType4d" class="form-control col-md-7 col-xs-12"><?php echo $row['fourthType']; ?></textarea>
                                    </div>
                                </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-8">
                                    <button id="send" type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                        <div id="moduleE" hidden>
                            <h2 class="text-danger center">Early Talent Rigows (3-6 years)</h2>
                            <?php
                            $query = "SELECT * FROM `summary_typee`";
                            $result = $db->query($query);
                            $row = $result->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 1 (x=100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType1e" name="summaryType1e" class="form-control col-md-7 col-xs-12"><?php echo $row['firstType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 2 (x>100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType2e" name="summaryType2e" class="form-control col-md-7 col-xs-12"><?php echo $row['secondType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 3 (10<=x>=50%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType3e" name="summaryType3e" class="form-control col-md-7 col-xs-12"><?php echo $row['thirdType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 4 (x<10%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType4e" name="summaryType4e" class="form-control col-md-7 col-xs-12"><?php echo $row['fourthType']; ?></textarea>
                                    </div>
                                </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-8">
                                    <button id="send" type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                        <div id="moduleF" hidden>
                            <h2 class="text-danger center">Early Depository Talent (6+ years)</h2>
                            <?php
                            $query = "SELECT * FROM `summary_typef`";
                            $result = $db->query($query);
                            $row = $result->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 1 (x=100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType1f" name="summaryType1f" class="form-control col-md-7 col-xs-12"><?php echo $row['firstType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 2 (x>100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType2f" name="summaryType2f" class="form-control col-md-7 col-xs-12"><?php echo $row['secondType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 3 (10<=x>=50%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType3f" name="summaryType3f" class="form-control col-md-7 col-xs-12"><?php echo $row['thirdType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 4 (x<10%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType4f" name="summaryType4f" class="form-control col-md-7 col-xs-12"><?php echo $row['fourthType']; ?></textarea>
                                    </div>
                                </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-8">
                                    <button id="send" type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                        <div id="moduleG" hidden>
                            <h2 class="text-danger center">BPT Evaluation</h2>
                            <?php
                            $query = "SELECT * FROM `summary_typeg`";
                            $result = $db->query($query);
                            $row = $result->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 1 (x=100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType1g" name="summaryType1g" class="form-control col-md-7 col-xs-12"><?php echo $row['firstType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 2 (x>100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType2g" name="summaryType2g" class="form-control col-md-7 col-xs-12"><?php echo $row['secondType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 3 (10<=x>=50%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType3g" name="summaryType3g" class="form-control col-md-7 col-xs-12"><?php echo $row['thirdType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 4 (x<10%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType4g" name="summaryType4g" class="form-control col-md-7 col-xs-12"><?php echo $row['fourthType']; ?></textarea>
                                    </div>
                                </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-8">
                                    <button id="send" type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                        <div id="moduleH" hidden>
                            <h2 class="text-danger center">Rigow Scales-Generic Personality Scales</h2>
                            <?php
                            $query = "SELECT * FROM `summary_typeh`";
                            $result = $db->query($query);
                            $row = $result->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 1 (x=100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType1h" name="summaryType1h" class="form-control col-md-7 col-xs-12"><?php echo $row['firstType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 2 (x>100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType2h" name="summaryType2h" class="form-control col-md-7 col-xs-12"><?php echo $row['secondType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 3 (10<=x>=50%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType3h" name="summaryType3h" class="form-control col-md-7 col-xs-12"><?php echo $row['thirdType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 4 (x<10%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType4h" name="summaryType4h" class="form-control col-md-7 col-xs-12"><?php echo $row['fourthType']; ?></textarea>
                                    </div>
                                </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-8">
                                    <button id="send" type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                        <div id="moduleI" hidden>
                            <h2 class="text-danger center">Rigow Scales-Natural Aptitudes</h2>
                            <?php
                            $query = "SELECT * FROM `summary_typei`";
                            $result = $db->query($query);
                            $row = $result->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 1 (x=100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType1i" name="summaryType1i" class="form-control col-md-7 col-xs-12"><?php echo $row['firstType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 2 (x>100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType2i" name="summaryType2i" class="form-control col-md-7 col-xs-12"><?php echo $row['secondType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 3 (10<=x>=50%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType3i" name="summaryType3i" class="form-control col-md-7 col-xs-12"><?php echo $row['thirdType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 4 (x<10%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType4i" name="summaryType4i" class="form-control col-md-7 col-xs-12"><?php echo $row['fourthType']; ?></textarea>
                                    </div>
                                </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-8">
                                    <button id="send" type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                        <div id="moduleJ" hidden>
                            <h2 class="text-danger center">Rigow Scales-Learning and Product Styles</h2>
                            <?php
                            $query = "SELECT * FROM `summary_typej`";
                            $result = $db->query($query);
                            $row = $result->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 1 (x=100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType1j" name="summaryType1j" class="form-control col-md-7 col-xs-12"><?php echo $row['firstType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 2 (x>100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType2j" name="summaryType2j" class="form-control col-md-7 col-xs-12"><?php echo $row['secondType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 3 (10<=x>=50%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType3j" name="summaryType3j" class="form-control col-md-7 col-xs-12"><?php echo $row['thirdType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 4 (x<10%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType4j" name="summaryType4j" class="form-control col-md-7 col-xs-12"><?php echo $row['fourthType']; ?></textarea>
                                    </div>
                                </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-8">
                                    <button id="send" type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                        <div id="moduleK" hidden>
                            <h2 class="text-danger center">Natural Depositions and Endowments</h2>
                            <?php
                            $query = "SELECT * FROM `summary_typek`";
                            $result = $db->query($query);
                            $row = $result->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 1 (x=100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType1k" name="summaryType1k" class="form-control col-md-7 col-xs-12"><?php echo $row['firstType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 2 (x>100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType2k" name="summaryType2k" class="form-control col-md-7 col-xs-12"><?php echo $row['secondType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 3 (10<=x>=50%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType3k" name="summaryType3k" class="form-control col-md-7 col-xs-12"><?php echo $row['thirdType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 4 (x<10%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType4k" name="summaryType4k" class="form-control col-md-7 col-xs-12"><?php echo $row['fourthType']; ?></textarea>
                                    </div>
                                </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-8">
                                    <button id="send" type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                        <div id="moduleL" hidden>
                            <h2 class="text-danger center">Quantum Points</h2>
                            <?php
                            $query = "SELECT * FROM `summary_typel`";
                            $result = $db->query($query);
                            $row = $result->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 1 (x=100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType1l" name="summaryType1l" class="form-control col-md-7 col-xs-12"><?php echo $row['firstType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 2 (x>100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType2l" name="summaryType2l" class="form-control col-md-7 col-xs-12"><?php echo $row['secondType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 3 (10<=x>=50%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType3l" name="summaryType3l" class="form-control col-md-7 col-xs-12"><?php echo $row['thirdType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 4 (x<10%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType4l" name="summaryType4l" class="form-control col-md-7 col-xs-12"><?php echo $row['fourthType']; ?></textarea>
                                    </div>
                                </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-8">
                                    <button id="send" type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                        <div id="moduleM" hidden>
                            <h2 class="text-danger center">Head and Brain Diametrics</h2>
                            <?php
                            $query = "SELECT * FROM `summary_typem`";
                            $result = $db->query($query);
                            $row = $result->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 1 (x=100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType1m" name="summaryType1m" class="form-control col-md-7 col-xs-12"><?php echo $row['firstType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 2 (x>100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType2m" name="summaryType2m" class="form-control col-md-7 col-xs-12"><?php echo $row['secondType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 3 (10<=x>=50%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType3m" name="summaryType3m" class="form-control col-md-7 col-xs-12"><?php echo $row['thirdType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 4 (x<10%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType4m" name="summaryType4m" class="form-control col-md-7 col-xs-12"><?php echo $row['fourthType']; ?></textarea>
                                    </div>
                                </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-8">
                                    <button id="send" type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                        <div id="moduleN" hidden>
                            <h2 class="text-danger center">Left Brain Limbic and Signal Stratification</h2>
                            <?php
                            $query = "SELECT * FROM `summary_typen`";
                            $result = $db->query($query);
                            $row = $result->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 1 (x=100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType1n" name="summaryType1n" class="form-control col-md-7 col-xs-12"><?php echo $row['firstType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 2 (x>100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType2n" name="summaryType2n" class="form-control col-md-7 col-xs-12"><?php echo $row['secondType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 3 (10<=x>=50%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType3n" name="summaryType3n" class="form-control col-md-7 col-xs-12"><?php echo $row['thirdType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 4 (x<10%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType4n" name="summaryType4n" class="form-control col-md-7 col-xs-12"><?php echo $row['fourthType']; ?></textarea>
                                    </div>
                                </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-8">
                                    <button id="send" type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                        <div id="moduleO" hidden>
                            <h2 class="text-danger center">Middle Brain Limbic and Signal Stratification</h2>
                            <?php
                            $query = "SELECT * FROM `summary_typeo`";
                            $result = $db->query($query);
                            $row = $result->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 1 (x=100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType1o" name="summaryType1o" class="form-control col-md-7 col-xs-12"><?php echo $row['firstType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 2 (x>100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType2o" name="summaryType2o" class="form-control col-md-7 col-xs-12"><?php echo $row['secondType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 3 (10<=x>=50%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType3o" name="summaryType3o" class="form-control col-md-7 col-xs-12"><?php echo $row['thirdType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 4 (x<10%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType4o" name="summaryType4o" class="form-control col-md-7 col-xs-12"><?php echo $row['fourthType']; ?></textarea>
                                    </div>
                                </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-8">
                                    <button id="send" type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                        <div id="moduleP" hidden>
                            <h2 class="text-danger center">Right Brain Limbic and Signal Stratification</h2>
                            <?php
                            $query = "SELECT * FROM `summary_typep`";
                            $result = $db->query($query);
                            $row = $result->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 1 (x=100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType1p" name="summaryType1p" class="form-control col-md-7 col-xs-12"><?php echo $row['firstType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 2 (x>100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType2p" name="summaryType2p" class="form-control col-md-7 col-xs-12"><?php echo $row['secondType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 3 (10<=x>=50%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType3p" name="summaryType3p" class="form-control col-md-7 col-xs-12"><?php echo $row['thirdType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 4 (x<10%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType4p" name="summaryType4p" class="form-control col-md-7 col-xs-12"><?php echo $row['fourthType']; ?></textarea>
                                    </div>
                                </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-8">
                                    <button id="send" type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                        <div id="moduleQ" hidden>
                            <h2 class="text-danger center">Anthropometric Stratification</h2>
                            <?php
                            $query = "SELECT * FROM `summary_typeq`";
                            $result = $db->query($query);
                            $row = $result->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 1 (x=100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType1q" name="summaryType1q" class="form-control col-md-7 col-xs-12"><?php echo $row['firstType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 2 (x>100%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType2q" name="summaryType2q" class="form-control col-md-7 col-xs-12"><?php echo $row['secondType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 3 (10<=x>=50%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType3q" name="summaryType3q" class="form-control col-md-7 col-xs-12"><?php echo $row['thirdType']; ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-6 col-sm-6 col-xs-12">Enter Summary Type 4 (x<10%)</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" id="summaryType4q" name="summaryType4q" class="form-control col-md-7 col-xs-12"><?php echo $row['fourthType']; ?></textarea>
                                    </div>
                                </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-8">
                                    <button id="send" type="submit" class="btn btn-success">Save</button>
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
            var Count = document.getElementById("module").options[document.getElementById("module").selectedIndex].value;
            if(Count=="A")
            {
                document.getElementById("moduleA").style.display = 'inline';
                document.getElementById("moduleB").style.display = 'none';
                document.getElementById("moduleC").style.display = 'none';
                document.getElementById("moduleD").style.display = 'none';
                document.getElementById("moduleE").style.display = 'none';
                document.getElementById("moduleF").style.display = 'none';
                document.getElementById("moduleG").style.display = 'none';
                document.getElementById("moduleH").style.display = 'none';
                document.getElementById("moduleI").style.display = 'none';
                document.getElementById("moduleJ").style.display = 'none';
                document.getElementById("moduleK").style.display = 'none';
                document.getElementById("moduleL").style.display = 'none';
                document.getElementById("moduleM").style.display = 'none';
                document.getElementById("moduleN").style.display = 'none';
                document.getElementById("moduleO").style.display = 'none';
                document.getElementById("moduleP").style.display = 'none';
                document.getElementById("moduleQ").style.display = 'none';
            }
            if(Count=="B")
            {
                document.getElementById("moduleA").style.display = 'none';
                document.getElementById("moduleB").style.display = 'inline';
                document.getElementById("moduleC").style.display = 'none';
                document.getElementById("moduleD").style.display = 'none';
                document.getElementById("moduleE").style.display = 'none';
                document.getElementById("moduleF").style.display = 'none';
                document.getElementById("moduleG").style.display = 'none';
                document.getElementById("moduleH").style.display = 'none';
                document.getElementById("moduleI").style.display = 'none';
                document.getElementById("moduleJ").style.display = 'none';
                document.getElementById("moduleK").style.display = 'none';
                document.getElementById("moduleL").style.display = 'none';
                document.getElementById("moduleM").style.display = 'none';
                document.getElementById("moduleN").style.display = 'none';
                document.getElementById("moduleO").style.display = 'none';
                document.getElementById("moduleP").style.display = 'none';
                document.getElementById("moduleQ").style.display = 'none';
            }
            if(Count=="C")
            {
                document.getElementById("moduleA").style.display = 'none';
                document.getElementById("moduleB").style.display = 'none';
                document.getElementById("moduleC").style.display = 'inline';
                document.getElementById("moduleD").style.display = 'none';
                document.getElementById("moduleE").style.display = 'none';
                document.getElementById("moduleF").style.display = 'none';
                document.getElementById("moduleG").style.display = 'none';
                document.getElementById("moduleH").style.display = 'none';
                document.getElementById("moduleI").style.display = 'none';
                document.getElementById("moduleJ").style.display = 'none';
                document.getElementById("moduleK").style.display = 'none';
                document.getElementById("moduleL").style.display = 'none';
                document.getElementById("moduleM").style.display = 'none';
                document.getElementById("moduleN").style.display = 'none';
                document.getElementById("moduleO").style.display = 'none';
                document.getElementById("moduleP").style.display = 'none';
                document.getElementById("moduleQ").style.display = 'none';
            }
            if(Count=="D")
            {
                document.getElementById("moduleA").style.display = 'none';
                document.getElementById("moduleB").style.display = 'none';
                document.getElementById("moduleC").style.display = 'none';
                document.getElementById("moduleD").style.display = 'inline';
                document.getElementById("moduleE").style.display = 'none';
                document.getElementById("moduleF").style.display = 'none';
                document.getElementById("moduleG").style.display = 'none';
                document.getElementById("moduleH").style.display = 'none';
                document.getElementById("moduleI").style.display = 'none';
                document.getElementById("moduleJ").style.display = 'none';
                document.getElementById("moduleK").style.display = 'none';
                document.getElementById("moduleL").style.display = 'none';
                document.getElementById("moduleM").style.display = 'none';
                document.getElementById("moduleN").style.display = 'none';
                document.getElementById("moduleO").style.display = 'none';
                document.getElementById("moduleP").style.display = 'none';
                document.getElementById("moduleQ").style.display = 'none';
            }
            if(Count=="E")
            {
                document.getElementById("moduleA").style.display = 'none';
                document.getElementById("moduleB").style.display = 'none';
                document.getElementById("moduleC").style.display = 'none';
                document.getElementById("moduleD").style.display = 'none';
                document.getElementById("moduleE").style.display = 'inline';
                document.getElementById("moduleF").style.display = 'none';
                document.getElementById("moduleG").style.display = 'none';
                document.getElementById("moduleH").style.display = 'none';
                document.getElementById("moduleI").style.display = 'none';
                document.getElementById("moduleJ").style.display = 'none';
                document.getElementById("moduleK").style.display = 'none';
                document.getElementById("moduleL").style.display = 'none';
                document.getElementById("moduleM").style.display = 'none';
                document.getElementById("moduleN").style.display = 'none';
                document.getElementById("moduleO").style.display = 'none';
                document.getElementById("moduleP").style.display = 'none';
                document.getElementById("moduleQ").style.display = 'none';
            }
            if(Count=="F")
            {
                document.getElementById("moduleA").style.display = 'none';
                document.getElementById("moduleB").style.display = 'none';
                document.getElementById("moduleC").style.display = 'none';
                document.getElementById("moduleD").style.display = 'none';
                document.getElementById("moduleE").style.display = 'none';
                document.getElementById("moduleF").style.display = 'inline';
                document.getElementById("moduleG").style.display = 'none';
                document.getElementById("moduleH").style.display = 'none';
                document.getElementById("moduleI").style.display = 'none';
                document.getElementById("moduleJ").style.display = 'none';
                document.getElementById("moduleK").style.display = 'none';
                document.getElementById("moduleL").style.display = 'none';
                document.getElementById("moduleM").style.display = 'none';
                document.getElementById("moduleN").style.display = 'none';
                document.getElementById("moduleO").style.display = 'none';
                document.getElementById("moduleP").style.display = 'none';
                document.getElementById("moduleQ").style.display = 'none';
            }
            if(Count=="G")
            {
                document.getElementById("moduleA").style.display = 'none';
                document.getElementById("moduleB").style.display = 'none';
                document.getElementById("moduleC").style.display = 'none';
                document.getElementById("moduleD").style.display = 'none';
                document.getElementById("moduleE").style.display = 'none';
                document.getElementById("moduleF").style.display = 'none';
                document.getElementById("moduleG").style.display = 'inline';
                document.getElementById("moduleH").style.display = 'none';
                document.getElementById("moduleI").style.display = 'none';
                document.getElementById("moduleJ").style.display = 'none';
                document.getElementById("moduleK").style.display = 'none';
                document.getElementById("moduleL").style.display = 'none';
                document.getElementById("moduleM").style.display = 'none';
                document.getElementById("moduleN").style.display = 'none';
                document.getElementById("moduleO").style.display = 'none';
                document.getElementById("moduleP").style.display = 'none';
                document.getElementById("moduleQ").style.display = 'none';
            }
            if(Count=="H")
            {
                document.getElementById("moduleA").style.display = 'none';
                document.getElementById("moduleB").style.display = 'none';
                document.getElementById("moduleC").style.display = 'none';
                document.getElementById("moduleD").style.display = 'none';
                document.getElementById("moduleE").style.display = 'none';
                document.getElementById("moduleF").style.display = 'none';
                document.getElementById("moduleG").style.display = 'none';
                document.getElementById("moduleH").style.display = 'inline';
                document.getElementById("moduleI").style.display = 'none';
                document.getElementById("moduleJ").style.display = 'none';
                document.getElementById("moduleK").style.display = 'none';
                document.getElementById("moduleL").style.display = 'none';
                document.getElementById("moduleM").style.display = 'none';
                document.getElementById("moduleN").style.display = 'none';
                document.getElementById("moduleO").style.display = 'none';
                document.getElementById("moduleP").style.display = 'none';
                document.getElementById("moduleQ").style.display = 'none';
            }
            if(Count=="I")
            {
                document.getElementById("moduleA").style.display = 'none';
                document.getElementById("moduleB").style.display = 'none';
                document.getElementById("moduleC").style.display = 'none';
                document.getElementById("moduleD").style.display = 'none';
                document.getElementById("moduleE").style.display = 'none';
                document.getElementById("moduleF").style.display = 'none';
                document.getElementById("moduleG").style.display = 'none';
                document.getElementById("moduleH").style.display = 'none';
                document.getElementById("moduleI").style.display = 'inline';
                document.getElementById("moduleJ").style.display = 'none';
                document.getElementById("moduleK").style.display = 'none';
                document.getElementById("moduleL").style.display = 'none';
                document.getElementById("moduleM").style.display = 'none';
                document.getElementById("moduleN").style.display = 'none';
                document.getElementById("moduleO").style.display = 'none';
                document.getElementById("moduleP").style.display = 'none';
                document.getElementById("moduleQ").style.display = 'none';
            }
            if(Count=="J")
            {
                document.getElementById("moduleA").style.display = 'none';
                document.getElementById("moduleB").style.display = 'none';
                document.getElementById("moduleC").style.display = 'none';
                document.getElementById("moduleD").style.display = 'none';
                document.getElementById("moduleE").style.display = 'none';
                document.getElementById("moduleF").style.display = 'none';
                document.getElementById("moduleG").style.display = 'none';
                document.getElementById("moduleH").style.display = 'none';
                document.getElementById("moduleI").style.display = 'none';
                document.getElementById("moduleJ").style.display = 'inline';
                document.getElementById("moduleK").style.display = 'none';
                document.getElementById("moduleL").style.display = 'none';
                document.getElementById("moduleM").style.display = 'none';
                document.getElementById("moduleN").style.display = 'none';
                document.getElementById("moduleO").style.display = 'none';
                document.getElementById("moduleP").style.display = 'none';
                document.getElementById("moduleQ").style.display = 'none';
            }
            if(Count=="K")
            {
                document.getElementById("moduleA").style.display = 'none';
                document.getElementById("moduleB").style.display = 'none';
                document.getElementById("moduleC").style.display = 'none';
                document.getElementById("moduleD").style.display = 'none';
                document.getElementById("moduleE").style.display = 'none';
                document.getElementById("moduleF").style.display = 'none';
                document.getElementById("moduleG").style.display = 'none';
                document.getElementById("moduleH").style.display = 'none';
                document.getElementById("moduleI").style.display = 'none';
                document.getElementById("moduleJ").style.display = 'none';
                document.getElementById("moduleK").style.display = 'inline';
                document.getElementById("moduleL").style.display = 'none';
                document.getElementById("moduleM").style.display = 'none';
                document.getElementById("moduleN").style.display = 'none';
                document.getElementById("moduleO").style.display = 'none';
                document.getElementById("moduleP").style.display = 'none';
                document.getElementById("moduleQ").style.display = 'none';
            }
            if(Count=="L")
            {
                document.getElementById("moduleA").style.display = 'none';
                document.getElementById("moduleB").style.display = 'none';
                document.getElementById("moduleC").style.display = 'none';
                document.getElementById("moduleD").style.display = 'none';
                document.getElementById("moduleE").style.display = 'none';
                document.getElementById("moduleF").style.display = 'none';
                document.getElementById("moduleG").style.display = 'none';
                document.getElementById("moduleH").style.display = 'none';
                document.getElementById("moduleI").style.display = 'none';
                document.getElementById("moduleJ").style.display = 'none';
                document.getElementById("moduleK").style.display = 'none';
                document.getElementById("moduleL").style.display = 'inline';
                document.getElementById("moduleM").style.display = 'none';
                document.getElementById("moduleN").style.display = 'none';
                document.getElementById("moduleO").style.display = 'none';
                document.getElementById("moduleP").style.display = 'none';
                document.getElementById("moduleQ").style.display = 'none';
            }
            if(Count=="M")
            {
                document.getElementById("moduleA").style.display = 'none';
                document.getElementById("moduleB").style.display = 'none';
                document.getElementById("moduleC").style.display = 'none';
                document.getElementById("moduleD").style.display = 'none';
                document.getElementById("moduleE").style.display = 'none';
                document.getElementById("moduleF").style.display = 'none';
                document.getElementById("moduleG").style.display = 'none';
                document.getElementById("moduleH").style.display = 'none';
                document.getElementById("moduleI").style.display = 'none';
                document.getElementById("moduleJ").style.display = 'none';
                document.getElementById("moduleK").style.display = 'none';
                document.getElementById("moduleL").style.display = 'none';
                document.getElementById("moduleM").style.display = 'inline';
                document.getElementById("moduleN").style.display = 'none';
                document.getElementById("moduleO").style.display = 'none';
                document.getElementById("moduleP").style.display = 'none';
                document.getElementById("moduleQ").style.display = 'none';
            }
            if(Count=="N")
            {
                document.getElementById("moduleA").style.display = 'none';
                document.getElementById("moduleB").style.display = 'none';
                document.getElementById("moduleC").style.display = 'none';
                document.getElementById("moduleD").style.display = 'none';
                document.getElementById("moduleE").style.display = 'none';
                document.getElementById("moduleF").style.display = 'none';
                document.getElementById("moduleG").style.display = 'none';
                document.getElementById("moduleH").style.display = 'none';
                document.getElementById("moduleI").style.display = 'none';
                document.getElementById("moduleJ").style.display = 'none';
                document.getElementById("moduleK").style.display = 'none';
                document.getElementById("moduleL").style.display = 'none';
                document.getElementById("moduleM").style.display = 'none';
                document.getElementById("moduleN").style.display = 'inline';
                document.getElementById("moduleO").style.display = 'none';
                document.getElementById("moduleP").style.display = 'none';
                document.getElementById("moduleQ").style.display = 'none';
            }
            if(Count=="O")
            {
                document.getElementById("moduleA").style.display = 'none';
                document.getElementById("moduleB").style.display = 'none';
                document.getElementById("moduleC").style.display = 'none';
                document.getElementById("moduleD").style.display = 'none';
                document.getElementById("moduleE").style.display = 'none';
                document.getElementById("moduleF").style.display = 'none';
                document.getElementById("moduleG").style.display = 'none';
                document.getElementById("moduleH").style.display = 'none';
                document.getElementById("moduleI").style.display = 'none';
                document.getElementById("moduleJ").style.display = 'none';
                document.getElementById("moduleK").style.display = 'none';
                document.getElementById("moduleL").style.display = 'none';
                document.getElementById("moduleM").style.display = 'none';
                document.getElementById("moduleN").style.display = 'none';
                document.getElementById("moduleO").style.display = 'inline';
                document.getElementById("moduleP").style.display = 'none';
                document.getElementById("moduleQ").style.display = 'none';
            }
            if(Count=="P")
            {
                document.getElementById("moduleA").style.display = 'none';
                document.getElementById("moduleB").style.display = 'none';
                document.getElementById("moduleC").style.display = 'none';
                document.getElementById("moduleD").style.display = 'none';
                document.getElementById("moduleE").style.display = 'none';
                document.getElementById("moduleF").style.display = 'none';
                document.getElementById("moduleG").style.display = 'none';
                document.getElementById("moduleH").style.display = 'none';
                document.getElementById("moduleI").style.display = 'none';
                document.getElementById("moduleJ").style.display = 'none';
                document.getElementById("moduleK").style.display = 'none';
                document.getElementById("moduleL").style.display = 'none';
                document.getElementById("moduleM").style.display = 'none';
                document.getElementById("moduleN").style.display = 'none';
                document.getElementById("moduleO").style.display = 'none';
                document.getElementById("moduleP").style.display = 'inline';
                document.getElementById("moduleQ").style.display = 'none';
            }
            if(Count=="Q")
            {
                document.getElementById("moduleA").style.display = 'none';
                document.getElementById("moduleB").style.display = 'none';
                document.getElementById("moduleC").style.display = 'none';
                document.getElementById("moduleD").style.display = 'none';
                document.getElementById("moduleE").style.display = 'none';
                document.getElementById("moduleF").style.display = 'none';
                document.getElementById("moduleG").style.display = 'none';
                document.getElementById("moduleH").style.display = 'none';
                document.getElementById("moduleI").style.display = 'none';
                document.getElementById("moduleJ").style.display = 'none';
                document.getElementById("moduleK").style.display = 'none';
                document.getElementById("moduleL").style.display = 'none';
                document.getElementById("moduleM").style.display = 'none';
                document.getElementById("moduleN").style.display = 'none';
                document.getElementById("moduleO").style.display = 'none';
                document.getElementById("moduleP").style.display = 'none';
                document.getElementById("moduleQ").style.display = 'inline';
            }
        }
    </script>
	
  </body>
</html>