<?php

require_once "../connect/dbconn.php";  // connect to database

if (isset($_POST['candID']) ) {
    // get the details of the new user  to register
    $id = $_POST['candID'];
    $imgfile=$_FILES["photo"]["name"];

    // get the  image extension
    $extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
    // allowed extensions
    $allowed_extensions = array(".jpg",".JPG",".JPEG",".jpeg",".PNG",".png",".gif");
    if(!in_array($extension,$allowed_extensions))
    {
        echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif/pdf,doc/docx format allowed');</script>";
    }
    else{
        // check if user(email) exists
        $userQuery = "SELECT * FROM `candidates` WHERE `candidateID`='$id'";
        $userResult = $db->query($userQuery);
        $userCount = $userResult->rowCount();

        //rename the image file
        $imgnewfile=md5($imgfile).$extension;
// Code for move image and document into directory
        move_uploaded_file($_FILES["photo"]["tmp_name"],"candidatephotos/".$imgnewfile);

        if ($userCount > 0) {
            // user (reg_no) does not exist

            // execute registration query(insert)
            $registerQuery = "UPDATE `candidates` SET photo=? WHERE candidateID=$id";
            try {
                $q=$db->prepare($registerQuery);
                //todo
                $q->execute(array($imgnewfile));


                echo "Image updated successfully!!";  // successful
                //redirect to registration page
                header('location:viewCandidate.php');

            } catch (PDOException $exception) {
                //echo $exception->getMessage();
                echo "problem encountered during update";     // failed
            }
        } else {
            // user already exists0
            // registration is unnecesary
            // do nothing
            echo "candidate doesnt exist";
        }

    }


} else {
    // the expected details of the new user were not found
    echo "empty";
}