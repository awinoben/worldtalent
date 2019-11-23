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
                            <h2 class="text-success">Edit Candidate Info</h2>
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
                            <?php
                            $id = "";
                            if (isset($_GET['candidateID'])) {
                                $id = $_GET['candidateID'];
                            } else {
                                echo "No ID FOUND!!";
                            }
                            $Query = "SELECT * FROM `candidates` WHERE `candidateID`='$id'";
                            $Result = $db->query($Query);
                            if ($Result->rowCount() == 1) {
                                $row = $Result->fetch();
                                $fname = $row['firstName'];
                                $mname = $row['middleName'];
                                $lname = $row['lastName'];
                                $dob = $row['dob'];
                                $email=$row['email'];
                                $phone=$row['phone'];
                                $gender = $row['gender'];
                                $country = $row['country'];
                                $region = $row['region'];
                                $dob = $row['dob'];
                                $age = $row['age'];
                                $gender=$row['gender'];
                                $importance=$row['assessImportance'];
                                $profile=$row['profile'];
                                $video=$row['video'];

                            } else {
                                echo "No Data Found!!";
                            }
                            ?>
                            <div class="item form-group row">
                                <label class="text-danger control-label col-md-3 col-sm-3 col-xs-3">Profile Image
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <img class="profile_img" width="150" height="150" src="candidatephotos/<?php echo htmlentities($row['photo']);?>" alt="No Image Found!">
                                    <button class = "btn btn-success" data-toggle = "modal" data-target = "#myModal">
                                        Update
                                    </button>
                                </div>
                            </div>
                            <form class="form-horizontal form-label-left" action="editcand.php" method="post" novalidate>
                                <div class="item form-group" hidden>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Candidate ID<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="candidateID" name="candidateID" required="required" value="<?php echo $id;?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="firstName" name="firstName" required="required" value="<?php echo $fname;?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="middle-name" class="form-control col-md-7 col-xs-12" value="<?php echo $mname;?>" type="text" name="middleName">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="last-name" name="lastName" value="<?php echo $lname;?>" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class='input-group date' id='myDatepicker2'>
                                            <input type='text' class="form-control" id="date" value="<?php echo $dob;?>" name="dob" onblur="getAge();"/>
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
                                        <input type="text" id="age" name="age" value="<?php echo $age;?>" readonly required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div id="gender" class="radio-group">
                                            <label class="btn btn-info" data-toggle-class="btn-primary" data-toggle-passive-class="btn-success">
                                                <input type="radio" name="gender" value="M" <?php echo ($gender=='M')?'checked':'' ?>> &nbsp; Male &nbsp;
                                            </label>
                                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                <input type="radio" name="gender" value="F" <?php echo ($gender=='F')?'checked':'' ?>> Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" id="email" name="email" value="<?php echo $email;?>" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Phone Number<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="tel" id="telephone" name="phone" value="<?php echo $phone;?>" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Country Of Residence</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="country" id="country" onChange="getCity(this.value);" required>
                                            <option value="<?php echo $country;?>"><?php echo $country;?></option>
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
                                            <option value="<?php echo $region;?>"><?php echo $region;?></option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" hidden>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">This Gift Clinic Manager</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="clinic_manager" readonly name="clinicManager" value="<?php echo $_SESSION['firstName'] . " " . $_SESSION['middleName'] . " " . $_SESSION['lastName']; ?>" class="form-control" placeholder="e.g John Doe">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Username <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="last-name" readonly name="username" value="Gnt792" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="password" class="control-label col-md-3">Password</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="password" type="password" readonly name="password" value="Gnt792" class="form-control col-md-7 col-xs-12" required="required">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="password" class="control-label col-md-3">Why this Assessment is important for you?</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" required rows="5" name="importance" class="form-control col-md-7 col-xs-12" Placeholder="Why is this Assessment important..?"><?php echo $importance;?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="password" class="control-label col-md-3">Profile</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" required rows="5" name="profile" class="form-control col-md-7 col-xs-12" Placeholder="Your Brief Profile..."><?php echo $profile;?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Your Youtube Channel</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text"  id="video" name="video" value="<?php echo $video;?>" Placeholder="Insert youtube link for videos if any..." class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <a href="viewCandidate.php" class="btn btn-warning btn-group-lg">Cancel</a>
                                        <input id="send" type="submit" name="update" Value="Update Profile" class="btn btn-success">
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
<!--- modal-->
<!-- Modal -->
<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog"
     aria-labelledby = "myModalLabel" aria-hidden = "true">

    <div class = "modal-dialog">
        <div class = "modal-content">

            <div class = "modal-header">
                <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
                    &times;
                </button>

                <h4 class = "modal-title" id = "myModalLabel">
                    Update Profile Photo
                </h4>
            </div>

            <div class = "modal-body">
                <form class="form-horizontal form-label-left" name="addpost" method="post" enctype="multipart/form-data" action="change-image.php">
                    <div class="item form-group" hidden>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Candidate ID<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="candID" name="candID" required="required" value="<?php echo $id;?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="item form-group">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <h4 class="m-b-30 m-t-0 header-title"><b>Current  Image</b></h4>
                                <img src="candidatephotos/<?php echo htmlentities($row['photo']);?>" width="150" height="150"/>
                                <br />

                            </div>
                        </div>
                    </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">New Photo</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file"  id="photo" name="photo" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                    <button type="submit" name="update" class="btn btn-success waves-effect waves-light">Update </button>
                </form>


            </div> <!-- container -->

        </div>

            <div class = "modal-footer" hidden>
                <button type = "button" class = "btn btn-default" data-dismiss = "modal">
                    Close
                </button>

                <button type = "button" class = "btn btn-primary">
                    Submit changes
                </button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->

</div><!-- /.modal -->

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

    //display  success message on same page
    function sendEnquiryForm() {
        var candidateID=$('#candidateID').val();
        var firstName=$('#firstName').val();
        var lastName=$('#lastName').val();
        var email=$('#email').val();
        $.post("editcand.php",'candidateID='+candidateID+'&firstName='+firstName+'&lastName='+lastName+'&email='+email,function(result){
            if(status.toLowerCase()=="error".toLowerCase()){
                alert("An Error Occured During update");
            }
            else{
                alert("Update Successfull!!");
                $('#successMessage').html(result);
            }
        })
            .fail(function () {alert("something went wrong.Please try again")

            });
    }
</script>

</body>
</html>