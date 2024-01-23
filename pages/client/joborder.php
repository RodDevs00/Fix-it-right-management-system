<?php
include 'process/session.php';
$sql1 = "SELECT * FROM transacttable";
$result1 = mysqli_query($con, $sql1);
$dates_ar = [""];
if (mysqli_num_rows($result1) > 0) {
  while ($rows = mysqli_fetch_array($result1)) {
    $tempdate = $rows["transact_sched"];
    $resultcountsql = "SELECT count(*) as total FROM transacttable WHERE transact_sched = '$tempdate' AND status='Pending'";
    $resultsq = mysqli_query($con, $resultcountsql);
    $data = mysqli_fetch_assoc($resultsq);
    $totalcount = $data['total'];
    // LIMIT TO BOOKING COUNT 
    if ($totalcount == 3) {

      $dates_ar[] = $tempdate;
    }
  }


}
?>
<script>

  function my_fun(str) {
    if (window.XMLHttpRequest) {
      xmlhttp = new XMLHttpRequest();
    } else {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById('poll').innerHTML = this.responseText;

      }
    }
    xmlhttp.open("GET", "process/helper.php?value=" + str, true);
    xmlhttp.send();
  }
</script>
<script>

  function my_fun2(str) {
    if (window.XMLHttpRequest) {
      xmlhttp = new XMLHttpRequest();
    } else {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById('poll2').innerHTML = this.responseText;

      }
    }
    xmlhttp.open("GET", "process/helper2.php?value=" + str, true);
    xmlhttp.send();
  }
</script>





<?php
$mycount = 0;
$tempid = $_GET['editId'];

$sqlerr = "SELECT * FROM employee ";
$resulterr = mysqli_query($con, $sqlerr) or die("Bad SQL: $sql2");
if ($resulterr->num_rows > 0) {
  $options = mysqli_fetch_all($resulterr, MYSQLI_ASSOC);
}
$sqltransid = "SELECT transid FROM transacttable ORDER BY transid DESC LIMIT 1";

$resulttransid = $con->query($sqltransid);
while ($row = $resulttransid->fetch_assoc()) {
  echo "<tr>";

  $temponumber = "1";
  $tempo = $row['transid'];
  $temporaryid = $tempo + 1;

}
date_default_timezone_set('Asia/Manila');
$currentdate = date("Y-m-d");

$tommorowdate = new DateTime('tomorrow');
$sql2 = "SELECT * FROM service_category ORDER by service_id ASC";
$result2 = mysqli_query($con, $sql2) or die("Bad SQL: $sql2");
$sqltransaction = "SELECT * FROM transaction_table WHERE car_id_labor ='$tempid'";
$sup = "<select class='form-control' id='product_encoder[]' id='SelectA'  name='product_category[]' onchange='my_fun(this.value);' required>
        <option  selected>Select Services</option>";
while ($row = mysqli_fetch_assoc($result2)) {
  $sup .= "<option value='" . $row['service_name'] . "'>" . $row['service_name'] . "</option>";
}

$sup .= "</select>";
$sqlcardata = "SELECT * FROM cardata where id=$tempid";
$resultcardata = $con->query($sqlcardata);
if ($resultcardata->num_rows > 0) {

  while ($row = $resultcardata->fetch_assoc()) {
    echo "<tr>";

    $tempcarid = $row['plateid'];

  }
  $sqlmist = "SELECT * FROM transacttable WHERE carid = '$tempid';";

  $resultmist = $con->query($sqlmist);
  while ($row = $resultmist->fetch_assoc()) {
    $mistnote = $row['transact_schedinfo'];
    $mistid = $row['transid'];
    $mistpay = $row['payment_type'];
    $mistsched = $row['transact_sched'];
    $mistpr = $row['prioritynumber'];
    $miststatus = $row['status'];
    $mistuser = $row['custid'];
    $mistcar = $row['carid'];

  }

  $sqltr = "SELECT * FROM transacttable WHERE custid = $tempcarid AND status ='Pending'";

  $resulttr = $con->query($sqltr);
  if (mysqli_num_rows($resulttr) > 0) {
    $mycount = 1;
  }

  //echo $tempcarid;


} else {
  echo "0 results";
}
$sqltransid = "SELECT transid FROM transacttable ORDER BY transid DESC LIMIT 1";

$resulttransid = $con->query($sqltransid);
while ($row = $resulttransid->fetch_assoc()) {
  echo "<tr>";


  $tempo = $row['transid'];
  $temporaryid = $tempo + 1;

}

?>
<?php
$idcar = "SELECT * FROM users WHERE id = '$tempcarid';";
$resultidcar = $con->query($idcar);
while ($row = $resultidcar->fetch_assoc()) {
  echo "<tr>";

  $tempname2 = $row['firstname'];
  $templname2 = $row['lastname'];
}

?>
<?php
$idcars = "SELECT * FROM cardata WHERE id = '$tempid';";
$resultidcars = $con->query($idcars);
while ($row = $resultidcars->fetch_assoc()) {
  echo "<tr>";

  $tempcarname = $row['carbrand'];
  $tempcarmodel = $row['carmodel'];
}

?>




<script src="includes/assets/js/jquery.min.js"></script>


<script src="css/jquery.min.js"></script>
<script src="css/popper.min.js"></script>




<!doctype html>

<html lang="en-US">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="PHP CRUD with search and pagination in bootstrap 4">
  <meta name="keywords" content="PHP CRUD, CRUD with search and pagination, bootstrap 4, PHP">
  <meta name="robots" content="index,follow">



  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">



</head>



<body>




  <?php
  // CURREN TRANSACTION ID
  $sqltransid = "SELECT transid FROM transacttable ORDER BY transid DESC LIMIT 1";

  $resulttransid = $con->query($sqltransid);
  while ($row = $resulttransid->fetch_assoc()) {
    echo "<tr>";

    $tempo = $row['transid'];
    $temporaryid = $tempo + 1;

  }

  ?>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h4 class="m-2 font-weight-bold text-primary">Information&nbsp;</h4>
    </div>

    <div class="card-body">

      <div class="row">
        <div class="col-md-2 mb-3">
          <label style="font-weight: bold;">Transaction ID</label>
          <input readonly type="text" value="<?php echo $temporaryid ?>" class="bg-white form-control" required>


        </div>
        <div class="col-md-4 mb-3">
          <label style="font-weight: bold;">Customer's Name</label>
          <input type="text" readonly value="<?php echo $tempname2, " ", $templname2 ?>" class="bg-white form-control"
            required>



        </div>
        <div class="col-md-4 mb-3">
          <label style="font-weight: bold;">Vehicle</label>
          <input type="text" readonly value="<?php echo $tempcarname, "  - ", $tempcarmodel ?>"
            class="bg-white form-control" required>





        </div>
        <div class="col-md-2 mb-3">
          <label style="font-weight: bold;">Status</label>
          <input type="text" readonly value="Not Yet Set" class="bg-white form-control" required>
        </div>
      </div>
    </div>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h4 class="m-2 font-weight-bold text-primary">Services&nbsp;</h4>
    </div>

    <div class="card-body">
      <div id="magic1">
        <?php

        $sqltransaction5 = "SELECT * FROM booking_table WHERE car_id_labor ='$tempid' AND transaction_id ='$temporaryid'";
        $result5 = $con->query($sqltransaction5);
        if (mysqli_num_rows($result5) > 0) {
          echo '<div class="kape1 table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                  <thead>
                        <tr>
                          <th>Category</th>
                          <th>Services</th>  
                        </tr>
                     </thead>
                    <tbody>';

          while ($row = $result5->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['transact_category'] . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '</tr> ';
          }


          echo ' </tbody>
                </table>
              </div>';



        } else {

        }
        ?>
      </div>

      <div id="show_alert"></div>
      <form action="#" method="POST" id="add_form">
        <div id="show_item">

          <div class="row py-3">

            <div id="hiddentype" class="col-md-4 mb-3 ">
              <label style="font-weight: bold;">Labor Type</label>
              <?php echo $sup; ?>

            </div>

            <div id="poll" class="col-md-4 mb-3">
              <label style="font-weight: bold;">Labor</label>
              <select class='form-control' required>
                <option>Services</option>
              </select>


            </div>
            <div hidden class="col-md-1 mb-3">
              <label style="font-weight: bold;">transid</label>
              <input type="number" value="<?php echo $temporaryid; ?>" name="product_ids[]" class="form-control"
                placeholder="Rate" required>
            </div>

            <div hidden class="col-md-1 mb-3">
              <label style="font-weight: bold;">Rate</label>
              <input type="number" value="2" name="product_rate[]" class="form-control" placeholder="Rate" required>
            </div>
            <div hidden class="col-md-1 mb-3">
              <label style="font-weight: bold;">Hour</label>
              <input type="number" value="2" name="product_hour[]" class="form-control" placeholder="Hour" required>
            </div>
            <div hidden class="col-md-1 mb-3">
              <label style="font-weight: bold;">ID NUMBER</label>
              <input type="number" name="producttemp[]" value="<?php echo $temponumber; ?>" class="form-control"
                placeholder="TEMP" required>
            </div>
            <div hidden class="col-md-2 mb-3">
              <label style="font-weight: bold;">Price</label>
              <input type="number" value="2" name="product_price[]" class="form-control" placeholder="Price" required>
            </div>


            <div class="col-md-0 mb-3">
              <input type="number" hidden name="product_transact[]" value="<?php echo $temporaryid ?>"
                class="form-control" placeholder=" Transaction Number" required>
            </div>
            <div hidden class="col-md-0 mb-3">
              <input type="number" name="product_qty[]" value="<?php echo $tempid ?>" class="form-control"
                placeholder=" Item Quantity" required>
            </div>
            <div hidden class="col-md-0 mb-3">
              <input type="number" name="product_user[]" value="<?php echo $tempcarid ?>" class="form-control"
                placeholder=" User ID" required>
            </div>
            <div class="col-md-4 mb-3 ">
              <label style="font-weight: bold;color:transparent">Labor Type</label>
              <input type="submit" name="" value="Add" class="form-control btn btn-primary " id="add_btn">

            </div>
          </div>
        </div>

        <div>



        </div>
        <div>


        </div>
      </form>

    </div>
  </div>


  <!--<form method="post" action="action.php">
                <button type="finalsubmit" name="finalsubmit" value="finalsubmit" id="finalsubmit" class="btn btn-warning"><i class="fa fa-fw fa-plus-circle"></i> Add Transaction</button>
            </form> -->

  <div class="container">


    <div class="modal hide fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true" style="display: none;">

      <div class="modal-dialog">
        <div class="modal-content">





          <center>
            <div class="card shadow mb-4 col-xs-12 col-md-12 border-bottom-primary">
              <div class="card-header py-3">
                <h4 class="m-2 font-weight-bold text-primary">Booking Details</h4>
              </div>
              <div class="card-body">

                <form method="post" action="process/process.php">
                  <div class="form-group row text-left font-weight-bold">
                    <div hidden class="col-sm-3" style="padding-top: 5px;">
                      Current User ID
                      <input type="text" class="form-control" name="custid" id="custid"
                        value="<?php echo $tempcarid; ?>" required>
                    </div>

                  </div>
                  <div hidden class="form-group row text-left font-weight-bold">
                    <div class="col-sm-3" style="padding-top: 5px;">
                      Current Car ID
                    </div>
                    <div class="col-sm-9">


                      <input type="text" class="form-control" name="carid" id="carid" value="<?php echo $tempid; ?>"
                        required>
                    </div>
                  </div>
                  <div hidden class="form-group row text-left font-weight-bold">
                    <div class="col-sm-3" style="padding-top: 5px;">
                      Current bid
                    </div>
                    <input type="text" class="form-control" name="bid" id="bid" value="<?php echo $temporaryid; ?>"
                      required>
                  </div>
                  <div hidden class="form-group row text-left font-weight-bold">
                    <div class="col-sm-3" style="padding-top: 5px;">
                      Current Status
                    </div>
                    <div class="col-sm-9">
                      <select class="form-control" name="status" id="status" value="">
                        <option value="Pending">Pending</option>
                      </select>
                    </div>
                  </div>


                  <div class="form-group row text-left font-weight-bold">
                    <div class="col-sm-3" style="padding-top: 5px;">
                      Scheduled Date
                    </div>
                    <div class="col-sm-9">
                      <input type="hidden" id="magic" id="transact_sched" min="<?php echo $currentdate; ?>"
                        class="form-control" name="transact_sched" required>

                      <input type="date" min = "<?php echo $currentdate; ?>"class="form-control" name="transact_sched" id="transact_sched"   required>
                    </div>
                  </div>
                  <div class="form-group row text-left font-weight-bold">
                    <div class="col-sm-3" style="padding-top: 5px;">
                      Payment Type
                    </div>
                    <div class="col-sm-9">

                      <select class="form-control" name="p_type">
                        <option value="">Select Payment Type</option>
                        <option value="Over the Counter">Over the Counter</option>
                        <option value="Gcash">Gcash</option>
                        <option value="Credit Card">Credit</option>
                      </select>

                    </div>
                  </div>

                  <div class="form-group row text-left font-weight-bold">
                    <div class="col-sm-3" style="padding-top: 5px;">
                      Note
                    </div>
                    <div class="col-sm-9">


                      <textarea rows="5" cols="50" textarea class="form-control" placeholder="Optional"
                        name="transact_schedinfo"></textarea>
                    </div>
                  </div>
                  <hr>

                  <button type="submit" name="bookingrequestinsert" value="submit" id="submit"
                    class="btn btn-warning btn-block"><i class="fa fa-edit fa-fw"></i>Confirm</button>
                </form>
              </div>
            </div>


        </div>


      </div>
    </div>







  </div>


  <br>
  <td class="font-weight-bold"> <a type="button" ; data-toggle="modal" data-target="#modal1"
      class="btn btn-primary btn-block bg-gradient-primary" href="transact-bill2.php"><i
        class="fas fa-fw fa-list-alt"></i> Proceed</a> </td>
  <br>




</body>
<script>

  $(document).ready(function () {


    $(document).on('click', '.removebtn', function (e) {
      e.preventDefault();
      $("#add_btn").hide();

    });
    $("#add_form").submit(function (e) {
      e.preventDefault();
      $("#add_btn").val('Adding...');
      $.ajax({
        url: 'process/action.php',
        method: 'post',
        data: $(this).serialize(),
        success: function (response) {
          $("#add_btn").val('Add');
          $("#add_form")[0].reset();

          $(".append.item").remove();
          $("#show_alert").html(`<div class="alert " role="alert">${response} </div>`);

          $("#magic1").hide();
          // $("#hiddentype").hide();

        }
      });
    });
  });
</script>

</html>



<?php
include 'unfooted.php'; ?>