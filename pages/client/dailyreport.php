<?php
  include 'process/session.php';
?>

<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>
<div id="dailymodal" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Specific Day of Expense Reports</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
             <form role="form" method="post" action="../reciept/dailyexpense1-print-details.php">          
               <div class="form-group">
             <input type="date" class="form-control" placeholder="Date" name="expense_date"  required>
            
           </div>
              <div class="form-group">
            
             <input type="date" class="form-control" placeholder="Date" name="expense_date1"  required>
           </div>
           
          
            <div class="form-group">
            </div>
        
              <hr>
            <button type="submit" name="specificdailyexpense" value="submit" id="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
</div>
<div id="dailymodal1" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Daily Income for Labors & Services</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
             <form role="form" method="post" action="../reciept/dailywithexpense1-print-details.php">          
               <div class="form-group">
             <input type="date" class="form-control" placeholder="Date" name="expense_date"  required>
           </div>
             <div class="form-group">
             <input type="date" class="form-control" placeholder="Date" name="expense_date1"  required>
           </div>
           
          
            <div class="form-group">
            </div>
        
              <hr>
            <button type="submit" name="specificdailyexpense" value="submit" id="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
</div>
<div id="dailymodal2" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Daily Income for Parts & Materials</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
             <form role="form" method="post" action="../reciept/dailywithoutexpense1-print-details.php">          
               <div class="form-group">
             <input type="date" class="form-control" placeholder="Date" name="expense_date"  required>
           </div>
              <div class="form-group">
             <input type="date" class="form-control" placeholder="Date" name="expense_date1"  required>
           </div>
           
          
            <div class="form-group">
            </div>
        
              <hr>
            <button type="submit" name="specificdailyexpense" value="submit" id="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
</div>

<div id="dailymodal3" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Specific Day Reports</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
             <form role="form" method="post" action="../reciept/dailyreport1-print-details.php">          
           <div class="form-group">
             <input type="date" class="form-control" placeholder="Date" name="expense_date"  required>
           </div>
           <div class="form-group">
             <input type="date" class="form-control" placeholder="Date" name="expense_date1"  required>
           </div>
           
          
            <div class="form-group">
            </div>
        
              <hr>
            <button type="submit" name="specificdailyexpense" value="submit" id="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
</div>


<!-- MONTHLY MODAL -->
<div id="dailymodal4" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Specific Month of Expense Reports</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
             <form role="form" method="post" action="../reciept/monthlyexpense1-print-details.php">          
               <div class="form-group">
             <input type="month" class="form-control" placeholder="Date" name="expense_date"  required>
           </div>
            <div class="form-group">
             <input type="month" class="form-control" placeholder="Date" name="expense_date1"  required>
           </div>
           
          
            <div class="form-group">
            </div>
        
              <hr>
            <button type="submit" name="specificdailyexpense" value="submit" id="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
</div>
<div id="dailymodal5" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Specific Monthly Labor & Services Reports</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
             <form role="form" method="post" action="../reciept/monthlywithexpense1-print-details.php">   

                    
                <div class="form-group">
             <input type="month" class="form-control" placeholder="Date" name="expense_date"  required>
           </div>
            <div class="form-group">
             <input type="month" class="form-control" placeholder="Date" name="expense_date1"  required>
           </div>
           
          
            <div class="form-group">
            </div>
        
              <hr>
            <button type="submit" name="specificdailyexpense" value="submit" id="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
</div>
<div id="dailymodal6" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Specific Month Parts & Materials</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
             <form role="form" method="post" action="../reciept/monthlywithoutexpense1-print-details.php">  
              <div class="form-group">
             <input type="month" class="form-control" placeholder="Date" name="expense_date"  required>
           </div>
            <div class="form-group">
             <input type="month" class="form-control" placeholder="Date" name="expense_date1"  required>
           </div>
          
            <div class="form-group">
            </div>
        
              <hr>
            <button type="submit" name="specificdailyexpense" value="submit" id="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
</div>

<div id="dailymodal7" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Specific Monthly Reports</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
             <form role="form" method="post" action="../reciept/monthlyreport1-print-details.php">          
            <div class="form-group">
             <input type="month" class="form-control" placeholder="Date" name="expense_date"  required>
           </div>
            <div class="form-group">
             <input type="month" class="form-control" placeholder="Date" name="expense_date1"  required>
           </div>
           
          
            <div class="form-group">
            </div>
        
              <hr>
            <button type="submit" name="specificdailyexpense" value="submit" id="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
</div>




<!-- END OF YEARLY MODAL -->

<!-- MONTHLY MODAL -->
<div id="dailymodal8" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Specific Year of Expense Reports</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
             <form role="form" method="post" action="../reciept/yearlyexpense1-print-details.php">          
               <div class="form-group">
             <input type="month" class="form-control" placeholder="Date" name="expense_date"  required>
           </div>
            <div class="form-group">
             <input type="month" class="form-control" placeholder="Date" name="expense_date1"  required>
           </div>
           
          
            <div class="form-group">
            </div>
        
              <hr>
            <button type="submit" name="specificdailyexpense" value="submit" id="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
</div>
<div id="dailymodal9" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Specific Year of  Labors & Services</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
             <form role="form" method="post" action="../reciept/yearlywithexpense1-print-details.php">   

           <div class="form-group">
             <input type="month" class="form-control" placeholder="Date" name="expense_date"  required>
           </div>
            <div class="form-group">
             <input type="month" class="form-control" placeholder="Date" name="expense_date1"  required>
           </div>
           
          
            <div class="form-group">
            </div>
        
              <hr>
            <button type="submit" name="specificdailyexpense" value="submit" id="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
</div>
<div id="dailymodal10" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Specific Yearly of Parts & Materials</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
             <form role="form" method="post" action="../reciept/yearlywithoutexpense1-print-details.php">  
            <div class="form-group">
             <input type="month" class="form-control" placeholder="Date" name="expense_date"  required>
           </div>
            <div class="form-group">
             <input type="month" class="form-control" placeholder="Date" name="expense_date1"  required>
           </div>
           
          
            <div class="form-group">
            </div>
        
              <hr>
            <button type="submit" name="specificdailyexpense" value="submit" id="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
</div>

<div id="dailymodal11" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Specific Yearly Reports</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
             <form role="form" method="post" action="../reciept/yearlyreport1-print-details.php">          
             <div class="form-group">
             <input type="month" class="form-control" placeholder="Date" name="expense_date"  required>
           </div>
            <div class="form-group">
             <input type="month" class="form-control" placeholder="Date" name="expense_date1"  required>
           </div>
          
            <div class="form-group">
            </div>
        
              <hr>
            <button type="submit" name="specificdailyexpense" value="submit" id="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
</div>




<!-- END OF YEARLY MODAL -->


            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold">Sales Reports&nbsp;</h4>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                  <thead>
                        <tr>
                         
                         <th>Reports Name</th>
                         
                         <th>Option</th>
                         </tr>
                     </thead>
                    <tbody>
                    
                     
                      <tr>
                      <td>Daily Expenses Reports</td>
                      <td align="right">
              <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#dailymodal" href="#"><i class="fas fa-plus fa-sm text-white-50"></i></a>
              <a type="button" class="btn btn-danger" href="../reciept/dailyexpense-print-download.php"><i class="fas fa-download fa-sm text-white-50"></i></a> <a type="button" class="btn btn-dark" href="../reciept/dailyexpense-print-details.php"><i class="fas fa-fw fa-th-list"></i> View</a></td>
                    </tr>
                    
                  
                  
                     <tr>
                      <td>Daily Reports</td>
                      
                      <td align="right">
                         <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#dailymodal3" href="#"><i class="fas fa-plus fa-sm text-white-50"></i></a>
              <a type="button" class="btn btn-danger" href="../reciept/dailyreport-print-download.php"><i class="fas fa-download fa-sm text-white-50"></i></a> <a type="button" class="btn btn-dark" href="../reciept/dailyreport-print-details.php"><i class="fas fa-fw fa-th-list"></i> View</a></td>
                    </tr>
                     <tr>
                      <td>Daily Income for Labors & Services</td>
                      <td align="right">
              <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#dailymodal1" href="#"><i class="fas fa-plus fa-sm text-white-50"></i></a>
               <a type="button" class="btn btn-danger" href="../reciept/dailywithexpense-print-download.php"><i class="fas fa-download fa-sm text-white-50"></i></a> <a type="button" class="btn btn-dark" href="../reciept/dailywithexpense-print-details.php"><i class="fas fa-fw fa-th-list"></i> View</a></td>
                    </tr>
                      <tr>
                      <td>Daily Income for Parts & Materials</td>
                      <td align="right">
                <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#dailymodal2" href="#"><i class="fas fa-plus fa-sm text-white-50"></i></a>
               <a type="button" class="btn btn-danger" href="../reciept/dailywithoutexpense-print-download.php"><i class="fas fa-download fa-sm text-white-50"></i></a> <a type="button" class="btn btn-dark" href="../reciept/dailywithoutexpense-print-details.php"><i class="fas fa-fw fa-th-list"></i> View</a></td>
                    </tr>


                    <!-------------------------------- MONTHLY ---------------------------------------------------------->
                       <tr>
                      <td>Monthly Income for Parts & Materials</td>
                      <td align="right">
               <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#dailymodal6" href="#"><i class="fas fa-plus fa-sm text-white-50"></i></a>
               <a type="button" class="btn btn-danger" href="../reciept/monthlywithoutexpense-print-download.php"><i class="fas fa-download fa-sm text-white-50"></i></a> <a type="button" class="btn btn-dark" href="../reciept/monthlywithoutexpense-print-details.php"><i class="fas fa-fw fa-th-list"></i> View</a></td>
                    </tr>
                    
                  
                  
                   <tr>
                      <td>Monthly Income for Labors & Services</td>
                      <td align="right">
               <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#dailymodal5" href="#"><i class="fas fa-plus fa-sm text-white-50"></i></a>
               <a type="button" class="btn btn-danger" href="../reciept/monthlywithexpense-print-download.php"><i class="fas fa-download fa-sm text-white-50"></i></a> <a type="button" class="btn btn-dark" href="../reciept/monthlywithexpense-print-details.php"><i class="fas fa-fw fa-th-list"></i> View</a></td>
                    </tr>
                     <tr>
                      <td>Monthly Reports</td>
                       <td align="right">
               <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#dailymodal7" href="#"><i class="fas fa-plus fa-sm text-white-50"></i></a>
              <a type="button" class="btn btn-danger" href="../reciept/monthlyreport-print-download.php"><i class="fas fa-download fa-sm text-white-50"></i></a> <a type="button" class="btn btn-dark" href="../reciept/monthlyreport-print-details.php"><i class="fas fa-fw fa-th-list"></i> View</a></td>
                    </tr>
                       <tr>
                      <td>Monthly Expenses Reports</td>
                      <td align="right">
              <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#dailymodal4" href="#"><i class="fas fa-plus fa-sm text-white-50"></i></a>
              <a type="button" class="btn btn-danger" href="../reciept/monthlyexpense-print-download.php"><i class="fas fa-download fa-sm text-white-50"></i></a> <a type="button" class="btn btn-dark" href="../reciept/monthlyexpense-print-details.php"><i class="fas fa-fw fa-th-list"></i> View</a></td>
                    </tr>
                    <!------------------------------------------ END OF MONTHLY ---->



                    <!-- YEARLY -------------------------------------------->
  
                     
                    <tr>
                      <td>Yearly Parts & Materials</td>
                      <td align="right">
               <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#dailymodal10" href="#"><i class="fas fa-plus fa-sm text-white-50"></i></a>
               <a type="button" class="btn btn-danger" href="../reciept/yearlywithoutexpense-print-download.php"><i class="fas fa-download fa-sm text-white-50"></i></a> <a type="button" class="btn btn-dark" href="../reciept/yearlywithoutexpense-print-details.php"><i class="fas fa-fw fa-th-list"></i> View</a></td>
                    </tr>
                    
                  
                  
                   <tr>
                      <td>Yearly Labor & Services</td>
                      <td align="right">
               <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#dailymodal9" href="#"><i class="fas fa-plus fa-sm text-white-50"></i></a>
               <a type="button" class="btn btn-danger" href="../reciept/yearlywithexpense-print-download.php"><i class="fas fa-download fa-sm text-white-50"></i></a> <a type="button" class="btn btn-dark" href="../reciept/yearlywithexpense-print-details.php"><i class="fas fa-fw fa-th-list"></i> View</a></td>
                    </tr>
                     <tr>
                      <td>Yearly Reports</td>
                       <td align="right">
               <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#dailymodal11" href="#"><i class="fas fa-plus fa-sm text-white-50"></i></a>
              <a type="button" class="btn btn-danger" href="../reciept/yearlyreport-print-download.php"><i class="fas fa-download fa-sm text-white-50"></i></a> <a type="button" class="btn btn-dark" href="../reciept/yearlyreport-print-details.php"><i class="fas fa-fw fa-th-list"></i> View</a></td>
                    </tr>
                       <tr>
                      <td>Yearly Expenses Reports</td>
                      <td align="right">
              <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#dailymodal8" href="#"><i class="fas fa-plus fa-sm text-white-50"></i></a>
              <a type="button" class="btn btn-danger" href="../reciept/yearlyexpense-print-download.php"><i class="fas fa-download fa-sm text-white-50"></i></a> <a type="button" class="btn btn-dark" href="../reciept/yearlyexpense-print-details.php"><i class="fas fa-fw fa-th-list"></i> View</a></td>
                    </tr>


                    <!-- END OF YEARLY --------------------------------------->
                    </tbody>
                </table>
              </div>
            </div>
          </div> 




  </body>
  </html>
<script src="css/city.js"></script>

<?php
include ('footer.php');
 ?>