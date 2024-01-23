<?php
// Include your database connection code
include_once('../../../include/config.php');
include_once('../../../include/config2.php');

// Fetch materials from the database
$sql = "SELECT DISTINCT p_name FROM product_inventory";
$result = mysqli_query($con, $sql);

$materials = array();
while ($row = mysqli_fetch_assoc($result)) {
    $materials[] = $row['p_name'];
}

// Return materials as JSON
header('Content-Type: application/json');
echo json_encode($materials);
?>
