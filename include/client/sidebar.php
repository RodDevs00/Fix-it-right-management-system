
<!DOCTYPE html>
<html lang="en">

<head>
  <style type="text/css">
#overlay {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  z-index: 2;
  cursor: pointer;
}
#text{
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 50px;
  color: white;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
}
</style>
<?php
$tempcode = $_SESSION['id'];


$sqlquery = "SELECT * FROM users WHERE id = $tempcode;";
     $result= $con->query($sqlquery);
     while($row = $result->fetch_assoc()) {
        $temp_type = $row['user_type'];
    }
  
 ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Fix It Right System</title>
 
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Custom fonts for this template-->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


  <!-- Custom styles for this template-->
  <link href="../../assets/sb-admin-2.min.css" rel="stylesheet">
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
  rel="stylesheet"
/>

  <!-- Custom styles for this page -->
  <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
          
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <!-- Sidebar -->
      <?php

    if ($temp_type == "admin") { ?>

    
<ul class="navbar-nav bg-black sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="client-home.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="../../assets/img/recieve1234.png" alt="" style="width:3rem;">
                </div>
                <div class="sidebar-brand-text mx-3">Fix It Right <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="client-home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="../../pages/client/home.php">Booking</a>
                         <a class="collapse-item" href="../../pages/client/client-bookingrequest.php">Booking Request</a>
                        <a class="collapse-item" href="../../pages/client/transact-user.php">Transactions</a>
                        
                    </div>
                </div>
            </li>

           

            <!-- Divider -->
            <hr class="sidebar-divider">
          
            

           
            <div class="sidebar-heading">
                Addons
            </div>

                </li>
                 <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseFour">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Administrator</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Admin Components:</h6>
                        <a class="collapse-item" href="../client/employee.php">Employee</a>
                        <a class="collapse-item" href="../client/supplier.php">Supplier</a>
                         <a class="collapse-item" href="../client/product.php">Inventory</a>
                         <a class="collapse-item" href="../client/inventory.php">Product</a>
                          <a class="collapse-item" href="../../pages/client/expenses.php">Expenses</a>
                         
                      
                    </div>
                </div>
            </li>
       
                 <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTree"
                    aria-expanded="true" aria-controls="collapseTree">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Clients</span>
                </a>
                <div id="collapseTree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Clients Components:</h6>
                        <a class="collapse-item" href="../client/customer.php">Customer</a>
                        <a class="collapse-item" href="vehicle.php">Vehicles</a>
                      
                    </div>
                </div>
            </li>
       


           
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1"
                    aria-expanded="true" aria-controls="collapseUtilities1">
                    <i class="fas fa-cog"></i>
                    <span>Purchase Request</span>
                </a>
                <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities1"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Purchase Utilities:</h6>
                       <a class="collapse-item" href="../../pages/client/purchase.php">Purchase Orders</a>
                        <a class="collapse-item" href="../../pages/client/purchase-request.php">Purchase Request</a>
                       </div>
                </div>
            </li>
               
                <!-- Nav Item - Utilities Collapse Menu -->
                 
            
           
         
      
       <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiess"
                    aria-expanded="true" aria-controls="collapseUtilitiess">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Reports</span>
                </a>
                <div id="collapseUtilitiess" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Reports Utilities:</h6>
                        <a class="collapse-item" href="dailyreport.php">Sales Reports</a>
                        <a class="collapse-item" href="report.php">Inventory Reports</a>
                       
                    </div>
                </div>
            </li>
<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                       
                        <a class="collapse-item" href="service.php">Services</a>
                        <a class="collapse-item" href="jobs.php">Jobs</a>
                       
                        
                        <a class="collapse-item" href="account.php">Accounts</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
         

        </ul>

            <?php } elseif($temp_type =='Cashier'){?>
                    <ul class="navbar-nav bg-black sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar C A S H I E R- Brand -->   
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="client-home.php">
                <div class="sidebar-brand-icon rotate-n-15">
                <img src="../../assets/img/recieve1234.png" alt="" style="width:3rem;">
                </div>
                <div class="sidebar-brand-text mx-3">Fix It Right <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="client-home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="../../pages/client/home.php">Booking</a>
                         <a class="collapse-item" href="../../pages/client/client-bookingrequest.php">Booking Request</a>
                        <a class="collapse-item" href="../../pages/client/transact-user.php">Transactions</a>
                        
                    </div>
                </div>
            </li>

           

            <!-- Divider -->
            <hr class="sidebar-divider">
          
            

           
            <div class="sidebar-heading">
                Addons
            </div>

              <!--   </li>
                 <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseFour">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Cashier Compoents</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Admin Components:</h6>
                        <a class="collapse-item" href="../client/employee.php">Employee</a> 
                        <a class="collapse-item" href="../client/supplier.php">Supplier</a>
                         <a class="collapse-item" href="../client/product.php">Inventory</a>
                         <a class="collapse-item" href="../client/inventory.php">Product</a>
                          <a class="collapse-item" href="../../pages/client/expenses.php">Expenses</a>
                         
                      
                    </div>
                </div>
            </li>-->
       <!--
                 <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTree"
                    aria-expanded="true" aria-controls="collapseTree">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Clients</span>
                </a>
                <div id="collapseTree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Clients Components:</h6>
                        <a class="collapse-item" href="../client/customer.php">Customer</a>
                        <a class="collapse-item" href="vehicle.php">Vehicles</a>
                      
                    </div>
                </div>
            </li>
       -->


           
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1"
                    aria-expanded="true" aria-controls="collapseUtilities1">
                    <i class="fas fa-cog"></i>
                    <span>Purchase Request</span>
                </a>
                <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities1"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Purchase Utilities:</h6>
                       <a class="collapse-item" href="../../pages/client/purchase.php">Purchase Orders</a>
                        <a class="collapse-item" href="../../pages/client/purchase-request.php">Purchase Request</a>
                       </div>
                </div>
            </li>
               
                <!-- Nav Item - Utilities Collapse Menu -->
                 
            
           
         
      
      <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiess"
                    aria-expanded="true" aria-controls="collapseUtilitiess">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Reports</span>
                </a>
                <div id="collapseUtilitiess" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Reports Utilities:</h6>
                        <a class="collapse-item" href="dailyreport.php">Sales Reports</a>
                        <a class="collapse-item" href="report.php">Inventory Reports</a>
                       
                    </div>
                </div>
            </li> -->

            <!--
<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                       
                        <a class="collapse-item" href="service.php">Services</a>
                        <a class="collapse-item" href="jobs.php">Jobs</a>
                       
                        
                        <a class="collapse-item" href="account.php">Accounts</a>
                    </div>
                </div>
            </li> -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
         

        </ul>
         <?php } else { ?>
 <ul class="navbar-nav bg-black sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index2.php">
        <div class="sidebar-brand-icon rotate-n-15">
        <img src="../../assets/img/recieve1234.png" alt="" style="width:3rem;">
        </div>
        <div class="sidebar-brand-text mx-3">Fix It Right</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="../../pages/client/client-home.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Tables
      </div>
      <!-- Tables Buttons -->
     
      <li class="nav-item">
        <a class="nav-link" href="../../pages/client/booking.php">
          <i class="fa fa-calendar"></i>
          <span>My Bookings</span></a>
      </li>
      <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities5"
                    aria-expanded="true" aria-controls="collapseUtilities5">
                    <i class="fa fa-window-close"></i>
                    <span>Cancellation</span>
                </a>
                <div id="collapseUtilities5" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Cancellation Utilities:</h6>
                       <a class="collapse-item" href="../../pages/client/client-cancel2.php">Cancelled</a>
                       
                        
                    
                    </div>
                </div>
            </li>
     <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-cog"></i>
                    <span>Purchase Request</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Purchase Utilities:</h6>
                       <a class="collapse-item" href="../../pages/client/purchase.php">Purchase Orders</a>
                        <a class="collapse-item" href="../../pages/client/purchase-request.php">Purchase Request</a>
                       </div>
                </div>
            </li>
     

       <li class="nav-item">
        <a class="nav-link" href="../client/inventory.php">
          <i class="fas fa-fw fa-retweet"></i>
          <span>Product Offered</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../client/service.php">
          <i class="fas fa-fw fa-retweet"></i>
          <span>Services Offered</span></a>
      </li>

 

     
      
     
      
      
      
     
      <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities12"
                    aria-expanded="true" aria-controls="collapseUtilities12">
                    <i class="fas fa-users"></i>
                    <span>My Profiles</span>
                </a>
                <div id="collapseUtilities12" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Profile Utilities:</h6>
                       <a class="collapse-item" href="../../pages/client/vehicle-user.php?editId=<?php echo $tempcode; ?>">Vehicles</a>
                        <a class="collapse-item" href="../../pages/client/client-transaction.php">Transactions</a>
                        <a class="collapse-item" href="../../pages/client/client-account.php">Accounts</a>
                       </div>
                </div>
            </li>
    
      
  
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
 <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
      
      

    </ul>
  
       <?php } ?>
 
  

      <?php include_once 'topbar.php'; ?>
