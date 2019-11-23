<?php
if (isset($_POST['summaryType1a']) && isset($_POST['summaryType2a']) && isset($_POST['summaryType3a']) && isset($_POST['summaryType4a'])) {
    // get the details of the new user  to register
    $summaryType1a = $_POST['summaryType1a'];
    $summaryType2a = $_POST['summaryType2a'];
    $summaryType3a = $_POST['summaryType3a'];
    $summaryType4a = $_POST['summaryType4a'];

    require_once "../connect/dbconn.php";  // connect to database

    // check if records exists for that
    $query = "SELECT * FROM `summary_typea` WHERE `id`='1'";
    $result = $db->query($query);
    $count = $result->rowCount();
    if ($count == 0) {
        // execute query(insert)
        $registerQuery = "INSERT INTO `summary_typea`(`firstType`, `secondType`,`thirdType`,`fourthType`) 
		                  VALUES ('$summaryType1a','$summaryType2a','$summaryType3a','$summaryType4a')";
        try {
            $db->query($registerQuery);

            echo "setup successfull!!";  // successful
            //redirect to summary page
            header('location:summary.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        // execute  query(update)
        $setupQuery= "UPDATE `summary_typea` SET firstType=?,secondType=?,thirdType=?,fourthType=?";
        try {
            $q=$db->prepare($setupQuery);
            //todo
            $q->execute(array($summaryType1a,$summaryType2a,$summaryType3a,$summaryType4a));

            echo "Summary setup successfully!!";  // successful
            //redirect to summary
            header('location:summary.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }


}
else
{
    // the expected details of the new user were not found
    echo "empty Records";
}
if (isset($_POST['summaryType1b']) && isset($_POST['summaryType2b']) && isset($_POST['summaryType3b']) && isset($_POST['summaryType4b'])) {
    // get the details of the new user  to register
    $summaryType1b = $_POST['summaryType1b'];
    $summaryType2b = $_POST['summaryType2b'];
    $summaryType3b = $_POST['summaryType3b'];
    $summaryType4b = $_POST['summaryType4b'];

    require_once "../connect/dbconn.php";  // connect to database

    // check if records exists for that
    $query = "SELECT * FROM `summary_typeb` WHERE `id`='1'";
    $result = $db->query($query);
    $count = $result->rowCount();
    if ($count == 0) {
        // execute query(insert)
        $registerQuery = "INSERT INTO `summary_typeb`(`firstType`, `secondType`,`thirdType`,`fourthType`) 
		                  VALUES ('$summaryType1b','$summaryType2b','$summaryType3b','$summaryType4b')";
        try {
            $db->query($registerQuery);

            echo "setup successfull!!";  // successful
            //redirect to summary page
            header('location:summary.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        // execute  query(update)
        $setupQuery= "UPDATE `summary_typeb` SET firstType=?,secondType=?,thirdType=?,fourthType=?";
        try {
            $q=$db->prepare($setupQuery);
            //todo
            $q->execute(array($summaryType1b,$summaryType2b,$summaryType3b,$summaryType4b));

            echo "Summary setup successfully!!";  // successful
            //redirect to summary
            header('location:summary.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }


}
else
{
    // the expected details of the new user were not found
    echo "empty Records";
}
if (isset($_POST['summaryType1c']) && isset($_POST['summaryType2c']) && isset($_POST['summaryType3c']) && isset($_POST['summaryType4c'])) {
    // get the details of the new user  to register
    $summaryType1c = $_POST['summaryType1c'];
    $summaryType2c = $_POST['summaryType2c'];
    $summaryType3c = $_POST['summaryType3c'];
    $summaryType4c = $_POST['summaryType4c'];

    require_once "../connect/dbconn.php";  // connect to database

    // check if records exists for that
    $query = "SELECT * FROM `summary_typec` WHERE `id`='1'";
    $result = $db->query($query);
    $count = $result->rowCount();
    if ($count == 0) {
        // execute query(insert)
        $registerQuery = "INSERT INTO `summary_typec`(`firstType`, `secondType`,`thirdType`,`fourthType`) 
		                  VALUES ('$summaryType1c','$summaryType2c','$summaryType3c','$summaryType4c')";
        try {
            $db->query($registerQuery);

            echo "setup successfull!!";  // successful
            //redirect to summary page
            header('location:summary.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        // execute  query(update)
        $setupQuery= "UPDATE `summary_typec` SET firstType=?,secondType=?,thirdType=?,fourthType=?";
        try {
            $q=$db->prepare($setupQuery);
            //todo
            $q->execute(array($summaryType1c,$summaryType2c,$summaryType3c,$summaryType4c));

            echo "Summary setup successfully!!";  // successful
            //redirect to summary
            header('location:summary.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }


}
else
{
    // the expected details of the new user were not found
    echo "empty Records";
}
if (isset($_POST['summaryType1d']) && isset($_POST['summaryType2d']) && isset($_POST['summaryType3d']) && isset($_POST['summaryType4d'])) {
    // get the details of the new user  to register
    $summaryType1d = $_POST['summaryType1d'];
    $summaryType2d = $_POST['summaryType2d'];
    $summaryType3d = $_POST['summaryType3d'];
    $summaryType4d = $_POST['summaryType4d'];

    require_once "../connect/dbconn.php";  // connect to database

    // check if records exists for that
    $query = "SELECT * FROM `summary_typed` WHERE `id`='1'";
    $result = $db->query($query);
    $count = $result->rowCount();
    if ($count == 0) {
        // execute query(insert)
        $registerQuery = "INSERT INTO `summary_typed`(`firstType`, `secondType`,`thirdType`,`fourthType`) 
		                  VALUES ('$summaryType1d','$summaryType2d','$summaryType3d','$summaryType4d')";
        try {
            $db->query($registerQuery);

            echo "setup successfull!!";  // successful
            //redirect to summary page
            header('location:summary.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        // execute  query(update)
        $setupQuery= "UPDATE `summary_typed` SET firstType=?,secondType=?,thirdType=?,fourthType=?";
        try {
            $q=$db->prepare($setupQuery);
            //todo
            $q->execute(array($summaryType1d,$summaryType2d,$summaryType3d,$summaryType4d));

            echo "Summary setup successfully!!";  // successful
            //redirect to summary
            header('location:summary.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }


}
else
{
    // the expected details of the new user were not found
    echo "empty Records";
}
if (isset($_POST['summaryType1e']) && isset($_POST['summaryType2e']) && isset($_POST['summaryType3e']) && isset($_POST['summaryType4e'])) {
    // get the details of the new user  to register
    $summaryType1e = $_POST['summaryType1e'];
    $summaryType2e = $_POST['summaryType2e'];
    $summaryType3e = $_POST['summaryType3e'];
    $summaryType4e = $_POST['summaryType4e'];

    require_once "../connect/dbconn.php";  // connect to database

    // check if records exists for that
    $query = "SELECT * FROM `summary_typee` WHERE `id`='1'";
    $result = $db->query($query);
    $count = $result->rowCount();
    if ($count == 0) {
        // execute query(insert)
        $registerQuery = "INSERT INTO `summary_typee`(`firstType`, `secondType`,`thirdType`,`fourthType`) 
		                  VALUES ('$summaryType1e','$summaryType2e','$summaryType3e','$summaryType4e')";
        try {
            $db->query($registerQuery);

            echo "setup successfull!!";  // successful
            //redirect to summary page
            header('location:summary.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        // execute  query(update)
        $setupQuery= "UPDATE `summary_typee` SET firstType=?,secondType=?,thirdType=?,fourthType=?";
        try {
            $q=$db->prepare($setupQuery);
            //todo
            $q->execute(array($summaryType1e,$summaryType2e,$summaryType3e,$summaryType4e));

            echo "Summary setup successfully!!";  // successful
            //redirect to summary
            header('location:summary.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }


}
else
{
    // the expected details of the new user were not found
    echo "empty Records";
}
if (isset($_POST['summaryType1f']) && isset($_POST['summaryType2f']) && isset($_POST['summaryType3f']) && isset($_POST['summaryType4f'])) {
    // get the details of the new user  to register
    $summaryType1f = $_POST['summaryType1f'];
    $summaryType2f = $_POST['summaryType2f'];
    $summaryType3f = $_POST['summaryType3f'];
    $summaryType4f = $_POST['summaryType4f'];

    require_once "../connect/dbconn.php";  // connect to database

    // check if records exists for that
    $query = "SELECT * FROM `summary_typef` WHERE `id`='1'";
    $result = $db->query($query);
    $count = $result->rowCount();
    if ($count == 0) {
        // execute query(insert)
        $registerQuery = "INSERT INTO `summary_typef`(`firstType`, `secondType`,`thirdType`,`fourthType`) 
		                  VALUES ('$summaryType1f','$summaryType2f','$summaryType3f','$summaryType4f')";
        try {
            $db->query($registerQuery);

            echo "setup successfull!!";  // successful
            //redirect to summary page
            header('location:summary.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        // execute  query(update)
        $setupQuery= "UPDATE `summary_typef` SET firstType=?,secondType=?,thirdType=?,fourthType=?";
        try {
            $q=$db->prepare($setupQuery);
            //todo
            $q->execute(array($summaryType1f,$summaryType2f,$summaryType3f,$summaryType4f));

            echo "Summary setup successfully!!";  // successful
            //redirect to summary
            header('location:summary.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }


}
else
{
    // the expected details of the new user were not found
    echo "empty Records";
}
if (isset($_POST['summaryType1g']) && isset($_POST['summaryType2g']) && isset($_POST['summaryType3g']) && isset($_POST['summaryType4g'])) {
    // get the details of the new user  to register
    $summaryType1g = $_POST['summaryType1g'];
    $summaryType2g = $_POST['summaryType2g'];
    $summaryType3g = $_POST['summaryType3g'];
    $summaryType4g = $_POST['summaryType4g'];

    require_once "../connect/dbconn.php";  // connect to database

    // check if records exists for that
    $query = "SELECT * FROM `summary_typeg` WHERE `id`='1'";
    $result = $db->query($query);
    $count = $result->rowCount();
    if ($count == 0) {
        // execute query(insert)
        $registerQuery = "INSERT INTO `summary_typeg`(`firstType`, `secondType`,`thirdType`,`fourthType`) 
		                  VALUES ('$summaryType1g','$summaryType2g','$summaryType3g','$summaryType4g')";
        try {
            $db->query($registerQuery);

            echo "setup successfull!!";  // successful
            //redirect to summary page
            header('location:summary.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        // execute  query(update)
        $setupQuery= "UPDATE `summary_typeg` SET firstType=?,secondType=?,thirdType=?,fourthType=?";
        try {
            $q=$db->prepare($setupQuery);
            //todo
            $q->execute(array($summaryType1g,$summaryType2g,$summaryType3g,$summaryType4g));

            echo "Summary setup successfully!!";  // successful
            //redirect to summary
            header('location:summary.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }


}
else
{
    // the expected details of the new user were not found
    echo "empty Records";
}
if (isset($_POST['summaryType1h']) && isset($_POST['summaryType2h']) && isset($_POST['summaryType3h']) && isset($_POST['summaryType4h'])) {
    // get the details of the new user  to register
    $summaryType1h = $_POST['summaryType1h'];
    $summaryType2h = $_POST['summaryType2h'];
    $summaryType3h = $_POST['summaryType3h'];
    $summaryType4h = $_POST['summaryType4h'];

    require_once "../connect/dbconn.php";  // connect to database

    // check if records exists for that
    $query = "SELECT * FROM `summary_typeh` WHERE `id`='1'";
    $result = $db->query($query);
    $count = $result->rowCount();
    if ($count == 0) {
        // execute query(insert)
        $registerQuery = "INSERT INTO `summary_typeh`(`firstType`, `secondType`,`thirdType`,`fourthType`) 
		                  VALUES ('$summaryType1h','$summaryType2h','$summaryType3h','$summaryType4h')";
        try {
            $db->query($registerQuery);

            echo "setup successfull!!";  // successful
            //redirect to summary page
            header('location:summary.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        // execute  query(update)
        $setupQuery= "UPDATE `summary_typeh` SET firstType=?,secondType=?,thirdType=?,fourthType=?";
        try {
            $q=$db->prepare($setupQuery);
            //todo
            $q->execute(array($summaryType1h,$summaryType2h,$summaryType3h,$summaryType4h));

            echo "Summary setup successfully!!";  // successful
            //redirect to summary
            header('location:summary.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }


}
else
{
    // the expected details of the new user were not found
    echo "empty Records";
}
if (isset($_POST['summaryType1i']) && isset($_POST['summaryType2i']) && isset($_POST['summaryType3i']) && isset($_POST['summaryType4i'])) {
    // get the details of the new user  to register
    $summaryType1i = $_POST['summaryType1i'];
    $summaryType2i = $_POST['summaryType2i'];
    $summaryType3i = $_POST['summaryType3i'];
    $summaryType4i = $_POST['summaryType4i'];

    require_once "../connect/dbconn.php";  // connect to database

    // check if records exists for that
    $query = "SELECT * FROM `summary_typei` WHERE `id`='1'";
    $result = $db->query($query);
    $count = $result->rowCount();
    if ($count == 0) {
        // execute query(insert)
        $registerQuery = "INSERT INTO `summary_typei`(`firstType`, `secondType`,`thirdType`,`fourthType`) 
		                  VALUES ('$summaryType1i','$summaryType2i','$summaryType3i','$summaryType4i')";
        try {
            $db->query($registerQuery);

            echo "setup successfull!!";  // successful
            //redirect to summary page
            header('location:summary.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        // execute  query(update)
        $setupQuery= "UPDATE `summary_typei` SET firstType=?,secondType=?,thirdType=?,fourthType=?";
        try {
            $q=$db->prepare($setupQuery);
            //todo
            $q->execute(array($summaryType1i,$summaryType2i,$summaryType3i,$summaryType4i));

            echo "Summary setup successfully!!";  // successful
            //redirect to summary
            header('location:summary.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }


}
else
{
    // the expected details of the new user were not found
    echo "empty Records";
}
if (isset($_POST['summaryType1j']) && isset($_POST['summaryType2j']) && isset($_POST['summaryType3j']) && isset($_POST['summaryType4j'])) {
    // get the details of the new user  to register
    $summaryType1j = $_POST['summaryType1j'];
    $summaryType2j = $_POST['summaryType2j'];
    $summaryType3j = $_POST['summaryType3j'];
    $summaryType4j = $_POST['summaryType4j'];

    require_once "../connect/dbconn.php";  // connect to database

    // check if records exists for that
    $query = "SELECT * FROM `summary_typej` WHERE `id`='1'";
    $result = $db->query($query);
    $count = $result->rowCount();
    if ($count == 0) {
        // execute query(insert)
        $registerQuery = "INSERT INTO `summary_typej`(`firstType`, `secondType`,`thirdType`,`fourthType`) 
		                  VALUES ('$summaryType1j','$summaryType2j','$summaryType3j','$summaryType4j')";
        try {
            $db->query($registerQuery);

            echo "setup successfull!!";  // successful
            //redirect to summary page
            header('location:summary.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        // execute  query(update)
        $setupQuery= "UPDATE `summary_typej` SET firstType=?,secondType=?,thirdType=?,fourthType=?";
        try {
            $q=$db->prepare($setupQuery);
            //todo
            $q->execute(array($summaryType1j,$summaryType2j,$summaryType3j,$summaryType4j));

            echo "Summary setup successfully!!";  // successful
            //redirect to summary
            header('location:summary.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }


}
else
{
    // the expected details of the new user were not found
    echo "empty Records";
}
if (isset($_POST['summaryType1k']) && isset($_POST['summaryType2k']) && isset($_POST['summaryType3k']) && isset($_POST['summaryType4k'])) {
    // get the details of the new user  to register
    $summaryType1k = $_POST['summaryType1k'];
    $summaryType2k = $_POST['summaryType2k'];
    $summaryType3k = $_POST['summaryType3k'];
    $summaryType4k = $_POST['summaryType4k'];

    require_once "../connect/dbconn.php";  // connect to database

    // check if records exists for that
    $query = "SELECT * FROM `summary_typek` WHERE `id`='1'";
    $result = $db->query($query);
    $count = $result->rowCount();
    if ($count == 0) {
        // execute query(insert)
        $registerQuery = "INSERT INTO `summary_typek`(`firstType`, `secondType`,`thirdType`,`fourthType`) 
		                  VALUES ('$summaryType1k','$summaryType2k','$summaryType3k','$summaryType4k')";
        try {
            $db->query($registerQuery);

            echo "setup successfull!!";  // successful
            //redirect to summary page
            header('location:summary.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        // execute  query(update)
        $setupQuery= "UPDATE `summary_typek` SET firstType=?,secondType=?,thirdType=?,fourthType=?";
        try {
            $q=$db->prepare($setupQuery);
            //todo
            $q->execute(array($summaryType1k,$summaryType2k,$summaryType3k,$summaryType4k));

            echo "Summary setup successfully!!";  // successful
            //redirect to summary
            header('location:summary.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }


}
else
{
    // the expected details of the new user were not found
    echo "empty Records";
}
if (isset($_POST['summaryType1l']) && isset($_POST['summaryType2l']) && isset($_POST['summaryType3l']) && isset($_POST['summaryType4l'])) {
    // get the details of the new user  to register
    $summaryType1l = $_POST['summaryType1l'];
    $summaryType2l = $_POST['summaryType2l'];
    $summaryType3l = $_POST['summaryType3l'];
    $summaryType4l = $_POST['summaryType4l'];

    require_once "../connect/dbconn.php";  // connect to database

    // check if records exists for that
    $query = "SELECT * FROM `summary_typel` WHERE `id`='1'";
    $result = $db->query($query);
    $count = $result->rowCount();
    if ($count == 0) {
        // execute query(insert)
        $registerQuery = "INSERT INTO `summary_typel`(`firstType`, `secondType`,`thirdType`,`fourthType`) 
		                  VALUES ('$summaryType1l','$summaryType2l','$summaryType3l','$summaryType4l')";
        try {
            $db->query($registerQuery);

            echo "setup successfull!!";  // successful
            //redirect to summary page
            header('location:summary.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        // execute  query(update)
        $setupQuery= "UPDATE `summary_typel` SET firstType=?,secondType=?,thirdType=?,fourthType=?";
        try {
            $q=$db->prepare($setupQuery);
            //todo
            $q->execute(array($summaryType1l,$summaryType2l,$summaryType3l,$summaryType4l));

            echo "Summary setup successfully!!";  // successful
            //redirect to summary
            header('location:summary.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }


}
else
{
    // the expected details of the new user were not found
    echo "empty Records";
}
if (isset($_POST['summaryType1m']) && isset($_POST['summaryType2m']) && isset($_POST['summaryType3m']) && isset($_POST['summaryType4m'])) {
    // get the details of the new user  to register
    $summaryType1m = $_POST['summaryType1m'];
    $summaryType2m = $_POST['summaryType2m'];
    $summaryType3m = $_POST['summaryType3m'];
    $summaryType4m = $_POST['summaryType4m'];

    require_once "../connect/dbconn.php";  // connect to database

    // check if records exists for that
    $query = "SELECT * FROM `summary_typem` WHERE `id`='1'";
    $result = $db->query($query);
    $count = $result->rowCount();
    if ($count == 0) {
        // execute query(insert)
        $registerQuery = "INSERT INTO `summary_typem`(`firstType`, `secondType`,`thirdType`,`fourthType`) 
		                  VALUES ('$summaryType1m','$summaryType2m','$summaryType3m','$summaryType4m')";
        try {
            $db->query($registerQuery);

            echo "setup successfull!!";  // successful
            //redirect to summary page
            header('location:summary.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        // execute  query(update)
        $setupQuery= "UPDATE `summary_typem` SET firstType=?,secondType=?,thirdType=?,fourthType=?";
        try {
            $q=$db->prepare($setupQuery);
            //todo
            $q->execute(array($summaryType1m,$summaryType2m,$summaryType3m,$summaryType4m));

            echo "Summary setup successfully!!";  // successful
            //redirect to summary
            header('location:summary.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }


}
else
{
    // the expected details of the new user were not found
    echo "empty Records";
}
if (isset($_POST['summaryType1n']) && isset($_POST['summaryType2n']) && isset($_POST['summaryType3n']) && isset($_POST['summaryType4n'])) {
    // get the details of the new user  to register
    $summaryType1n = $_POST['summaryType1n'];
    $summaryType2n = $_POST['summaryType2n'];
    $summaryType3n = $_POST['summaryType3n'];
    $summaryType4n = $_POST['summaryType4n'];

    require_once "../connect/dbconn.php";  // connect to database

    // check if records exists for that
    $query = "SELECT * FROM `summary_typen` WHERE `id`='1'";
    $result = $db->query($query);
    $count = $result->rowCount();
    if ($count == 0) {
        // execute query(insert)
        $registerQuery = "INSERT INTO `summary_typen`(`firstType`, `secondType`,`thirdType`,`fourthType`) 
		                  VALUES ('$summaryType1n','$summaryType2n','$summaryType3n','$summaryType4n')";
        try {
            $db->query($registerQuery);

            echo "setup successfull!!";  // successful
            //redirect to summary page
            header('location:summary.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        // execute  query(update)
        $setupQuery= "UPDATE `summary_typen` SET firstType=?,secondType=?,thirdType=?,fourthType=?";
        try {
            $q=$db->prepare($setupQuery);
            //todo
            $q->execute(array($summaryType1n,$summaryType2n,$summaryType3n,$summaryType4n));

            echo "Summary setup successfully!!";  // successful
            //redirect to summary
            header('location:summary.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }


}
else
{
    // the expected details of the new user were not found
    echo "empty Records";
}
if (isset($_POST['summaryType1o']) && isset($_POST['summaryType2ao']) && isset($_POST['summaryType3o']) && isset($_POST['summaryType4o'])) {
    // get the details of the new user  to register
    $summaryType1o = $_POST['summaryType1o'];
    $summaryType2o = $_POST['summaryType2o'];
    $summaryType3o = $_POST['summaryType3o'];
    $summaryType4o = $_POST['summaryType4o'];

    require_once "../connect/dbconn.php";  // connect to database

    // check if records exists for that
    $query = "SELECT * FROM `summary_typeo` WHERE `id`='1'";
    $result = $db->query($query);
    $count = $result->rowCount();
    if ($count == 0) {
        // execute query(insert)
        $registerQuery = "INSERT INTO `summary_typeo`(`firstType`, `secondType`,`thirdType`,`fourthType`) 
		                  VALUES ('$summaryType1o','$summaryType2o','$summaryType3o','$summaryType4o')";
        try {
            $db->query($registerQuery);

            echo "setup successfull!!";  // successful
            //redirect to summary page
            header('location:summary.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        // execute  query(update)
        $setupQuery= "UPDATE `summary_typeo` SET firstType=?,secondType=?,thirdType=?,fourthType=?";
        try {
            $q=$db->prepare($setupQuery);
            //todo
            $q->execute(array($summaryType1o,$summaryType2o,$summaryType3o,$summaryType4o));

            echo "Summary setup successfully!!";  // successful
            //redirect to summary
            header('location:summary.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }


}
else
{
    // the expected details of the new user were not found
    echo "empty Records";
}
if (isset($_POST['summaryType1p']) && isset($_POST['summaryType2p']) && isset($_POST['summaryType3p']) && isset($_POST['summaryType4p'])) {
    // get the details of the new user  to register
    $summaryType1p = $_POST['summaryType1p'];
    $summaryType2p = $_POST['summaryType2p'];
    $summaryType3p = $_POST['summaryType3p'];
    $summaryType4p = $_POST['summaryType4p'];

    require_once "../connect/dbconn.php";  // connect to database

    // check if records exists for that
    $query = "SELECT * FROM `summary_typep` WHERE `id`='1'";
    $result = $db->query($query);
    $count = $result->rowCount();
    if ($count == 0) {
        // execute query(insert)
        $registerQuery = "INSERT INTO `summary_typep`(`firstType`, `secondType`,`thirdType`,`fourthType`) 
		                  VALUES ('$summaryType1p','$summaryType2p','$summaryType3p','$summaryType4p')";
        try {
            $db->query($registerQuery);

            echo "setup successfull!!";  // successful
            //redirect to summary page
            header('location:summary.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        // execute  query(update)
        $setupQuery= "UPDATE `summary_typep` SET firstType=?,secondType=?,thirdType=?,fourthType=?";
        try {
            $q=$db->prepare($setupQuery);
            //todo
            $q->execute(array($summaryType1p,$summaryType2p,$summaryType3p,$summaryType4p));

            echo "Summary setup successfully!!";  // successful
            //redirect to summary
            header('location:summary.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }


}
else
{
    // the expected details of the new user were not found
    echo "empty Records";
}
if (isset($_POST['summaryType1q']) && isset($_POST['summaryType2q']) && isset($_POST['summaryType3q']) && isset($_POST['summaryType4q'])) {
    // get the details of the new user  to register
    $summaryType1q = $_POST['summaryType1q'];
    $summaryType2q = $_POST['summaryType2q'];
    $summaryType3q = $_POST['summaryType3q'];
    $summaryType4q = $_POST['summaryType4q'];

    require_once "../connect/dbconn.php";  // connect to database

    // check if records exists for that
    $query = "SELECT * FROM `summary_typeq` WHERE `id`='1'";
    $result = $db->query($query);
    $count = $result->rowCount();
    if ($count == 0) {
        // execute query(insert)
        $registerQuery = "INSERT INTO `summary_typeq`(`firstType`, `secondType`,`thirdType`,`fourthType`) 
		                  VALUES ('$summaryType1q','$summaryType2q','$summaryType3q','$summaryType4q')";
        try {
            $db->query($registerQuery);

            echo "setup successfull!!";  // successful
            //redirect to summary page
            header('location:summary.php');

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }
    else{
        // execute  query(update)
        $setupQuery= "UPDATE `summary_typeq` SET firstType=?,secondType=?,thirdType=?,fourthType=?";
        try {
            $q=$db->prepare($setupQuery);
            //todo
            $q->execute(array($summaryType1q,$summaryType2q,$summaryType3q,$summaryType4q));

            echo "Summary setup successfully!!";  // successful
            //redirect to summary
            header('location:summary.php');

        } catch (PDOException $exception) {
            //echo $exception->getMessage();
            echo "problem encountered during setup";     // failed
        }
    }


}
else
{
    // the expected details of the new user were not found
    echo "empty Records";
}