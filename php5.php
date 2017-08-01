<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "se1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$a=$_POST['appid'];
$b=$_POST['status'];

$sql = "UPDATE std SET Status='$b' WHERE appid='$a';";

if ($conn->query($sql) === TRUE) {
   header ("location: php4.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>