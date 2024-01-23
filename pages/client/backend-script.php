<?php
include('database.php'); 
$searchTerm = $_GET['term'];
$sql = "SELECT * FROM product_inventory WHERE p_product_code LIKE '%".$searchTerm."%'"; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
  $tutorialData = array(); 
  while($row = $result->fetch_assoc()) {
   $data['id']    = $row['p_id']; 
   $data['value'] = $row['p_product_code'];
   array_push($tutorialData, $data);
} 
}
 echo json_encode($tutorialData);
?>