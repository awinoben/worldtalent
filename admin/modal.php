<?php
require_once "../connect/dbconn.php";  // connect to database
if (isset($_POST['observeID'])) {
    // get the details of the new user  to register
//    echo $password;
//    return;


    // check if user(email) exists
    $query = "SELECT * FROM `general_observation` WHERE `Id`='".$_POST["observeID"]."'";
    $result = $db->query($query);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    echo json_encode($row);

} else {
    // the expected details of the new user were not found
    echo "empty";
}