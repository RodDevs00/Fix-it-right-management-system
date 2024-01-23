<?php
include_once('../../../include/config.php');
include_once('../../../include/config2.php');

try {
    $conn = new PDO('mysql:host=localhost;dbname=fix-it-right', 'root', '');
    $conn->query('SELECT 1');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $newcode = $_POST['itemtran'];

    foreach ($_POST['itemname'] as $key => $value) {
        $tempname = $_POST['itemname'][$key];
        $tempcat = $_POST['itemcategory'][$key];
        $tempi = $_POST['itemproductid'][$key];
        $tempamount = $_POST['itemamount'][$key];

        // Use prepared statements to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM product_inventory WHERE  p_name = :tempname ");
      
        $stmt->bindParam(':tempname', $tempname);
       
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $reseves = $row['p_on_hand'];
                $reserveid = $row['p_id'];

                if ($tempamount > $reseves) {
                    echo "<div class='alert alert-warning'>";
                    echo 'Not Enough Stock for ' . $tempname . '  Left: ' . $reseves . '';
                    echo '</div>';
                } else {
                    // Update stock
                    $reservesleft = $reseves - $tempamount;
                    $stmtUpdate = $conn->prepare("UPDATE product_inventory SET p_on_hand = :reservesleft WHERE p_id = :reserveid");
                    $stmtUpdate->bindParam(':reservesleft', $reservesleft);
                    $stmtUpdate->bindParam(':reserveid', $reserveid);
                    $stmtUpdate->execute();

                    // Insert data
                    $stmtInsert = $conn->prepare("INSERT INTO parts_table (item_product_id, item_category, item_name, item_price, item_amount, item_total, item_user_id, item_transaction_id, item_car_id, item_transaction_sched) VALUES (:item_product_id, :item_category, :item_name, :item_price, :item_amount, :item_total, :item_user_id, :item_transaction_id, :item_car_id, :item_transaction_sched)");
                    $stmtInsert->execute([
                        'item_product_id' => $_POST['itemproductid'][$key],
                        'item_category' => $_POST['itemcategory'][$key],
                        'item_name' => $_POST['itemname'][$key],
                        'item_price' => $_POST['itemprice'][$key],
                        'item_amount' => $_POST['itemamount'][$key],
                        'item_total' => $_POST['itemtotal'][$key],
                        'item_user_id' => $_POST['itemuserid'][$key],
                        'item_transaction_id' => $_POST['itemtransactionid'][$key],
                        'item_car_id' => $_POST['itemcarid'][$key],
                        'item_transaction_sched' => $_POST['items'][$key]
                    ]);

                    // Retrieve and display updated table
                    $temporaryid = $newcode;
                    $stmtTotal = $conn->prepare("SELECT SUM(item_total) as item_total, SUM(item_amount) as item_amount, item_price, item_name, item_category, item_id, item_product_id FROM parts_table WHERE item_transaction_id = :temporaryid GROUP BY item_name");
                    $stmtTotal->bindParam(':temporaryid', $temporaryid);
                    $stmtTotal->execute();

                    echo '<div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="18%">Product Code</th>
                                        <th width="22%">Materials</th>
                                        <th width="">Price</th>
                                        <th width="6%">Qty</th>
                                        <th width="">Total</th>
                                        <th width="5%"> Action</th>
                                    </tr>
                                </thead>
                                <tbody>';

                    while ($row = $stmtTotal->fetch(PDO::FETCH_ASSOC)) {
                        $magicsum3 = $row['item_price'];
                        $magicsum2 = $row['item_total'];

                        echo '<tr>';
                        echo '<td>' . $row['item_product_id'] . '</td>';
                        echo '<td>' . $row['item_name'] . '</td>';
                        echo '<td>' . number_format($magicsum3, 2) . '</td>';
                        echo '<td>' . $row['item_amount'] . '</td>';
                        echo '<td>' . number_format($magicsum2, 2) . '</td>';
                        echo '<td>
                                <button href="process/process.php?DELETE13=' . $row['item_id'] . '" type="button"  class="btndel btn btn-danger" style="border-radius: 10px;">
                                    <i class="fas fa-fw fa-trash"></i>
                                </button>
                              </td>';
                        echo '</tr>';
                    }

                    echo '</tbody>
                          </table>
                          </div>';
                }
            }
        }
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
