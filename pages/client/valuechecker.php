<?php
 include 'process/unsession.php';
    $tempids = $_GET['editId'];
 $sqlcheck = "SELECT * FROM transaction_table WHERE transaction_id = '$tempids';";
 $resultcheck = $con->query($sqlcheck);
 if(mysqli_num_rows($resultcheck)>0){
       header('location: joborder3.php?editId='.$tempids.'');
 }else{
 	    $_SESSION['stats'] =''.$cname.' No Services Selected Yet';
        $_SESSION['stats_code'] ="warning";
        header('location: joborder2.php?editId='.$tempids.'');
 }
     //while($row = $resultcurid->fetch_assoc()) {

     //}
 ?>