<?php
  include 'process/session.php';
  $sql = "SELECT * FROM category ORDER by c_name ASC";
$result = mysqli_query($con, $sql) or die ("Bad SQL: $sql");



$opt = "<select class='form-control' id ='p_category' name='pcategory'>
        <option disabled selected>Select Category</option>";
  while ($row = mysqli_fetch_assoc($result)) {
    $opt .= "<option value='".$row['c_name']."'>".$row['c_name']."</option>";
  }

$opt .= "</select>";

$sql2 = "SELECT * FROM supplier ORDER by s_company_name ASC";
$result2 = mysqli_query($con, $sql2) or die ("Bad SQL: $sql2");

$sup = "<select class='form-control' id='p_supplier' name='psupplier'>
        <option disabled selected>Select Supplier</option>";
  while ($row = mysqli_fetch_assoc($result2)) {
    $sup .= "<option value='".$row['s_company_name']."'>".$row['s_company_name']."</option>";
  }

$sup .= "</select>";
?>

<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

       
            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold">Inventory&nbsp;</h4>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                  <thead>
                        <tr>
                          <th hidden>PRODUCT ID</th>
                    
                     <th>Name</th>
                    
                     
                     <th width="12%">On Hand</th>
                     <th width="5%">Category</th>
                     <th width="20%">Date Stock in</th>
                  
                     <th width="15%">Action</th>

                        </tr>
                     </thead>
                    <tbody>
                <?php                  
                        $query = "SELECT SUM(p_on_hand) as ptotalhand,p_price,p_date_stock,p_name,p_on_hand,p_id,p_category,p_supplier FROM product_inventory GROUP BY p_name";
                        $result = mysqli_query($con, $query) or die (mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($result)) {
                          $tempprice = $row['p_price'];
                          $tempdates = $row['p_date_stock'];
                          $mycur = strtotime($tempdates);
                          $p = $row['p_on_hand'];
                        echo '<tr>';
                        echo '<td hidden>'. $row['p_id'].'</td>';
                       
                        echo '<td>'. $row['p_name'].'</td>';
                       
                        
                        if($p == 0){
                          echo '<td class="text-danger font-weight-bold">Out of Stocks</td>';
                        }elseif($p <=10){
                           echo '<td class="text-warning font-weight-bold">'. $row['ptotalhand'].'</td>';
                        }else{
                          echo '<td class="text-success font-weight-bold">'. $row['ptotalhand'].'</td>';
                        }
                        echo '<td>'. $row['p_category'].'</td>';
                        echo '<td>';
                        echo date('F, jS, Y', $mycur);
                        echo '</td>';

                     
                        echo '<td align="right"> <div class="btn-group">
                              <a type="button" class="btn btn-danger" href="inventoryedit.php?action=edit & id='.$row['p_id'] . '"><i class="fas fa-fw fa-list-alt"></i> Details</a>
                          </td>';
                        echo '</tr> ';
                        }
                    ?> 
                    
                                    
                    </tbody>
                </table>
              </div>
            </div>
          </div>
  </body>
  </html>


<?php
include ('footer.php');
 ?>