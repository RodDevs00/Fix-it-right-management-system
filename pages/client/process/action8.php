<?php
  include_once('../../../include/config.php');
  include_once('../../../include/config2.php');

$conn = new PDO('mysql:host=localhost;dbname=fix-it-right', 'root','');
foreach($_POST['recommendmsg'] as $key => $value){
     $tempids = $_POST['recommendtransid'][$key];
     
    $sqlrecommend = 'INSERT INTO recommend(recommendmsg,recoomendtransid,recommenduserid,recommendcarid) 
                    VALUES (:recommendmsg,:recoomendtransid,:recommenduserid,:recommendcarid)';
                            $stmt = $conn->prepare($sqlrecommend);
                            $stmt->execute([
                            'recommendmsg' => $_POST['recommendmsg'][$key],
                            'recoomendtransid' => $_POST['recommendtransid'][$key],
                            'recommenduserid' => $_POST['recommenduserid'][$key],
                            'recommendcarid' => $_POST['recommendcarid'][$key]
                            ]);
}
 $sqlrecommend=  "SELECT * FROM recommend WHERE recoomendtransid   ='$tempids';";
           $resultrecommend = $con->query($sqlrecommend);
           if(mysqli_num_rows($resultrecommend)>0){
             echo "<div class='alert alert-success'>";
             echo 'Recommendations has been added';
             echo '</div> ';
               echo '<div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                  
                    <tbody>';
                    
        while($row = $resultrecommend->fetch_assoc()) {
          
                         echo '<tr>';
                        echo '<td>'. $row['recommendmsg'].'</td>';
                        echo '<td width="5%">  <button href="process/process.php?DELETE13='.$row['recommendid']. '" type="button"  class="btndel btn btn-danger  " style="border-radius: 10px;" >
                                    <i class="fas fa-fw fa-trash"></i>
                                  </button></td>';
                        echo '</tr> ';
                   }
             
                               
                   echo' </tbody>
                </table>
              </div>';

        
      

           }else{

           }

         
?>