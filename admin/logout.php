<?php
include ('../connect/dbconn.php');
include('session.php');

unset($_SESSION['userID']);
unset($_SESSION['firstName']);
unset($_SESSION['middleName']);
unset($_SESSION['lastName']);
unset($_SESSION['email']);
unset($_SESSION['phone']);

//session_unset();

header('location:login.php');