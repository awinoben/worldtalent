<?php
if ((isset($_POST['email'])) && (isset($_POST['password']))) {
    // get user details (reg_no & password)
    $email = $_POST['email'];
    $pass_ = $_POST['password'];

    require_once "../connect/dbconn.php";	// connect to db
   //encrypt password
    $passwordHash = md5($pass_);


    // check if the user (reg_no) is registered)
    $userQuery = "SELECT * FROM `users` WHERE `email`='$email' AND `role`='Psycho'";
    $userResult = $db->query($userQuery);
    $userCount = $userResult->rowCount();

    if ($userCount == 1) {
        // user is registered
        // check if password corresponds to that reg_no
        $loginQuery = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$passwordHash' AND `role`='Psycho'";
        $queryResult = $db->query($loginQuery);
        $row = $queryResult->fetch(PDO::FETCH_ASSOC);

        $rowCount = $queryResult->rowCount();
        if ($rowCount == 1) {
            // password is correct
            // login is successful
            session_start();
            $_SESSION['userID'] = $row['userID'];
            $_SESSION['firstName']=$row['firstName'];
            $_SESSION['middleName']=$row['middleName'];
            $_SESSION['lastName']=$row['lastName'];
            $_SESSION['region']=$row['region'];
            $_SESSION['country']=$row['country'];
            $_SESSION['email']=$row['email'];
            $_SESSION['phone']=$row['phone'];
            $_SESSION['userTitle']=$row['userTitle'];
            header('location:dashboard.php');
            echo "allowed";
        } else if ($rowCount != 1) {
            // password does not correspond
            // login denied
            //echo $exception->getMessage();
            echo "denied";
        }
    } else {
        // user (reg_no) is not registered
        echo "unregistered";
    }
} else {
    // user details (reg_no & password) were not found
    echo "empty";
}