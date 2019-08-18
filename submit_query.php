<?php
session_start();

function send_message($phone_no){
$username = "mohammadsaqulain18@gmail.com";
$hash = "ab359348d28c2b8e639325ef6c4c02af4027c40ac3842af102cdc017f58b7800";

// Config variables. Consult http://api.textlocal.in/docs for more info.
$test = "0";

// Data for text message. This is the text message data.
$sender = "TXTLCL"; // This is who the message appears to be from.
$numbers = $phone_no; // A single number or a comma-seperated list of numbers
$message = "We have registered your inquiry you will recieve a call shortly." ;
// 612 chars or less
// A single number or a comma-seperated list of numbers
$message = urlencode($message);
$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
$ch = curl_init('http://api.textlocal.in/send/?');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch); // This is the result from the API
curl_close($ch);
}
function send_message1(){
$username = "mohammadsaqulain18@gmail.com";
$hash = "ab359348d28c2b8e639325ef6c4c02af4027c40ac3842af102cdc017f58b7800";

// Config variables. Consult http://api.textlocal.in/docs for more info.
$test = "0";

// Data for text message. This is the text message data.
$sender = "TXTLCL"; // This is who the message appears to be from.
$numbers = "7838938738"; // A single number or a comma-seperated list of numbers
$message = "There is an enquiry for you" ;
// 612 chars or less
// A single number or a comma-seperated list of numbers
$message = urlencode($message);
$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
$ch = curl_init('http://api.textlocal.in/send/?');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch); // This is the result from the API
curl_close($ch);
}

extract($_POST);
$labour_category=$_SESSION['service_name'];
$username=$_SESSION['username'];

date_default_timezone_set("Asia/Calcutta");
$t=date("H:i:s");
$d=date("Y/m/d")." ".$t;
    $link = mysqli_connect("localhost", "root", "1234", "labourbuy");
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $sql1 = "INSERT INTO inquiry(company_name,username,phone_no,labour_category_name,labour_required,location,date_inquired,description,urgent) VALUES (?,?,?,?,?,?,?,?,?)";
if($stmt = mysqli_prepare($link, $sql1)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sssssssss", $company_name,$username,$phone_no,$labour_category,$qty,$address,$d,$description,$urgent);

    // Set parameters
    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
      send_message($phone_no);
      send_message1();
    } else{
        echo "ERROR: Could not execute query: $sql1. " . mysqli_error($link);
    }
} else{
    echo "ERROR: Could not prepare query: $sql1. " . mysqli_error($link);
}

// Close statement
mysqli_stmt_close($stmt);


// Close connection
mysqli_close($link);


?>
