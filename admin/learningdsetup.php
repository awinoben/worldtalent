<?php
if (isset($_POST['domicileA']) && isset($_POST['domicileB']) && isset($_POST['domicileC']) && isset($_POST['domicileD']) && isset($_POST['domicileE']) && isset($_POST['domicileF']) && isset($_POST['domicileG']) && isset($_POST['domicileH'])) {
    // get the details of the new user  to register
    $domicileA = $_POST['domicileA'];
    $domicileB = $_POST['domicileB'];
    $domicileC = $_POST['domicileC'];
    $domicileD = $_POST['domicileD'];
    $domicileE = $_POST['domicileE'];
    $domicileF = $_POST['domicileF'];
    $domicileG = $_POST['domicileG'];
    $domicileH = $_POST['domicileH'];

    require_once "../connect/dbconn.php";  // connect to database

    // check if domiciles exists for that
    if ($domicileA !=null) {
        // user (reg_no) does not exist

        // execute  query(insert) for quantum Ai
        $setupQueryA1 = "UPDATE `learning_domicile_setup` SET quantumDescription=? WHERE quantumCode='A'";
        try {
            $A1=$db->prepare($setupQueryA1);
            //todo
            $A1->execute(array($domicileA));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:learningdomicilesetup.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        echo "no values found for A";
    }

    //update for quantum B domiciles
    if ($domicileB !=null) {
        // user (reg_no) does not exist

        // execute  query(insert) for quantum Ai
        $setupQueryB1 = "UPDATE `learning_domicile_setup` SET quantumDescription=? WHERE quantumCode='B'";
        try {
            $B1=$db->prepare($setupQueryB1);
            //todo
            $B1->execute(array($domicileB));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:learningdomicilesetup.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        echo "no values found for B";
    }

    //update for quantum C domiciles
    if ($domicileC!=null) {
        // user (reg_no) does not exist

        // execute  query(insert) for quantum Ci
        $setupQueryC1 = "UPDATE `learning_domicile_setup` SET quantumDescription=? WHERE quantumCode='C'";
        try {
            $C1=$db->prepare($setupQueryC1);
            //todo
            $C1->execute(array($domicileC));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:learningdomicilesetup.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        echo "no values found for quantum C";
    }

    //update for quantum D domiciles
    if ($domicileD!=null) {
        // user (reg_no) does not exist

        // execute  query(insert) for quantum Ci
        $setupQueryD1 = "UPDATE `learning_domicile_setup` SET quantumDescription=? WHERE quantumCode='D'";
        try {
            $D1=$db->prepare($setupQueryD1);
            //todo
            $D1->execute(array($domicileD));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:learningdomicilesetup.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        echo "no values found for quantum D";
    }

    //update for quantum E domiciles
    if ($domicileE!=null) {
        // user (reg_no) does not exist

        // execute  query(insert) for quantum Ci
        $setupQueryE1 = "UPDATE `learning_domicile_setup` SET quantumDescription=? WHERE quantumCode='E'";
        try {
            $E1=$db->prepare($setupQueryE1);
            //todo
            $E1->execute(array($domicileE,));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:learningdomicilesetup.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        echo "no values found for quantum E";
    }

    //update for quantum F domiciles
    if ($domicileF!=null) {
        // user (reg_no) does not exist

        // execute  query(insert) for quantum Ci
        $setupQueryF1 = "UPDATE `learning_domicile_setup` SET quantumDescription=? WHERE quantumCode='F'";
        try {
            $F1=$db->prepare($setupQueryF1);
            //todo
            $F1->execute(array($domicileF));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:learningdomicilesetup.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        echo "no values found for quantum F";
    }

    //update for quantum G domiciles
    if ($domicileG) {
        // user (reg_no) does not exist

        // execute  query(insert) for quantum Ci
        $setupQueryG1 = "UPDATE `learning_domicile_setup` SET quantumDescription=? WHERE quantumCode='G'";
        try {
            $G1=$db->prepare($setupQueryG1);
            //todo
            $G1->execute(array($domicileG));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:learningdomicilesetup.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        echo "no values found for quantum G";
    }
    //update for quantum G domiciles
    if ($domicileH!=null) {
        // user (reg_no) does not exist

        // execute  query(insert) for quantum Hi
        $setupQueryH1 = "UPDATE `learning_domicile_setup` SET quantumDescription=? WHERE quantumCode='H'";
        try {
            $H1=$db->prepare($setupQueryH1);
            //todo
            $H1->execute(array($domicileH));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:learningdomicilesetup.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        echo "no values found for quantum H";
    }
}
else
{
    // the expected details of the new user were not found
    echo "empty RECords";
}