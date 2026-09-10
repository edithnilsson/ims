/* db.php -- is the php code to connect to the MySQL database. 
It should be called many times whenever it is needed, 
therefore it is defined in a separate file and the other files 
can just call it by  (include 'db.php';).*/


// code from L4
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "code grading";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>