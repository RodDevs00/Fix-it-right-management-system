
<?php
 include '../process/sessions_view.php';
    $query = 'SELECT * FROM product_inventory  WHERE p_id = '.$_GET['id'];
                        $result = mysqli_query($con, $query) or die (mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($result)) {
                          $p_product_code = $row['p_product_code'];
                          $p_name = $row['p_name'];
                          $p_description = $row['p_description'];
                          $p_qty_stock = $row['p_qty_stock'];
                          $p_category = $row['p_category'];
                          $p_price = $row['p_price'];
                          $p_on_hand = $row['p_on_hand'];
                          $p_supplier = $row['p_supplier'];
                          $p_date_stock = $row['p_date_stock'];
                          
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



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">



</head>



<body>  <center><div class="card shadow mb-4 col-xs-12 col-md-8">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold ">Product's Detail</h4>
            </div>
                  <div class="card-body">
         

                  <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Product Code<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $p_product_code; ?><br>
                        </h5>
                      </div>
                    </div>
                    <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Product Name<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $p_name; ?> <br>
                        </h5>
                      </div>
                    </div>
                  <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Description<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $p_description; ?><br>
                        </h5>
                      </div>
                    </div>
                <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Price<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $p_price; ?><br>
                        </h5>
                      </div>
                    </div>
                  <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Category<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $p_category; ?><br>
                        </h5>
                      </div>
                    </div>
                    <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Supplier<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $p_supplier; ?><br>
                        </h5>
                      </div>
                    </div>
                      <div class="form-group row text-left">
                      <div class="col-sm-3">
                        <h5>
                          Date Stock<br>
                        </h5>
                      </div>
                      <div class="col-sm-9">
                        <h5>
                          : <?php echo $p_price; ?><br>
                        </h5>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                      <a href="../inventory.php" type="button" class="btn btn-dark"> <i class="fas fa-flip-horizontal fa-fw fa-share"></i> Back</a>
   
                      </div>
                    </div>
                </div>
          </div></center>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold">Inventory&nbsp;</h4>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                  <thead>
                        <tr>
                          <th hidden>PRODUCT ID</th>
                    
                     <th>Name</th>
                     <th>Description</th>
                     <th width="10%">Price</th>
                     <th width="5%">Category</th>
                     <th width="12%">Stocks</th>
                     <th width="20%">Date Stock in</th>
                     <th width="15%">Supplier</th>
                    

                        </tr>
                     </thead>
                    <tbody>
                <?php                  
                        $query = "SELECT p_price,p_date_stock,p_name,p_on_hand,p_id,p_category,p_supplier,p_description FROM product_inventory WHERE p_name = '$p_name'";
                        $result = mysqli_query($con, $query) or die (mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($result)) {
                          $tempprice = $row['p_price'];
                          $tempdates = $row['p_date_stock'];
                          $tempdesc = $row['p_description'];
                          $mycur = strtotime($tempdates);
                          $p = $row['p_on_hand'];
                        echo '<tr>';
                        echo '<td hidden>'. $row['p_id'].'</td>';
                       
                        echo '<td>'. $row['p_name'].'</td>';
                        echo '<td>'. $row['p_description'].'</td>';
                        echo '<td>';echo number_format($tempprice,'2');echo'</td>';
                        echo '<td>'. $row['p_category'].'</td>';
                        if($p == 0){
                          echo '<td class="text-danger font-weight-bold">Out of Stocks</td>';
                        }elseif($p <=10){
                           echo '<td class="text-warning font-weight-bold">'. $row['p_on_hand'].'</td>';
                        }else{
                          echo '<td class="text-success font-weight-bold">'. $row['p_on_hand'].'</td>';
                        }
                        echo '<td>';
                        echo date('F, jS, Y', $mycur);
                        echo '</td>';

                        echo '<td>'. $row['p_supplier'].'</td>';
                      
                        echo '</tr> ';
                        }
                    ?> 
                    
                                    
                    </tbody>
                </table>
              </div>
            </div>
          </div>
  
</html>

<?php

include('footer.php');
?>