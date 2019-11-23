<?php
if ((isset($_POST['quantumA'])) && (isset($_POST['candidateID'])) && (isset($_POST['quantumB']))) {
    // get the details of the new user  to register
    $candidateID = $_POST['candidateID'];
    $quantumA = $_POST['quantumA'];
    $quantumB = $_POST['quantumB'];
    $quantumC = $_POST['quantumC'];
    $quantumD = $_POST['quantumD'];
    $quantumE = $_POST['quantumE'];
    $quantumF = $_POST['quantumF'];
    $quantumG = $_POST['quantumG'];
    $quantumH = $_POST['quantumH'];
    $observation = $_POST['observation'];

    require_once "../connect/dbconn.php";  // connect to database

    // check if domiciles exists for that
    $query = "SELECT * FROM `rblstratification_candidates` WHERE `candidateID`='$candidateID'";
    $result = $db->query($query);
    $Count = $result->rowCount();

    $max = 4;

    $bPrescriptor = "NOT_FOUND";
    $bDescriptor = "NOT_FOUND";

    $aPrescriptor = "NOT_FOUND";
    $aDescriptor = "NOT_FOUND";

    $cPrescriptor = "NOT_FOUND";
    $cDescriptor = "NOT_FOUND";

    $dPrescriptor = "NOT_FOUND";
    $dDescriptor = "NOT_FOUND";

    $ePrescriptor = "NOT_FOUND";
    $eDescriptor = "NOT_FOUND";

    $fPrescriptor = "NOT_FOUND";
    $fDescriptor = "NOT_FOUND";

    $gPrescriptor = "NOT_FOUND";
    $gDescriptor = "NOT_FOUND";

    $hPrescriptor = "NOT_FOUND";
    $hDescriptor = "NOT_FOUND";

    $scoreA="";
    $scoreB="";
    $scoreC="";
    $scoreD="";
    $scoreE="";
    $scoreF="";
    $scoreG="";
    $scoreH="";
    $rblstratificationAvg="";

    //A
    if($quantumA!=null)
    {
        try {
            $scoreA = ($quantumA * 100) / $max;
            if ($scoreA > 100) {
                // Aiv
                $query = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Aiv'";
            } else if ($scoreA == 100) {
                // Aiii
                $query = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Aiii'";
            }
            else if ($scoreA >0 && $scoreA <100) {
                // Ai
                $query = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Aii'";
            }
            else if ($scoreA == 0) {
                // Ai
                $query = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Ai'";
            }

            $result = $db->query($query);
            if ($result->rowCount() > 0) {
                // exists
                while ($row = $result->fetch()) {
                    $aPrescriptor = $row['Prescriptor'];
                    $aDescriptor = $row['Descriptor'];
                }
            }
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }
    //B
    if($quantumB!=null)
    {
        try {
            $scoreB = ($quantumB * 100) / $max;
            if ($scoreB > 100) {
                // Biv
                $query1 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Biv'";
            } else if ($scoreB == 100) {
                // Biii
                $query1 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Biii'";
            }
            else if ($scoreB >0 && $scoreB <100) {
                // Bii
                $query1 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Bii'";
            }else if ($scoreB == 0) {
                // Bi
                $query1 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Bi'";
            }

            $result1 = $db->query($query1);
            if ($result1->rowCount() > 0) {
                // exists
                while ($row = $result1->fetch()) {
                    $bPrescriptor = $row['Prescriptor'];
                    $bDescriptor = $row['Descriptor'];
                }
            }
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }
    //C
    if($quantumC!=null)
    {
        try {
            $scoreC = ($quantumC * 100) / $max;
            if ($scoreC > 100) {
                // 4
                $query2 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Civ'";
            } else if ($scoreC == 100) {
                // 3
                $query2 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Ciii'";
            }
            else if ($scoreC >0 && $scoreC <100) {
                // 2
                $query2 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Cii'";
            }
            else if ($scoreC == 0) {
                // 1
                $query2 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Ci'";
            }

            $result2 = $db->query($query2);
            if ($result2->rowCount() > 0) {
                // exists
                while ($row = $result2->fetch()) {
                    $cPrescriptor = $row['Prescriptor'];
                    $cDescriptor = $row['Descriptor'];
                }
            }
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }
    //D
    if($quantumD!=null)
    {
        try {
            $scoreD = ($quantumD * 100) / $max;
            if ($scoreD > 100) {
                // 4
                $query3 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Div'";
            } else if ($scoreD == 100) {
                // 3
                $query3 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Diii'";
            }
            else if ($scoreD >0 && $scoreD <100) {
                // 2
                $query3 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Dii'";
            }
            else if ($scoreD == 0) {
                // 1
                $query3 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Di'";
            }

            $result3 = $db->query($query3);
            if ($result3->rowCount() > 0) {
                // exists
                while ($row = $result3->fetch()) {
                    $dPrescriptor = $row['Prescriptor'];
                    $dDescriptor = $row['Descriptor'];
                }
            }
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }
    //E
    if($quantumE!=null)
    {
        try {
            $scoreE = ($quantumE * 100) / $max;
            if ($scoreE > 100) {
                // 4
                $query4 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Eiv'";
            } else if ($scoreE == 100) {
                // 3
                $query4 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Eiii'";
            }
            else if ($scoreE >0 && $scoreE <100) {
                // 2
                $query4 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Eii'";
            }
            else if ($scoreE == 0) {
                // 1
                $query4 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Ei'";
            }

            $result4 = $db->query($query4);
            if ($result4->rowCount() > 0) {
                // exists
                while ($row = $result4->fetch()) {
                    $ePrescriptor = $row['Prescriptor'];
                    $eDescriptor = $row['Descriptor'];
                }
            }
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }
    //F
    if($quantumF!=null)
    {
        try {
            $scoreF = ($quantumF * 100) / $max;
            if ($scoreF > 100) {
                // 4
                $query5 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Fiv'";
            } else if ($scoreF == 100) {
                // 3
                $query5 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Fiii'";
            }
            else if ($scoreF >0 && $scoreF <100) {
                // 2
                $query5 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Fii'";
            }
            else if ($scoreF == 0) {
                // 1
                $query5 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Fi'";
            }

            $result5 = $db->query($query5);
            if ($result5->rowCount() > 0) {
                // exists
                while ($row = $result5->fetch()) {
                    $fPrescriptor = $row['Prescriptor'];
                    $fDescriptor = $row['Descriptor'];
                }
            }
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }
    //G
    if($quantumG!=null)
    {
        try {
            $scoreG = ($quantumG * 100) / $max;
            if ($scoreG > 100) {
                // 4
                $query6 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Giv'";
            } else if ($scoreG == 100) {
                // 3
                $query6 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Giii'";
            }
            else if ($scoreG >0 && $scoreG <100) {
                // 2
                $query6 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Gii'";
            }
            else if ($scoreG == 0) {
                // 1
                $query6 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Gi'";
            }

            $result6 = $db->query($query6);
            if ($result6->rowCount() > 0) {
                // exists
                while ($row = $result6->fetch()) {
                    $gPrescriptor = $row['Prescriptor'];
                    $gDescriptor = $row['Descriptor'];
                }
            }
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }
    //H
    if($quantumH!=null)
    {
        try {
            $scoreH = ($quantumH * 100) / $max;
            if ($scoreH > 100) {
                // 4
                $query7 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Hiv'";
            } else if ($scoreH == 100) {
                // 3
                $query7 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Hiii'";
            }
            else if ($scoreH >0 && $scoreH <100) {
                // 2
                $query7 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Hii'";
            }
            else if ($scoreH == 0) {
                // 1
                $query7 = "SELECT Descriptor,Prescriptor FROM `rblstratification_descp_prec` WHERE quantumDomicile='Hi'";
            }

            $result7 = $db->query($query7);
            if ($result7->rowCount() > 0) {
                // exists
                while ($row = $result7->fetch()) {
                    $hPrescriptor = $row['Prescriptor'];
                    $hDescriptor = $row['Descriptor'];
                }
            }
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }
    if($quantumA!=null && $quantumB!=null && $quantumC!=null && $quantumD!=null && $quantumE!=null && $quantumF!=null && $quantumG!=null && $quantumH!=null){
        try {
            $rblstratificationAvg= ($scoreA+$scoreB+$scoreC+$scoreD+$scoreE+$scoreF+$scoreG+$scoreH)/8;

        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    if ($Count == 0) {
        // user (reg_no) does not exist

        // execute  query(insert)
        $setupQuery = "INSERT INTO `rblstratification_candidates`(`candidateID`, `quantumADescp`,`quantumAPrec`,`avgA`,`quantumBDescp`,`quantumBPrec`,`avgB`,`quantumCDescp`,`quantumCPrec`,`avgC`,`quantumDDescp`,`quantumDPrec`,`avgD`,`quantumEDescp`,`quantumEPrec`,`avgE`,`quantumFDescp`,`quantumFPrec`,`avgF`,`quantumGDescp`,`quantumGPrec`,`avgG`,`quantumHDescp`,`quantumHPrec`,`avgH`,`observation`,`rblstratification`) 
		                  VALUES ('$candidateID','$aDescriptor','$aPrescriptor','$scoreA','$bDescriptor','$bPrescriptor','$scoreB','$cDescriptor','$cPrescriptor','$scoreC','$dDescriptor','$dPrescriptor','$scoreD','$eDescriptor','$ePrescriptor','$scoreE','$fDescriptor','$fPrescriptor','$scoreF','$gDescriptor','$gPrescriptor','$scoreG','$hDescriptor','$hPrescriptor','$scoreH','$observation','$rblstratificationAvg')";
        try {
            $db->query($setupQuery);

            echo "Domiciles setup successfully!!";  // successful
            //redirect to registration page
            header('location:rblStratificationAssign.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else {
        // update if record already exists
        $updateQuery = "UPDATE `rblstratification_candidates` SET quantumADescp=?,quantumAPrec=?,avgA=?,quantumBDescp=?,quantumBPrec=?,avgB=?,quantumCDescp=?,quantumCPrec=?,avgC=?,quantumDDescp=?,quantumDPrec=?,avgD=?,quantumEDescp=?,quantumEPrec=?,avgE=?,quantumFDescp=?,quantumFPrec=?,avgF=?,quantumGDescp=?,quantumGPrec=?,avgG=?,quantumHDescp=?,quantumHPrec=?,avgH=?,observation=?,rblstratification=? WHERE candidateID=?";
        try {
            $q = $db->prepare($updateQuery);
            $q->execute(array($aDescriptor,$aPrescriptor,$scoreA,$bDescriptor,$bPrescriptor,$scoreB,$cDescriptor,$cPrescriptor,$scoreC,$dDescriptor,$dPrescriptor,$scoreD,$eDescriptor,$ePrescriptor,$scoreE,$fDescriptor,$fPrescriptor,$scoreF,$gDescriptor,$gPrescriptor,$scoreG,$hDescriptor,$hPrescriptor,$scoreH,$observation,$rblstratificationAvg, $candidateID));

            echo "Domiciles updated successfully!!";  // successful
            //redirect to registration page
            header('location:rblStratificationAssign.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during update";     // failed
        }
    }
} else {
    // the expected details of the new user were not found
    echo "Empty Records";
}