<?php
include('database.php'); 
$searchTerm = $_GET['term'];
$sql = "SELECT * FROM services WHERE service_name LIKE '%".$searchTerm."%'"; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
  $tutorialData = array(); 
  while($row = $result->fetch_assoc()) {
   $data['id']    = $row['service_jd']; 
   $data['value'] = $row['service_name'];
   array_push($tutorialData, $data);
} 
}
 echo json_encode($tutorialData);
?>