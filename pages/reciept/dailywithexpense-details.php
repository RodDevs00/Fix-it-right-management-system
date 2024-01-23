<?php
include_once('../../include/config.php');
  include_once('../../include/config2.php');


$cur = date("Y-m-d");
 $mycur = strtotime($cur);
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daily Income</title>

	
 
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
<!-- HEADER -->
    
<table style="border: none;" > 
              <thead style="background-color: transparent;border: none;">
                   <th width="75%"></th>
                    <th></th>   
              </thead>
             <tbody>
            <td style="padding: none;">Daily Income for Labors & Services</td>
            <td><?php echo date('F, jS, Y', $mycur);?></td>
            </tbody>
                </table> 

        


<!-- END OF HEADER --> 
        <table border="1" width="100%" > 
               <thead>
                   <tr >
                     <th>Labor & Services</th>
                      <th width="25%">Mechanic</th>
                     <th width="20%">Cost</th>
                     <th width="20%">Date</th>
                     
                     
                     </tr>
               </thead>
             <tbody>
                <?php 
                    $currentdate = date("Y-m-d");
                     $sqlinventory = "SELECT * FROM transaction_table JOIN employee on encoder = employee.employee_fname WHERE transaction_sched = '$cur' ORDER BY price ASC";
                     $resultinventory = mysqli_query($con, $sqlinventory) or die(mysqli_error($db));
                      if(mysqli_num_rows($resultinventory)>0){
                     while ($row = mysqli_fetch_array($resultinventory)) {
                      $prodname = $row['name'];
                       $prodprice = $row['price'];
                       $tempdate = $row['transaction_sched'];
                        $myrealdate = strtotime($tempdate);
                        $fn = $row['employee_fname'];
                        $ln = $row['employee_lname'];
                        $full = $fn . ' ' . $ln;
                      echo '<tr>';
                      echo '<td>'.$prodname.'</td>';
                      echo "<td>".$full."</td>";
                      echo '<td>';echo number_format($prodprice,'2');echo'</td>';
                      echo "<td>"; 
                      echo date('F, jS, Y', $myrealdate);
                      echo"</td>";
                      echo '</tr>';
                      }
                  }else{
                     echo '<tr>';
                      echo '<td>No Records Found</td>';
                      echo '<td>No Records Found</td>';
                      echo '<td>No Records Found</td>';
                      echo '<td>No Records Found</td>';
                      echo '</tr>';
                  }
                      ?>

                      
                     </tbody>
                </table>
                 <table border="1" width="100%" > 
             
             <tbody>
                 <?php
                    $totalsql = "SELECT SUM(price) as totals, COUNT(name) as count FROM transaction_table WHERE transaction_sched = '$cur';";
                    $totalresult= mysqli_query($con,$totalsql);
                    $totaldata = mysqli_fetch_assoc($totalresult);
                    //echo $data['total'];
                    $totalsum = $totaldata['totals'];
                    $totalcount = $totaldata['count'];
                    if($totalsum > 0){
                        echo '<thead style="border: none;">';
                        echo '<tr style="border: none;">';
                        echo '<th width="60%"></th>';
                        echo '<th>';
                        echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';
                        echo '<tr>';
                        echo '<td>Total Cost</td>';
                        echo '<td>';echo number_format($totalsum,'2');echo'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>Total Number of Labors and Services<</td>';
                        echo '<td>';echo number_format($totalcount,'2');echo'</td>';
                        echo '</tr>';
                        echo '</tbody>';
                    }else{

                    }
                            ?>
                   
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