
<?php
require_once "../connect/dbconn.php";  // connect to database

if(($_GET['action']=='parmdel') && isset($_GET['deleteId']))
{
$id=$_GET['deleteId'];
$query="delete from  candidates  where candidateID='$id'";

    try {
        $db->query($query);

        echo "candidate deleted successfully!!";  // successful
        //redirect to registration page
        header('location:viewCandidate.php');

    } catch (PDOException $exception) {
        //echo $exception->getMessage();
        echo "problem encountered during registration";     // failed
    }

}
else {
    // user already exists
    echo "candidate not found!!";
}
