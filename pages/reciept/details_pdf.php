<?php
include_once('../../include/config.php');
  include_once('../../include/config2.php');
 $tempid = $_GET['id'];
 $sqlabor = "SELECT * FROM transaction_table WHERE transaction_id = $tempid;";
 $resultlabor = $con->query($sqlabor);
             
$sqlmaterial = "SELECT * FROM parts_table WHERE item_transaction_id = $tempid;";
$resultmaterial = $con->query($sqlmaterial);
			while($row = $resultmaterial->fetch_assoc()) {

			}

$sqltransact = "SELECT * FROM transacttable WHERE transid = $tempid;";
$resulttransact = $con->query($sqltransact);
			while($row = $resulttransact->fetch_assoc()) {

			}

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
    <table  width="100%" > 
             
                <thead style="border:none;background-color: transparent;">
                    <th width="50%"></th>
                    <th width="50%" style="text-align: right;"></th>
                </thead>
             <tbody>
                <?php
                $sqlexist = "SELECT * FROM transacttable JOIN users ON custid = users.id JOIN cardata on carid = cardata.id WHERE transid = $tempid;";
                $resultexist = $con->query($sqlexist);
                if(mysqli_num_rows($resultexist)>0){
                   while($row = $resultexist->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>Customer Name :'. $row['firstname'].'  '.$row['lastname'].'</td>';
                    echo '<td>Vehicle :'. $row['carbrand'].' - '.$row['carmodel'].'</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td>Plate Number :'. $row['userphone'].'</td>';
                    echo '<td>Phone Number :'.$row['phone'].'</td>';
                    echo '</tr>';
                  }
              }
               

               
                 ?>
                     </tbody>
                </table>
      <table border="1" width="100%" > 
               <thead>
                   <tr >
                     <th>Labor & Services</th>
                    
                     <th width="20%">Cost</th>
                     <th width="20%">Date</th>
                     
                     
                     </tr>
               </thead>
             <tbody>
                <?php
                $sqlexist = "SELECT COUNT(id) as countitem , name,SUM(transact_total) as item_total,transaction_sched FROM transaction_table WHERE transaction_id = $tempid GROUP by name";
                $resultexist = $con->query($sqlexist);
                if(mysqli_num_rows($resultexist)>0){
                   while($row = $resultexist->fetch_assoc()) {
                  $temptot = $row['item_total'];
                  $tempdate = $row['transaction_sched'];
                        $myrealdate = strtotime($tempdate);
                echo '<tr>';
                 echo '<td>'. $row['name'].'</td>';
               
                
                 echo '<td>';echo number_format($temptot,'2');echo'</td>';
                echo "<td>"; 
                      echo date('F, j, Y', $myrealdate);
                      echo"</td>";

               echo '</tr>';
              }
                }else{
                  echo '<td>No Data Found</td>';
                  echo '<td></td>';
                  echo '<td></td>';
                  echo '<td></td>';
                }
               

               
                 ?>
                     </tbody>
                </table>
                <table border="1" width="100%" > 
               <thead>
                   <tr >
                     <th>Parts & Materials</th>
                     <th width="10%">Qty</th>
                   
                     <th width="20%">Cost</th>
                     <th width="20%">Date</th>
                     
                     
                     </tr>
               </thead>
             <tbody>
                <?php
                $sqlexist = "SELECT COUNT(item_id) as countitem , item_name,SUM(item_total) as item_total,item_price,item_transaction_sched FROM parts_table WHERE item_transaction_id = $tempid GROUP by item_name";
                $resultexist = $con->query($sqlexist);
                if(mysqli_num_rows($resultexist)>0){
                  while($row = $resultexist->fetch_assoc()) {
                  $tempdate = $row['item_transaction_sched'];
                  $temptot = $row['item_total'];
                        $myrealdate = strtotime($tempdate);
                echo '<tr>';
                 echo '<td>'. $row['item_name'].'</td>';
                 echo '<td>'. $row['countitem'].'</td>';
                echo '<td>';echo number_format($temptot,'2');echo'</td>';
               
                echo "<td>"; 
                      echo date('F, j, Y', $myrealdate);
                      echo"</td>";

               echo '</tr>';
              }
                }else{
                   echo '<td>No Data Found</td>';
                  echo '<td></td>';
                  echo '<td></td>';
                  echo '<td></td>';
                }
                

               
                 ?>
                     </tbody>
                </table>
                <table border="1" width="100%" > 
               <thead>
                   <tr >
                     <th>Recommendations</th>
                    
                   
                    
                     
                     
                     </tr>
               </thead>
             <tbody>
                <?php
                $sqlrecommend = "SELECT * FROM recommend WHERE recoomendtransid = '$tempid';";
                $resultrecommend = $con->query($sqlrecommend);
                if(mysqli_num_rows($resultrecommend)>0){
                      echo '<tr>';
                      echo '<td>';
                  while($row = $resultrecommend->fetch_assoc()) {
                  $tempdate = $row['recommendmsg'];
                       
                
                 echo '<p4>'.$tempdate.'</p4>';
                 echo '<br';
             
              }
                echo '</td>';
                echo '</tr>';
                }else{
                   
                }
                

               
                 ?>
                     </tbody>
                </table>
               <table border="1" width="100%" > 
            
                 <?php
                           
                            
                            $totallabor = "SELECT SUM(transact_total) as totalpricelabor FROM transaction_table WHERE transaction_id = '$tempid';";
                            $totalresultlabor= mysqli_query($con,$totallabor);
                            $totallabordata = mysqli_fetch_assoc($totalresultlabor);
                            
                            $totallabor = $totallabordata['totalpricelabor'];
                            $totalparts = "SELECT SUM(item_total) as totalpriceprart FROM parts_table WHERE item_transaction_id = '$tempid' AND item_status !='Pending';";
                            $resultparts= mysqli_query($con,$totalparts);
                            $totalpartsdata = mysqli_fetch_assoc($resultparts);
                            
                            $totalpartsum = $totalpartsdata['totalpriceprart'];
                            $totalihap = $totallabor + $totalpartsum;
                            $sqlraw = "SELECT * FROM transacttable WHERE transid = '$tempid';";
                            $resultraw= mysqli_query($con,$sqlraw);
                            if(mysqli_num_rows($resultraw)>0){
                               $totalraw = mysqli_fetch_assoc($resultraw);
                               $totalsumraw = $totalraw['cashtotal'];
                            }else{
                                $totalsumraw = 0;
                            }
                           
                           $totalcharge = $totalsumraw - $totalihap;
                        echo '<thead style="border: none;">';
                        echo '<tr style="border: none;">';
                        echo '<th width="35%"></th>';
                        echo '<th>';
                        echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';
                        if($totallabor>0){
                           echo '<tr>';
                           echo '<td>Labor & Services</td>';
                           echo '<td>';echo number_format($totallabor,'2');echo'</td>';
                           echo '</tr>';
                        }else{}
                        if($totalpartsum>0){
                          echo '<tr>';
                          echo '<td>Parts & Materials<</td>';
                          echo '<td>';echo number_format($totalpartsum,'2');echo'</td>';
                          echo '</tr>';
                         }else{}
                       if($totalihap>0){
                          echo '<tr>';
                          echo '<td>Total<</td>';
                          echo '<td>';echo number_format($totalihap,'2');echo'</td>';
                          echo '</tr>';
                       }else{}
                       if($totalsumraw>0){
                          echo '<tr>';
                          echo '<td>Cash Amount</td>';
                          echo '<td>';echo number_format($totalsumraw,'2');echo'</td>';
                          echo '</tr>';
                       }else{}
                       if($totalcharge>0){
                          echo '<tr>';
                          echo '<td>Change</td>';
                          echo '<td>';echo number_format($totalcharge,'2');echo'</td>';
                          echo '</tr>';
                       }elseif($totalcharge == 0){
                        echo '<tr>';
                          echo '<td>Change</td>';
                          echo '<td>';echo number_format($totalcharge,'2');echo'</td>';
                          echo '</tr>';
                       }
                        
                       
                      
                        echo '</tbody>';
                  
                    
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