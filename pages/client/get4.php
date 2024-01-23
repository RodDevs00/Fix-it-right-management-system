<?php
$con = mysqli_connect("localhost", "root", "", "fix-it-right");
if (mysqli_connect_errno()){
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$user = $_REQUEST['user'];    
$sql = mysqli_query($con, "SELECT service_price,service_category FROM services WHERE service_name = 
'".mysqli_escape_string($con, $user)."' ");
$row = mysqli_fetch_array($sql);

header('Content-Type: application/json'); //set the content type for browser
echo json_encode($row); //return result to browser
mysqli_close($con); //close mysql connection

