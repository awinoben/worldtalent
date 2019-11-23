<?php
include('session.php');
require_once "../connect/dbconn.php";
?>
<html>
<head>
    <title>World Talent| </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/wtlogo.png" type="image/ico"/>
    <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
    <meta name=Generator content="microsoft Word 14 (filtered)">

    <style>
        <!--
        /* Font Definitions */
        @font-face {
            font-family: Tahoma;
            panose-1: 2 15 5 2 2 2 4 3 2 4;
        }

        @font-face {
            font-family: Tahoma;
            panose-1: 2 11 6 4 3 5 4 4 2 4;
        }

        /* Style Definitions */
        .msoNormal{
            margin-top: 0in;
            margin-right: 0in;
            margin-bottom: 8.0pt;
            margin-left: 0in;
            line-height: 107%;
            font-size: 12.0pt;
            font-family: "Tahoma", "sans-serif";
        }

        p.msoAcetate, li.msoAcetate, div.msoAcetate {
            mso-style-link: "Balloon Text Char";
            margin: 0in;
            margin-bottom: .0001pt;
            font-size: 12.0pt;
            font-family: "Tahoma", "sans-serif";
        }

        span.BalloonTextChar {
            mso-style-name: "Balloon Text Char";
            mso-style-link: "Balloon Text";
            font-family: "Tahoma", "sans-serif";
        }

        .msoChpDefault {
            font-family: "Tahoma", "sans-serif";
        }

        .msoPapDefault {
            margin-bottom: 8.0pt;
            line-height: 107%;
        }

        @page WordSection1 {
            size: 13.0in 8.5in;
            margin: 48.25pt .5in .5in .75in;
        }

        div.WordSection1 {
            page: WordSection1;
        }

        -->
    </style>
    <?php error_reporting(0) ?>
    <link href="images/wtlogo.png" rel="icon" type="image">
    <link href="bootstrap/css/print_background.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/font-awesome.css" rel="stylesheet" media="screen">
    <link href="bootstrap/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="bootstrap/css/my_style.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/print_inventory.css" rel="stylesheet" media="print">
    <link href="bootstrap/css/bootstrap.min1.css" rel="stylesheet" media="screen">

    <!-- HTmL5 shim, for IE6-8 support of HTmL5 elements -->
    <!--[if lt IE 9]>

    <![endif]-->
    <!-- calendar css -->
    <script src="bootstrap/js/html5.js"></script>
    <link href="vendors/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- data table -->
    <link href="assets/DT_bootstrap.css" rel="stylesheet" media="screen">
    <!-- notification  -->
    <link href="vendors/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
    <!-- wysiwug  -->
    <link rel="stylesheet" type="text/css" href="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"/>

    <script src="vendors/jGrowl/jquery.jgrowl.js"></script>
</head>

<body lang=EN-US>
<div class="empty">
    <?php include('#'); ?>
    <div class="container">
        <div class="row-fluid">

        </div>
    </div>
</div>
</div>

<div class="container">
    <div class="row-fluid">
        <div class="pull-right">
            <div class="empty">
                <p class=msoNormal style='margin-bottom:0in; margin-left:-110px; margin-top:-30px; margin-bottom:.0001pt;line-height:
           normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
           "Times New Roman","serif"'>
		   <a href="#" onClick="window.print()" class="btn btn-info" id="print" data-placement="top"
              title="Click to Print"><i class="icon-print icon-large"></i> Print</a></p>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#print').tooltip('show');
                        $('#print').tooltip('hide');
                    });
                </script>
                <p class=msoNormal style='margin-bottom:0in; margin-top:-30px; margin-bottom:.0001pt;line-height:
            normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
           "Times New Roman","serif"'>
			<a id="return" data-placement="top" class="btn btn-success" title="Click to Return" href="general.php"><i
                        class="icon-arrow-left"></i> Back</a></p>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#return').tooltip('show');
                        $('#return').tooltip('hide');
                    });
                </script>
            </div>
        </div>
        <div class="block">
            <div class="row-fluid">
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

                $row = $feedbackResult->fetch();
                $fname = $row['firstName'];
                $mname = $row['middleName'];
                $lname = $row['lastName'];
                $gender = $row['gender'];
                $country = $row['country'];
                $region = $row['region'];
                $age = $row['age'];

                //endorsers
                $userquery = "SELECT * FROM `endorsers` where candidateID='$id'";
                $useresult = $db->query($userquery);
                $userow = $useresult->fetch(PDO::FETCH_ASSOC);
                $first1 = $userow['firstEndorser'];
                $second = $userow['secondEndorser'];

                //fetching names for first Endorser

                $userquery2 = "SELECT * FROM `users` where userID='$first1'";
                $useresult2 = $db->query($userquery2);
                $userow2 = $useresult2->fetch(PDO::FETCH_ASSOC);
                $firstEndorser = $userow2['firstName']." ".$userow2['middleName']." ".$userow2['lastName'];
                $firstEndorserlicense = $userow2['license_number'];
                $firstEndorsertitle = $userow2['userTitle'];

                $userquery3 = "SELECT * FROM `users` where userID='$second'";
                $useresult3 = $db->query($userquery3);
                $userow3 = $useresult3->fetch(PDO::FETCH_ASSOC);
                $secondEndorser = $userow3['firstName']." ".$userow3['middleName']." ".$userow3['lastName'];
                $secondEndorserlicense = $userow3['license_number'];
                $secondEndorsertitle = $userow3['userTitle'];

                ?>

                <div class=WordSection1>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><b><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

                    <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:14.0pt;
font-family:"Times New Roman","serif"'><img width="150" height="150" id="Picture 1"
                                            src="images/wtlogo.png"></span></b></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:12.0pt;
font-family: Tahoma'><a href="http://worldtalentfed.org/">www.worldtalentfed.org</a></span></b></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span  style='font-size:12.0pt; font-family: Tahoma; color: #FF0000;'>Planting the seed of your Talent; Enhancing the Empire of your Giftedness</span></b></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:18.0pt;
font-family:Tahoma'>Professional Gift &amp; Talent Screen Report</span></b></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><b><span style='font-size:10.0pt;color: #000000; font-family:"Times New Roman","serif"'>&nbsp;</span><hr></p>
                    <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span  style='font-size:12.0pt;
font-family: Tahoma; color: #000000;'><?php echo $fname." ".$mname." ".$lname;?></span></b></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span  style='font-size:12.0pt;
font-family: Tahoma'>Gender &nbsp;<?php echo $gender;?></span></p>
                    <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span  style='font-size:12.0pt;
font-family: Tahoma; color: #000000;'>Age &nbsp;<?php echo $age;?></span></b></p>
                    <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span  style='font-size:12.0pt;
font-family: Tahoma; color: #000000;'><?php echo $country;?></span></b></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span  style='font-size:12.0pt;
font-family: Tahoma; color: #000000;'>Compiled By</span></b></p>
                    <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span  style='font-size:12.0pt;
font-family: Tahoma; color: #000000;'><?php echo $_SESSION['userTitle'] . " ".$_SESSION['firstName'] . " " . $_SESSION['middleName'] . " " . $_SESSION['lastName']; ?></span></b></p>
                    <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span  style='font-size:12.0pt;
font-family: Tahoma; color: #000000;'>WTF Approval Number:&nbsp;<?php echo $_SESSION['license_number']; ?></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span  style='font-size:12.0pt;
font-family: Tahoma; color: #000000;'>Endorsed By</span></b></p>
                    <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span  style='font-size:12.0pt;
font-family: Tahoma; color: #000000;'><?php echo $firstEndorsertitle . " ".$firstEndorser; ?></span></b></p>
                    <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span  style='font-size:12.0pt;
font-family: Tahoma; color: #000000;'>WTF Approval Number:&nbsp;<?php echo $firstEndorserlicense; ?></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span  style='font-size:12.0pt;
font-family: Tahoma; color: #000000;'>Endorsed By</span></b></p>
                    <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span  style='font-size:12.0pt;
font-family: Tahoma; color: #000000;'><?php echo $secondEndorsertitle . " ".$secondEndorser; ?></span></b></p>
                    <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span  style='font-size:12.0pt;
font-family: Tahoma; color: #000000;'>WTF Approval Number:&nbsp;<?php echo $secondEndorserlicense; ?></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o><hr></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:1.5pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span  style='font-size:10.0pt;
font-family: Tahoma;'>© Copyright, World Talent Federation, Talent Assessment Inventory™ - Combo Version</span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:1.5pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;font-family:Tahoma; font-size:12.0pt;line-height:normal'>
                            <h3 style="font-family: Tahoma">CONFIDENTIALITY</h3>
                        <p style="font-size: 12.0pt">This highly confidential document is provided to the candidate named on the cover sheet on
                            the basis that the need for this confidentiality is recognised, accepted and that such
                            confidentiality will be strictly maintained.</p>
                        <p style="font-size: 12.0pt">It should therefore only be read by staff or approved experts specifically involved with the
                            preparation of this report or development of the person named, parents or guardians agreed
                            (or involved) and stored securely with minimum access.</p>

</span></p>
                            <h3 style="font-family: Tahoma">OBJECTIVES</h3>
                            <p class="msoPapDefault" style="font-size: 12.0pt;font-family: "Tahoma", "sans-serif"">The report on the candidate’s talent and potential giftedness has been done based on
several Talent Screening Models used to provide objective information about the candidate’s
                        innate abilities.</p>
                    <p style="font-size: 12.0pt">
It may be further used for Talent Based Learning which may embed Academic Clinics. A
Talent Prescription, supported by a Learning Prescription, must be used to enable the
specific Talent Genre Development.</p>
                            <h3 style="font-family: Tahoma">INTERPRETATION</h3>
                            <p style="font-size: 12.0pt">The Report may use terms that may not be understood by non-experts and as such the
authorized readers / users may seek professional interpretation / explanations and clarifications
at the parent Talent Clinic where the assessment was carried out..</p>
                    <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;font-family:Tahoma; font-size:12.0pt;line-height:normal'>
                        <span>
                            <h3 style="font-family: Tahoma">CROSS VALIDATION OF OUTCOMES</h3>
                            <p style="font-size: 12.0pt">The following report has been based on a series of scientifically validated profiles, each
providing elements of insight or understanding into the candidate’s unique abilities and make
                        explanations, where necessary.</p>
                    <p style="font-size: 12.0pt">It should be supplemented with further “evidence” and “observational” information provided
                        during “Talent Validation” stages.</p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:12.0pt'><o>&nbsp;</o></span></p>

                    <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal;font-size: 12.0pt'>
                    <h3 style="color: #000000; font-family: Tahoma"><b style='mso-bidi-font-weight:normal'>PROFESSIONAL DELIMETERS</b></h3>
                        <table class=msoTableGrid border=1 cellspacing=0 cellpadding=0
                                             style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
                            <!-- PDO FETCH ARRAY-->
                            <?php
                            $Query = "SELECT * FROM `professional_delimeters` WHERE `candidateID`='$id'";
                            $Result = $db->query($Query);

                            $row = $Result->fetch(PDO::FETCH_ASSOC);
                            $expert = $row['expert'];
                            $basestandards = $row['base_standards'];
                            $augmodels = $row['augmenting_models'];
                            ?>
                            <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
                                <td width=1127 colspan=6 valign=top style='width:845.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                    <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Times New Roman","serif"'><o></o></span>
                    </p>
                    </td>
                    </tr>
                    <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:23.25pt'>
                        <td width=188 style='width:140.9pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;background:#BFBFBF;mso-background-themecolor:background1; mso-background-themeshade:191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                            <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:Tahoma'>Delimeter<o></o></span></b>
                            </p>
                        </td>
                        <td width=188 style='width:140.95pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                            <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:Tahoma'>Result<o></o></span></b>
                            </p>
                        </td>
                    </tr>
                    <tr style='mso-yfti-irow:1'>
                        <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                            <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family: Tahoma'>Base Standards
                                                        <o></o></span></p>
                        </td>
                        <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                            <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family: Tahoma'>
                                                        <?php echo $basestandards; ?>
                                    <o></o></span></p>
                        </td>
                    </tr>
                    <tr style='mso-yfti-irow:1'>
                        <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                            <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style="font-family: Tahoma">Augmenting Models
                                                        <o></o></span></p>
                        </td>
                        <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                            <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family: Tahoma'>
                                                        <?php echo $augmodels; ?>
                                    <o></o></span></p>
                        </td>
                    </tr>
                    </table>
                    </p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:Tahoma'><o>&nbsp;</o>
                            <h3 style="font-family: Tahoma">BACKGROUND INFORMATION</h3>
                            <p style="font-size: 12.0pt">
                        <?php
                            $Query = "SELECT profile FROM `candidates` WHERE `candidateID`='$id'";
                            $Result = $db->query($Query);

                            $row = $Result->fetch(PDO::FETCH_ASSOC);
                            $description = $row['profile'];
                        ?>

                    </p>
                            </span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:Tahoma'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:1.5pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:1.5pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>

                    <div class="container">
                        <div class="container-fluid">
                            <div class="row-fluid">
                                <div class="pull-left">
                                    <?php
                                    //summary A
                                    $qa = "SELECT * FROM `summary_typea`";
                                    $rslta = $db->query($qa);
                                    $rwa = $rslta->fetch(PDO::FETCH_ASSOC);
                                    $firsta = $rwa['firstType'];
                                    $seconda = $rwa['secondType'];
                                    $thirda = $rwa['thirdType'];
                                    $fourtha = $rwa['fourthType'];

                                    //Summary B
                                    $qb = "SELECT * FROM `summary_typeb`";
                                    $rsltb = $db->query($qb);
                                    $rwb = $rsltb->fetch(PDO::FETCH_ASSOC);
                                    $firstb = $rwb['firstType'];
                                    $secondb = $rwb['secondType'];
                                    $thirdb = $rwb['thirdType'];
                                    $fourthb = $rwb['fourthType'];
                                    //summary C
                                    $qc = "SELECT * FROM `summary_typec`";
                                    $rsltc = $db->query($qc);
                                    $rwc = $rsltc->fetch(PDO::FETCH_ASSOC);
                                    $firstc = $rwc['firstType'];
                                    $secondc = $rwc['secondType'];
                                    $thirdc = $rwc['thirdType'];
                                    $fourthc = $rwc['fourthType'];

                                    //summary D
                                    $qd = "SELECT * FROM `summary_typed`";
                                    $rsltd = $db->query($qd);
                                    $rwd = $rsltd->fetch(PDO::FETCH_ASSOC);
                                    $firstd = $rwd['firstType'];
                                    $secondd = $rwd['secondType'];
                                    $thirdd = $rwd['thirdType'];
                                    $fourthd = $rwd['fourthType'];

                                    //summary E
                                    $qe = "SELECT * FROM `summary_typee`";
                                    $rslte = $db->query($qe);
                                    $rwe = $rslte->fetch(PDO::FETCH_ASSOC);
                                    $firste = $rwe['firstType'];
                                    $seconde = $rwe['secondType'];
                                    $thirde = $rwe['thirdType'];
                                    $fourthe = $rwe['fourthType'];

                                    // summary F
                                    $qf = "SELECT * FROM `summary_typef`";
                                    $rsltf = $db->query($qf);
                                    $rwf = $rsltf->fetch(PDO::FETCH_ASSOC);
                                    $firstf = $rwf['firstType'];
                                    $secondf = $rwf['secondType'];
                                    $thirdf = $rwf['thirdType'];
                                    $fourthf = $rwf['fourthType'];

                                    // summary G
                                    $qg = "SELECT * FROM `summary_typeg`";
                                    $rsltg = $db->query($qg);
                                    $rwg = $rsltg->fetch(PDO::FETCH_ASSOC);
                                    $firstg = $rwg['firstType'];
                                    $secondg = $rwg['secondType'];
                                    $thirdg = $rwg['thirdType'];
                                    $fourthg = $rwg['fourthType'];

                                    // summary H
                                    $qh = "SELECT * FROM `summary_typeh`";
                                    $rslth = $db->query($qh);
                                    $rwh = $rslth->fetch(PDO::FETCH_ASSOC);
                                    $firsth = $rwh['firstType'];
                                    $secondh = $rwh['secondType'];
                                    $thirdh = $rwh['thirdType'];
                                    $fourthh = $rwh['fourthType'];

                                    // summary I
                                    $qi = "SELECT * FROM `summary_typei`";
                                    $rslti = $db->query($qi);
                                    $rwi = $rslti->fetch(PDO::FETCH_ASSOC);
                                    $firsti = $rwi['firstType'];
                                    $secondi = $rwi['secondType'];
                                    $thirdi = $rwi['thirdType'];
                                    $fourthi = $rwi['fourthType'];

                                    // summary J
                                    $qj = "SELECT * FROM `summary_typej`";
                                    $rsltj = $db->query($qj);
                                    $rwj = $rsltj->fetch(PDO::FETCH_ASSOC);
                                    $firstj = $rwj['firstType'];
                                    $secondj = $rwj['secondType'];
                                    $thirdj = $rwj['thirdType'];
                                    $fourthj = $rwj['fourthType'];

                                    // summary K
                                    $qk = "SELECT * FROM `summary_typek`";
                                    $rsltk = $db->query($qk);
                                    $rwk = $rsltk->fetch(PDO::FETCH_ASSOC);
                                    $firstk = $rwk['firstType'];
                                    $secondk = $rwk['secondType'];
                                    $thirdk = $rwk['thirdType'];
                                    $fourthk = $rwk['fourthType'];

                                    // summary L
                                    $ql = "SELECT * FROM `summary_typel`";
                                    $rsltl = $db->query($ql);
                                    $rwl = $rsltl->fetch(PDO::FETCH_ASSOC);
                                    $firstl = $rwl['firstType'];
                                    $secondl = $rwl['secondType'];
                                    $thirdl = $rwl['thirdType'];
                                    $fourthl = $rwl['fourthType'];

                                    // summary M
                                    $qm = "SELECT * FROM `summary_typem`";
                                    $rsltm = $db->query($qm);
                                    $rwm = $rsltm->fetch(PDO::FETCH_ASSOC);
                                    $firstm = $rwm['firstType'];
                                    $secondm = $rwm['secondType'];
                                    $thirdm = $rwm['thirdType'];
                                    $fourthm = $rwm['fourthType'];

                                    // summary N
                                    $qn = "SELECT * FROM `summary_typen`";
                                    $rsltn = $db->query($qn);
                                    $rwn = $rsltn->fetch(PDO::FETCH_ASSOC);
                                    $firstn = $rwn['firstType'];
                                    $secondn = $rwn['secondType'];
                                    $thirdn = $rwn['thirdType'];
                                    $fourthn = $rwn['fourthType'];

                                    // summary O
                                    $qo = "SELECT * FROM `summary_typeo`";
                                    $rslto = $db->query($qo);
                                    $rwo = $rslto->fetch(PDO::FETCH_ASSOC);
                                    $firsto = $rwo['firstType'];
                                    $secondo = $rwo['secondType'];
                                    $thirdo = $rwo['thirdType'];
                                    $fourtho = $rwo['fourthType'];

                                    // summary P
                                    $qp = "SELECT * FROM `summary_typep`";
                                    $rsltp = $db->query($qp);
                                    $rwp = $rsltp->fetch(PDO::FETCH_ASSOC);
                                    $firstp = $rwp['firstType'];
                                    $secondp = $rwp['secondType'];
                                    $thirdp = $rwp['thirdType'];
                                    $fourthp = $rwp['fourthType'];

                                    // summary Q
                                    $qq = "SELECT * FROM `summary_typeq`";
                                    $rsltq = $db->query($qq);
                                    $rwq = $rsltq->fetch(PDO::FETCH_ASSOC);
                                    $firstq = $rwq['firstType'];
                                    $secondq = $rwq['secondType'];
                                    $thirdq = $rwq['thirdType'];
                                    $fourthq = $rwq['fourthType'];



                                    $query = "SELECT * FROM `pregnancy_candidates` where candidateID=$id";
                                    $result = $db->query($query);
                                    $row = $result->fetch(PDO::FETCH_ASSOC);
                                    $pregnancyAvg = $row['pregnancyAvg'];

                                    $query1 = "SELECT * FROM `labour_candidates` where candidateID=$id";
                                    $result1 = $db->query($query1);
                                    $row1 = $result1->fetch(PDO::FETCH_ASSOC);
                                    $labourAvg = $row1['labourAvg'];

                                    $query2 = "SELECT * FROM `birthscale_candidates` where candidateID=$id";
                                    $result2 = $db->query($query2);
                                    $row2 = $result2->fetch(PDO::FETCH_ASSOC);
                                    $birthAvg = $row2['birthscaleAvg'];

                                    $query3 = "SELECT * FROM `infant_candidates` where candidateID=$id";
                                    $result3 = $db->query($query3);
                                    $row3 = $result3->fetch(PDO::FETCH_ASSOC);
                                    $infantAvg = $row3['infantAvg'];

                                    $query4 = "SELECT * FROM `earlytr_candidates` where candidateID=$id";
                                    $result4 = $db->query($query4);
                                    $row4 = $result4->fetch(PDO::FETCH_ASSOC);
                                    $earlytrAvg = $row4['earlytrAvg'];

                                    $query5 = "SELECT * FROM `earlydt_candidates` where candidateID=$id";
                                    $result5 = $db->query($query5);
                                    $row5 = $result5->fetch(PDO::FETCH_ASSOC);
                                    $earlydtAvg = $row5['earlydtAvg'];

                                    ?>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <table class=msoTableGrid border=1 cellspacing=0 cellpadding=0
                                           style='border-collapse:collapse;font-family: Tahoma;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
                                        <h3 style="font-family: Tahoma">Oral Screens (Pregnancy to Birth Table)</h3>
                                        <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
                                            <td width=1127 colspan=6 valign=top style='width:845.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family: Tahoma'><o></o></span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:23.25pt'>
                                            <td width=188 style='width:140.9pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;background:#BFBFBF;mso-background-themecolor:background1; mso-background-themeshade:191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-family: Tahoma'>Module<o></o></span></b>
                                                </p>
                                            </td>
                                            <td width=80 style='width:140.95pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-family: Tahoma'>Value<o></o></span></b>
                                                </p>
                                            </td>
                                            <td width=188 style='width:140.95pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-family: Tahoma'>Summary<o></o></span></b>
                                                </p>
                                            </td>

                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family: Tahoma'>Pregnancy Screens
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family: Tahoma'>
                                                        <?php
                                                        if ($pregnancyAvg != null) {
                                                            echo $pregnancyAvg;
                                                        } else {
                                                            echo "No value found!";
                                                        }
                                                        ?>
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family: Tahoma'>
                                                        <?php
                                                        if ($pregnancyAvg >= 70 && $pregnancyAvg <=100) {
                                                            echo $firsta;
                                                        } else if ($pregnancyAvg > 100) {
                                                            echo $seconda;
                                                        } else if ($pregnancyAvg >= 40 && $pregnancyAvg <= 69) {
                                                            echo $thirda;
                                                        } else if ($pregnancyAvg < 40 && $pregnancyAvg != null) {
                                                            echo $fourtha;
                                                        } else if ($pregnancyAvg == NULL) {
                                                            echo "No Summary Found!";
                                                        }
                                                        ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;font-family:Tahoma;margin-bottom:.0001pt;line-height:
  normal'><span>Labour Rubrics
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php
                                                        if ($labourAvg != null) {
                                                            echo $labourAvg;
                                                        } else {
                                                            echo "No value found!";
                                                        }
                                                        ?>
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php
                                                        if ($labourAvg >= 70 && $labourAvg <= 100) {
                                                            echo $firstb;
                                                        } else if ($labourAvg > 100) {
                                                            echo $secondb;
                                                        } else if ($labourAvg >= 40 && $labourAvg <= 69) {
                                                            echo $thirdb;
                                                        } else if ($labourAvg < 40 && $labourAvg != null) {
                                                            echo $fourthb;
                                                        } else if ($labourAvg == NULL) {
                                                            echo "No Summary Found!";
                                                        }
                                                        ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in; font-family: Tahoma;margin-bottom:.0001pt;line-height:
  normal'><span>Birth Scales
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;font-family:Tahoma;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php
                                                        if ($birthAvg != null) {
                                                            echo $birthAvg;
                                                        } else {
                                                            echo "No value found!";
                                                        }
                                                        ?>
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;font-size:12.0pt;font-family: Tahoma;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php
                                                        if ($birthAvg >= 70 && $birthAvg <= 100) {
                                                            echo $firstc;
                                                        } else if ($birthAvg > 100) {
                                                            echo $secondc;
                                                        } else if ($birthAvg >= 40 && $birthAvg <= 69) {
                                                            echo $thirdc;
                                                        } else if ($birthAvg < 40 && $birthAvg != null) {
                                                            echo $fourthc;
                                                        } else if ($birthAvg == NULL) {
                                                            echo "No Summary Found!";
                                                        }
                                                        ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;font-family:Tahoma;margin-bottom:.0001pt;line-height:
  normal'><span>Infant Milestones(0-2 Years)
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family: Tahoma'>
                                                        <?php
                                                        if ($infantAvg != null) {
                                                            echo $infantAvg;
                                                        } else {
                                                            echo "No value found!";
                                                        }
                                                        ?>
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;font-family:Tahoma;margin-bottom:.0001pt;line-height:
  normal'><span >
                                                        <?php
                                                        if ($infantAvg >= 70 && $infantAvg <= 100) {
                                                            echo $firstd;
                                                        } else if ($infantAvg > 100) {
                                                            echo $secondd;
                                                        } else if ($infantAvg >= 40 && $infantAvg <=69) {
                                                            echo $thirdd;
                                                        } else if ($infantAvg < 40 && $infantAvg != null) {
                                                            echo $fourthd;
                                                        } else if ($infantAvg == NULL) {
                                                            echo "No Summary Found!";
                                                        }
                                                        ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;font-family:Tahoma;margin-bottom:.0001pt;line-height:
  normal'><span>Early Talent Rigows (3-6 Years)
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;font-family: Tahoma;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php
                                                        if ($earlytrAvg != null) {
                                                            echo $earlytrAvg;
                                                        } else {
                                                            echo "No value found!";
                                                        }
                                                        ?>
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt; font-family: Tahoma;line-height:
  normal'><span>
                                                        <?php
                                                        if ($earlytrAvg >= 70 && $earlytrAvg <= 100) {
                                                            echo $firste;
                                                        } else if ($earlytrAvg > 100) {
                                                            echo $seconde;
                                                        } else if ($earlytrAvg >= 40 && $earlytrAvg <= 69) {
                                                            echo $thirde;
                                                        } else if ($earlytrAvg < 40 && $earlytrAvg != null) {
                                                            echo $fourthe;
                                                        } else if ($earlytrAvg == NULL) {
                                                            echo "No Summary Found!";
                                                        }
                                                        ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='font-family:Tahoma;margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>Early Depository Talent Domicile
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;font-family: Tahoma;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php
                                                        if ($earlydtAvg != null) {
                                                            echo $earlydtAvg;
                                                        } else {
                                                            echo "No value found!";
                                                        }
                                                        ?>
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;font-family: Tahoma;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php
                                                        if ($earlydtAvg >= 70 && $earlydtAvg <= 100) {
                                                            echo $firstf;
                                                        } else if ($earlydtAvg > 100) {
                                                            echo $secondf;
                                                        } else if ($earlydtAvg >= 40 && $earlydtAvg <= 69) {
                                                            echo $thirdf;
                                                        } else if ($earlydtAvg < 40 && $earlydtAvg != null) {
                                                            echo $fourthf;
                                                        } else if ($earlydtAvg == NULL) {
                                                            echo "No Summary Found!";
                                                        }
                                                        ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                    </table>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:Tahoma'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:1.5pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:1.5pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>

                                    <table class=msoTableGrid border=1 cellspacing=0 cellpadding=0
                                           style='border-collapse:collapse; font-family: Tahoma;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
                                        <h3 style="font-family: Tahoma">Pyscho-Screen Statements</h3>
                                        <!-- PDO FETCH ARRAY-->
                                        <?php
                                        $query = "SELECT * FROM `bptevaluation_candidates` where candidateID=$id";
                                        $result = $db->query($query);
                                        $row = $result->fetch(PDO::FETCH_ASSOC);
                                        $bptevaluationAvg = $row['bptevaluationAvg'];

                                        $query1 = "SELECT * FROM `rsgpscale_candidates` where candidateID=$id";
                                        $result1 = $db->query($query1);
                                        $row1 = $result1->fetch(PDO::FETCH_ASSOC);
                                        $rsgpscaleAvg = $row1['rsgpscaleAvg'];

                                        $query2 = "SELECT * FROM `rsnaptitudes_candidates` where candidateID=$id";
                                        $result2 = $db->query($query2);
                                        $row2 = $result2->fetch(PDO::FETCH_ASSOC);
                                        $rsnaptitudes = $row2['rsnaptitudesAvg'];

                                        $query3 = "SELECT * FROM `learning_candidates` where candidateID=$id";
                                        $result3 = $db->query($query3);
                                        $row3 = $result3->fetch(PDO::FETCH_ASSOC);
                                        $learningAvg = $row3['learningAvg'];
                                        ?>
                                        <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
                                            <td width=1127 colspan=6 valign=top style='width:845.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-family:"Times New Roman","serif"'><o></o></span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:23.25pt'>
                                            <td width=188 style='width:140.9pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;background:#BFBFBF;mso-background-themecolor:background1; mso-background-themeshade:191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span>Module<o></o></span></b>
                                                </p>
                                            </td>
                                            <td width=188 style='width:140.95pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span>Value<o></o></span></b>
                                                </p>
                                            </td>
                                            <td width=188 style='width:140.95pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span>Summary<o></o></span></b>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>BPT Evaluation
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php
                                                        if ($bptevaluationAvg != null) {
                                                            echo $bptevaluationAvg;
                                                        } else {
                                                            echo "No value Found!";
                                                        }
                                                        ?>
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php
                                                        if ($bptevaluationAvg >= 70 && $bptevaluationAvg <= 100) {
                                                            echo $firstg;
                                                        } else if ($bptevaluationAvg > 100) {
                                                            echo $secondg;
                                                        } else if ($bptevaluationAvg >= 40 && $bptevaluationAvg <= 69) {
                                                            echo $thirdg;
                                                        } else if ($bptevaluationAvg < 40 && $bptevaluationAvg != null) {
                                                            echo $fourthg;
                                                        } else if ($bptevaluationAvg == NULL) {
                                                            echo "No Summary Found!";
                                                        }
                                                        ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>Rigow Scales – Generic Personality Scales
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php
                                                        if ($rsgpscaleAvg != null) {
                                                            echo $rsgpscaleAvg;
                                                        } else {
                                                            echo "No value Found!";
                                                        }
                                                        ?>
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><span>
                                                         <?php
                                                         if ($rsgpscaleAvg >= 70 && $rsgpscaleAvg <= 100) {
                                                             echo $firsth;
                                                         } else if ($rsgpscaleAvg > 100) {
                                                             echo $secondh;
                                                         } else if ($rsgpscaleAvg >= 40 && $rsgpscaleAvg <= 69) {
                                                             echo $thirdh;
                                                         } else if ($rsgpscaleAvg < 40 && $rsgpscaleAvg != null) {
                                                             echo $fourthh;
                                                         } else if ($rsgpscaleAvg == NULL) {
                                                             echo "No Summary Found!";
                                                         }
                                                         ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>Rigow Scales – Natural Aptitudes
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php
                                                        if ($rsnaptitudes != null) {
                                                            echo $rsnaptitudes;
                                                        } else {
                                                            echo "No value Found!";
                                                        }
                                                        ?>
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                         <?php
                                                         if ($rsnaptitudes >= 70 && $rsnaptitudes <= 100) {
                                                             echo $firsti;
                                                         } else if ($rsnaptitudes > 100) {
                                                             echo $secondi;
                                                         } else if ($rsnaptitudes >= 40 && $rsnaptitudes <= 69) {
                                                             echo $thirdi;
                                                         } else if ($rsnaptitudes < 40 && $rsnaptitudes != null) {
                                                             echo $fourthi;
                                                         } else if ($rsnaptitudes == NULL) {
                                                             echo "No Summary Found!";
                                                         }
                                                         ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>Rigow Scales - Learning and Product Styles
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php
                                                        if ($learningAvg != null) {
                                                            echo $learningAvg;
                                                        } else {
                                                            echo "No value Found!";
                                                        }
                                                        ?>
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php
                                                        if ($learningAvg >= 70 && $learningAvg <= 100) {
                                                            echo $firstj;
                                                        } else if ($learningAvg > 100) {
                                                            echo $secondj;
                                                        } else if ($learningAvg >= 40 && $learningAvg <= 69) {
                                                            echo $thirdj;
                                                        } else if ($learningAvg < 40 && $learningAvg != null) {
                                                            echo $fourthj;
                                                        } else if ($learningAvg == NULL) {
                                                            echo "No Summary Found!";
                                                        }
                                                        ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                    </table>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:Tahoma'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:1.5pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:1.5pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>

                                    <table class=msoTableGrid border=1 cellspacing=0 cellpadding=0
                                           style='border-collapse:collapse;font-family:Tahoma;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
                                        <h3 style="font-family: Tahoma">Clinical Screen Findings</h3>
                                        <?php
                                        $query = "SELECT * FROM `deposition_candidates` where candidateID=$id";
                                        $result = $db->query($query);
                                        $row = $result->fetch(PDO::FETCH_ASSOC);
                                        $dispositionAvg = $row['dispositionAvg'];

                                        $query1 = "SELECT * FROM `candidate_quantum` where candidateID=$id";
                                        $result1 = $db->query($query1);
                                        $row1 = $result1->fetch(PDO::FETCH_ASSOC);
                                        $quantumAvg = $row1['quantumAvg'];

                                        $query2 = "SELECT * FROM `hbdiametric_candidates` where candidateID=$id";
                                        $result2 = $db->query($query2);
                                        $row2 = $result2->fetch(PDO::FETCH_ASSOC);
                                        $hbdiametricAvg = $row2['hbdiametricAvg'];

                                        $query3 = "SELECT * FROM `lblstratification_candidates` where candidateID=$id";
                                        $result3 = $db->query($query3);
                                        $row3 = $result3->fetch(PDO::FETCH_ASSOC);
                                        $lblstratificationAvg = $row3['lblstratificationAvg'];

                                        $query3 = "SELECT * FROM `mblstratification_candidates` where candidateID=$id";
                                        $result3 = $db->query($query3);
                                        $row3 = $result3->fetch(PDO::FETCH_ASSOC);
                                        $mblstratificationAvg = $row3['mblstratificationAvg'];

                                        $query3 = "SELECT * FROM `rblstratification_candidates` where candidateID=$id";
                                        $result3 = $db->query($query3);
                                        $row3 = $result3->fetch(PDO::FETCH_ASSOC);
                                        $rblstratificationAvg = $row3['rblstratificationAvg'];

                                        $query3 = "SELECT * FROM `anthropometric_candidates` where candidateID=$id";
                                        $result3 = $db->query($query3);
                                        $row3 = $result3->fetch(PDO::FETCH_ASSOC);
                                        $anthropometricAvg = $row3['anthropometricAvg'];
                                        ?>
                                        <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
                                            <td width=1127 colspan=6 valign=top style='width:845.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span><o></o></span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:23.25pt'>
                                            <td width=188 style='width:140.9pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;background:#BFBFBF;mso-background-themecolor:background1; mso-background-themeshade:191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span>Module<o></o></span></b>
                                                </p>
                                            </td>
                                            <td width=188 style='width:140.95pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span>Value<o></o></span></b>
                                                </p>
                                            </td>
                                            <td width=188 style='width:140.95pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span>Summary<o></o></span></b>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>Natural Dispositions and Endowments
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php
                                                        if ($dispositionAvg != null) {
                                                            echo $dispositionAvg;
                                                        } else {
                                                            echo "No value found!";
                                                        }

                                                        ?>
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                          <?php
                                                          if ($dispositionAvg >= 70 && $dispositionAvg <= 100) {
                                                              echo $firstk;
                                                          } else if ($dispositionAvg > 100) {
                                                              echo $secondk;
                                                          } else if ($dispositionAvg >= 40 && $dispositionAvg <= 69) {
                                                              echo $thirdk;
                                                          } else if ($dispositionAvg < 40 && $dispositionAvg != null) {
                                                              echo $fourthk;
                                                          } else if ($dispositionAvg == NULL) {
                                                              echo "No Summary Found!";
                                                          }
                                                          ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>Quantum Points
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php
                                                        if ($quantumAvg != null) {
                                                            echo $quantumAvg;
                                                        } else {
                                                            echo "No value found!";
                                                        }

                                                        ?>
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                         <?php
                                                         if ($quantumAvg >= 70 && $quantumAvg <= 100) {
                                                             echo $firstl;
                                                         } else if ($quantumAvg > 100) {
                                                             echo $secondl;
                                                         } else if ($quantumAvg >= 40 && $quantumAvg <= 69) {
                                                             echo $thirdl;
                                                         } else if ($quantumAvg < 40 && $quantumAvg != null) {
                                                             echo $fourthl;
                                                         } else if ($quantumAvg == NULL) {
                                                             echo "No Summary Found!";
                                                         }
                                                         ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>Head and Brain Diametrics
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                         <?php
                                                         if ($hbdiametricAvg != null) {
                                                             echo $hbdiametricAvg;
                                                         } else {
                                                             echo "No value found!";
                                                         }

                                                         ?>
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php
                                                        if ($hbdiametricAvg >= 70 && $hbdiametricAvg <= 100) {
                                                            echo $firstm;
                                                        } else if ($hbdiametricAvg > 100) {
                                                            echo $secondm;
                                                        } else if ($hbdiametricAvg >= 40 && $hbdiametricAvg <= 69) {
                                                            echo $thirdm;
                                                        } else if ($hbdiametricAvg < 40 && $hbdiametricAvg != null) {
                                                            echo $fourthm;
                                                        } else if ($hbdiametricAvg == NULL) {
                                                            echo "No Summary Found!";
                                                        }
                                                        ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>Left Brain Limbic and Signal Stratification
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                         <?php
                                                         if ($lblstratificationAvg != null) {
                                                             echo $lblstratificationAvg;
                                                         } else {
                                                             echo "No value found!";
                                                         }

                                                         ?>
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php
                                                        if ($lblstratificationAvg >= 70 && $lblstratificationAvg <=100) {
                                                            echo $firstn;
                                                        } else if ($lblstratificationAvg > 100) {
                                                            echo $secondn;
                                                        } else if ($lblstratificationAvg >= 40 && $lblstratificationAvg <= 69) {
                                                            echo $thirdn;
                                                        } else if ($lblstratificationAvg < 40 && $lblstratificationAvg != null) {
                                                            echo $fourthn;
                                                        } else if ($lblstratificationAvg == NULL) {
                                                            echo "No Summary Found!";
                                                        }
                                                        ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>Middle Brain Limbic and Signal Stratification
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                          <?php
                                                          if ($mblstratificationAvg != null) {
                                                              echo $mblstratificationAvg;
                                                          } else {
                                                              echo "No value found!";
                                                          }

                                                          ?>
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                       <?php
                                                       if ($mblstratificationAvg >= 70 && $mblstratificationAvg <= 100) {
                                                           echo $firsto;
                                                       } else if ($mblstratificationAvg > 100) {
                                                           echo $secondo;
                                                       } else if ($mblstratificationAvg >= 40 && $mblstratificationAvg <= 69) {
                                                           echo $thirdo;
                                                       } else if ($mblstratificationAvg < 40 && $mblstratificationAvg != null) {
                                                           echo $fourtho;
                                                       } else if ($mblstratificationAvg == NULL) {
                                                           echo "No Summary Found!";
                                                       }
                                                       ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>Right Brain Limbic and Signal Stratification
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                           <?php
                                                           if ($rblstratificationAvg != null) {
                                                               echo $rblstratificationAvg;
                                                           } else {
                                                               echo "No value found!";
                                                           }

                                                           ?>
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                       <?php
                                                       if ($rblstratificationAvg >= 70 && $rblstratificationAvg <= 100) {
                                                           echo $firstp;
                                                       } else if ($rblstratificationAvg > 100) {
                                                           echo $secondp;
                                                       } else if ($rblstratificationAvg >= 40 && $rblstratificationAvg <= 69) {
                                                           echo $thirdp;
                                                       } else if ($rblstratificationAvg < 40 && $rblstratificationAvg != null) {
                                                           echo $fourthp;
                                                       } else if ($rblstratificationAvg == NULL) {
                                                           echo "No Summary Found!";
                                                       }
                                                       ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>Anthropometric Stratification
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                           <?php
                                                           if ($anthropometricAvg != null) {
                                                               echo $anthropometricAvg;
                                                           } else {
                                                               echo "No value found!";
                                                           }

                                                           ?>
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                       <?php
                                                       if ($anthropometricAvg >= 70 && $anthropometricAvg <= 100) {
                                                           echo $firstq;
                                                       } else if ($anthropometricAvg > 100) {
                                                           echo $secondq;
                                                       } else if ($anthropometricAvg >= 40 && $anthropometricAvg <= 69) {
                                                           echo $thirdq;
                                                       } else if ($anthropometricAvg < 40 && $anthropometricAvg != null) {
                                                           echo $fourthq;
                                                       } else if ($anthropometricAvg == NULL) {
                                                           echo "No Summary Found!";
                                                       }
                                                       ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                    </table>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:Tahoma'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:1.5pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:1.5pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <table class=msoTableGrid border=1 cellspacing=0 cellpadding=0
                                           style='border-collapse:collapse;font-family:Tahoma;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
                                        <h3 style="font-family: Tahoma">Expert Statements</h3>
                                        <!-- PDO FETCH ARRAY-->
                                        <?php
                                        $Query = "SELECT * FROM `expert_statements` WHERE `candidateID`='$id'";
                                        $Result = $db->query($Query);

                                        $row = $Result->fetch(PDO::FETCH_ASSOC);
                                        $expert = $row['expert'];
                                        $observation = $row['general_observation'];
                                        $personality = $row['personality_rubric'];
                                        $style = $row['learning_style'];
                                        $domain = $row['talent_domain'];
                                        ?>
                                        <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
                                            <td width=1127 colspan=6 valign=top style='width:845.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span><o></o></span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:23.25pt'>
                                            <td width=188 style='width:140.9pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;background:#BFBFBF;mso-background-themecolor:background1; mso-background-themeshade:191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span>Item<o></o></span></b>
                                                </p>
                                            </td>
                                            <td width=188 style='width:140.95pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span>Result<o></o></span></b>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>General Observation
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php echo $observation; ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>Personality Rubrics
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php echo $personality; ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>Learning Styles
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php echo $style; ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>Talent Domains
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php echo $domain; ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                    </table>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:Tahoma'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:1.5pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:1.5pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <table class=msoTableGrid border=1 cellspacing=0 cellpadding=0
                                           style='border-collapse:collapse;font-family:Tahoma;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
                                        <h3 style="font-family: Tahoma">Conclusions and Recommendations</h3>
                                        <!-- PDO FETCH ARRAY-->
                                        <?php
                                        $Query = "SELECT * FROM `conclusions` WHERE `candidateID`='$id'";
                                        $Result = $db->query($Query);

                                        $row = $Result->fetch(PDO::FETCH_ASSOC);
                                        $expert = $row['expert'];
                                        $genre = $row['talent_genre_dev'];
                                        $modifiers = $row['modifiers'];
                                        $academic = $row['academic_theme_scale'];
                                        $occupation = $row['occupation_theme'];
                                        ?>
                                        <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
                                            <td width=1127 colspan=6 valign=top style='width:845.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span><o></o></span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:23.25pt'>
                                            <td width=188 style='width:140.9pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;background:#BFBFBF;mso-background-themecolor:background1; mso-background-themeshade:191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span>Item<o></o></span></b>
                                                </p>
                                            </td>
                                            <td width=188 style='width:140.95pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span>Result<o></o></span></b>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>Talent Genre Development
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php echo $genre; ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>Modifiers and Enrichment Modules
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php echo $modifiers; ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>Typical Academic Theme Scales
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php echo $academic; ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                        <tr style='mso-yfti-irow:1'>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>Typical Potential Occupation Theme
                                                        <o></o></span></p>
                                            </td>
                                            <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span>
                                                        <?php echo $occupation; ?>
                                                        <o></o></span></p>
                                            </td>
                                        </tr>
                                    </table>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>

                                    <p class=msoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o>&nbsp;</o></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include('#'); ?>
</div>
</body>
<?php
}
?>
</html>