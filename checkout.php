<?php
session_start();
$id=$_POST['id'];
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "labourbuy";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

            $sql = "SELECT service_name FROM service where service_id='$id'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                   $_SESSION['service_name']=$row['service_name'];
                }
            } else {
                echo "0";
            }
            $conn->close();

 ?>
