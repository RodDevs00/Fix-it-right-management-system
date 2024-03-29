
<?php
 include '../process/sessions_view.php';
    $query = 'SELECT * FROM employee WHERE employee_id = '.$_GET['id'];
                        $result = mysqli_query($con, $query) or die (mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($result)) {
                          $fname = $row['employee_fname'];
                          $lname = $row['employee_lname'];
                          $gender = $row['employee_gender'];
                          $email = $row['employee_email'];
                          $phone = $row['employee_phone'];
                          $hired = $row['employee_hired_date'];
                          $province = $row['employee_province'];
                          $city = $row['employee_city'];
                          $job = $row['employee_job'];
                        }
  
?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
  <script src="https://www.solodev.com/_/assets/phone/jquery.mobilePhoneNumber.js"></script>



<!doctype html>

<html lang="en-US">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <meta name="description" content="PHP CRUD with search and pagination in bootstrap 4">
  <meta name="keywords" content="PHP CRUD, CRUD with search and pagination, bootstrap 4, PHP">
  <meta name="robots" content="index,follow">



</style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">



</head>



<body>  <center><div class="card shadow mb-4 col-xs-12 col-md-8 fnt">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold">Employees' Detail</h4>
            </div>
               <div class="card-body">
          

                
                    <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Full Name<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $fname; ?> <?php echo $lname; ?> <br>
                        </h5>
                      </div>
                    </div>
                    <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Gender<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $gender; ?> <br>
                        </h5>
                      </div>
                    </div>
                    <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Email<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $email; ?> <br>
                        </h5>
                      </div>
                    </div>
                    <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Contact #<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $phone; ?> <br>
                        </h5>
                      </div>
                    </div>
                    <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Role<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $job; ?> <br>
                        </h5>
                      </div>
                    </div>
                    <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Hired Date<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $hired; ?> <br>
                        </h5>
                      </div>
                    </div>
                    <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Address<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $city; ?>, <?php echo $province; ?> <br>
                        </h5>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                      <a href="../employee.php" type="button" class="btn btn-dark"> <i class="fas fa-flip-horizontal fa-fw fa-share"></i> Back </a>
         
                      </div>
                    </div>

                      </div>
                    </div>

          </div>
          </div>
  
</html>

<?php

include('footer.php');
?>