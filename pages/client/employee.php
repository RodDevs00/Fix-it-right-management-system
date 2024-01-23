
<?php
 include 'process/session.php';
   $sqlt  = "SELECT id FROM users ORDER BY id DESC LIMIT 1";
                 $resultt = $con->query($sqlt);
                 while($row = $resultt->fetch_assoc()) {
                  $tempholder =$row['id'] + 1; 
                 }
?>





    <script src="includes/assets/js/jquery.min.js"></script>

    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
  rel="stylesheet"
/>
  <script src="css/jquery.min.js"></script>
    <script src="css/popper.min.js"></script>

<!doctype html>

<html lang="en-US">

<head>
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
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <meta name="description" content="PHP CRUD with search and pagination in bootstrap 4">
  <meta name="keywords" content="PHP CRUD, CRUD with search and pagination, bootstrap 4, PHP">
  <meta name="robots" content="index,follow">



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">



</head>



<body>
<div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div id ="show_alert1"></div>
            <form action ="#" method="POST" id ="add_form1">
              <div id="show_item1">
               
                 
                <div class="row">

    <div class="col-md-9">
   
   
    
      <h4 class="m-2 font-weight-bold text-black">Employee's Information&nbsp;</h4>
    
  </div>
                   <div class="col-md-4">
   <label for="validationDefaultUsername" class="form-label">First Name</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-user"></i></span>
     <input class="form-control" placeholder="First Name" name="fname"required>
     <input hidden class="form-control" value ="<?php echo $tempholder; ?>"placeholder="First Name" name="tempholder"required>
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
     <select class='form-select' name='gender'  required>
                    <option value="" disabled selected hidden>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
  </div>
     <div class="col-md-5">
   <label for="validationDefaultUsername" class="form-label">Email</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-envelope"></i></span>
      <input type="email" class="form-control" placeholder="Email" name="email"  required>
    </div>
  </div>
<div class="col-md-4">
   <label for="validationDefaultUsername" class="form-label">Phone</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-phone"></i></span>
       <input class="form-control" placeholder="Phone Number" name="contact" required>
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationDefaultUsername" class="form-label">Job</label>
    <select class="form-select" name="userjob" required>
        <option value="" disabled selected>Select a job</option>
        <option value="admin">Admin</option>
        <option value="Cashier">Cashier</option>
        <option value="Manager">Manager</option>
        <option value="Mechanic">Mechanic</option>
       
        <!-- Add more options as needed -->
    </select>
</div>

  <div class="col-md-4">
    <label for="validationDefault03" class="form-label">Province</label>
   <select  required class="form-control" id="userprovince" placeholder="Province" name="userprovince" ></select>
  </div>
 
  <div class="col-md-4">
    <label for="validationDefault05" class="form-label">City</label>
    <select  required class="form-control"  placeholder="City" name="usercity" id="usercity" ></select >
  </div>
<div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Hired Date</label>
     <input placeholder="Hired Date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="FromDate" name="hired"  class="form-control"   required />
  </div>
 

    <div class="col-md-9">
   
   
      <br>
      <h4 class="m-2 font-weight-bold text-black">Employee's Accounts&nbsp;</h4>
    
  </div>

    <div class="col-md-4">
   <label for="validationDefaultUsername" class="form-label">Username</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input class="form-control" placeholder="Username" name="username" required>
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
       <input class="form-control" placeholder="Password" name="confirmpass" required>
    </div>
  </div>
  
                 <div class="col-md-12 mb-3">
                    <label style="font-weight: bold;color: transparent;">Total</label>
                    <input type="submit" name="" value="Add" class="form-control btn btn-danger" id="add_btn1">
                  </div>

                </div>

              </div>
              
            
              <div>
                
               
              </div>
            </form>
        </div>
      </div>
    </div>
</div>
             

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-black">Employee&nbsp;<a  href="employee_register.php" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-danger" style="border-radius: 0px;"><i class="fas fa-fw fa-plus"></i></a></h4>
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
                              <a type="button" class="btn btn-danger" href="view/employee_details.php?action=edit & id='.$row['employee_id'] . '"><i class="fas fa-fw fa-list-alt"></i> Details</a>
                            <div class="btn-group">
                              <a type="button" class="btn btn-danger dropdown no-arrow" data-toggle="dropdown" style="color:white;">
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

<script src="css/city.js"></script>

  <script>
    
    $(document).ready(function(){
    
     
     
      $("#add_form1").submit(function(e){
        e.preventDefault();
        $("#add_btn1").val('Adding...');
        $.ajax({
          url: 'process/action11.php',
          method: 'post',
          data: $(this).serialize(),
          success: function(response){
            $("#add_btn1").val('Add');
            $("#add_form1")[0].reset();
            $(".append.item1").remove();
            $("#show_alert1").html(`<div class=" role="alert">${response} </div>`);
            $("#magic2").hide();
          }
        });
      });
    });
  </script>
  
<script type="text/javascript">
   $( function() {
    $( "#customer_name" ).autocomplete({
    source: 'backend-script.php'  
    });
});
</script>
<script type="text/javascript">
   $( function() {
    $( "#customername" ).autocomplete({
    source: 'backend-script1.php'  
    });
});
</script>
<script type="text/javascript">
 $(document).ready(function(){
 $('#customer_name').on('change',function(){
 var user = $(this).val();
 $.ajax({
    url : "get1.php",
    dataType: 'json',
    type: 'POST',
    async : true,
    data : { user : user},
    success : function(data) {    
        $('#phone').val(data.p_price);
        $('#email').val(data.p_name);
        $('#qty').val(data.p_on_hand);
        $('#pctg').val(data.p_category);
    }
}); 
});
});
</script>
<script type="text/javascript">
 $(document).ready(function(){
 $('#customername').on('change',function(){
 var user = $(this).val();
 $.ajax({
    url : "get4.php",
    dataType: 'json',
    type: 'POST',
    async : true,
    data : { user : user},
    success : function(data) {    
        $('#sprice').val(data.service_price);
        $('#sname').val(data.service_category);
       
    }
}); 
});
});
</script>


</html>
<script src="css/city.js"></script>

<?php
include ('unfooted.php');
 ?>