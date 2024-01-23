<?php
// Include your database connection code
include_once('../../../include/config.php');
include_once('../../../include/config2.php');

if (isset($_GET['material'])) {
    $material = $_GET['material'];

    // Fetch product details from the database
    $sql = "SELECT p_product_code AS productCode, p_category AS itemType, p_price AS price FROM product_inventory WHERE p_name = '$material'";
    $result = mysqli_query($con, $sql);
    
    if ($row = mysqli_fetch_assoc($result)) {
        // Return product details as JSON
        header('Content-Type: application/json');
        echo json_encode($row);
    } else {
        // Material not found
        header('HTTP/1.1 404 Not Found');
    }
} else {
    // Invalid request
    header('HTTP/1.1 400 Bad Request');
}
?>
