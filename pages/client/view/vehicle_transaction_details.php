
<?php
  include '../process/sessions_view.php';
$tempid = $_GET['editId'];
    
  
?>


   



<!doctype html>

<html lang="en-US">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
 


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">



</head>



<body>  <center><div class="card shadow mb-4 col-xs-12 col-md-8">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold">Vehicle's Service History</h4>
            </div>
               <div class="card-body">
                     <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                  <thead>
                        <tr>
                          <th width="100%" class="text-center col-sm-3"> <h5>
                          Services<br>
                        </h5></th>
                         
                         
                        </tr>
                     </thead>
                    <tbody>
                <?php                  
                 $sql21 = "SELECT SUM(transact1) FROM transacttable WHERE custid = $tempid";
                    $result21 = mysqli_query($con, $sql21) or die(mysqli_error($db));

                  while ($row = mysqli_fetch_array($result21)) {


                    $sumlabor = $row['SUM(transact1)'];
                      }
                        $query = "SELECT * FROM transaction_table JOIN transacttable on transaction_table.transaction_id = transacttable.transid WHERE transaction_user_id = '$tempid';";
                        $result = mysqli_query($con, $query) or die (mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($result)) {
                           $tempname = $row['name'];
                           $tempcoder = $row['encoder'];
                           $total = $row['transact1'];
                           $date = $row['transact_sched'];
                           $stats = $row['status'];
                        echo '<tr>';

                        echo "<td>";
                        echo '<div class="col-sm-9"><h5>';
                        echo ''.$tempname.'';
                       
                        echo '<br></h5></div>';
                         echo '<div class="col-sm-9 col-sm-3 text-secondary"><h5>';
                        echo ''.$tempcoder.'';
                       
                        echo '<br></h5></div>';
                        echo "</td>";
                        echo '</tr> ';
                        }
                    ?> 
                    
                                    
                    </tbody>
                </table>
                            </div>
                            <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Total<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : ₱ <?php echo number_format($sumlabor, 2); ?>
 <br>
                        </h5>
                      </div>
                    </div>
                       <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Date<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>

                          : <?php
                           
                           $mydate = strtotime($date);
                           echo date('F, jS, Y', $mydate); ?> <br>
                        </h5>
                      </div>

                    </div>
                     <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Status<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $stats; ?> <br>
                        </h5>
                      </div>
                    </div>

               
                   
           
                   
                    <a href="../vehicle.php" type="button" class="btn btn-dark"> <i class="fas fa-flip-horizontal fa-fw fa-share"></i> Back </a>
        

                      </div>
                    </div>

          </div>
          </div>
  
</html>

<?php

include('footer.php');
?>