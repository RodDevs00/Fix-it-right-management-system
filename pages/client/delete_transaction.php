<?php
include 'process/delsession.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['transid'])) {
    $transId = $_GET['transid'];

    // Perform the deletion in your database
    $deleteQuery = "DELETE FROM transacttable WHERE transid = ?";
    $stmt = mysqli_prepare($con, $deleteQuery);
    mysqli_stmt_bind_param($stmt, "i", $transId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // Redirect back to the page after deletion
    header('Location: home.php');
    exit();
} else {
    // Handle invalid request
    header('Location: error.php'); // Replace with an appropriate error page
    exit();
}
?>
