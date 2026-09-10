<?php
/* db.php -- is the php code to connect to the MySQL database. 
It should be called many times whenever it is needed, 
therefore it is defined in a separate file and the other files 
can just call it by  (include 'db.php';).*/


// code from L4
$servername = "localhost";
# go to this webpage to see http://localhost/MAMP/?language=English and click on SQL for the corretc passwords
$username = "root"; 
$password = "root";
$dbname = "code grading";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo " <br> Connected successfully :)";
?>