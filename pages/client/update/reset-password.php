
<?php
  include '../process/sessions_view.php';
?>


<?php

  $temps = $_GET['editId'];
if(isset($_POST['updatepassword'])){



$ids = $_POST['id'];

$pass = $_POST['password'];
$confirmp = $_POST['confirmpass'];
$confirmname = $_POST['userkape'];
  if($pass == ''){
         echo '  <script type="text/javascript">
                alert("Password is missing!");
                
                </script>';
        
  }elseif($confirmp ==''){
     echo '  <script type="text/javascript">
                alert("Password did not match!");
                
                </script>';
  }elseif(strlen(trim($_POST["password"])) < 6){
         echo '  <script type="text/javascript">
                alert("Password must have atleast 6 characters");
                
                </script>';
  }elseif($pass != $confirmp){
       echo '  <script type="text/javascript">
                alert("Password did not match");
                
                </script>';
  }else{
     $h_upass = password_hash($pass, PASSWORD_DEFAULT);
    mysqli_query($con, "UPDATE users set password='".$h_upass . "', username = '" 
      .$confirmname . "'
      WHERE id = '".$ids."'"  );
      echo '  <script type="text/javascript">
                alert("Password has been successfully changed");
                
                </script>';
  }
 //$h_upass = password_hash($pass, PASSWORD_DEFAULT);
   // mysqli_query($con, "UPDATE users set password='"
     // .$_POST['password'] . "'
      //WHERE id = '".$ids."'"  );
     //header('location:account.php');
}


?>

<!doctype html>

<html lang="en-US">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <meta name="description" content="PHP CRUD with search and pagination in bootstrap 4">
  <meta name="keywords" content="PHP CRUD, CRUD with search and pagination, bootstrap 4, PHP">
  <meta name="robots" content="index,follow">
  <title>PHP CRUD with search and pagination in bootstrap 4</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">



</head>



<body>

  <div class="container">
  

   <center><div class="card shadow mb-4 col-xs-12 col-md-6">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold">Edit Account</h4>
            </div>
            <div class="card-body">
         
            <form name="frmUser" method="post" >
               <div> 
        
    </div>
              <input type="hidden" name="id" value="<?php echo $temps; ?>" />
              <div class="form-group row text-left  font-weight-bold">
                <div class="col-sm-3" style="padding-top: 5px;">
                Username:
                <?php
                $query1 = "SELECT * FROM users WHERE id = '$temps'";
                        $result1 = mysqli_query($con, $query1) or die (mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($result1)) {
                          $temp = $row['username'];
                          if($temp ==''){
                            $tempname = '';
                          }else{
                             $tempname = $row['username'];
                          }
                         
                        
                        }
                 ?>
                </div>
                <div class="col-sm-9">
                  <input  type="text" name="userkape" value="<?php echo $tempname;?>" class="form-control" >
                </div>
              </div>
              
               <div class="form-group row text-left  font-weight-bold">
                <div class="col-sm-3" style="padding-top: 5px;">
                  Password
                </div>
                <div class="col-sm-9">
                  <input type="password" placeholder ="New Password" name="password"  class="form-control" >
                </div>
              </div>
             <div class="form-group row text-left  font-weight-bold">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Confirm Password
                </div>
                <div class="col-sm-9">
                  <input type="password" placeholder="New Password" name="confirmpass"  class="form-control" required>

                </div>
              
              
                  </form>  
                  <hr>
              <div class="row">
                <div class="col d-flex justify-content-center">
                <button type="submit" name="updatepassword" value="submit"  class="btn btn-danger mr-2"><i class="fa fa-edit fa-fw"></i>Update</button> 
             
                <a  type="button" class="btn btn-dark" href="../customer.php "> <i class="fas fa-flip-horizontal fa-fw fa-share"></i> Back </a>
                
              </div>
              </div>
          </div>
  </div>
  </div>

    

  

</body>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="jquery.dataTables.min.js"></script>
  <script src="dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="datatables-demo.js"></script>
  <script src="../../../assets/js/city.js"></script> 
  
</html>

<?php

include('footer.php');
?>