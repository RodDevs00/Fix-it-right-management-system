
<?php
  include '../process/sessions_view.php';
$tempid = $_GET['editId'];
    $query = "SELECT * FROM cardata JOIN users on cardata.plateid = users.id WHERE cardata.id = '$tempid'";
                        $result = mysqli_query($con, $query) or die (mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($result)) {
                          $tempcarbrand = $row['carbrand'];
                          $tempname = $row['firstname'];
                          $templname = $row['lastname'];
                          $tempcarmodel = $row['carmodel'];
                          $tempcartype = $row['cartype'];
                          $tempplate = $row['userphone'];
                          $tempmanufacture = $row['carmanufacturer'];
                          $dateregistered = $row['dt'];
                          $tempserial = $row['carserialnumber'];
                          $tempdates = $row['dt'];
                          $tempplates = $row['plateid'];
                          $mycur = strtotime($tempdates);
                        }
  
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
              <h4 class="m-2 font-weight-bold">Vehicle's Detail</h4>
            </div>
                <div class="card-body">
          

                
                    <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Owner<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $tempname  ?><?php echo " ",$templname  ?> <br>
                        </h5>
                      </div>
                     
                    </div>
                    <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Plate Number<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $tempplate?><br>
                        </h5>
                      </div>
                     
                    </div>
                     <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Serial Number<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $tempserial; ?> <br>
                        </h5>
                      </div>
                    </div>
                    <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Brand<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $tempcarbrand; ?> <br>
                        </h5>
                      </div>
                    </div>
                    <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Model<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $tempcarmodel; ?> <br>
                        </h5>
                      </div>
                    </div>
                    <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Type<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $tempcartype; ?> <br>
                        </h5>
                      </div>
                    </div>
                      <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Manufacturer<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $tempmanufacture; ?> <br>
                        </h5>
                      </div>
                    </div>
                  
                    <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Date Registered<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo date('F, j, Y', $mycur); ?> <br>
                        </h5>
                      </div>
                    </div>
                  
                   <hr>
                    <div class="row">
                      <div class="col">
                      <a href="../vehicle-user.php?editId=<?php echo $tempplates; ?>" type="button" class="btn btn-dark"> <i class="fas fa-flip-horizontal fa-fw fa-share"></i> Back </a>
        
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