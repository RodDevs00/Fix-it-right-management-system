<?php
  include 'process/session.php';
  $tempids = $_GET['editId'];
  $query1 = "SELECT * FROM users WHERE id = '$tempids'";
                        $result1 = mysqli_query($con, $query1) or die (mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($result1)) {
                          $tempname = $row['firstname'];
                          $tempfull = $row['lastname'];
                        }
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
              <h4 class="m-2 font-weight-bold">Account : <?php echo $tempname; echo " ",$tempfull;?> &nbsp;</h4>
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
                <?php                  
                        $query = "SELECT * FROM users WHERE id = '$tempids'";
                        $result = mysqli_query($con, $query) or die (mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($result)) {
                          $name = $row['username'];
                          $email = $row['email'];
                          $phone = $row['phone'];
                          $pass = $row['password'];

                        echo '<tr>';
                        if($name == ''){
                            echo '<td>Not Yet Set</td>';
                        }else{
                           echo '<td>'. $row['username'].'</td>';
                        }
                         if($pass ==''){
                            echo '<td>Password Not Yet Set</td>';
                        }else{
                          echo '<td>********</td>';
                        }
                        if($email ==''){
                            echo '<td>Not Yet Set</td>';
                        }else{
                            echo '<td>'. $row['email'].'</td>';
                        }
                       


                       
                      
                        


                      echo '<td align="right">             
                                  <a type="button" class="btn btn-danger" style="border-radius: 0px;" href="update/reset-password.php?editId='.$row['id']. '">
                                    <i class="fas fa-fw fa-edit"></i> Edit
                                  </a>
                                   <a type="button" class="btn btn-dark" style="border-radius: 0px;" href="process/process.php?deletecustomer='.$row['id']. '">
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