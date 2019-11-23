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

    <title>World Talent| </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <script>
        function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
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
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-left top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="myInput" name="candidate" onkeyup="myFunction()" placeholder="Search for candidate...">
                                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="button">Go</button>
                    </span>
                                </div>
                            </div>
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
                            <!-- start project list -->
                            <table class="table table-striped projects" id="myTable">
                                <thead>
                                <tr>
                                    <th style="width: 1%">#</th>
                                    <th style="width: 15%">Candidate Name</th>
                                    <th style="width:5%">Age</th>
                                    <th style="width: 5%">Gender</th>
                                    <th style="width: 15%">Email</th>
                                    <th style="width: 15%">Phone</th>
                                    <th style="width: 20%">#Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $region=$_SESSION['region'];
                                $country=$_SESSION['country'];
                                $query = "SELECT * FROM `candidates` WHERE region='$region' AND country='$country' ORDER BY candidateID DESC";
                                $result = $db->query($query);
                                while($row = $result->fetch(PDO::FETCH_ASSOC)){
                                    ?>
                                    <tr>
                                        <td><i class="fa fa-user"></i> </td>
                                        <td>
                                            <a><?php echo $row['firstName']." ".$row['middleName']." ".$row['lastName'];?></a>
                                        </td>
                                        <td>
                                            <a><?php echo $row['age'];?></a>
                                        </td>
                                        <td>
                                            <a><?php echo $row['gender'];?></a>
                                        </td>
                                        <td>
                                            <a><?php echo $row['email'];?></a>
                                        </td>
                                        <td>
                                            <a><?php echo $row['phone'];?></a>
                                        </td>
                                        <td>
                                            <a href="editcandidate.php?candidateID=<?php echo $row['candidateID'];?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                            <a href="delete.php?deleteId=<?php echo $row['candidateID'];?>&&action=parmdel" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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
    <!-- /page content -->

    <!-- footer content -->
    <footer>
        <div class="pull-right">
            World Talent Federation<a href="#"> &copy 2018</a>
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
<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
</body>
</html>