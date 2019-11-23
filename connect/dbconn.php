 <?php
// session_start();
 
$servername = "localhost";
$user = "root";
$pass = "databasepwd";
$database = "worldtalent";

try {
    $db = new PDO("mysql:host=$servername;dbname=$database", $user,$pass);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//	echo "connection successfull";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?> 