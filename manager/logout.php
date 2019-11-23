<?php
include ('../connect/dbconn.php');
include('session.php');

unset($_SESSION['userID']);
unset($_SESSION['firstName']);
unset($_SESSION['middleName']);
unset($_SESSION['lastName']);
unset($_SESSION['region']);
unset($_SESSION['country']);
unset($_SESSION['email']);
unset($_SESSION['phone']);

header('location:login.php');