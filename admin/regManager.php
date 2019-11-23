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
    <script>
        function getCity(val) {
            $.ajax({
                type: "POST",
                url: "get_city.php",
                data:'country='+val,
                success: function(data){
                    $("#region").html(data);
                }
            });
        }
    </script>
    <script type="text/javascript">

        function getAge(){
            var dob = document.getElementById('date').value;
            dob = new Date(dob);
            var today = new Date();
            var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
            document.getElementById('age').value=age;
        }

    </script>
</head>

<body class="nav-md">
<div class="container body">
    <!-- master page-->
    <?php
    require "master.php";
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
                            <h2 class="text-success">New User Registration</h2>
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

                            <form class="form-horizontal form-label-left" action="regman.php" method="post" novalidate>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">User Type</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="role" required>
                                            <option>Select User Type</option>
                                            <option value="Expert">Talent Expert</option>
                                            <option value="OralScreener">Oral Screener</option>
                                            <option value="Psycho">Psycho-Screener</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">User Title</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="title" required>
                                            <option>Select Title</option>
                                            <option value="Mr.">Mr.</option>
                                            <option value="Mrs.">Mrs.</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Dr.">Dr.</option>
                                            <option value="Prof.">Prof.</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" name="firstName" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middleName">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="last-name" name="lastName" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Username <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="last-name" name="username" value="Gnt792" readonly required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class='input-group date' id='myDatepicker2'>
                                            <input type='text' class="form-control" id="date" name="dob" onblur="getAge();"/>
                                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Age<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="age" name="age" readonly required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div id="gender" class="radio-group">
                                            <label class="btn btn-info" data-toggle-class="btn-primary" data-toggle-passive-class="btn-success">
                                                <input type="radio" name="gender" value="M"> &nbsp; Male &nbsp;
                                            </label>
                                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                <input type="radio" name="gender" value="F"> Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div> <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Country Of Residence</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="country" id="country" onChange="getCity(this.value);" required>
                                            <option>Select Country...</option>
                                            <?php
                                            $query = "SELECT * FROM `countries` ORDER BY Name ASC ";
                                            $result = $db->query($query);
                                            for ($i = 0; $row = $result->fetch(); $i++) {
                                                ?>
                                                <option value="<?php echo $row['Name']; ?>"><?php echo $row['Name']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">City/Town</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="region" id="region" required>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Expert Type</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="expert_level">
                                            <option value="">Select Expert Type</option>
                                            <option value="World Talent Expert">World Talent Expert</option>
                                            <option value="Africa Talent Expert">Africa Talent Expert</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="password" class="control-label col-md-3">Password</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="password" type="password" name="password" value="Gnt792" class="form-control col-md-7 col-xs-12" required="required">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Phone Number<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="tel" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary">Cancel</button>
                                        <input id="send" type="submit" name="register" Value="Register" class="btn btn-success">
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
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-datetimepicker -->
<script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
<script>
    $('#myDatepicker').datetimepicker();

    $('#myDatepicker2').datetimepicker({
        format: 'YYYY-MM-DD'
    });

    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });

    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();

    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });

    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });

    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>

</body>
</html>