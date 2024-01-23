<?php
include_once('../../include/config.php');
  include_once('../../include/config2.php');


			

 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Details PDF</title>
    
   
 
</head>

<body>
    <style type="text/css">
        table {
    width: 100%;
    border: none;
    border-collapse: collapse;
    border-spacing: 0;
    border-bottom: 2px solid #d2d6dd;
}

th {
    
}
.footer{
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1rem;

}
td {
    padding: .8rem 0.4rem;
}

thead {
    border-top: 2px solid #d2d6dd;
    border-bottom: 2px solid #d2d6dd;
    background-color: #efefef;
}

tfoot {
    border-top: 2px solid #d2d6dd;
    border-bottom: 2px solid #d2d6dd;
}

table.striped tr:nth-of-type(2n) {
    background-color: #f3f3f6;
}
    </style>
           <table style="border: none;" > 
              <thead style="background-color: transparent;border: none;">
                   <th width="70.5%"></th>
                    <th></th>   
              </thead>
             <tbody>
            <td style="padding: none;">Inventory Reports</td>
           
            </tbody>
                </table> 
           <table border="1" width="100%" > 
               <thead>
                   <tr >
                     <th>Product Name</th>
                     <th>Prices</th>
                     <th>Stocks</th>
                     <th>Date Stock</th>
                     </tr>
               </thead>
             <tbody>
                <?php 
                     $sqlinventory = "SELECT * FROM product_inventory ORDER BY p_date_stock ASC";
                     $resultinventory = mysqli_query($con, $sqlinventory) or die(mysqli_error($db));
                     while ($row = mysqli_fetch_array($resultinventory)) {
                      $prodname = $row['p_name'];
                      $prodprice = $row['p_price'];
                      $prodstock = $row['p_on_hand'];
                      $proddatestock = $row['p_date_stock'];
                      $mydate = strtotime($proddatestock);
                      echo '<tr>';
                      echo '<td>'.$prodname.'</td>';
                      echo '<td>';echo number_format($prodprice,'2');echo'</td>';
                      echo '<td>'.$prodstock.'</td>';
                      echo "<td>";
                      echo date('F, jS, Y', $mydate);
                      echo"</td>";
                      echo '</tr>';
                      }
                      ?>

                      
 			    	 </tbody>
                </table>
                
                                 <table border="1" width="100%" > 
               <thead style="border: none;">
                             <?php
                            $totalsql = "SELECT COUNT(p_id) as count FROM product_inventory";
                            $totalresult= mysqli_query($con,$totalsql);
                            $totaldata = mysqli_fetch_assoc($totalresult);
                            //echo $data['total'];
                          
                            $totalcount = $totaldata['count'];
                            
                            ?>
                   <tr >
                     <th width="31%"></th>
                    <th width="60%"></th>
                     </tr>
               </thead>
             <tbody>
                    <td>Total Items</td>
                    <td><?php echo $totalcount; ?></td>
                      </tr>
                     </tbody>
                </table>
                
               
                 <div class="footer">
                                <table style="text-align: center;border: none;">
                                <tbody>
                                    <tr>
                                    <td>____________________</td>
                                    <td>____________________</td>
                                    </tr>
                                    <tr>
                                    <td>ROJEY GARCIA</td>
                                    <td>MECHANIC SIGNATURE</td>
                                    </tr>     
                                </tbody>
                            </table>
                        </div>

</body>
</html>