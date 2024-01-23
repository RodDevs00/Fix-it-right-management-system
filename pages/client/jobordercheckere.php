<?php
 include 'process/unsession.php';
    $tempids = $_GET['editId'];
    $sqlcardata = "SELECT * FROM cardata where id=$tempids";
$resultcardata = $con->query($sqlcardata);
 if ($resultcardata->num_rows > 0) {
 
             while($row = $resultcardata->fetch_assoc()) {
                $tempcarid = $row['plateid'];   

  }
}
$sqlrain = "SELECT * FROM transacttable WHERE custid = '$tempcarid';";
$resultrain = $con->query($sqlrain);
 while($row = $resultrain->fetch_assoc()) {
$tempcore = $row['carid'];
 }

 $sqlcheck = "SELECT * FROM transacttable WHERE carid = '$tempids' AND status ='Pending' OR  carid = '$tempids' AND status='Approved'";
 $resultcheck = $con->query($sqlcheck);

 while($row = $resultcheck->fetch_assoc()) {

 }
 if(mysqli_num_rows($resultcheck)>0){
        $_SESSION['stats'] ='Sorry, You already Have an existing booking';
        $_SESSION['stats_code'] ="warning";
        header('location: booking.php');
 }else{
     header('location: joborder.php?editId='.$tempids.'');
 }
     //while($row = $resultcurid->fetch_assoc()) {

     //}
 ?>