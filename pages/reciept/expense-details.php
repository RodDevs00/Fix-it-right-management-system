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
                   <th width="82.5%"></th>
                    <th></th>   
              </thead>
             <tbody>
            <td style="padding: none;">Expenses Reports</td>
           
            </tbody>
                </table> 
           <table border="1" width="100%" > 
               <thead>
                   <tr >
                     <th>Expense Name</th>
                     <th>Expense Cost</th>
                     
                     <th>Date Spend</th>
                     </tr>
               </thead>
             <tbody>
                <?php 
                     $sqlinventory = "SELECT * FROM expense_table ORDER BY expense_date ASC";
                     $resultinventory = mysqli_query($con, $sqlinventory) or die(mysqli_error($db));
                     while ($row = mysqli_fetch_array($resultinventory)) {
                      $prodname = $row['expense_name'];
                      $prodprice = $row['expense_price'];
                     
                      $proddatestock = $row['expense_date'];
                      $mydate = strtotime($proddatestock);
                      echo '<tr>';
                      echo '<td>'.$prodname.'</td>';
                      echo '<td>';echo number_format($prodprice,'2');echo'</td>';
                     
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
                            $totalsql = "SELECT COUNT(expense_id) as count,SUM(expense_price) as totals FROM expense_table";
                            $totalresult= mysqli_query($con,$totalsql);
                            $totaldata = mysqli_fetch_assoc($totalresult);
                            //echo $data['total'];
                            $totalsum = $totaldata['totals'];
                            $totalcount = $totaldata['count'];
                            
                            ?>
                   <tr >
                     <th width="31.5%"></th>
                    <th></th>
                     </tr>
               </thead>
             <tbody>
                    <tr>
                    <td>Total Expenses</td>
                    <td><?php echo number_format($totalsum,'2') ?></td>
                      </tr>

                      <tr>
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