<?php
  include 'process/session.php';
?>
<!doctype html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="index,follow">
  </head>

<body> 

            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold">Client's Account&nbsp;</h4>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                  <thead>
                        <tr>
                          <th>User Name</th>
                          <th>Password</th>
                          
                          <th>Email</th>
                          <th>Action</th>
                        </tr>
                     </thead>
                    <tbody>
                <?php             $temp = "";     
                        $query = "SELECT * FROM users WHERE user_type = '$temp'";
                        $result = mysqli_query($con, $query) or die (mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>'. $row['username'].'</td>';
                        echo '<td>******</td>';
                      
                        echo '<td>'. $row['email'].'</td>';


                      echo '<td align="right"> 
                      <a type="button" class="btn btn-dark bg-gradient-btn-danger" style="border-radius: 0px;" href="view/customer_details.php?editId='.$row['id']. '">
                      <i class="fas fa-fw fa-search"></i> VIEW
                    </a>
                      <a type="button" class="btn btn-danger bg-gradient-btn-danger" style="border-radius: 0px;" href="process/process.php?deletecustomer='.$row['id']. '">
                      <i class="fas fa-fw fa-trash"></i> Delete
                    </a>

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