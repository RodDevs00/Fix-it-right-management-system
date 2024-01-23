<?php
  include_once('../../../include/config.php');
  include_once('../../../include/config2.php');

$conn = new PDO('mysql:host=localhost;dbname=fix-it-right', 'root','');
foreach($_POST['itemname'] as $key => $value){
    
     $sql1 = 'INSERT INTO parts_table(
            item_product_id,
            item_category,
            item_name, 
            item_price, 
            pendingamount, 
            pendingtotal, 
            item_user_id
            ) VALUES (:item_product_id,:item_category, :item_name, :item_price, :pendingamount, :pendingtotal, :item_user_id, :item_transaction_sched)';
    $stmt = $conn->prepare($sql1);
    $stmt->execute([
    'item_product_id' => $_POST['itemproductid'][$key],   
    'item_category' => $_POST['itemcategory'][$key],
    'item_name' => $_POST['itemname'][$key],
    'item_price' => $_POST['itemprice'][$key],
    'pendingamount' => $_POST['itemamount'][$key],
    'pendingtotal' => $_POST['itemtotal'][$key],
    'item_user_id' => $_POST['itemuserid'][$key]
    
           
    ]);
}


         
?>