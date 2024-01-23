<?php
// process/get_category.php
include_once('../../../include/config.php');
include_once('../../../include/config2.php');

$conn = new PDO('mysql:host=localhost;dbname=fix-it-right', 'root','');  
// Assume you have a database connection established

if (isset($_POST['service'])) {
    $selectedService = $_POST['service'];

    // Replace this query with the actual logic to fetch the category based on the selected service
    $sql = "SELECT service_category FROM services WHERE service_name = :service";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':service', $selectedService);
    $stmt->execute();

    $category = $stmt->fetchColumn();

    echo $category;
} else {
    echo 'Error: Service parameter not set.';
}
?>
