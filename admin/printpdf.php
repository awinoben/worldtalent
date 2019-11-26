<?php  
require_once "../connect/dbconn.php";
include ('session.php');
ob_end_clean();
$id = "";
 if (isset($_GET['candidateID'])) {
     $id = $_GET['candidateID'];
 } else {
     echo "No ID FOUND!!";
 }
 function fetch_presctasks()  
 {  
      $output = ''; 
    
      $id = $_GET['candidateID'];
      
      $db = mysqli_connect("localhost", "root", "databasepwd", "worldtalent");  
      $sql3 = "SELECT * FROM prescriptiontasks_candidate WHERE candidateID='$id' ";  
      $result3 = mysqli_query($db, $sql3); 

      $output .= ' 
      <h4>The Talent Prescription Tasks</h4>          
      <table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                <th width="11%">Item Ref</th>  
                <th width="20%">Task Ref</th>  
                <th width="30%">Description</th> 
                <th width="13%">Start Date</th>
                <th width="13%">End Dtae</th>
                <th width="13%">Cost (USD)</th> 
           </tr>  
      '; 
      while($row3 = mysqli_fetch_array($result3))  
      {  
       
      $output .= '<tr>  
                          <td>'.$row3["itemref"].'</td>  
                          <td>'.$row3["taskref"].'</td>  
                          <td>'.$row3["description"].'</td>  
                          <td>'.$row3["startdate"].'</td> 
                          <td>'.$row3["enddate"].'</td> 
                          <td>'.$row3["cost"].'</td> 
                     </tr>  
                          ';  
      }  
      $output .= '</table> <br /> <br /> <br />';
      return $output;  
 } 
 function fetch_header()
 {
     $output = ''; 
    
     $id = $_GET['candidateID'];
     
     $db = mysqli_connect("localhost", "root", "databasepwd", "worldtalent"); 
     $sql = "SELECT * FROM candidates WHERE candidateID='$id' ";   
     $result = mysqli_query($db, $sql); 
     while($row = mysqli_fetch_array($result))  
     {  
      
     $output .= ' 
                   <p align="center"><img width="150" height="150" id="Picture 1" src="images/wtlogo.png"></p>
                   <p align="center"><a href="http://worldtalentfed.org/">www.worldtalentfed.org</a></p><br /><br />
                   <h1 align="center">TALENT BASED LEARNING PRESCRIPTION </h1><br /><br /><br /><br /><br /><br /><br /><br />
                   <h3 align="center">'.$row['firstName']." ".$row['middleName']." ".$row['lastName'].'</h3><br /><br />
                   <p align="center"><strong>Age:</strong> '.$row["age"]. '</p><br /><br />
                   <p align="center"><strong>Gender:</strong> '.$row["gender"]. '</p><br /><br />
                   <p align="center"><strong>Country:</strong> '.$row["country"]. '</p><br /><br />
                   <p align="center"><strong>City:</strong> '.$row["region"]. '</p><br /><br />
                   <p align="center"><strong>Talent Report Ref</strong>: 3404</p><br /><br />
                   <p align="center"><strong>Prescription Ref:</strong> WTF/Presc/19/139</p>
                   <div style="margin-bottom: 50px;"></div>
  
                         ';  
     }  
     return $output;  
 }

 function fetch_preamble()
 {
     $output = ''; 
    
     $id = $_GET['candidateID'];
     
     $db = mysqli_connect("localhost", "root", "databasepwd", "worldtalent"); 
     $sql = "SELECT * FROM preamble_candidates WHERE candidateID='$id' ";  
     $result = mysqli_query($db, $sql); 
     while($row = mysqli_fetch_array($result))  
     {  
      
     $output .= ' 
                   <h4 align="left">Preamble </h4><br /><br />
                   <p>'.$row["description"]. '</p><br /><br /><br /><br />
  
                         ';  
     }  
     return $output;  
 }
 function fetch_lpd()
 {
     $output = ''; 
    
     $id = $_GET['candidateID'];
     
     $db = mysqli_connect("localhost", "root", "databasepwd", "worldtalent"); 
     $sql = "SELECT * FROM lpd_candidates WHERE candidateID='$id' ";  
     $result = mysqli_query($db, $sql); 
     while($row = mysqli_fetch_array($result))  
     {  
      
     $output .= ' 
                   <h4 align="left">Key Talent/Learning Prescription Delimeters </h4><br /><br />
                   <ol>
                   <li>'.$row["lpd1"]. '</li><br />
                   <li>'.$row["lpd2"]. '</li><br />
                   <li>'.$row["lpd3"]. '<li><br />
                   <li>'.$row["lpd4"]. '</li><br />
                   <li>'.$row["lpd5"]. '</li><br />
                   <li>'.$row["lpd6"]. '</li><br />
                   <li>'.$row["lpd7"]. '</li><br />
                   <li>'.$row["lpd8"]. '</li><br />
                   </ol><br /><br /><br /><br />
  
                         ';  
     }  
     return $output;  
 }
 function fetch_resource()
 {
     $output = ''; 
    
     $id = $_GET['candidateID'];
     
     $db = mysqli_connect("localhost", "root", "databasepwd", "worldtalent"); 
     $sql = "SELECT description FROM resources_candidate WHERE candidateID='$id' AND resourcetype='Resource set type1' ";
       
     $result = mysqli_query($db, $sql); 
     while($row = mysqli_fetch_array($result))  
     {  
      
     $output .= ' 
                   <h4 align="left">Resources </h4><br /><br />
                   <ul>
                   <li>'.$row["description"]. '</li><br />
                   </ul><br /><br /><br /><br />
  
                         ';  
     }  
     return $output;  
 }
 function fetch_activity()
 {
     $output = ''; 
    
     $id = $_GET['candidateID'];
     
     $db = mysqli_connect("localhost", "root", "databasepwd", "worldtalent"); 
     $sql = "SELECT * FROM activities_candidates WHERE candidateID='$id' AND activitytype='Activity Set Type 1'  ";  
     $result = mysqli_query($db, $sql); 
     while($row = mysqli_fetch_array($result))  
     {  
      
     $output .= ' 
                   <h4 align="left">Activities </h4><br /><br />
                   <ul>
                   <li>'.$row["description"]. '</li><br />
                   </ul><br /><br /><br /><br />
  
                         ';  
     }  
     return $output;  
 }
 function fetch_outcomes()
 {
     $output = ''; 
    
     $id = $_GET['candidateID'];
     
     $db = mysqli_connect("localhost", "root", "databasepwd", "worldtalent"); 
     $sql = "SELECT * FROM outcomes_candidates WHERE candidateID='$id' AND outcometype='Outcome Set Type 1'  ";  
     $result = mysqli_query($db, $sql); 
     while($row = mysqli_fetch_array($result))  
     {  
      
     $output .= ' 
                   <h4 align="left">Outcomes </h4><br /><br />
                   <ul>
                   <li>'.$row["description"]. '</li><br />
                   </ul><br /><br /><br /><br />
  
                         ';  
     }  
     return $output;  
 }

 if(isset($_POST["generate_pdf"]))  
 {  
      require_once('pdf/tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Talent Prescription Report");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(true);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 11);  
      $obj_pdf->AddPage(); 
      // set margins
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
      $obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER); 
      $content = '';
      $content .= fetch_header(); 
      $content .= fetch_preamble(); 
      $content .= fetch_lpd();
      $content .= fetch_presctasks();  
      $content .= fetch_resource();
      $content .= fetch_activity();
      $content .= fetch_outcomes();
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('PrescriptionReport.pdf', 'I');  
 }   
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>World Talent</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />            
      </head>  
      <body>  
           <br />
           <div class="container"> 
                <h4 align="center">Talent Prescription Report</h4><br /> 
                <div class="table-responsive">  
                	<div class="col-md-12" align="right">
                     <form method="post">  
                          <input type="submit" name="generate_pdf" class="btn btn-success" value="Generate PDF" />  
                     </form>  
                     </div>
                     <br/>
                     <?php
                 echo fetch_header(); 
                 echo fetch_preamble(); 
                 echo fetch_lpd();
                 echo fetch_presctasks();
                 echo fetch_resource();
                 echo fetch_activity();
                 echo fetch_outcomes();
                ?>
                </div>  
           </div>  
      </body>  
</html>