
<?php
require_once "../connect/dbconn.php";  // connect to database

if(($_GET['action']=='parmdel') && isset($_GET['rid']))
{
$id=$_GET['rid'];
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
// general observation
if(($_GET['action']=='parmdel') && isset($_GET['delete1Id']))
{
    $id=$_GET['delete1Id'];
    $query="delete from  general_observation  where Id='$id'";

    try {
        $db->query($query);

        echo "Record deleted successfully!!";  // successful
        //redirect to registration page
        header('location:gobservations.php');

    } catch (PDOException $exception) {
        //echo $exception->getMessage();
        echo "problem encountered!";     // failed
    }

}
else {
    // user already exists
    echo "Record not found!!";
}
if(($_GET['action']=='parmdel') && isset($_GET['delete2Id']))
{
    $id=$_GET['delete2Id'];
    $query="delete from  personality_rubric  where Id='$id'";

    try {
        $db->query($query);

        echo "Record deleted successfully!!";  // successful
        //redirect to registration page
        header('location:prubrics.php');

    } catch (PDOException $exception) {
        //echo $exception->getMessage();
        echo "problem encountered!";     // failed
    }

}
else {
    // user already exists
    echo "Record not found!!";
}
if(($_GET['action']=='parmdel') && isset($_GET['delete3Id']))
{
    $id=$_GET['delete3Id'];
    $query="delete from  learning_styles  where Id='$id'";

    try {
        $db->query($query);

        echo "Record deleted successfully!!";  // successful
        //redirect to registration page
        header('location:lstyles.php');

    } catch (PDOException $exception) {
        //echo $exception->getMessage();
        echo "problem encountered!";     // failed
    }

}
else {
    // user already exists
    echo "Record not found!!";
}
if(($_GET['action']=='parmdel') && isset($_GET['delete4Id']))
{
    $id=$_GET['delete4Id'];
    $query="delete from  `talent_domains`  where Id='$id'";

    try {
        $db->query($query);

        echo "Record deleted successfully!!";  // successful
        //redirect to registration page
        header('location:tdomains.php');

    } catch (PDOException $exception) {
        //echo $exception->getMessage();
        echo "problem encountered!";     // failed
    }

}
else {
    // user already exists
    echo "Record not found!!";
}
if(($_GET['action']=='parmdel') && isset($_GET['delete5Id']))
{
    $id=$_GET['delete5Id'];
    $query="delete from  `talent_genre_development`  where Id='$id'";

    try {
        $db->query($query);

        echo "Record deleted successfully!!";  // successful
        //redirect to registration page
        header('location:talentgenre.php');

    } catch (PDOException $exception) {
        //echo $exception->getMessage();
        echo "problem encountered!";     // failed
    }

}
else {
    // user already exists
    echo "Record not found!!";
}
if(($_GET['action']=='parmdel') && isset($_GET['delete6Id']))
{
    $id=$_GET['delete6Id'];
    $query="delete from  `modifiers`  where Id='$id'";

    try {
        $db->query($query);

        echo "Record deleted successfully!!";  // successful
        //redirect to registration page
        header('location:modifiers.php');

    } catch (PDOException $exception) {
        //echo $exception->getMessage();
        echo "problem encountered!";     // failed
    }

}
else {
    // user already exists
    echo "Record not found!!";
}
if(($_GET['action']=='parmdel') && isset($_GET['delete7Id']))
{
    $id=$_GET['delete7Id'];
    $query="delete from  `academic_theme_scales`  where Id='$id'";

    try {
        $db->query($query);

        echo "Record deleted successfully!!";  // successful
        //redirect to registration page
        header('location:academictheme.php');

    } catch (PDOException $exception) {
        //echo $exception->getMessage();
        echo "problem encountered!";     // failed
    }

}
else {
    // user already exists
    echo "Record not found!!";
}
if(($_GET['action']=='parmdel') && isset($_GET['delete8Id']))
{
    $id=$_GET['delete8Id'];
    $query="delete from  `potential_occupation_themes`  where Id='$id'";

    try {
        $db->query($query);

        echo "Record deleted successfully!!";  // successful
        //redirect to registration page
        header('location:potentialoccupation.php');

    } catch (PDOException $exception) {
        //echo $exception->getMessage();
        echo "problem encountered!";     // failed
    }

}
else {
    // user already exists
    echo "Record not found!!";
}
if(($_GET['action']=='parmdel') && isset($_GET['delete9Id']))
{
    $id=$_GET['delete9Id'];
    $query="delete from  `base_standards`  where Id='$id'";

    try {
        $db->query($query);

        echo "Record deleted successfully!!";  // successful
        //redirect to registration page
        header('location:bstandards.php');

    } catch (PDOException $exception) {
        //echo $exception->getMessage();
        echo "problem encountered!";     // failed
    }

}
else {
    // user already exists
    echo "Record not found!!";
}
if(($_GET['action']=='parmdel') && isset($_GET['delete10Id']))
{
    $id=$_GET['delete10Id'];
    $query="delete from  `augmenting_models`  where Id='$id'";

    try {
        $db->query($query);

        echo "Record deleted successfully!!";  // successful
        //redirect to registration page
        header('location:augmodels.php');

    } catch (PDOException $exception) {
        //echo $exception->getMessage();
        echo "problem encountered!";     // failed
    }

}
else {
    // user already exists
    echo "Record not found!!";
}
if(($_GET['action']=='parmdel') && isset($_GET['deleteoralId']))
{
    $id=$_GET['deleteoralId'];
    $query="delete from  `users`  where userID='$id'";

    try {
        $db->query($query);

        echo "Record deleted successfully!!";  // successful
        //redirect to registration page
        header('location:viewScreeners.php');

    } catch (PDOException $exception) {
        //echo $exception->getMessage();
        echo "problem encountered!";     // failed
    }

}
else {
    // user already exists
    echo "Record not found!!";
}
if(($_GET['action']=='parmdel') && isset($_GET['deletepsychoId']))
{
    $id=$_GET['deletepsychoId'];
    $query="delete from  `users`  where userID='$id'";

    try {
        $db->query($query);

        echo "Record deleted successfully!!";  // successful
        //redirect to registration page
        header('location:viewManager.php');

    } catch (PDOException $exception) {
        //echo $exception->getMessage();
        echo "problem encountered!";     // failed
    }

}
else {
    // user already exists
    echo "Record not found!!";
}
if(($_GET['action']=='parmdel') && isset($_GET['deletexpertId']))
{
    $id=$_GET['deletexpertId'];
    $query="delete from  `users`  where userID='$id'";

    try {
        $db->query($query);

        echo "Record deleted successfully!!";  // successful
        //redirect to registration page
        header('location:viewExperts.php');

    } catch (PDOException $exception) {
        //echo $exception->getMessage();
        echo "problem encountered!";     // failed
    }

}
else {
    // user already exists
    echo "Record not found!!";
}
if(($_GET['action']=='parmdel') && isset($_GET['countryId']))
{
    $id=$_GET['countryId'];
    $query="delete from  `countries`  where Id='$id'";

    try {
        $db->query($query);

        echo "Record deleted successfully!!";  // successful
        //redirect to registration page
        header('location:add-country.php');

    } catch (PDOException $exception) {
        //echo $exception->getMessage();
        echo "problem encountered!";     // failed
    }

}
else {
    // user already exists
    echo "Record not found!!";
}
if(($_GET['action']=='parmdel') && isset($_GET['cityId']))
{
    $id=$_GET['cityId'];
    $query="delete from  `cities`  where Id='$id'";

    try {
        $db->query($query);

        echo "Record deleted successfully!!";  // successful
        //redirect to registration page
        header('location:add-city.php');

    } catch (PDOException $exception) {
        //echo $exception->getMessage();
        echo "problem encountered!";     // failed
    }

}
else {
    // user already exists
    echo "Record not found!!";
}
if(($_GET['action']=='parmdel') && isset($_GET['declineID']))
{
    $id=$_GET['declineID'];
    $query="delete from  `candidates`  where candidateID='$id'";

    try {
        $db->query($query);

        echo "Record Deleted Successfully!!";  // successful
        //redirect to registration page
        header('location:dashboard.php');

    } catch (PDOException $exception)
    {
        //echo $exception->getMessage();
        echo "problem encountered!";     // failed
    }

}
else {
    // user already exists
    echo "Record Not Found!!";
}
if(($_GET['action']=='approve') && isset($_GET['approveID']))
{
    $id=$_GET['approveID'];
    $query="update  `candidates` set status='1'  where candidateID='$id'";

    try {
        $db->query($query);

        echo "Record Deleted Successfully!!";  // successful
        //redirect to registration page
        header('location:dashboard.php');

    } catch (PDOException $exception)
    {
        //echo $exception->getMessage();
        echo "Problem encountered!";     // failed
    }

}
else {
    // user already exists
    echo "Record Not Found!!";
}
//delete outcomes
if(($_GET['action']=='parmdel') && isset($_GET['deleteOutcomeId']))
{
    $id=$_GET['deleteOutcomeId'];
    $query="delete from  `outcomes`  where outcome_id='$id'";

    try {
        $db->query($query);

        echo "Record deleted successfully!!";  // successful
        //redirect to registration page
        header('location:outcomes.php');

    } catch (PDOException $exception) {
        //echo $exception->getMessage();
        echo "problem encountered!";     // failed
    }

}
else {
    // user already exists
    echo "Record not found!!";
}

//delete activity
if(($_GET['action']=='parmdel') && isset($_GET['deleteActivityId']))
{
    $id=$_GET['deleteActivityId'];
    $query="delete from  `activities`  where activity_id='$id'";

    try {
        $db->query($query);

        echo "Record deleted successfully!!";  // successful
        //redirect to registration page
        header('location:activities.php');

    } catch (PDOException $exception) {
        //echo $exception->getMessage();
        echo "problem encountered!";     // failed
    }

}
else {
    // user already exists
    echo "Record not found!!";
}

//delete resource
if(($_GET['action']=='parmdel') && isset($_GET['deleteResourceId']))
{
    $id=$_GET['deleteResourceId'];
    $query="delete from  `resources`  where resource_id='$id'";

    try {
        $db->query($query);

        echo "Record deleted successfully!!";  // successful
        //redirect to registration page
        header('location:resources.php');

    } catch (PDOException $exception) {
        //echo $exception->getMessage();
        echo "problem encountered!";     // failed
    }

}
else {
    // user already exists
    echo "Record not found!!";
}
//delete prescription tasks
if(($_GET['action']=='parmdel') && isset($_GET['talentprescId']))
{
    $id=$_GET['talentprescId'];
    $query="delete from  `talent_prescription_tasks`  where presc_id='$id'";

    try {
        $db->query($query);

        echo "Record deleted successfully!!";  // successful
        //redirect to registration page
        header('location:talentpresctasks.php');

    } catch (PDOException $exception) {
        //echo $exception->getMessage();
        echo "problem encountered!";     // failed
    }

}
else {
    // user already exists
    echo "Record not found!!";
}

//delete preambles
if(($_GET['action']=='parmdel') && isset($_GET['deletePreambleId']))
{
    $id=$_GET['deletePreambleId'];
    $query="delete from  `preambles`  where preamble_id='$id'";

    try {
        $db->query($query);

        echo "Record deleted successfully!!";  // successful
        //redirect to registration page
        header('location:preamblesetup.php');

    } catch (PDOException $exception) {
        //echo $exception->getMessage();
        echo "problem encountered!";     // failed
    }

}
else {
    // user already exists
    echo "Record not found!!";
}

//delete lpd
if(($_GET['action']=='parmdel') && isset($_GET['deletelpdId']))
{
    $id=$_GET['deletelpdId'];
    $query="delete from  `learning_prescription_delimiters`  where lpd_id='$id'";

    try {
        $db->query($query);

        echo "Record deleted successfully!!";  // successful
        //redirect to registration page
        header('location:lpdsetup.php');

    } catch (PDOException $exception) {
        //echo $exception->getMessage();
        echo "problem encountered!";     // failed
    }

}
else {
    // user already exists
    echo "Record not found!!";
}