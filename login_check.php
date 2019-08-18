<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "labourbuy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = $_POST['username'];
      $password =$_POST['password'];
	  $sql1 = "SELECT * FROM customer where username='$username' and password='$password'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {

	$_SESSION["loggedin"]="T";
		$_SESSION["username"]="$username";
    echo "1";
    }
} else {
    echo "0";
}




$conn->close();
?>
