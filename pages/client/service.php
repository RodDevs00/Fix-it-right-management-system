<?php
include_once('process/session.php');

// Fetch service categories
$sqlcateg = "SELECT * FROM service_category ORDER by service_id ASC";
$resultcateg = mysqli_query($con, $sqlcateg) or die ("Bad SQL: $sqlcateg");

$sup = "<select class='form-control'  id='SelectA'  name='servicecategory' onchange='my_fun(this.value);'>
    <option disabled selected>Select Services</option>";

while ($row = mysqli_fetch_assoc($resultcateg)) {
    $sup .= "<option value='".$row['service_name']."'>".$row['service_name']."</option>";
}

$sup .= "</select>";

$sqlquery = "SELECT * FROM users WHERE id = $tempcode;";
$result = $con->query($sqlquery);

while ($row = $result->fetch_assoc()) {
    $temp_type = $row['user_type'];
}

// Reset the pointer of the result set back to the beginning
mysqli_data_seek($resultcateg, 0);
?>
<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
 
  <!--  MODAL FOR SERVICES-->

       <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Service</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
             <form role="form" method="post" action="process/process.php">          
               <div class="form-group">
               <?php echo $sup; ?>
           </div>
            <div  class="form-group">
                <input class="form-control" placeholder="Service Name" name="servicee"  required>
              </div>
            <div class="form-group">
                <input class="form-control" placeholder="Service Price" name="serviceprice"  required>
              </div>
            
          
           
          
         
        
           <div class="form-group">
            
           </div>
        
              <hr>
            <button type="submit" name="insertservices" value="submit" id="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
</div>      

<!-- END OF MODAL SERVICES-->

 <div id="mycategory" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Service Category</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
             <form role="form" method="post" action="process/process.php">          
               <div class="form-group">
                <input type="text" class="form-control" name="servicecategory1" placeholder="Service Category">
           </div>
           <div class="form-group">
            
           </div>
        
              <hr>
            <button type="submit" name="insertcategoryservices" value="submit" id="submit" class="btn btn-success"><i class="fa fa-check fa-fw"></i>Save</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-times fa-fw"></i>Reset</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>      
          </form>  
        </div>
      </div>
    </div>
</div>    

<?php

    if ($temp_type == "admin") { ?>
           <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold">Services Category&nbsp;<a  href="" data-toggle="modal" data-target="#mycategory" type="button" class="btn btn-danger" style="border-radius: 0px;"><i class="fas fa-fw fa-plus"></i></a></h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                  <thead>
                        <tr>
                          <th hidden >SUPPLIER ID</th>
                         <th>Service Category</th>
                         <th width="5%">Option</th>
                         </tr>
                     </thead>
                    <tbody>
                <?php                  
                        $query = 'SELECT * FROM service_category';
                        $result = mysqli_query($con, $query) or die (mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td hidden >'. $row['service_id'].'</td>';
                        echo '<td>'. $row['service_name'].'</td>';
                        echo '<td align="right"> <div class="btn-group">
                              <div class="btn-group">
                              <a type="button" class="btn btn-dark dropdown no-arrow" data-toggle="dropdown" style="color:white;">
                              ... <span class="caret"></span></a>
                            <ul class="dropdown-menu text-center" role="menu">
                                <li>
                                  <a type="button" class="btn btn-warning bg-gradient-warning btn-block" style="border-radius: 0px;" href="update/service_edit_category.php?editId='.$row['service_id']. '">
                                    <i class="fas fa-fw fa-edit"></i> Edit
                                  </a>
                                  <button href="process/process.php?deletecat='.$row['service_id']. '" type="button"  class="btndel btn btn-danger bg-gradient-btn-danger btn-block" style="border-radius: 0px;" >
                                    <i class="fas fa-fw fa-trash"></i> Delete
                                  </button>
                                </li>
                            </ul>
                            </div>
                          </div> </td>';
                        echo '</tr> ';
                        }
                    ?> 
                    
                                    
                    </tbody>
                </table>
              </div>
            </div>
          </div>
          
        
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-2 font-weight-bold">Services Offered&nbsp;</h4>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="SelectA" class="form-label">Choose a Service Category:</label>
                    </div>
                    <div class="col-md-4">
                        <!-- Your dropdown code -->
                        <select class='form-control' id='SelectAd' name='servicecategory' onchange='filterTableByCategory();'>
                          <option disabled selected>Services Category</option>
                          <?php
                          while ($row = mysqli_fetch_assoc($resultcateg)) {
                              echo "<option value='".$row['service_name']."'>".$row['service_name']."</option>";
                          }
                          ?>
                      </select>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table1 table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                        <thead>
                            <tr>
                                <th hidden>SUPPLIER ID</th>
                                <th>Service Name</th>
                                <th>Service Price</th>
                            </tr>
                        </thead>
                        <!-- Table body for Services Offered -->
                        <tbody id="tableBodyServices"></tbody>
                    </table>
                </div>
            </div>
        </div>


     <?php } else { ?>
              <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-2 font-weight-bold">Services Offered&nbsp;</h4>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="SelectA" class="form-label">Choose a Service Category:</label>
                    </div>
                    <div class="col-md-4">
                        <!-- Your dropdown code -->
                        <select class='form-control' id='SelectAd' name='servicecategory' onchange='filterTableByCategory();'>
                          <option disabled selected>Services Category</option>
                          <?php
                          while ($row = mysqli_fetch_assoc($resultcateg)) {
                              echo "<option value='".$row['service_name']."'>".$row['service_name']."</option>";
                          }
                          ?>
                      </select>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table1 table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                        <thead>
                            <tr>
                                <th hidden>SUPPLIER ID</th>
                                <th>Service Name</th>
                                <th>Service Price</th>
                            </tr>
                        </thead>
                        <!-- Table body for Services Offered -->
                        <tbody id="tableBodyServices"></tbody>
                    </table>
                </div>
            </div>
        </div>

     <?php } ?>  

   
  
     <script>
  function filterTableByCategory() {
    var selectedCategory = $('#SelectAd').val();
  

    // Ajax request to get filtered data based on the selected category
    // Update 'process/process.php' with the correct URL for fetching filtered data
    $.ajax({
      type: 'POST',
      url: 'getservices.php',
      data: { category: selectedCategory },
      success: function(response) {
        // Update the table body content with the filtered data
        $('#tableBodyServices').html(response);
      },
      error: function(error) {
        console.log(error);
      }
    });
  }

  // Attach an event listener to the dropdown
  $(document).ready(function() {
    // Initialize the dropdown value
    filterTableByCategory();

    $('#SelectAd').change(function() {
      filterTableByCategory();
    });
  });
</script>

           
</body>
</html>
<?php
include ('footer.php');
 ?>
 