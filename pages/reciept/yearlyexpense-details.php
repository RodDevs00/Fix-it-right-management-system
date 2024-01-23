<?php
include_once('../../include/config.php');
  include_once('../../include/config2.php');

$cur1 = date("Y-m-d");
 $mycur1 = strtotime($cur1);
            

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
            <td style="padding: none;">Yearly Expenses</td>
            <td><?php echo date(' Y', $mycur1);?></td>
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
                    $cur = date("Y-m-d");
                      $sqlinventory = "SELECT * FROM expense_table  WHERE YEAR(`expense_date`)=YEAR( CURRENT_DATE )  ORDER by expense_date ASC ";
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
                    <?php
                     $totalsql = "SELECT SUM(expense_price) as totals,COUNT(expense_id) as count FROM expense_table WHERE YEAR(`expense_date`)=YEAR( CURRENT_DATE );";
                            $totalresult= mysqli_query($con,$totalsql);
                            $totaldata = mysqli_fetch_assoc($totalresult);
                            $totalsum = $totaldata['totals'];
                            $totalcount = $totaldata['count'];
                            if($totalsum > 0){
                        echo '<thead style="border: none;">';
                        echo '<tr style="border: none;">';
                        echo '<th width="32.3%"></th>';
                        echo '<th>';
                        echo '</tr>';

                        echo '</thead>';
                        echo '<tbody>';
                        echo '<tr>';
                        echo '<td>Total Expenses</td>';
                        echo '<td>';echo number_format($totalsum,'2');echo'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>Total Items</td>';
                        echo '<td>';echo number_format($totalcount,'2');echo'</td>';
                        echo '</tr>';
                        echo '</tbody>';
                    }else{

                    }
                    ?>
                   
                     
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