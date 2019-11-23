<?php
include ('connect/dbconn.php');
if ((isset($_POST['firstName'])) && (isset($_POST['middleName'])) && (isset($_POST['lastName'])) && (isset($_POST['username'])) && (isset($_POST['dob'])) && (isset($_POST['gender'])) && (isset($_POST['email'])) && (isset($_POST['phone'])) && (isset($_POST['clinicManager'])) && (isset($_POST['age']))) {
    // get the details of the new user  to register
    $fname = $_POST['firstName'];
    $mname = $_POST['middleName'];
    $lname = $_POST['lastName'];
    $username = $_POST['username'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $region = $_POST['region'];
    $manager = $_POST['clinicManager'];
    $password = $_POST['password'];
    $importance = $_POST['importance'];
    //$profile = $_POST['profile'];
    $video = $_POST['video'];
    $status = "0";
    //$imgfile=$_FILES["photo"]["name"];
    //$resume=$_FILES["resume"]["name"];

// get the resume and image extension
    //$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
    //$extresume = substr($resume,strlen($resume)-4,strlen($resume));
// allowed extensions
    //$allowed_doc = array("doc","DOC","docx","DOCX","pdf","PDF");
    //$allowed_extensions = array(".jpg",".JPG",".JPEG",".jpeg",".PNG",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
    if(($fname=="") || ($lname=="") || ($dob=="") || ($age=="") || ($email=="") || ($country=="") || ($region=="") || ($region==""))
    {
        echo "<script>alert('Some important fields are missing. Please fill all the required fields');</script>";
    }
    else {
        //rename the image file
        //$imgnewfile=md5($imgfile).$extension;
        //$resumedoc=md5($resume).$extresume;
// Code for move image and document into directory
        //move_uploaded_file($_FILES["photo"]["tmp_name"],"admin/candidatephotos/".$imgnewfile);
        // move_uploaded_file($_FILES["resume"]["tmp_name"],"admin/resumes/".$resumedoc);


        // check if user(reg_no) exists
        $userQuery = "SELECT * FROM `candidates` WHERE `email`='$email'";
        $userResult = $db->query($userQuery);
        $userCount = $userResult->rowCount();

        if ($userCount == 0) {
            // user (reg_no) does not exist
            // add user
            //Hash the password
            $passwordHash = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12));
            // execute registration query(insert)
            $registerQuery = "INSERT INTO `candidates`(`firstName`, `middleName`,`lastName`,`username`,`dob`,`age`,`gender`,`email`,`phone`,`country`,`region`,`clinicManager`,`password`,`assessImportance`,`video`,`status`) 
	         VALUES ('$fname','$mname','$lname','$username','$dob','$age','$gender','$email','$phone','$country','$region','$manager','$passwordHash','$importance','$video','$status')";
            try {
                $db->query($registerQuery);

                echo '<script language="javascript">';
                echo 'alert("You have successfully registered /booked your session for Professional and Scientific Accreditation of Life , Work Experience and Prior Qualifications. We will contact you shortly with further information")';
                echo '</script>';

                //$success= "You have successfully registered /booked your session for Gift and Talent Assessment. We will contact you shortly with further information";  // successful

            } catch (PDOException $exception) {
                //echo $exception->getMessage();
                $error="problem encountered during registration";     // failed
            }
        } else {
            // user already exists
            // registration is unnecesary
            // do nothing
            echo "candidate exists";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/wtlogo.png" type="image/ico"/>
    <title>World Talent Federation</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.min.css" rel="stylesheet">

    <script type="text/javascript">

        function getAge(){
            var dob = document.getElementById('date').value;
            dob = new Date(dob);
            var today = new Date();
            var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
            document.getElementById('age').value=age;
        }

    </script>
    <script>
        function getCity(val) {
            $.ajax({
                type: "POST",
                url: "admin/get_city.php",
                data:'country='+val,
                success: function(data){
                    $("#region").html(data);
                }
            });
        }
    </script>

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img class="img-fluid" width="75" height="75" src="img/wtlogo.png" alt=""></a>
        <a class="navbar-brand" href="#">World Talent Federation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-danger text-capitalize font-italic" href="#">Planting the seed of your Talent; Enhancing the Empire of your Giftedness</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead text-center text-white">
    <div class="masthead-content">
        <div class="row">
            <div class="col-md-12">
                <h2 class="display-4">Professional and Scientific Accreditation of Life, Work Experience &amp; Prior Qualifications</h2>
                <p class="text-danger font-italic">Veteran Associate Professional Matriculation Engines</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a class="nav-link btn btn-success" href="#myModal" data-toggle="modal" data-target="#myModal"><h1><i class="fa fa-users text-danger"></i></h1><br/><i class="fa fa-edit"></i>&nbsp;Click Here to Begin Your Professional and Scientific Accreditation of Life, Work Experience &amp; Prior Qualifications Online</a>
                </div>
            </div>
            <hr style="height:1px;border:none;color:#333;background-color: #ffffff;" >
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-danger">INSTRUCTIONS:</h2>
                    <p>This Online Portal starts your Professional and Scientific Accreditation of Life , Work Experience AND Prior Qualifications.
                        It further provides you with an opportunity to initiate communication with us.</p>
                    <p>Once you have registered your basic information, one of our experts will contact you with details on how to proceed
                        further at the following stages:</p>
                    <p>(i) Accreditation / Matriculation of Prior Qualifications (from past academic records - if any)</p>
                    <p>(ii) Accreditation / Matriculation of Life and Work Experience (From CV or profile given)</p>
                    <p>(iii) Production of Accredited Transcript for prior qualifications, Life and Work Experience</p>
                    <p>(iv) Submission of Accredited Transcript in (iii) above to member universities hence Advanced Standing Admission with
                        exemptions.</p>
                    <br>
                    <p>On completion of the full assessment to the last stage (iv) above, your report will be ready within 48 hours</p>
                    <p><span class="text-primary display-5">NOTES:</span> Please scroll down this form presented and fill it fully, before pressing the "Register" button in green at at the bottom of the form.</p>
                </div>
            </div>
            <hr style="height:1px;border:none;color:#333;background-color: #ffffff;" >
            <section>
                <div class="container">

                    <div class="row align-items-center">
                        <div class="col-lg-6 order-lg-2">
                            <div class="p-5">
                                <img class="img-fluid rounded-circle" src="img/lib1.jpeg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 order-lg-1">
                            <div class="p-5">
                                <p>Why should an adult squeeze with youth the age his/her children or grandchildren in the same class, yet we are almost
                                    beyond the 21 st century , with new learning methods?</p>
                                <p>Your Life and Work Experience are big assets that can earn you a bachelors, masters or doctoral degree sooner and
                                    cheaper. This portal just gets you underway for the same.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <img class="img-fluid rounded-circle" src="img/lib2.jpeg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <p>How can an adult who built his company over the last 20 years and employs graduates, be the same as a high school
                                    graduate who attained grade “A” or “B”?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
</header>


<!---start modal class-->
<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog"
     aria-labelledby = "myModalLabel" aria-hidden = "true">

    <div class = "modal-dialog">
        <div class = "modal-content">

            <div class = "modal-header">
                <h4 class="modal-title w-100 font-weight-bold text-info">Registration Form</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class = "modal-body">
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" novalidate>
                    <div class="item form-group">
                        <label class="control-label col-xs-12" for="first-name">First Name <span class="required">*</span>
                        </label>
                        <div class="col-xs-12">
                            <input type="text" id="first-name" name="firstName" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="middle-name" class="control-label col-xs-12">Middle Name</label>
                        <div class="col-xs-12">
                            <input id="middle-name" class="form-control" type="text" name="middleName">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-xs-12" for="last-name">Last Name <span class="required">*</span>
                        </label>
                        <div class="col-xs-12">
                            <input type="text" id="last-name" name="lastName" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-xs-12">Date Of Birth <span class="required">*</span>
                        </label>
                        <div class="col-xs-12">
                            <input type='date' class="form-control" id="date" name="dob" onblur="getAge();"/>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-xs-12" for="last-name">Age<span class="required">*</span>
                        </label>
                        <div class="col-xs-12">
                            <input type="text" id="age" name="age" readonly required="required" class="form-control col-md-3">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-xs-12">Gender</label>
                        <div class="col-xs-12">
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
                        <label class="control-label col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-xs-12">
                            <input type="email" id="email" name="email" required="required" class="form-control validate">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-xs-12" for="telephone">Phone Number<span class="required">*</span>
                        </label>
                        <div class="col-xs-12">
                            <input type="tel" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-xs-12">Country Of Residence</label>
                        <div class="col-xs-12">
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
                        <label class="control-label col-xs-12">City/Town</label>
                        <div class="col-xs-12">
                            <select class="form-control" name="region" id="region">
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-12">This Gift Clinic Manager</label>
                        <div class="col-xs-12">
                            <input type="text" id="clinic_manager" readonly name="clinicManager" value="Online Registration" class="form-control" placeholder="e.g John Doe">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-xs-12" for="last-name">Username <span class="required">*</span>
                        </label>
                        <div class="col-xs-12">
                            <input type="text" id="last-name" name="username" value="Gnt792" readonly required="required" class="form-control">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="password" class="control-label col-md-12">Password</label>
                        <div class="col-xs-12">
                            <input id="password" type="password" name="password" value="Gnt792" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="password" class="control-label col-xs-12">Why this Assessment is important for you?</label>
                        <div class="col-xs-12">
                            <textarea type="text" required rows="5" name="importance" class="form-control" Placeholder="Why is this Assessment important..?"></textarea>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-xs-12" for="last-name">Your Youtube Channel</label>
                        <div class="col-xs-12">
                            <input type="text"  id="video" name="video" Placeholder="Insert youtube link for videos if any..." class="form-control">
                        </div>
                    </div>
                    <div class="item form-group">
                        <p class="text-danger">" You are about to complete your Booking/Request for this evaluation. After pressing the "Register" button, you MUST get a message of "Successful Registration". If not, then it failed due to incomplete information or slow internet connection. Go back and repeat again. If the problem persists, send to us an email to <a href="#">info@gatesafrica.org</a> or call us  <a href="#">+254 788 193 427</a>"</p>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <input id="send" type="submit" name="register" Value="Register" class="btn btn-success form-control">
                        </div>
                    </div>
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

<!-- Footer -->
<footer class="py-5 bg-black">
    <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; 2018</p>
    </div>
    <!-- /.container -->
</footer>
<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- validator -->
<script src="vendors/validator/validator.js"></script>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js">
</script>

</body>

</html>
