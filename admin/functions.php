<?php
    require_once "../connect/dbconn.php";  // connect to database

 if(isset($_POST["Import"])){
    
    $filename=$_FILES["file"]["tmp_name"];    
     if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");
          while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
           {
             $sql = "INSERT into candidates (`firstName`, `middleName`,`lastName`,`username`,`dob`,`age`,`gender`,`email`,`phone`,`country`,`region`,`clinicManager`,`password`,`assessImportance`,`video`) 
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[8]."', '".$getData[9]."','".$getData[10]."','".$getData[11]."','".$getData[12]."','".$getData[13]."','".$getData[14]."')";
                   $result = mysqli_query($db, $sql);
        if(!isset($result))
        {
          echo "<script type=\"text/javascript\">
              alert(\"Invalid File:Please Upload CSV File.\");
              window.location = \"dashboard.php\"
              </script>";    
        }
        else {
            echo "<script type=\"text/javascript\">
            alert(\"CSV File has been successfully Imported.\");
            window.location = \"dashboard.php\"
          </script>";
        }
           }
      
           fclose($file);  
     }
  }
  if(isset($_POST["Export"])){
     
    header('Content-Type: text/csv; charset=utf-8');  
    header('Content-Disposition: attachment; filename=data.csv');  
    $output = fopen("php://output", "w");  
    fputcsv($output, array('ID', 'First Name', 'Last Name', 'Email', 'Joining Date'));  
    $query = "SELECT * from candidates ORDER BY candidateID DESC";  
    $result = mysqli_query($con, $query);  
    while($row = mysqli_fetch_assoc($result))  
    {  
         fputcsv($output, $row);  
    }  
    fclose($output);  
}    
