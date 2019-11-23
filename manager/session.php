<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 31/08/2018
 * Time: 11:53
 */

// start session
session_start();

// check whether session variable is present
if ((!isset($_SESSION['userID'])) || (trim($_SESSION['userID'] == ''))) {
    // session is not set
    // redirect to login

    header("location: login.php");
    exit();
}
$_SESSION['userID'];
$_SESSION['firstName'];
$_SESSION['middleName'];
$_SESSION['lastName'];
$_SESSION['region'];
$_SESSION['country'];
$_SESSION['email'];
$_SESSION['phone'];
$_SESSION['userTitle'];
