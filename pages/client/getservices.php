<?php
$con = mysqli_connect("localhost", "root", "", "fix-it-right");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset($_POST['category'])) {
    $selectedCategory = $_POST['category'];

    // Perform a query to fetch services based on the selected category
    $query = "SELECT * FROM services WHERE service_category = '$selectedCategory'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));

    // Build the HTML content for the table rows
    $htmlContent = '';
    while ($row = mysqli_fetch_assoc($result)) {
        $htmlContent .= '<tr>';
        $htmlContent .= '<td hidden>' . $row['service_jd'] . '</td>';
        $htmlContent .= '<td>' . $row['service_name'] . '</td>';
        $htmlContent .= '<td>' . $row['service_price'] . '</td>';
        $htmlContent .= '<td align="right"> <div class="btn-group">
                            <div class="btn-group">
                                <a type="button" class="btn btn-dark dropdown no-arrow" data-toggle="dropdown" style="color:white;">
                                ... <span class="caret"></span></a>
                                <ul class="dropdown-menu text-center" role="menu">
                                    <li>
                                        <a type="button" class="btn btn-warning bg-gradient-warning btn-block" style="border-radius: 0px;" href="update/service_edit.php?editId='.$row['service_jd']. '">
                                        <i class="fas fa-fw fa-edit"></i> Edit
                                        </a>
                                        <button onclick="confirmDelete('.$row['service_jd']. ')" type="button" class="btndel btn btn-danger bg-gradient-btn-danger btn-block" style="border-radius: 0px;">
                                        <i class="fas fa-fw fa-trash"></i> Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div> </td>';
        $htmlContent .= '</tr>';
    }

    // Send the HTML content back to the client
    echo $htmlContent;
} else {
    // Handle other parts of your process.php file
    // ...
}
?>
