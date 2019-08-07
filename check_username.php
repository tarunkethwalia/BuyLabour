<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "labourbuy";

extract($_POST);
// Create connection
if(!empty($_POST["phno"])){
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

            $phno=$_POST["phno"];

            $sql = "SELECT * FROM customer where ph_no='$phno'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                   echo "1"; 
                }
            } else {
                echo "0";
            }
            $conn->close();
        }
?>