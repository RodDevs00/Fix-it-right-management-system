<?php
include 'process/session.php';
$tempcode = $_SESSION['id'];
$cdatemonth = date('Y-m-d');
$mycur6 = strtotime($cdatemonth);

$cdateyear = date('Y-m-d');
$mycur5 = strtotime($cdateyear);

$sqlquery = "SELECT * FROM users WHERE id = $tempcode;";
$result = $con->query($sqlquery);
while ($row = $result->fetch_assoc()) {
  $temp_type = $row['user_type'];
}




$monthlyresultsql = "SELECT SUM(transact1) as totol FROM transacttable WHERE MONTH(`transact_sched`)=MONTH( CURRENT_DATE ) AND YEAR(`transact_sched`)=YEAR( CURRENT_DATE )";
$monthlyresult = mysqli_query($con, $monthlyresultsql);
$monthlydata = mysqli_fetch_assoc($monthlyresult);

$monthlynumbers = $monthlydata['totol'];


$yearlyresultsql = "SELECT SUM(transact1) as totol FROM transacttable WHERE YEAR(`transact_sched`)=YEAR( CURRENT_DATE )";
$yearlyresult = mysqli_query($con, $yearlyresultsql);
$yearlydata = mysqli_fetch_assoc($yearlyresult);

$yearlynumbers = $yearlydata['totol'];
?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Nunito+Sans:opsz,wght@6..12,300&display=swap"
    rel="stylesheet">
<style>



</style>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js">
</script>

<body>
    <div id="wrapper">

        <!-- Sidebar -->


        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php

     if ($temp_type == "admin") { ?>



                <div class="container-fluid">


                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-dark-800">Dashboard</h1>
                        <div class="nav-item dropdown ">

                            <a class=" dropdown-toggle btn btn-danger" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="fas fa-download fa-sm text-white-50"></i> Generate Report

                            </a>
                            <div class="dropdown-menu dropdown-menu-left animated--fade-in"
                                aria-labelledby="navbarDropdown">


                                <a href="../reciept/expense-print-download.php"
                                    class="btn btn-danger bg-light  dropdown-item"><i
                                        class="fas fa-download fa-sm text-dark-50">&nbsp;&nbsp;&nbsp;&nbsp;</i> Expense
                                    Reports</a>
                                <div class="dropdown-divider"></div>
                                <a href="../reciept/lowstocks-print-download.php"
                                    class="btn btn-danger bg-light  dropdown-item "><i
                                        class="fas fa-download fa-sm text-dark-50">&nbsp;&nbsp;&nbsp;&nbsp;</i> Low
                                    Stocks Reports</a>
                                <div class="dropdown-divider"></div>
                                <a href="../reciept/product-print-download.php"
                                    class="btn btn-danger bg-light  dropdown-item"><i
                                        class="fas fa-download fa-sm text-dark-50">&nbsp;&nbsp;&nbsp;&nbsp;</i>Product
                                    Item Reports</a>
                                <div class="dropdown-divider"></div>
                                <a href="../reciept/dailyreport-print-download.php"
                                    class="btn btn-danger bg-light  dropdown-item"><i
                                        class="fas fa-download fa-sm text-dark-50">&nbsp;&nbsp;&nbsp;&nbsp;</i>Daily
                                    Reports</a>
                                <div class="dropdown-divider"></div>
                                <a href="../reciept/dailyexpense-print-download.php"
                                    class="btn btn-danger bg-light  dropdown-item "><i
                                        class="fas fa-download fa-sm text-dark-50">&nbsp;&nbsp;&nbsp;&nbsp;</i>Daily
                                    Expenses Reports</a>
                                <div class="dropdown-divider"></div>
                                <a href="../reciept/dailywithexpense-print-download.php"
                                    class="btn btn-danger bg-light  dropdown-item"><i
                                        class="fas fa-download fa-sm text-dark-50">&nbsp;&nbsp;&nbsp;&nbsp;</i>Daily
                                    Income w/ Expense Reports</a>
                                <div class="dropdown-divider"></div>
                                <a href="../reciept/dailywithoutexpense-print-download.php"
                                    class="btn btn-danger bg-light  dropdown-item"><i
                                        class="fas fa-download fa-sm text-dark-50">&nbsp;&nbsp;&nbsp;&nbsp</i>Daily
                                    Income w/o Expense Reports</a>
                                <div class="dropdown-divider"></div>
                                <a href="../reciept/monthlyreport-print-download.php"
                                    class="btn btn-danger bg-light  dropdown-item"><i
                                        class="fas fa-download fa-sm text-dark-50">&nbsp;&nbsp;&nbsp;&nbsp;</i>Monthly
                                    Reports</a>
                                <div class="dropdown-divider"></div>
                                <a href="../reciept/monthlyexpense-print-download.php"
                                    class="btn btn-danger bg-light  dropdown-item "><i
                                        class="fas fa-download fa-sm text-dark-50">&nbsp;&nbsp;&nbsp;&nbsp</i>Monthly
                                    Expenses Reports</a>
                                <div class="dropdown-divider"></div>
                                <a href="../reciept/monthlywithexpense-print-download.php"
                                    class="btn btn-danger bg-light  dropdown-item"><i
                                        class="fas fa-download fa-sm text-dark-50">&nbsp;&nbsp;&nbsp;&nbsp;</i>Monthly
                                    Income w/ Expense Reports</a>
                                <div class="dropdown-divider"></div>
                                <a href="../reciept/monthlywithoutexpense-print-download.php"
                                    class="btn btn-danger bg-light  dropdown-item"><i
                                        class="fas fa-download fa-sm text-dark-50">&nbsp;&nbsp;&nbsp;&nbsp;</i>Monthly
                                    Income w/o Expense Reports</a>
                                <div class="dropdown-divider"></div>
                                <a href="../reciept/yearlyreport-print-download.php"
                                    class="btn btn-danger bg-light  dropdown-item"><i
                                        class="fas fa-download fa-sm text-dark-50">&nbsp;&nbsp;&nbsp;&nbsp;</i>Yearly
                                    Reports</a>
                                <div class="dropdown-divider"></div>
                                <a href="../reciept/yearlyexpense-print-download.php"
                                    class="btn btn-danger bg-light  dropdown-item "><i
                                        class="fas fa-download fa-sm text-dark-50">&nbsp;&nbsp;&nbsp;&nbsp;</i>Yearly
                                    Expenses Reports</a>
                                <div class="dropdown-divider"></div>
                                <a href="../reciept/yearlywithexpense-print-download.php"
                                    class="btn btn-danger bg-light  dropdown-item"><i
                                        class="fas fa-download fa-sm text-dark-50">&nbsp;&nbsp;&nbsp;&nbsp;</i>Yearly
                                    Income w/ Expense Reports</a>
                                <div class="dropdown-divider"></div>
                                <a href="../reciept/yearlywithoutexpense-print-download.php"
                                    class="btn btn-danger bg-light  dropdown-item"><i
                                        class="fas fa-download fa-sm text-dark-50">&nbsp;&nbsp;&nbsp;&nbsp;</i>Yearly
                                    Income w/o Expense Reports</a>
                                <div class="dropdown-divider"></div>


                            </div>
     </div>

                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-black text-uppercase mb-1">
                                                Earnings This Month(<?php echo date('F', $mycur6); ?>)</div>

                                            <div class="h5 mb-0 font-weight-bold text-black-800">
                                                ₱<?php echo number_format($monthlynumbers, 2); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-black-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card  shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-black text-uppercase mb-1">
                                                Earnings This Year (<?php echo date('Y', $mycur5); ?>)</div>
                                            <div class="h5 mb-0 font-weight-bold text-black-800">
                                                ₱<?php echo number_format($yearlynumbers, 2); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-black-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card  shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col">
                                            <?php
                                                    // COUNT OF SERVICES
                                                    $resultcountsql = "SELECT count(*) as total FROM transacttable WHERE  transacttable.status = 'Pending';";
                                                    $resultsq = mysqli_query($con, $resultcountsql);
                                                    $data = mysqli_fetch_assoc($resultsq);
                                                    $numofpending = $data['total'];
                                                    ?>

                                            <div class="text-xs font-weight-bold text-black text-uppercase mb-1"><a
                                                    href="client-bookingrequest.php"
                                                    style="color: black; text-decoration: none;">PENDING REQUEST</a>
                                            </div>
                                            <div class="h5 mb-0  font-weight-bold text-black-800">
                                                <?php echo $numofpending; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-black-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-black text-uppercase mb-1">
                                                <?php
                                                        // COUNT OF SERVICES
                                                        $resultcountsql = "SELECT count(*) as total FROM services";
                                                        $resultsq = mysqli_query($con, $resultcountsql);
                                                        $data = mysqli_fetch_assoc($resultsq);
                                                        //echo $data['total'];
                                                        $numofpending = $data['total'];
                                                        ?>
                                                Services Offered</div>
                                            <div class="h5 mb-0 font-weight-bold text-black-800">
                                                <?php echo $numofpending; ?></div>
                                        </div>

                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-black-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <!-- Content Row -->

                    <div class="row">


                        <!-- Area Chart -->
                        <div class="col-xl-5 col-lg-4">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->

                                <!-- Card Body -->
                                <div class="card-body">
                                    <?php
                                             $currentdate = date('Y-m-d');
                                             $sql = "SELECT SUM(transact1) as amounts, transact_sched FROM transacttable GROUP BY transact_sched";
                                             $result = $con->query($sql);

                                             if (mysqli_num_rows($result) > 0) {
                                               foreach ($result as $data) {
                                                 $dateArray[] = $data['transact_sched'];
                                                 $priceArray[] = $data['amounts'];
                                               }
                                               unset($result);
                                             } else {
                                               echo 'Sorry No Result';
                                             } ?>
                                    <?php
                                               $sqlrun = "SELECT SUM(transact1) as amounts, transact_sched FROM transacttable GROUP BY transact_sched";
                                               $resultrun = $con->query($sqlrun);
                                               if (mysqli_num_rows($resultrun) > 0) {
                                                 foreach ($resultrun as $datas) {
                                                   $datemagic[] = $datas['transact_sched'];

                                                 }
                                               }
                                               ?>

                                    <div>


                                        <a class=" dropdown-toggle btn btn-danger btn-sm" href="#" id="navbarDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><i class="fas fa-calendar fa-sm"></i>

                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left animated--fade-in"
                                            aria-labelledby="navbarDropdown">


                                            <div class="btn btn-danger bg-light  dropdown-item">Start Date
                                                <input type="date" class="form-control" onchange="startDateFilter(this)"
                                                    value="2023-04-01">
                                            </div>


                                            <div class="btn btn-danger bg-light  dropdown-item"> End Date
                                                <input type="date" class="form-control" onchange="endDateFilter(this)"
                                                    value="2023-04-30">
                                            </div>


                                        </div>


                                    </div>

                                    <div class="chart-area" style="position: relative; height:60vh;">


                                        <canvas id="myChart"></canvas>
                                    </div>

                                    <br>
                                    <br>
                                </div>
                                <script type="text/javascript" src="../chartshuhu/chart.umd.min.js"></script>

                                <script src="../chartshuhu/chartjs-adapter-date-fns.bundle.min.js"></script>
                            </div>
                        </div>





                        <!-- Pie Chart -->
                        <div class="col-xl-7 col-lg-6">

                            <div class="row">

                                <!-- Area Chart -->

                                <div class="col">


                                    <div class="card mb-1">
                                        <!-- Card Header - Dropdown -->

                                        <!-- Card Body -->
                                        <div class="card-body">

                                            <?php
                                               $sqlr = "SELECT SUM(transact1) as amounts, transact_sched FROM transacttable GROUP by EXTRACT(YEAR_MONTH FROM transact_sched)  ";
                                               $resultr = $con->query($sqlr);
                                               if (mysqli_num_rows($resultr) > 0) {
                                                 foreach ($resultr as $dataamount) {
                                                   $cc[] = $dataamount['amounts'];
                                                   $c[] = $dataamount['transact_sched'];
                                                 }
                                               } else {
                                                 echo "NOTHING";
                                               }
                                               ?>
                                            <div>


                                                <a class=" dropdown-toggle btn btn-danger btn-sm" href="#"
                                                    id="navbarDropdown" role="button" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false"><i
                                                        class="fas fa-calendar fa-sm"></i>

                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left animated--fade-in"
                                                    aria-labelledby="navbarDropdown">


                                                    <div class="btn btn-danger bg-light  dropdown-item">Start Date
                                                        <input type="month" class="form-control" onchange="startDateFilter2(this)"
                                                            value="06-01" min="" max="">
                                                    </div>


                                                    <div class="btn btn-danger bg-light  dropdown-item"> End Date
                                                        <input type="month" class="form-control" onchange="endDateFilter2(this)"
                                                            value="2023-04-30" min="" max="">
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="chart-area" style="position: relative; height:25vh;">

                                                <canvas id="myChart2"></canvas>

                                            </div>
                                            <br>


                                        </div>
                                        <script type="text/javascript" src="../chartshuhu/chart.umd.min.js"></script>

                                        <script src="../chartshuhu/chartjs-adapter-date-fns.bundle.min.js"></script>
                                    </div>

                                </div>



                            </div>

                            <div class="row">
                                <div class="col">


                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Dropdown -->

                                        <!-- Card Body -->
                                        <div class="card-body">

                                            <?php
                                               $sqlr1 = "SELECT SUM(transact1) as amounts, transact_sched FROM transacttable GROUP by EXTRACT(YEAR FROM transact_sched)  ";
                                               $resultr1 = $con->query($sqlr1);
                                               if (mysqli_num_rows($resultr1) > 0) {
                                                 foreach ($resultr1 as $dataamount1) {
                                                   $cc1[] = $dataamount1['amounts'];
                                                   $c1[] = $dataamount1['transact_sched'];
                                                 }
                                               } else {
                                                 echo "NOTHING";
                                               }
                                               ?>

                                            <div>


                                                <a class=" dropdown-toggle btn btn-danger btn-sm" href="#"
                                                    id="navbarDropdown" role="button" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false"><i
                                                        class="fas fa-calendar fa-sm"></i>

                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left animated--fade-in"
                                                    aria-labelledby="navbarDropdown">


                                                    <div class="btn btn-danger bg-light  dropdown-item">Start Date
                                                        <input type="date" class="form-control"
                                                            onchange="startDateFilter3(this)" value="2023-04-01" min=""
                                                            max="">
                                                    </div>


                                                    <div class="btn btn-danger bg-light  dropdown-item"> End Date
                                                        <input type="date" class="form-control"
                                                            onchange="endDateFilter3(this)" value="2023-04-30" min=""
                                                            max="">
                                                    </div>


                                                </div>


                                                <div class="chart-area" style="position: relative; height:25vh;">

                                                    <canvas id="myChart3"></canvas>

                                                </div>
                                                <br>


                                            </div>
                                            <script type="text/javascript" src="../chartshuhu/chart.umd.min.js">
                                            </script>

                                            <script src="../chartshuhu/chartjs-adapter-date-fns.bundle.min.js"></script>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>




                        <!-- Content Row -->
                        <div class="row">

                            <!-- Content Column -->
                            <div class="col-lg-6 mb-4">

                                <!-- Project Card Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-black">Booking For Today</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-sm" id="dataTable" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Schedule</th>
                                                        <th>Note</th>


                                                        <th width="8%">Status</th>
                                                        <th width="8%">Action</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                          $pendingc = "Pending";
                          $rejectc = "Rejected";
                          $approvedc = "Approved";
                          $sqlpending = " SELECT  * FROM transacttable WHERE DAY(transact_sched) = DAY(CURRENT_DATE) AND status !='Completed'";
                          $resultpending = $con->query($sqlpending);
                          while ($row = $resultpending->fetch_assoc()) {
                            $tempd = $row['transact_sched'];
                            $mydate = strtotime($tempd);



                            if ($row['status'] === $pendingc) {
                              echo "<tr>";
                              echo "<td>";
                              echo date('F, jS, Y', $mydate);
                              echo "</td>";
                              echo "<td>" . $row['transact_schedinfo'] . "</td>";



                              echo "<td bgcolor='yellow' class='font-weight-bold'>" . $row['status'] . "</td>";
                              echo '<td align="right">
                    <a type="button" class="btn btn-danger" href="joborder2.php?editId=' . $row['transid'] . '"><i class="fas fa-fw fa-th-list"></i></a>
           
                    </div> </td>';
                            } elseif ($row['status'] === $approvedc) {
                              echo "<tr>";
                              echo "<td>";
                              echo date('F, jS, Y', $mydate);
                              echo "</td>";
                              echo "<td>" . $row['transact_schedinfo'] . "</td>";


                              echo "<td bgcolor='bg-green' class='font-weight-bold'>" . $row['status'] . "</td>";
                              echo '<td align="right">
                    <a type="button" class="btn btn-danger" href="joborder4.php?editId=' . $row['transid'] . '"><i class="fas fa-fw fa-th-list"></i> </a>
           
                    </div> </td>';

                            } else {
                              echo "<tr>";
                              echo "<td>";
                              echo date('F, jS, Y', $mydate);
                              echo "</td>";
                              echo "<td>" . $row['transact_schedinfo'] . "</td>";


                              echo "<td bgcolor='bg-blue'  class='text-center font-weight-bold'>" . $row['status'] . "</td>";
                              echo '<td align="right">
                    <a type="button" class="btn btn-danger" href="joborder4.php?editId=' . $row['transid'] . '"><i class="fas fa-fw fa-th-list"></i></a>
           
                    </div> </td>';

                            }


                          }
                          ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-black">Booking Request</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-sm" id="dataTable" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Schedule</th>
                                                        <th>Note</th>


                                                        <th width="8%">Status</th>
                                                        <th width="8%">Action</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
          $pendingc = "Pending";
          $rejectc = "Rejected";
          $approvedc = "Approved";
          $sqlpending = " SELECT  * FROM transacttable WHERE status = '$pendingc'; ";
          $resultpending = $con->query($sqlpending);
          while ($row = $resultpending->fetch_assoc()) {
            $tempd = $row['transact_sched'];
            $mydate = strtotime($tempd);



            if ($row['status'] === $pendingc) {
              echo "<tr>";
              echo "<td>";
              echo date('F, jS, Y', $mydate);
              echo "</td>";
              echo "<td>" . $row['transact_schedinfo'] . "</td>";



              echo "<td bgcolor='yellow' class='font-weight-bold'>" . $row['status'] . "</td>";
              echo '<td align="right">
                    <a type="button" class="btn btn-danger" href="pendingjoborder.php?editId=' . $row['transid'] . '"><i class="fas fa-fw fa-th-list"></i></a>
           
                    </div> </td>';
            } elseif ($row['status'] === $approvedc) {
              echo "<tr>";
              echo "<td>";
              echo date('F, jS, Y', $mydate);
              echo "</td>";
              echo "<td>" . $row['transact_schedinfo'] . "</td>";


              echo "<td bgcolor='bg-green' class='font-weight-bold'>" . $row['status'] . "</td>";
              echo '<td align="right">
                    <a type="button" class="btn btn-danger" href="joborder4.php?editId=' . $row['transid'] . '"><i class="fas fa-fw fa-th-list"></i> </a>
           
                    </div> </td>';

            } else {
              echo "<tr>";
              echo "<td>";
              echo date('F, jS, Y', $mydate);
              echo "</td>";
              echo "<td>" . $row['transact_schedinfo'] . "</td>";


              echo "<td bgcolor='bg-blue'  class='text-center font-weight-bold'>" . $row['status'] . "</td>";
              echo '<td align="right">
                    <a type="button" class="btn btn-danger" href="joborder4.php?editId=' . $row['transid'] . '"><i class="fas fa-fw fa-th-list"></i></a>
           
                    </div> </td>';

            }


          }
          ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-black">Booking Approved</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover " id="dataTable" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Schedule</th>
                                                        <th>Note</th>


                                                        <th width="8%">Status</th>
                                                        <th width="8%">Action</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
          $pendingc = "Pending";
          $rejectc = "Rejected";
          $approvedc = "Approved";
          $sqlpending = " SELECT  * FROM transacttable WHERE status = '$approvedc'; ";
          $resultpending = $con->query($sqlpending);
          while ($row = $resultpending->fetch_assoc()) {
            $tempd = $row['transact_sched'];
            $mydate = strtotime($tempd);



            if ($row['status'] === $pendingc) {
              echo "<tr>";
              echo "<td>";
              echo date('F, jS, Y', $mydate);
              echo "</td>";
              echo "<td>" . $row['transact_schedinfo'] . "</td>";



              echo "<td bgcolor='yellow' class='font-weight-bold'>" . $row['status'] . "</td>";
              echo '<td align="right">
                    <a type="button" class="btn btn-danger" href="joborder4.php?editId=' . $row['transid'] . '"><i class="fas fa-fw fa-th-list"></i></a>
           
                    </div> </td>';
            } elseif ($row['status'] === $approvedc) {
              echo "<tr>";
              echo "<td>";
              echo date('F, jS, Y', $mydate);
              echo "</td>";
              echo "<td>" . $row['transact_schedinfo'] . "</td>";


              echo "<td bgcolor='bg-green' class='font-weight-bold'>" . $row['status'] . "</td>";
              echo '<td align="right">
                    <a type="button" class="btn btn-danger" href="joborder4.php?editId=' . $row['transid'] . '"><i class="fas fa-fw fa-th-list"></i> </a>
           
                    </div> </td>';

            } else {
              echo "<tr>";
              echo "<td>";
              echo date('F, jS, Y', $mydate);
              echo "</td>";
              echo "<td>" . $row['transact_schedinfo'] . "</td>";


              echo "<td bgcolor='bg-blue'  class='text-center font-weight-bold'>" . $row['status'] . "</td>";
              echo '<td align="right">
                    <a type="button" class="btn btn-danger" href="joborder4.php?editId=' . $row['transid'] . '"><i class="fas fa-fw fa-th-list"></i></a>
           
                    </div> </td>';

            }


          }
          ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-black">Complete Transactions</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover" id="dataTable" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Schedule</th>
                                                        <th>Note</th>



                                                        <th width="8%">Action</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
          $pendingc = "Pending";
          $rejectc = "Completed";
          $approvedc = "Approved";
          $sqlpending = " SELECT  * FROM transacttable WHERE status = '$rejectc'; ";
          $resultpending = $con->query($sqlpending);
          while ($row = $resultpending->fetch_assoc()) {
            $tempd = $row['transact_sched'];
            $mydate = strtotime($tempd);



            if ($row['status'] === $pendingc) {
              echo "<tr>";
              echo "<td>";
              echo date('F, jS, Y', $mydate);
              echo "</td>";
              echo "<td>" . $row['transact_schedinfo'] . "</td>";




              echo '<td align="right">
                    <a type="button" class="btn btn-danger" href="transact_view.php?editId=' . $row['transid'] . '"><i class="fas fa-fw fa-th-list"></i></a>
           
                    </div> </td>';
            } elseif ($row['status'] === $approvedc) {
              echo "<tr>";
              echo "<td>";
              echo date('F, jS, Y', $mydate);
              echo "</td>";
              echo "<td>" . $row['transact_schedinfo'] . "</td>";



              echo '<td align="right">
                    <a type="button" class="btn btn-danger" href="transact_view.php?editId=' . $row['transid'] . '"><i class="fas fa-fw fa-th-list"></i> </a>
           
                    </div> </td>';

            } else {
              echo "<tr>";
              echo "<td>";
              echo date('F, jS, Y', $mydate);
              echo "</td>";
              echo "<td>" . $row['transact_schedinfo'] . "</td>";



              echo '<td align="right">
                    <a type="button" class="btn btn-danger" href="transact_view.php?editId=' . $row['transid'] . '"><i class="fas fa-fw fa-th-list"></i></a>
           
                    </div> </td>';

            }


          }
          ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Color System -->


                            </div>

                            <div class="col-lg-6 mb-4">

                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-black">Purchase Order</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">

                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-hover" id="dataTable" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Buyer</th>
                                                        <th>Ordered Item</th>


                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                        $query = "SELECT * FROM parts_table  WHERE item_status = 'Approved';";
                        $result = mysqli_query($con, $query) or die(mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo '<tr>';
                          echo '<td>' . $row['item_buyer'] . '</td>';
                          echo '<td>' . $row['item_name'] . '</td>';



                          echo '<td align="center"> <div class="btn-group">
                      
                              <a type="button" class="btn btn-danger" href="view/purchase-details.php?editId=' . $row['item_id'] . '"><i class="fas fa-fw fa-list-alt"></i> Details</a>
                           
                          </div> </td>';
                          echo '</tr> ';
                        }
                        ?>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!-- Approach -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-black">Purchase Request</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">

                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-hover" id="dataTable" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Buyer</th>
                                                        <th>Ordered Item</th>


                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                        $query = "SELECT * FROM parts_table  WHERE item_status = 'Pending';";
                        $result = mysqli_query($con, $query) or die(mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo '<tr>';
                          echo '<td>' . $row['item_buyer'] . '</td>';
                          echo '<td>' . $row['item_name'] . '</td>';



                          echo '<td align="center"> <div class="btn-group">
                      
                              <a type="button" class="btn btn-danger" href="view/purchase-details.php?editId=' . $row['item_id'] . '"><i class="fas fa-fw fa-list-alt"></i> Details</a>
                           
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
                                        <h6 class="m-0 font-weight-bold text-black">Request for Cancellation</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">

                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-hover" id="dataTable" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Buyer</th>
                                                        <th>Ordered Item</th>


                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                        $query = "SELECT * FROM parts_table  WHERE item_status = 'Pending';";
                        $result = mysqli_query($con, $query) or die(mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo '<tr>';
                          echo '<td>' . $row['item_buyer'] . '</td>';
                          echo '<td>' . $row['item_name'] . '</td>';



                          echo '<td align="center"> <div class="btn-group">
                      
                              <a type="button" class="btn btn-danger" href="view/purchase-details.php?editId=' . $row['item_id'] . '"><i class="fas fa-fw fa-list-alt"></i> Details</a>
                           
                          </div> </td>';
                          echo '</tr> ';
                        }
                        ?>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <?php } else { ?>

                    <div class="container-fluid">
                        <?php

                            $sqlcheck = "SELECT * FROM transacttable WHERE custid = '$tempcode' AND status='Approved';";
                            $resultcheck = $con->query($sqlcheck);
                            if (mysqli_num_rows($resultcheck) > 0) {
                              $_SESSION['stats'] = 'Request has been approved';
                              $_SESSION['stats_code'] = "success";

                            } else {


                            }
                            ?>
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">My Dashboard</h1>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                        </div>

                        <!-- Content Row -->
                        <div class="row">

                            <!-- Earnings (Monthly) Card Example -->


                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Vehicles Registered</div>
                                                <?php
                                                        // COUNT OF SERVICES
                                                        $resultcountsql = "SELECT count(*) as total FROM cardata WHERE cardata.plateid = '$tempcode'";
                                                        $resultsq = mysqli_query($con, $resultcountsql);
                                                        $data = mysqli_fetch_assoc($resultsq);
                                                        //echo $data['total'];
                                                        $numofcars = $data['total'];
                                                        ?>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $numofcars; ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-car fa-2x text-green-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>

                        <!-- Content Row -->

                        <div class="row">

                            <!-- Area Chart -->


                            <!-- Pie Chart -->

                        </div>

                        <!-- Content Row -->
                        <div class="row">

                            <!-- Content Column -->
                            <div class="col-lg-6 mb-4">

                                <!-- Project Card Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-black">Transactions for Today</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover" id="dataTable" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Schedule</th>
                                                        <th>Note</th>
                                                        <th width="8%">Status</th>
                                                        <th width="8%">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $pendingc = "Pending";
                                                    $rejectc = "Rejected";
                                                    $approvedc = "Approved";
                                                    $sqlpending = " SELECT  * FROM transacttable WHERE custid = '$tempcode' AND DAY(transact_sched) = DAY(CURRENT_DATE);";
                                                    $resultpending = $con->query($sqlpending);
                                                    while ($row = $resultpending->fetch_assoc()) {
                                                        $tempd = $row['transact_sched'];
                                                        $mydate = strtotime($tempd);



                                                        if ($row['status'] === $pendingc) {
                                                        echo "<tr>";
                                                        echo "<td>";
                                                        echo date('F, jS, Y', $mydate);
                                                        echo "</td>";
                                                        echo "<td>" . $row['transact_schedinfo'] . "</td>";



                                                        echo "<td bgcolor='yellow' class='font-weight-bold'>" . $row['status'] . "</td>";
                                                        echo '<td align="right">
                                                                <a type="button" class="btn btn-danger" href="joborder4.php?editId=' . $row['transid'] . '"><i class="fas fa-fw fa-th-list"></i></a>
                                                    
                                                                </div> </td>';
                                                        } elseif ($row['status'] === $approvedc) {
                                                        echo "<tr>";
                                                        echo "<td>";
                                                        echo date('F, jS, Y', $mydate);
                                                        echo "</td>";
                                                        echo "<td>" . $row['transact_schedinfo'] . "</td>";


                                                        echo "<td bgcolor='bg-green' class='font-weight-bold'>" . $row['status'] . "</td>";
                                                        echo '<td align="right">
                                                                <a type="button" class="btn btn-danger" href="joborder4.php?editId=' . $row['transid'] . '"><i class="fas fa-fw fa-th-list"></i> </a>
                                                    
                                                                </div> </td>';

                                                        } else {
                                                        echo "<tr>";
                                                        echo "<td>";
                                                        echo date('F, jS, Y', $mydate);
                                                        echo "</td>";
                                                        echo "<td>" . $row['transact_schedinfo'] . "</td>";


                                                        echo "<td bgcolor='bg-blue'  class='text-center font-weight-bold'>" . $row['status'] . "</td>";
                                                        echo '<td align="right">
                                                                <a type="button" class="btn btn-danger" href="joborder4.php?editId=' . $row['transid'] . '"><i class="fas fa-fw fa-th-list"></i></a>
                                                    
                                                                </div> </td>';

                                                        }


                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-black">My Pending Transactions</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover" id="dataTable" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Schedule</th>
                                                        <th>Note</th>


                                                        <th width="8%">Status</th>
                                                        <th width="8%">Action</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
          $pendingc = "Pending";
          $rejectc = "Rejected";
          $approvedc = "Approved";
          $sqlpending = " SELECT  * FROM transacttable WHERE custid = '$tempcode' AND status ='Pending'; ";
          $resultpending = $con->query($sqlpending);
          while ($row = $resultpending->fetch_assoc()) {
            $tempd = $row['transact_sched'];
            $mydate = strtotime($tempd);



            if ($row['status'] === $pendingc) {
              echo "<tr>";
              echo "<td>";
              echo date('F, jS, Y', $mydate);
              echo "</td>";
              echo "<td>" . $row['transact_schedinfo'] . "</td>";



              echo "<td bgcolor='yellow' class='font-weight-bold'>" . $row['status'] . "</td>";
              echo '<td align="right">
                    <a type="button" class="btn btn-danger" href="joborder4.php?editId=' . $row['transid'] . '"><i class="fas fa-fw fa-th-list"></i></a>
           
                    </div> </td>';
            } elseif ($row['status'] === $approvedc) {
              echo "<tr>";
              echo "<td>";
              echo date('F, jS, Y', $mydate);
              echo "</td>";
              echo "<td>" . $row['transact_schedinfo'] . "</td>";


              echo "<td bgcolor='bg-green' class='font-weight-bold'>" . $row['status'] . "</td>";
              echo '<td align="right">
                    <a type="button" class="btn btn-danger" href="joborder4.php?editId=' . $row['transid'] . '"><i class="fas fa-fw fa-th-list"></i> </a>
           
                    </div> </td>';

            } else {
              echo "<tr>";
              echo "<td>";
              echo date('F, jS, Y', $mydate);
              echo "</td>";
              echo "<td>" . $row['transact_schedinfo'] . "</td>";


              echo "<td bgcolor='bg-blue'  class='text-center font-weight-bold'>" . $row['status'] . "</td>";
              echo '<td align="right">
                    <a type="button" class="btn btn-danger" href="joborder4.php?editId=' . $row['transid'] . '"><i class="fas fa-fw fa-th-list"></i></a>
           
                    </div> </td>';

            }


          }
          ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-black">Completed Transactions</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover" id="dataTable" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Scheduled</th>
                                                        <th>Cost</th>
                                                        <th width="8%">Status</th>
                                                        <th width="8%">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $pendingc = "Pending";
                                                    $rejectc = "Rejected";
                                                    $approvedc = "Approved";
                                                    $sqlpending = " SELECT  * FROM transacttable WHERE custid = '$tempcode' AND status ='Completed'; ";
                                                    $resultpending = $con->query($sqlpending);
                                                    while ($row = $resultpending->fetch_assoc()) {
                                                        $tempd = $row['transact_sched'];
                                                        $mydate = strtotime($tempd);
                                                        $r = $row['transact1'];


                                                        if ($row['status'] === $pendingc) {
                                                        echo "<tr>";
                                                        echo "<td>";
                                                        echo date('F, jS, Y', $mydate);
                                                        echo "</td>";
                                                        echo '<td>';
                                                        echo number_format($r, '2');
                                                        echo '</td>';



                                                 echo "<td bgcolor='yellow' class='font-weight-bold'>" . $row['status'] . "</td>";
                                                echo '<td align="right">
                                                        <a type="button" class="btn btn-danger" href="transact_view.php?editId=' . $row['transid'] . '"><i class="fas fa-fw fa-th-list"></i></a>
                                            
                                                        </div> </td>';
                                                } elseif ($row['status'] === $approvedc) {
                                                echo "<tr>";
                                                echo "<td>";
                                                echo date('F, jS, Y', $mydate);
                                                echo "</td>";
                                                echo '<td>';
                                                echo number_format($r, '2');
                                                echo '</td>';


                                                echo "<td bgcolor='bg-green' class='font-weight-bold'>" . $row['status'] . "</td>";
                                                echo '<td align="right">
                                                        <a type="button" class="btn btn-danger" href="transact_view.php?editId=' . $row['transid'] . '"><i class="fas fa-fw fa-th-list"></i> </a>
                                            
                                                        </div> </td>';

                                                } else {
                                                echo "<tr>";
                                                echo "<td>";
                                                echo date('F, jS, Y', $mydate);
                                                echo "</td>";
                                                echo '<td>';
                                                echo number_format($r, '2');
                                                echo '</td>';


                                                echo "<td bgcolor='bg-blue'  class='text-center font-weight-bold'>" . $row['status'] . "</td>";
                                                echo '<td align="right">
                                                        <a type="button" class="btn btn-danger" href="transact_view.php?editId=' . $row['transid'] . '"><i class="fas fa-fw fa-th-list"></i></a>
                                            
                                                        </div> </td>';

                                                }


                                            }
                                            ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!-- Color System -->


                            </div>

                            <div class="col-lg-6 mb-4">

                                <!-- Illustrations -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-black">Vehicles</h6>
                                    </div>
                                    <div class="card-body">

                                        <div class="text-center">

                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-hover" id="dataTable" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Plate</th>
                                                        <th>Brand</th>
                                                        <th>Model</th>
                                                        <th>Make</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                        $query = "SELECT * from cardata WHERE cardata.plateid = $tempcode;";
                        $result = mysqli_query($con, $query) or die(mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo '<tr>';
                          echo '<td>' . $row['userphone'] . '</td>';
                          echo '<td>' . $row['carbrand'] . '</td>';
                          echo '<td>' . $row['carmodel'] . '</td>';
                          echo '<td>' . $row['cartype'] . '</td>';
                          echo '</tr> ';
                        }
                        ?>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!-- Approach -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-black">Services </h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover" id="dataTable" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Price</th>
                                                        <th>Rate</th>
                                                        <th>Hour</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                        $query = "SELECT * from transaction_table  WHERE transaction_table.transaction_user_id = $tempcode;";
                        $result = mysqli_query($con, $query) or die(mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($result)) {
                          $rr = $row['price'];
                          echo '<tr>';
                          echo '<td>' . $row['name'] . '</td>';
                          echo '<td>';
                          echo number_format($rr, '2');
                          echo '</td>';
                          echo '<td>' . $row['rate'] . '</td>';
                          echo '<td>' . $row['hour'] . '</td>';



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
                                        <h6 class="m-0 font-weight-bold text-black">Materials Boughts</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover" id="dataTable" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Price</th>
                                                        <th>Amount</th>
                                                        <th>Total</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                        $query = "SELECT * FROM parts_table WHERE item_user_id = '$tempcode' AND item_status != 'Pending';";
                        $result = mysqli_query($con, $query) or die(mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($result)) {
                          $r = $row['item_total'];
                          $rr = $row['item_price'];
                          echo '<tr>';
                          echo '<td>' . $row['item_name'] . '</td>';
                          echo '<td>';
                          echo number_format($rr, '2');
                          echo '</td>';
                          echo '<td>' . $row['item_amount'] . '</td>';
                          echo '<td>';
                          echo number_format($r, '2');
                          echo '</td>';



                          echo '</tr> ';
                        }
                        ?>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <?php } ?>


                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->



                </div>


            </div>


        </div>



        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>


        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-danger" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>

<script>
// setup 

const datearray = <?php echo json_encode($dateArray); ?>;
const pricearray = <?php echo json_encode($priceArray); ?>;
const dateChartJS = datearray.map((day, index) => {
    let dayjs = new Date(day);
    return dayjs.setHours(0, 0, 0, 0);


});
const data = {
    labels: dateChartJS,
    datasets: [{
        label: 'Earnings',
        data: pricearray,
        lineTension: 0.3,
        backgroundColor: "rgba(78, 115, 223, 0.05)",
        borderColor: "rgba(78, 115, 223, 1)",
        pointRadius: 3,
        pointBackgroundColor: "rgba(78, 115, 223, 1)",
        pointBorderColor: "rgba(78, 115, 223, 1)",
        pointHoverRadius: 3,
        pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
        pointHoverBorderColor: "rgba(78, 115, 223, 1)",
        pointHitRadius: 10,
        pointBorderWidth: 2,
        borderWidth: 1
    }]
};
const data2 = {
    labels: <?php echo json_encode($c); ?>,
    datasets: [{
        label: 'Earnings',
        data: <?php echo json_encode($cc); ?>,
        backgroundColor: [
            'rgba(255, 26, 104, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',

            'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
            'rgba(255, 26, 104, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',

            'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1
    }]
};
const data3 = {
    labels: <?php echo json_encode($c1); ?>,
    datasets: [{
        label: 'Earnings',
        data: <?php echo json_encode($cc1); ?>,
        backgroundColor: [
            'rgba(255, 26, 104, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',

            'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
            'rgba(255, 26, 104, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',

            'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1
    }]
};

// config 
const config = {
    type: 'line',
    data,
    options: {
        maintainAspectRatio: false,
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        scales: {
            x: {
                min: '2023-05-01',
                max: '2023-05-30',
                type: 'time',
                time: {
                    unit: 'day'
                },
                gridLines: {
                    display: false,
                    drawBorder: false
                },
                ticks: {
                    maxTicksLimit: 7
                }
            },

            yAxes: [{
                ticks: {
                    maxTicksLimit: 5,
                    padding: 10,
                    // Include a dollar sign in the ticks
                    callback: function(value, index, values) {
                        return '$' + number_format(value);
                    }
                },
                gridLines: {
                    color: "rgb(234, 236, 244)",
                    zeroLineColor: "rgb(234, 236, 244)",
                    drawBorder: false,
                    borderDash: [2],
                    zeroLineBorderDash: [2]
                }
            }],
        },
        legend: {
            display: false
        },
        tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            titleMarginBottom: 10,
            titleFontColor: '#6e707e',
            titleFontSize: 14,
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            intersect: false,
            mode: 'index',
            caretPadding: 10,
            callbacks: {
                label: function(tooltipItem, chart) {
                    var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                    return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
                }
            }
        },
        plugins: {
            title: {
                display: true,
                text: 'Daily Earnings'
            }
        }
    }
};
const config2 = {
    type: 'bar',
    data: data2,
    options: {
        maintainAspectRatio: false,
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        scales: {
            x: {
                min: '2023-04-01',
                max: '2023-07-30',
                type: 'time',
                time: {
                    unit: 'month'
                }
            },
            y: {
                beginAtZero: true
            }
        },
        plugins: {
            title: {
                display: true,
                text: 'Monthly Earnings'
            }
        }
    }
};
const config3 = {
    type: 'line',
    data: data3,
    options: {
        maintainAspectRatio: false,
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        scales: {
            x: {
                min: '2021-01-01',
                max: '2025-01-30',
                type: 'time',
                time: {
                    unit: 'year'
                }
            },
            y: {
                beginAtZero: true
            }
        },
        plugins: {
            title: {
                display: true,
                text: 'Yearly Earnings'
            }
        }

    }
};

// render init block
const myChart = new Chart(
    document.getElementById('myChart'),
    config
);
const myChart2 = new Chart(
    document.getElementById('myChart2'),
    config2
);
const myChart3 = new Chart(
    document.getElementById('myChart3'),
    config3
);

function startDateFilter(date) {
    const startDate = new Date(date.value);


    myChart.config.options.scales.x.min = startDate.setHours(0, 0, 0, 0);

    myChart.update();
}

function endDateFilter(date) {
    const endDate = new Date(date.value);
    myChart.config.options.scales.x.max = endDate.setHours(0, 0, 0, 0);
    myChart.update();
}

function startDateFilter2(date) {
    const startDate = new Date(date.value);


    myChart2.config.options.scales.x.min = startDate.setHours(0, 0, 0, 0);

    myChart2.update();
}

function endDateFilter2(date) {
    const endDate = new Date(date.value);
    myChart2.config.options.scales.x.max = endDate.setHours(0, 0, 0, 0);
    myChart2.update();
}

function startDateFilter3(date) {
    const startDate = new Date(date.value);


    myChart3.config.options.scales.x.min = startDate.setHours(0, 0, 0, 0);

    myChart3.update();
}

function endDateFilter3(date) {
    const endDate = new Date(date.value);
    myChart3.config.options.scales.x.max = endDate.setHours(0, 0, 0, 0);
    myChart3.update();
}


// Instantly assign Chart.js version
</script>
<?php

include('footer.php');
?>