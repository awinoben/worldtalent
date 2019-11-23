<?php
require_once "../connect/dbconn.php";
include ('session.php');
//deleting observation
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
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Add City/Town</h2>
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
                            <form class="form-horizontal form-label-left" novalidate action="add-cty.php" method="post">
                                <div class="row">
                                    <div class="col-md-4 item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Country</label>
                                        <div class="col-xs-12">
                                            <select class="form-control" name="countryId" required>
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
                                    <div class="col-md-4 item form-group">
                                        <label for="middle-name" class="control-label col-md-6 col-sm-3 col-xs-12 text-primary">City/Town</label>
                                        <div class="col-xs-12">
                                            <input id="name" class="form-control col-md-7 col-xs-12" type="text" placeholder="Country Name.." name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-3 item form-group">
                                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 text-primary"><br></label>
                                        <div class="col-xs-12">
                                            <button id="send" type="submit" name="save" class="form-control btn btn-success">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="ln_solid"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="x_title">
                                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="myInput" name="city" onkeyup="myFunction()" placeholder="Search City...">
                                                <span class="input-group-btn">
                      <button class="btn btn-primary" type="button">Go</button>
                    </span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <!-- start project list -->
                                        <table class="table table-striped projects" id="myTable">
                                            <thead>
                                            <tr>
                                                <th style="width: 15%">Country</th>
                                                <th style="width: 15%">City/Town</th>
                                                <th style="width: 20%">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $query = "SELECT * FROM `cities` ORDER BY cityName ASC LIMIT 15";
                                            $result = $db->query($query);
                                            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                                                $cityId = $row['Id'];
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['countryId'];?></td>
                                                    <td><?php echo $row['cityName'];?></td>
                                                    <td>
                                                        <a href="edit-city.php?cityId=<?php echo $cityId; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Update</a>
                                                        <a href="delete.php?cityId=<?php echo $cityId; ?>&&action=parmdel" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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
<!-- Modal -->
<!-- /.modal-dialog -->
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