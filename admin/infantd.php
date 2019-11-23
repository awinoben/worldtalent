<?php
if (isset($_POST['Ai_Descp']) || isset($_POST['Bi_Descp']) || isset($_POST['Ci_Descp']) || isset($_POST['Di_Descp'])) {
    // get the details of the new user  to register
    $Ai_Descp = $_POST['Ai_Descp'];
    $Aii_Descp = $_POST['Aii_Descp'];
    $Aiii_Descp = $_POST['Aiii_Descp'];
    $Aiv_Descp = $_POST['Aiv_Descp'];
    $Ai_Prec = $_POST['Ai_Prec'];
    $Aii_Prec = $_POST['Aii_Prec'];
    $Aiii_Prec = $_POST['Aiii_Prec'];
    $Aiv_Prec = $_POST['Aiv_Prec'];

    //B
    $Bi_Descp = $_POST['Bi_Descp'];
    $Bii_Descp = $_POST['Bii_Descp'];
    $Biii_Descp = $_POST['Biii_Descp'];
    $Biv_Descp = $_POST['Biv_Descp'];
    $Bi_Prec = $_POST['Bi_Prec'];
    $Bii_Prec = $_POST['Bii_Prec'];
    $Biii_Prec = $_POST['Biii_Prec'];
    $Biv_Prec = $_POST['Biv_Prec'];

    //C
    $Ci_Descp = $_POST['Ci_Descp'];
    $Cii_Descp = $_POST['Cii_Descp'];
    $Ciii_Descp = $_POST['Ciii_Descp'];
    $Civ_Descp = $_POST['Civ_Descp'];
    $Ci_Prec = $_POST['Ci_Prec'];
    $Cii_Prec = $_POST['Cii_Prec'];
    $Ciii_Prec = $_POST['Ciii_Prec'];
    $Civ_Prec = $_POST['Civ_Prec'];

    //D
    $Di_Descp = $_POST['Di_Descp'];
    $Dii_Descp = $_POST['Dii_Descp'];
    $Diii_Descp = $_POST['Diii_Descp'];
    $Div_Descp = $_POST['Div_Descp'];
    $Di_Prec = $_POST['Di_Prec'];
    $Dii_Prec = $_POST['Dii_Prec'];
    $Diii_Prec = $_POST['Diii_Prec'];
    $Div_Prec = $_POST['Div_Prec'];

    //E
    $Ei_Descp = $_POST['Ei_Descp'];
    $Eii_Descp = $_POST['Eii_Descp'];
    $Eiii_Descp = $_POST['Eiii_Descp'];
    $Eiv_Descp = $_POST['Eiv_Descp'];
    $Ei_Prec = $_POST['Ei_Prec'];
    $Eii_Prec = $_POST['Eii_Prec'];
    $Eiii_Prec = $_POST['Eiii_Prec'];
    $Eiv_Prec = $_POST['Eiv_Prec'];

    //F
    $Fi_Descp = $_POST['Fi_Descp'];
    $Fii_Descp = $_POST['Fii_Descp'];
    $Fiii_Descp = $_POST['Fiii_Descp'];
    $Fiv_Descp = $_POST['Fiv_Descp'];
    $Fi_Prec = $_POST['Fi_Prec'];
    $Fii_Prec = $_POST['Fii_Prec'];
    $Fiii_Prec = $_POST['Fiii_Prec'];
    $Fiv_Prec = $_POST['Fiv_Prec'];

    //G
    $Gi_Descp = $_POST['Gi_Descp'];
    $Gii_Descp = $_POST['Gii_Descp'];
    $Giii_Descp = $_POST['Giii_Descp'];
    $Giv_Descp = $_POST['Giv_Descp'];
    $Gi_Prec = $_POST['Gi_Prec'];
    $Gii_Prec = $_POST['Gii_Prec'];
    $Giii_Prec = $_POST['Giii_Prec'];
    $Giv_Prec = $_POST['Giv_Prec'];

    //H
    $Hi_Descp = $_POST['Hi_Descp'];
    $Hii_Descp = $_POST['Hii_Descp'];
    $Hiii_Descp = $_POST['Hiii_Descp'];
    $Hiv_Descp = $_POST['Hiv_Descp'];
    $Hi_Prec = $_POST['Hi_Prec'];
    $Hii_Prec = $_POST['Hii_Prec'];
    $Hiii_Prec = $_POST['Hiii_Prec'];
    $Hiv_Prec = $_POST['Hiv_Prec'];

    require_once "../connect/dbconn.php";  // connect to database

    // check if domiciles exists for that
    if ($_POST['quantumPoint']=="A") {
        // user (reg_no) does not exist

        // execute  query(insert) for quantum Ai
        $setupQueryA1 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Ai'";
        try {
            $A1=$db->prepare($setupQueryA1);
            //todo
            $A1->execute(array($Ai_Descp,$Ai_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
        // execute  query(insert) for quantum Aii
        $setupQueryA2 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Aii'";
        try {
            $A2=$db->prepare($setupQueryA2);
            //todo
            $A2->execute(array($Aii_Descp,$Aii_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
        // execute  query(insert) for quantum Aiii
        $setupQueryA3 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Aiii'";
        try {
            $A3=$db->prepare($setupQueryA3);
            //todo
            $A3->execute(array($Aiii_Descp,$Aiii_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
        // execute  query(insert) for quantum Aiv
        $setupQueryA4 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Aiv'";
        try {
            $A4=$db->prepare($setupQueryA4);
            //todo
            $A4->execute(array($Aiv_Descp,$Aiv_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        echo "no values found for A";
    }

    //update for quantum B domiciles
    if ($_POST['quantumPoint']=="B") {
        // user (reg_no) does not exist

        // execute  query(insert) for quantum Ai
        $setupQueryB1 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Bi'";
        try {
            $B1=$db->prepare($setupQueryB1);
            //todo
            $B1->execute(array($Bi_Descp,$Bi_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
        // execute  query(insert) for quantum Aii
        $setupQueryB2 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Bii'";
        try {
            $B2=$db->prepare($setupQueryB2);
            //todo
            $B2->execute(array($Bii_Descp,$Bii_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
        // execute  query(insert) for quantum Biii
        $setupQueryB3 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Biii'";
        try {
            $B3=$db->prepare($setupQueryB3);
            //todo
            $B3->execute(array($Biii_Descp,$Biii_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
        // execute  query(insert) for quantum Biv
        $setupQueryB4 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Biv'";
        try {
            $B4=$db->prepare($setupQueryB4);
            //todo
            $B4->execute(array($Biv_Descp,$Biv_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        echo "no values found for B";
    }

    //update for quantum C domiciles
    if ($_POST['quantumPoint']=="C") {
        // user (reg_no) does not exist

        // execute  query(insert) for quantum Ci
        $setupQueryC1 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Ci'";
        try {
            $C1=$db->prepare($setupQueryC1);
            //todo
            $C1->execute(array($Ci_Descp,$Ci_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
        // execute  query(insert) for quantum Cii
        $setupQueryC2 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Cii'";
        try {
            $C2=$db->prepare($setupQueryC2);
            //todo
            $C2->execute(array($Cii_Descp,$Cii_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
        // execute  query(insert) for quantum Ciii
        $setupQueryC3 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Ciii'";
        try {
            $C3=$db->prepare($setupQueryC3);
            //todo
            $C3->execute(array($Ciii_Descp,$Ciii_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
        // execute  query(insert) for quantum Civ
        $setupQueryC4 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Civ'";
        try {
            $C4=$db->prepare($setupQueryC4);
            //todo
            $C4->execute(array($Civ_Descp,$Civ_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        echo "no values found for quantum C";
    }

    //update for quantum D domiciles
    if ($_POST['quantumPoint']=="D") {
        // user (reg_no) does not exist

        // execute  query(insert) for quantum Di
        $setupQueryD1 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Di'";
        try {
            $D1=$db->prepare($setupQueryD1);
            //todo
            $D1->execute(array($Di_Descp,$Di_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
        // execute  query(insert) for quantum Dii
        $setupQueryD2 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Dii'";
        try {
            $D2=$db->prepare($setupQueryD2);
            //todo
            $D2->execute(array($Dii_Descp,$Dii_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
        // execute  query(insert) for quantum Diii
        $setupQueryD3 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Diii'";
        try {
            $D3=$db->prepare($setupQueryD3);
            //todo
            $D3->execute(array($Diii_Descp,$Diii_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }

        // execute  query(insert) for quantum Div
        $setupQueryD4 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Div'";
        try {
            $D4=$db->prepare($setupQueryD4);
            //todo
            $D4->execute(array($Div_Descp,$Div_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        echo "no values found for quantum D";
    }

    //update for quantum E domiciles
    if ($_POST['quantumPoint']=="E") {
        // user (reg_no) does not exist

        // execute  query(insert) for quantum Ei
        $setupQueryE1 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Ei'";
        try {
            $E1=$db->prepare($setupQueryE1);
            //todo
            $E1->execute(array($Ei_Descp,$Ei_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
        // execute  query(insert) for quantum Eii
        $setupQueryE2 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Eii'";
        try {
            $E2=$db->prepare($setupQueryE2);
            //todo
            $E2->execute(array($Eii_Descp,$Eii_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
        // execute  query(insert) for quantum Eiii
        $setupQueryE3 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Eiii'";
        try {
            $E3=$db->prepare($setupQueryE3);
            //todo
            $E3->execute(array($Eiii_Descp,$Eiii_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
        // execute  query(insert) for quantum Eiv
        $setupQueryE4 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Eiv'";
        try {
            $E4=$db->prepare($setupQueryE4);
            //todo
            $E4->execute(array($Eiv_Descp,$Eiv_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        echo "no values found for quantum E";
    }

    //update for quantum F domiciles
    if ($_POST['quantumPoint']=="F") {
        // user (reg_no) does not exist

        // execute  query(insert) for quantum Fi
        $setupQueryF1 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Fi'";
        try {
            $F1=$db->prepare($setupQueryF1);
            //todo
            $F1->execute(array($Fi_Descp,$Fi_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
        // execute  query(insert) for quantum Fii
        $setupQueryF2 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Fii'";
        try {
            $F2=$db->prepare($setupQueryF2);
            //todo
            $F2->execute(array($Fii_Descp,$Fii_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
        // execute  query(insert) for quantum Fiii
        $setupQueryF3 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Fiii'";
        try {
            $F3=$db->prepare($setupQueryF3);
            //todo
            $F3->execute(array($Fiii_Descp,$Fiii_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
        // execute  query(insert) for quantum Fiv
        $setupQueryF4 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Fiv'";
        try {
            $F4=$db->prepare($setupQueryF4);
            //todo
            $F4->execute(array($Fiv_Descp,$Fiv_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        echo "no values found for quantum F";
    }

    //update for quantum G domiciles
    if ($_POST['quantumPoint']=="G") {
        // user (reg_no) does not exist

        // execute  query(insert) for quantum Gi
        $setupQueryG1 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Gi'";
        try {
            $G1=$db->prepare($setupQueryG1);
            //todo
            $G1->execute(array($Gi_Descp,$Gi_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
        // execute  query(insert) for quantum Gii
        $setupQueryG2 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Gii'";
        try {
            $G2=$db->prepare($setupQueryG2);
            //todo
            $G2->execute(array($Gii_Descp,$Gii_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
        // execute  query(insert) for quantum Giii
        $setupQueryG3 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Giii'";
        try {
            $G3=$db->prepare($setupQueryG3);
            //todo
            $G3->execute(array($Giii_Descp,$Giii_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
        // execute  query(insert) for quantum Giv
        $setupQueryG4 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Giv'";
        try {
            $G4=$db->prepare($setupQueryG4);
            //todo
            $G4->execute(array($Giv_Descp,$Giv_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        echo "no values found for quantum G";
    }
    //update for quantum G domiciles
    if ($_POST['quantumPoint']=="H") {
        // user (reg_no) does not exist

        // execute  query(insert) for quantum Hi
        $setupQueryH1 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Hi'";
        try {
            $H1=$db->prepare($setupQueryH1);
            //todo
            $H1->execute(array($Hi_Descp,$Hi_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
        // execute  query(insert) for quantum Hii
        $setupQueryH2 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Hii'";
        try {
            $H2=$db->prepare($setupQueryH2);
            //todo
            $H2->execute(array($Hii_Descp,$Hii_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
        // execute  query(insert) for quantum Hiii
        $setupQueryH3 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Hiii'";
        try {
            $H3=$db->prepare($setupQueryH3);
            //todo
            $H3->execute(array($Hiii_Descp,$Hiii_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
        // execute  query(insert) for quantum Hiv
        $setupQueryH4 = "UPDATE `infant_descp_prec` SET Descriptor=?, Prescriptor=? WHERE quantumDomicile='Hiv'";
        try {
            $H4=$db->prepare($setupQueryH4);
            //todo
            $H4->execute(array($Hiv_Descp,$Hiv_Prec));

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:infantdomiciles.php');

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