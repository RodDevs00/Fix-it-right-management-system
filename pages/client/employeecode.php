<?php
  include 'process/session.php';
?>

<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
 <script>  
window.onload = function() {  

  // ---------------
  // basic usage
  // ---------------
  var $ = new City();
  $.showProvinces("#userprovince");
  $.showCities("#usercity");

  // ------------------
  // additional methods 
  // -------------------

  // will return all provinces 
  console.log($.getProvinces());
  
  // will return all cities 
  console.log($.getAllCities());
  
  // will return all cities under specific province (e.g Batangas)
  console.log($.getCities("Batangas")); 
  
}
</script>

<body>
<div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">

            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Employee Informations&nbsp;</h4>
            </div>
            
            <div class="card-body">
              <div id ="show_alert"></div>
                 <form role="form" method="post" class="row -g3" id ="add_form">          
          
            <div class="col-md-4">
   <label for="validationDefaultUsername" class="form-label">First Name</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-user"></i></span>
     <input class="form-control" placeholder="First Name" name="fname"required>
    </div>
  </div>
 <div class="col-md-4">
   <label for="validationDefaultUsername" class="form-label">Last Name</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-user"></i></span>
      <input class="form-control" placeholder="Last Name" name="lname" required>
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Gender</label>
     <select class='form-control' name='gender'  required>
                    <option value="" disabled selected hidden>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
  </div>
     <div class="col-md-5">
   <label for="validationDefaultUsername" class="form-label">Email</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-envelope"></i></span>
      <input class="form-control" placeholder="Email" name="email" required>
    </div>
  </div>
<div class="col-md-4">
   <label for="validationDefaultUsername" class="form-label">Phone</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-phone"></i></span>
       <input class="form-control" placeholder="Phone Number" name="contact"required>
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationDefaultUsername" class="form-label">Job</label>
        <input class="form-control" placeholder="Job" name="userjob"  required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault03" class="form-label">Province</label>
   <select class="form-control" id="userprovince" placeholder="Province" name="userprovince" required></select>
  </div>
 
  <div class="col-md-4">
    <label for="validationDefault05" class="form-label">City</label>
    <select class="form-control"  placeholder="City" name="usercity" id="usercity" required></select>
  </div>
<div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Hired Date</label>
     <input placeholder="Hired Date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="FromDate" name="hired"  class="form-control"  required />
  </div>
 

    <div class="col-md-9">
   
   
      <br>
      <h4 class="m-2 font-weight-bold text-primary">Employee's Accounts&nbsp;</h4>
    
  </div>

    <div class="col-md-4">
   <label for="validationDefaultUsername" class="form-label">Username</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input class="form-control" placeholder="Username" name="text" required>
    </div>
  </div>
<div class="col-md-4">
   <label for="validationDefaultUsername" class="form-label">Password</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-lock"></i></span>
       <input class="form-control" placeholder="Password" name="password"required>
    </div>
  </div>
<div class="col-md-4">
   <label for="validationDefaultUsername" class="form-label">Confirm Password</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-lock"></i></span>
       <input class="form-control" placeholder="Password" name="Confirm Password" required>
    </div>
  </div>
  <div class="col-md-12">
                  <br>
                    <input type="submit" name="" value="Register" class="form-control btn btn-primary btn-block" id="add_btn">
                  </div> 
          </form> 
            </div>
          </div>
          
        </div>    </div>
  </div>
</div>






            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Employee&nbsp;<a  href="employee_register.php" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-primary bg-gradient-primary" style="border-radius: 0px;"><i class="fas fa-fw fa-plus"></i></a></h4>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                  <thead>
                        <tr>
                            <th hidden> Employee ID</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Role</th>
                          <th>Action</th>
                        </tr>
                     </thead>
                    <tbody>
                <?php                  
                        $query = 'SELECT * FROM employee';
                        $result = mysqli_query($con, $query) or die (mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td hidden>'. $row['employee_id'].'</td>';
                        echo '<td>'. $row['employee_fname'].'</td>';
                        echo '<td>'. $row['employee_lname'].'</td>';
                        echo '<td>'. $row['employee_job'].'</td>';

                      echo '<td align="right"> <div class="btn-group">
                              <a type="button" class="btn btn-primary bg-gradient-primary" href="view/employee_details.php?action=edit & id='.$row['employee_id'] . '"><i class="fas fa-fw fa-list-alt"></i> Details</a>
                            <div class="btn-group">
                              <a type="button" class="btn btn-primary bg-gradient-primary dropdown no-arrow" data-toggle="dropdown" style="color:white;">
                              ... <span class="caret"></span></a>
                            <ul class="dropdown-menu text-center" role="menu">
                                <li>
                                  <a type="button" class="btn btn-warning bg-gradient-warning btn-block" style="border-radius: 0px;" href="update/employee_edit.php?editId='.$row['employee_id']. '">
                                    <i class="fas fa-fw fa-edit"></i> Edit
                                  </a>
                                  <button href="process/process.php?deleteemployee='.$row['employee_id']. '" type="button"  class="btndel btn btn-danger bg-gradient-btn-danger btn-block" style="border-radius: 0px;" >
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
         
  </body>
  </html>
   <script>
    
    $(document).ready(function(){
    
     
      $(document).on('click','.remove_item_btn', function(e){
        e.preventDefault();
        let row_item = $(this).parent().parent();
        $(row_item).remove();
      });
      $("#add_form").submit(function(e){
        e.preventDefault();
        $("#add_btn").val('Adding...');
        $.ajax({
          url: 'process/action11.php',
          method: 'post',
          data: $(this).serialize(),
          success: function(response){
            $("#add_btn").val('Add');
            $("#add_form")[0].reset();
            $(".append.item").remove();
            $("#show_alert").html(`<div>${response} </div>`);
            $("#magic1").hide();
          }
        });
      });
    });
  </script>
<script src="css/city.js"></script>

<?php
include ('footer.php');
 ?>