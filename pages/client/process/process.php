<?php
include_once('../../../include/config.php');
  include_once('../../../include/config2.php');
session_start();
//SUPPLIERS INSERT - UPDATE - DELETE 
if(isset($_POST['insertsupplier']))
{
    $cname = $_POST['cname'];
    $sprovince = $_POST['s_province'];
    $scity = $_POST['s_city'];
    $contact = $_POST['contact'];
    $sql = "SELECT * FROM supplier WHERE s_company_name = '$cname'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        $_SESSION['stats'] =''.$cname.' Supplier  already exist';
        $_SESSION['stats_code'] ="warning";
        header('location:../supplier.php');
    }else{
         $query = "INSERT INTO supplier (`s_company_name`,`s_province`,`s_city`,`s_phone`) VALUES ('$cname','$sprovince','$scity','$contact')";
         $query_run = mysqli_query($con, $query);
          if($query_run)
            {
                $_SESSION['stats'] =''.$cname.' Supplier  has been inserted';
        $_SESSION['stats_code'] ="success";
        header('location:../supplier.php');
            }
            else
            {
                echo '<script> alert("Data Not Saved"); </script>';
            }
    }


   
   
}

if(isset($_POST['updatesupplier']))
{
$ids = $_POST['s_id'];
$tempname = $_POST['s_company_name'];
$tempname1 = $_POST['s_company_name1'];
$tempphone = $_POST['s_phone'];
$tempphone1 = $_POST['s_phone1'];
$sql = "SELECT * FROM supplier WHERE s_company_name = '$tempname'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){

        mysqli_query($con, "UPDATE supplier set s_company_name='"
        .$_POST['s_company_name'] . "', s_province = '" 
        .$_POST['s_province'] . "', s_city = '" 
        .$_POST['s_city'] . "', s_phone = '" 
        .$_POST['s_phone'] . "'
        WHERE s_id = '".$ids."'"  );
               $_SESSION['stats'] =''.$tempname1.' Supplier  has been updated';
          $_SESSION['stats_code'] ="success";
       header('location:../supplier.php');
        }
        else{
            $_SESSION['stats'] ='Nothing Change Foo';
        }
    }
    



if(isset($_REQUEST['deletesupplier']) and $_REQUEST['deletesupplier']!=""){
$temp = $_REQUEST['deletesupplier'];
$sql = "SELECT * FROM supplier WHERE   supplier.s_id = '$temp'";
$result = $con->query($sql);
             while($row = $result->fetch_assoc()) {
            }
   
    $db->delete('supplier',array('supplier.s_id'=>$_REQUEST['deletesupplier']));
    $_SESSION['stats'] ='Record deleted';
          $_SESSION['stats_code'] ="success";
           header('location:../supplier.php');
    
}

// END OF SUPPLIER PROCESS


// INVENTORY or PRODUCT PROCESS


if(isset($_POST['insertinventory']))
{
    $pcode = $_POST['pcode'];
    $pname = $_POST['pname'];
    $pdescribe = $_POST['pdescribe'];
    $pqtystock = $_POST['pqtystock'];
    $ponhand = $_POST['ponhand'];
    $pprice = $_POST['pprice'];
    $pcategory = $_POST['pcategory'];
    $psupplier = $_POST['psupplier'];
    $pdatestock = $_POST['pdatestock'];

    $query = "INSERT INTO product_inventory (
        `p_product_code`,
        `p_name`,
        `p_description`,
        `p_qty_stock`,
        `p_on_hand`,
        `p_price`,
        `p_category`,
        `p_supplier`,
        `p_date_stock`) 
    VALUES (
        '$pcode',
        '$pname',
        '$pdescribe',
        '$pqtystock',
        '$ponhand',
        '$pprice',
        '$pcategory',
        '$psupplier',
        '$pdatestock')";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
       $_SESSION['stats'] =''.$pname.' has been inserted';
        $_SESSION['stats_code'] ="success";
        header('Location: ../inventory.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}
if(isset($_POST['updateinventory']))
{
$ids = $_POST['p_id'];
    mysqli_query($con, "UPDATE product_inventory set p_product_code='"
      .$_POST['p_product_code'] . "'

      , p_name = '" 
      .$_POST['p_name'] . "'

      , p_description = '" 
      .$_POST['p_description'] . "'

      , p_qty_stock = '" 
      .$_POST['p_qty_stock'] . "'

      , p_on_hand = '" 
      .$_POST['p_on_hand'] . "'

      , p_price = '" 
      .$_POST['p_price'] . "'

      , p_category = '" 
      .$_POST['p_category'] . "'

      , p_supplier = '" 
      .$_POST['p_supplier'] . "'

      , p_date_stock = '" 
      .$_POST['p_date_stock'] . "'


      WHERE p_id = '".$ids."'"  );
         $_SESSION['stats'] ='Record has been updated';
        $_SESSION['stats_code'] ="success";
     header('location:../inventory.php');
}


if(isset($_REQUEST['deleteinventory']) and $_REQUEST['deleteinventory']!=""){
$temp = $_REQUEST['deleteinventory'];
$sql = "SELECT * FROM product_inventory WHERE   product_inventory.p_id = '$temp'";
$result = $con->query($sql);
             while($row = $result->fetch_assoc()) {
            }
   
    $db->delete('product_inventory',array('product_inventory.p_id'=>$_REQUEST['deleteinventory']));
          $_SESSION['stats'] ='Record deleted';
          $_SESSION['stats_code'] ="success";
     header('Location: ../inventory.php'); 
    
}

// END OF INVENTORY PROCESS



//START OF EMPLOYEE PROCESS INSERT - UPDATE - DELETE 

if(isset($_POST['insertemployee']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $hired = $_POST['hired'];
    $userprovince = $_POST['userprovince'];
    $usercity = $_POST['usercity'];
    $userjob = $_POST['userjob'];



    $query = "INSERT INTO employee (`employee_fname`,`employee_lname`,`employee_gender`,`employee_phone`,`employee_email`,`employee_hired_date`,`employee_province`,`employee_city`,`employee_job`) VALUES ('$fname','$lname','$gender','$contact','$email','$hired','$userprovince','$usercity','$userjob')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
       $_SESSION['stats'] ='Employee has been inserted';
        $_SESSION['stats_code'] ="success";
        header('Location: ../employee.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

if(isset($_REQUEST['deleteemployee']) and $_REQUEST['deleteemployee']!=""){
$temp = $_REQUEST['deleteemployee'];
$sql = "SELECT * FROM employee WHERE   employee.employee_id = '$temp'";
$result = $con->query($sql);
             while($row = $result->fetch_assoc()) {
            }
   
    $db->delete('employee',array('employee.employee_id'=>$_REQUEST['deleteemployee']));
      $_SESSION['stats'] ='Record deleted';
          $_SESSION['stats_code'] ="success";
        
     header('Location: ../employee.php'); 
    
}
if(isset($_REQUEST['DELETE1']) and $_REQUEST['DELETE1']!=""){
$temp = $_REQUEST['DELETE1'];
$sql = "SELECT * FROM booking_table WHERE   booking_table.id = '$temp'";
$result = $con->query($sql);
             while($row = $result->fetch_assoc()) {
                $dates = $row['transaction_id'];
            }
   
    $db->delete('booking_table',array(' booking_table.id'=>$_REQUEST['DELETE1']));
      $_SESSION['stats'] ='Services deleted';
          $_SESSION['stats_code'] ="success";
        
     header('Location: ../cancellation.php?editId='.$dates.'');
    
}
if(isset($_REQUEST['DL1']) and $_REQUEST['DL1']!=""){
$temp = $_REQUEST['DL1'];
$sql = "SELECT * FROM booking_table WHERE   booking_table.id = '$temp'";
$result = $con->query($sql);
             while($row = $result->fetch_assoc()) {
                $dates = $row['transaction_id'];
            }
$resultcountsql = "SELECT count(*) as total FROM booking_table WHERE id = '$temp'";
$resultsq= mysqli_query($con,$resultcountsql);
$data = mysqli_fetch_assoc($resultsq);
$numleft = $data['total'];
        if($numleft>=1){
            $_SESSION['stats1'] ='Operation Failed, Services cant be empty';
            $_SESSION['stats1_code'] ="warning";
            header('Location: ../cancellation.php?editId='.$dates.'');
        }else{
            $db->delete('booking_table',array(' booking_table.id'=>$_REQUEST['DL1']));
            $_SESSION['stats'] ='Record deleted';
            $_SESSION['stats_code'] ="success";
            header('Location: ../cancellation.php?editId='.$dates.'');
        }
          
    
}

if(isset($_REQUEST['DELETEE']) and $_REQUEST['DELETEE']!=""){
$temp = $_REQUEST['DELETEE'];
$sql = "SELECT * FROM booking_table WHERE   booking_table.id = '$temp'";
$result = $con->query($sql);
             while($row = $result->fetch_assoc()) {
                $dates = $row['transaction_id'];
            }
   
    $db->delete('booking_table',array(' booking_table.id'=>$_REQUEST['DELETEE']));
      $_SESSION['stats'] ='Record deleted';
          $_SESSION['stats_code'] ="success";
        
     header('Location: ../cancellation.php?editId='.$dates.'');
    
}
if(isset($_REQUEST['DELETE12']) and $_REQUEST['DELETE12']!=""){
$temp = $_REQUEST['DELETE12'];
$sql = "SELECT * FROM transaction_table WHERE   transaction_table.id = '$temp'";
$result = $con->query($sql);
             while($row = $result->fetch_assoc()) {
                $dates = $row['transaction_id'];
            }
   
    $db->delete('transaction_table',array(' transaction_table.id'=>$_REQUEST['DELETE12']));
      $_SESSION['stats'] ='Services deleted';
          $_SESSION['stats_code'] ="success";
        
     header('Location: ../joborder2.php?editId='.$dates.'');
    
}
if(isset($_REQUEST['DL4']) and $_REQUEST['DL4']!=""){
$temp = $_REQUEST['DL4'];
$sql = "SELECT * FROM recommend WHERE  recommendid = '$temp'";
$result = $con->query($sql);
             while($row = $result->fetch_assoc()) {
                $dates = $row['recoomendtransid'];
            }
   
    $db->delete('recommend',array(' recommend.recommendid'=>$_REQUEST['DL4']));
      $_SESSION['stats'] ='Recommendations deleted';
          $_SESSION['stats_code'] ="success";
        
     header('Location: ../joborder2.php?editId='.$dates.'');
    
}
if(isset($_REQUEST['DELETE13']) and $_REQUEST['DELETE13']!=""){
$temp = $_REQUEST['DELETE13'];
$sql = "SELECT * FROM parts_table WHERE parts_table.item_id = '$temp'";
$result = $con->query($sql);
             while($row = $result->fetch_assoc()) {
                $dates = $row['item_transaction_id'];
            }
   
    $db->delete('parts_table',array(' parts_table.item_id'=>$_REQUEST['DELETE13']));
      $_SESSION['stats'] ='Materials deleted';
          $_SESSION['stats_code'] ="success";
        
     header('Location: ../joborder2.php?editId='.$dates.'');
    
}


if(isset($_REQUEST['DELETE11']) and $_REQUEST['DELETE11']!=""){
$temp = $_REQUEST['DELETE11'];
$sql = "SELECT * FROM booking_table WHERE   booking_table.id = '$temp'";
$result = $con->query($sql);
             while($row = $result->fetch_assoc()) {
                $dates = $row['car_id_labor'];
            }
   
    $db->delete('booking_table',array(' booking_table.id'=>$_REQUEST['DELETE11']));
      $_SESSION['stats'] ='Deleted';
          $_SESSION['stats_code'] ="success";
        
     header('Location: ../joborder.php?editId='.$dates.'');
    
}


if(isset($_POST['updateemployee']))
{
$ids = $_POST['employee_id'];
    mysqli_query($con, "UPDATE employee set employee_fname='"
      .$_POST['employee_fname'] . "', employee_lname = '" 
      .$_POST['employee_lname'] . "', employee_gender = '" 
      .$_POST['employee_gender'] . "', employee_phone = '" 
      .$_POST['employee_phone'] . "', employee_email = '" 
      .$_POST['employee_email'] . "', employee_job = '" 
      .$_POST['employee_job'] . "', employee_hired_date = '" 
      .$_POST['employee_hired_date'] . "', employee_province = '" 
      .$_POST['employee_province'] . "', employee_city = '" 
      .$_POST['employee_city'] . "'
      WHERE employee_id = '".$ids."'"  );
       $_SESSION['stats'] ='Record has been updated';
        $_SESSION['stats_code'] ="success";
     header('location:../employee.php');
}

//END OF EMPLOYEE PROCESS WITHOUT UPDATE -- ILL CHECK IT LATER



//START OF SERVICES PROCESS INSERT - UPDATE - DELETE 

if(isset($_POST['insertservices']))
{   
    $servicecategory = $_POST['servicecategory'];
    $servicename = $_POST['servicee'];
    $serviceprice = $_POST['serviceprice'];
    
    $query = "INSERT INTO services (`service_category`,`service_name`,`service_price`) VALUES ('$servicecategory','$servicename','$serviceprice')";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
             $_SESSION['stats'] ='Services Added';
          $_SESSION['stats_code'] ="success";
        header('Location: ../service.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}
if(isset($_REQUEST['deleteservices']) and $_REQUEST['deleteservices']!=""){
$temp = $_REQUEST['deleteservices'];
$sql = "SELECT * FROM services WHERE   services.service_jd = '$temp'";
$result = $con->query($sql);
             while($row = $result->fetch_assoc()) {
            }
   
    $db->delete('services',array('service_jd'=>$_REQUEST['deleteservices']));
         $_SESSION['stats'] ='Record deleted';
          $_SESSION['stats_code'] ="success";
        
    
    header('Location: ../service.php'); 
    
}



if(isset($_POST['updateservice']))
{
$ids = $_POST['service_jd'];
    mysqli_query($con, "UPDATE services set service_category='"
      .$_POST['service_category'] . "', service_name = '" 
      .$_POST['service_name'] . "', service_price = '" 
      .$_POST['service_price'] . "'
      WHERE service_jd = '".$ids."'"  );
     header('location:../service.php');
}

if(isset($_POST['insertcategoryservices']))
{   
    $servicecategory = $_POST['servicecategory1'];
    $sql = "SELECT * FROM service_category WHERE service_name = '$servicecategory'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        $_SESSION['stats'] =''.$servicecategory.'  already exist';
        $_SESSION['stats_code'] ="warning";
        header('location:../service.php');
    }else{
         $query = "INSERT INTO service_category (`service_name`) VALUES ('$servicecategory')";
            $query_run = mysqli_query($con, $query);
             if($query_run)
    {
       $_SESSION['stats'] =''.$servicecategory.'  has been inserted';
        $_SESSION['stats_code'] ="success";
        header('Location: ../service.php');
    }
    else
    {
       $_SESSION['stats'] ='Error';
        $_SESSION['stats_code'] ="error";
        header('Location: ../service.php');
    }
    }
   
   
}
if(isset($_POST['updateservicecategory']))
{
$ids = $_POST['service_id'];
$tempcategory = $_POST['service_name'];
$tempcategory1= $_POST['service_name1'];

 $sql = "SELECT * FROM service_category WHERE service_name = '$tempcategory'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        if($tempcategory == $tempcategory1){
             $_SESSION['stats'] ='Nothing Change Foo';
             $_SESSION['stats_code'] ="warning";
             header('location:../service.php');
        }else{
            $_SESSION['stats'] =''.$tempcategory.' Category already exist';
             $_SESSION['stats_code'] ="warning";
             header('location:../service.php');
        }
       
    }else{
             mysqli_query($con, "UPDATE service_category set service_name='"
      .$_POST['service_name'] . "'
      WHERE service_id = '".$ids."'"  );
             $_SESSION['stats'] =''.$tempcategory1.'  has been updated';
        $_SESSION['stats_code'] ="success";
        header('Location: ../service.php');
    
    }
   
}


if(isset($_REQUEST['deletecat']) and $_REQUEST['deletecat']!=""){
$temp = $_REQUEST['deletecat'];
$sql = "SELECT * FROM service_category WHERE   service_category.service_id = '$temp'";
$result = $con->query($sql);
             while($row = $result->fetch_assoc()) {
            }
   
    $db->delete('service_category',array('service_id'=>$_REQUEST['deletecat']));
          $_SESSION['stats'] ='Record deleted';
          $_SESSION['stats_code'] ="success";
        
    
    header('Location: ../service.php'); 
    
}



//END OF SERVICES PROCESS  -- ILL CHECK IT LATER

// JOBS SERVICE

if(isset($_REQUEST['deletejob']) and $_REQUEST['deletejob']!=""){
   
$temp = $_REQUEST['deletejob'];
$sql = "SELECT * FROM service_job WHERE   service_job.job_id = '$temp'";
$result = $con->query($sql);
             while($row = $result->fetch_assoc()) {
            }
   
    $db->delete('service_job',array('service_job.job_id'=>$_REQUEST['deletejob']));
          $_SESSION['stats'] ='Record deleted';
          $_SESSION['stats_code'] ="success";
        
        
        header('location:../jobs.php');
    
}

if(isset($_POST['insertjobs']))
{   
    
    $servicejob = $_POST['servicejob'];
    $sql = "SELECT * FROM service_job WHERE job_role = '$servicejob'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        $_SESSION['stats'] =''.$servicejob.' Job  already exist';
        $_SESSION['stats_code'] ="warning";
        header('location:../jobs.php');
    }else{
        $query = "INSERT INTO service_job (`job_role`) VALUES ('$servicejob')";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['stats'] =''.$servicejob.' has been inserted';
        $_SESSION['stats_code'] ="success";
        
        header('location:../jobs.php');
    }
    else
    {
      
        header('location:../jobs.php');
    }
    }
    
}
if(isset($_POST['updatejobs']))
{


    $ids = $_POST['job_id'];
    $servicejob = $_POST['servicejob'];
    $servicejob1 = $_POST['servicejob1'];
    $sql = "SELECT * FROM service_job WHERE job_role = '$servicejob'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        if($servicejob == $servicejob1){
             $_SESSION['stats'] ='Nothing Change Foo';
             $_SESSION['stats_code'] ="warning";
             header('location:../jobs.php');
        }else{
            $_SESSION['stats'] =''.$servicejob.' Job  already exist';
             $_SESSION['stats_code'] ="warning";
             header('location:../jobs.php');
        }
       
    }else{
          mysqli_query($con, "UPDATE service_job set job_role='"
         .$_POST['servicejob'] . "'
          WHERE job_id = '".$ids."'"  );
            $_SESSION['stats'] ='Record has been updated';
        $_SESSION['stats_code'] ="success";
        header('location:../jobs.php');
    }
  
}
//END OF JOB SERVICES

//STATUS
if (isset($_POST['submitstatus'])) {
    
    // Process your form data here
    $ids = $_POST['transid'];
    mysqli_query($con, "UPDATE transacttable set status_no = 4 WHERE transid = '".$ids."'"  );

    // Redirect to the specified URL
    $redirect_url = "/test/pages/client/valuechecker.php?editId=" . $ids;
    header("Location: " . $redirect_url);
    exit;
}


//BOOKING PROCESS

if(isset($_POST['bookingupdate']))
{
$ids = $_POST['transid'];
    mysqli_query($con, "UPDATE transacttable set numofitem='"
      .$_POST['numofitem'] . "', status = '" 
      .$_POST['status'] . "', status_no = 2, transact_sched = '" 
      .$_POST['transact_sched'] . "', transact_schedinfo = '" 
      .$_POST['transact_schedinfo'] . "'
      WHERE transid = '".$ids."'"  );
      $_SESSION['stats'] ='Booking has been approved';
      $_SESSION['stats_code'] ="success";
     header('location:../home.php');
}
if(isset($_POST['bookingupdates']))
{
$ids = $_POST['transid'];
    mysqli_query($con, "UPDATE transacttable set request='"
      .$_POST['request'] . "'
      WHERE transid = '".$ids."'"  );
      $_SESSION['stats'] ='Cancellation Request has been sent';
      $_SESSION['stats_code'] ="success";
     header('location:../client-cancel.php');
}
if(isset($_POST['submitfinal']))
{
$ids = $_POST['transid'];
    mysqli_query($con, "UPDATE transacttable set transact1='"
      .$_POST['transact1'] . "', cashtotal = '" 
      .$_POST['cashtotal'] . "', status = '" 
      .$_POST['status'] . "', encoder = '" 
      .$_POST['encoder'] . "', numofitem = '" 
      .$_POST['numofitem'] . "'
      WHERE transid = '".$ids."'"  );
    $_SESSION['stats'] ='Transaction has been settled';
      $_SESSION['stats_code'] ="success";
      header('Location: ../transact_view.php?editId=' . $ids); 
}

if(isset($_POST['newaccount']))
{
    $uid = $_POST['curentid'];
    $uemail = $_POST['email'];
    $uphone = $_POST['phone'];
    $ufirstname = $_POST['firstname'];
    $ulastname = $_POST['lastname'];
   


    $query = "INSERT INTO users (`firstname`,`lastname`,`email`,`phone`) VALUES ('$ufirstname','$ulastname','$uemail','$uphone')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
          $_SESSION['stats'] ='Customer registered';
          $_SESSION['stats_code'] ="success";
           header('location:../customer.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}


//VEHICLE PROCESS

if(isset($_POST['insertvehicle-type']))
{   

    
  
    $type = $_POST['vtype'];
    $sql = "SELECT * FROM car_type WHERE car_type_name = '$type'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
         echo '<script type="text/javascript">
            alert("Vehicle Type Already Exist!!!");
            window.location = "../vehicle-type.php";
            </script>';
    }else{
    $query = "INSERT INTO car_type (`car_type_name`) VALUES ('$type')";
    $query_run = mysqli_query($con, $query);
     echo '<script type="text/javascript">
            alert("Vehicle Type Saved!!!");
            window.location = "../vehicle-type.php";
            </script>';
    }
}

if(isset($_POST['insertvehicle-brand']))
{   
    $brand = $_POST['vbrand'];
    $sql = "SELECT * FROM car_brand WHERE car_brand_name = '$brand'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
         echo '<script type="text/javascript">
            alert("Vehicle Brand Already Exist!!!");
            window.location = "../vehicle-brand.php";
            </script>';
    }else{
    $query = "INSERT INTO car_brand (`car_brand_name`) VALUES ('$brand')";
    $query_run = mysqli_query($con, $query);
     echo '<script type="text/javascript">
            alert("Vehicle Brand : ['.$brand.'] Saved!!!");
            window.location = "../vehicle-brand.php";
            </script>';
    }
}

if(isset($_POST['insertvehicle-model']))
{   
    $model = $_POST['vmodel'];
    
    $sql = "SELECT * FROM car_model WHERE car_model_name = '$model'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
         echo '<script type="text/javascript">
            alert("Vehicle Model Already Exist!!!");
            window.location = "../vehicle-model.php";
            </script>';
    }else{
    $query = "INSERT INTO car_model (`car_model_name`) VALUES ('$model')";
    $query_run = mysqli_query($con, $query);
     echo '<script type="text/javascript">
            alert("Vehicle Model Saved!!!");
            window.location = "../vehicle-model.php";
            </script>';
    }
}
//VEHICLE END PROCESS

//vehicles uupdate

if(isset($_POST['updatecarbrand']))
{
    $carbrand = $_POST['carbrand'];
    $cartype = $_POST['cartype'];
    $carmodel = $_POST['carmodel'];
    $carserialnumber = $_POST['carserialnumber'];
    $carplateid = $_POST['plateid'];
    
    $ids = $_POST['car_brand_id'];
   
     $result = mysqli_query($con,"SELECT * from cardata WHERE id = $ids;");
  $row = mysqli_fetch_array($result);
  $hello = $row['plateid'];
         mysqli_query($con, "UPDATE cardata set carbrand='"
      .$_POST['carbrand'] . "', cartype = '" 
      .$_POST['cartype']. "', carmodel = '" 
      .$_POST['carmodel']. "', carserialnumber = '" 
      .$_POST['carserialnumber']. "', userphone = '" 
      .$_POST['plateid']. "'
         WHERE id = '".$ids."'"  );
         $_SESSION['stats'] ='Vehicle has been updated';
                $_SESSION['stats_code'] ="success";
                header('location:../vehicle-user.php?editId='.$hello);
//$ids = $_POST['car_brand_id'];
   
}

if(isset($_POST['updatecar']))
{
    $carbrand = $_POST['carbrand'];
    $cartype = $_POST['cartype'];
    $carmodel = $_POST['carmodel'];
    $carserialnumber = $_POST['carserialnumber'];
    $carplateid = $_POST['plateid'];
    
    $ids = $_POST['car_brand_id'];
   
     $result = mysqli_query($con,"SELECT * from cardata WHERE id = $ids;");
  $row = mysqli_fetch_array($result);
  $hello = $row['plateid'];
         mysqli_query($con, "UPDATE cardata set carbrand='"
      .$_POST['carbrand'] . "', cartype = '" 
      .$_POST['cartype']. "', carmodel = '" 
      .$_POST['carmodel']. "', carserialnumber = '" 
      .$_POST['carserialnumber']. "', userphone = '" 
      .$_POST['plateid']. "'
         WHERE plateid = '".$ids."'"  );
         $_SESSION['stats'] ='Vehicle has been updated';
                $_SESSION['stats_code'] ="success";
                header('location:../vehicle.php');
//$ids = $_POST['car_brand_id'];
   
}

if(isset($_POST['updatecartype']))
{
    $cartype = $_POST['cartype'];
    $ids = $_POST['car_type_id'];
   
      $sql = "SELECT * FROM car_type WHERE car_type_name = '$cartype'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
         echo '<script type="text/javascript">
            alert("Vehicle Type : ['.$cartype.'] Already Exist!!!");
            window.location = "../update/vehicle_type_edit.php?editId='.$ids.'";
            </script>';
    }else{
         mysqli_query($con, "UPDATE car_type set car_type_name='"
        .$_POST['cartype'] . "'
         WHERE car_type_id = '".$ids."'"  );
         echo '<script type="text/javascript">
            alert("Vehicle Type : ['.$cartype.'] has been Updated !!!");
            window.location = "../vehicle-type.php";
            </script>';
    }
   
}

if(isset($_POST['updatecarmodel']))
{
    $carmodel = $_POST['carmodel'];
    $ids = $_POST['car_model_id'];
   
      $sql = "SELECT * FROM car_model WHERE car_model_name = '$carmodel'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
         echo '<script type="text/javascript">
            alert("Vehicle Model : ['.$carmodel.'] Already Exist!!!");
            window.location = "../update/vehicle_model_edit.php?editId='.$ids.'";
            </script>';
    }else{
         mysqli_query($con, "UPDATE car_model set car_model_name='"
        .$_POST['carmodel'] . "'
         WHERE car_model_id = '".$ids."'"  );
         echo '<script type="text/javascript">
            alert("Vehicle Model : ['.$carmodel.'] has been Updated !!!");
            window.location = "../vehicle-model.php";
            </script>';
    }
   
}

// END OF VEHICLE UPDATES


//FIFO ALGORITHM STARTS -------------------------------------------------------------------------------------------
// Function to make a reservation
function makeReservation($customer_name, $conn) {
    $customer_name = mysqli_real_escape_string($conn, $customer_name);
    $reservation_time = date('Y-m-d H:i:s'); // Current time
    $sql = "INSERT INTO reservations (customer_name, reservation_time) VALUES ('$customer_name', '$reservation_time')";
    $conn->query($sql);
}

// Function to get the next reservation in the queue (FIFO)
function getNextReservation($conn) {
    $sql = "SELECT * FROM reservations ORDER BY reservation_time LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row;
    }

    return null;
}

// Function to remove a reservation from the queue
function removeReservation($reservation_id, $conn) {
    $sql = "DELETE FROM reservations WHERE id = $reservation_id";
    $conn->query($sql);
}

// Usage example
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['customer_name'])) {
        makeReservation($_POST['customer_name'], $conn);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action'])) {
    if ($_GET['action'] === 'process') {
        $nextReservation = getNextReservation($conn);
        if ($nextReservation) {
            // Process the reservation (you can add your reservation processing logic here)
            echo "Processing reservation for: " . $nextReservation['customer_name'];
            removeReservation($nextReservation['id'], $conn);
        } else {
            echo "No reservations in the queue.";
        }
    }
}

//FIFO ALGORITHM ENDS------------------------------------------------------------------------------

//transaction table


if(isset($_POST['bookingrequestinsert']))
{
$bid = $_POST['bid'];
$ccarid = $_POST['carid'];

     $sql50 = "SELECT * FROM booking_table WHERE transaction_id = '$bid'";
         $result50 = mysqli_query($con, $sql50) or die(mysqli_error($db));
                     if(mysqli_num_rows($result50)>0){
                                $bd = $_POST['bid'];
                                $cid = $_POST['custid'];
                                $cstatus = $_POST['status'];
                                $cdate = date('Y-m-d',strtotime($_POST['transact_sched']));
                                $ptyp = $_POST['p_type'];
                                $cpay = $_POST['payment_type'];
                                $cpayinfo = $_POST['transact_schedinfo'];
                                $resultcountsql = "SELECT count(*) as total FROM transacttable WHERE transact_sched = '$cdate' AND status ='Pending' ";
                                $resultsq= mysqli_query($con,$resultcountsql);
                                $data = mysqli_fetch_assoc($resultsq);
                                //echo $data['total'];
                                $numofdates = $data['total'];
                                $n = $numofdates+1;
                                if($numofdates == 0 ){
                                        $query = "INSERT INTO transacttable (`custid`,`carid`,`status`,`transact_sched`,`payment_type`,`transact_schedinfo`,`prioritynumber`) VALUES ('$cid','$ccarid','$cstatus','$cdate','$ptyp','$cpayinfo','$n')";
                                     $query_run = mysqli_query($con, $query);
                                     if($query_run)
                                        {
                                            $_SESSION['stats'] =' Your priority number is '.$n.'';
                                    $_SESSION['stats_code'] ="success";
                                    header('location:../cancellation.php?editId='.$bd.'');
                                        }
                                        else
                                        {
                                            echo '<script> alert("Data Not Saved"); </script>';
                                        }


                                }elseif($numofdates>0){
                                    $query = "INSERT INTO transacttable (`custid`,`carid`,`status`,`transact_sched`,`payment_type`,`transact_schedinfo`,`prioritynumber`) VALUES ('$cid','$ccarid','$cstatus','$cdate','$ptyp','$cpayinfo','$n')";
                                     $query_run = mysqli_query($con, $query);
                                     if($query_run)
                                        {
                                     $_SESSION['stats'] =' Your priority number is '.$n.'';
                                    $_SESSION['stats_code'] ="success";
                                    header('location:../cancellation.php?editId='.$bd.'');
                                        }
                                        else
                                        {
                                            echo '<script> alert("Data Not Saved"); </script>';
                                        }
                                }else{

                                }
                                    
                                      
                                                }else{
                                 $_SESSION['stats'] =''.$cname.' You have not select anything';
                                    $_SESSION['stats_code'] ="warning";
                                   header('location:../joborder.php?editId='.$ccarid.'');

                                    }
                  
    


   
   
}

//vehicles insert


if(isset($_POST['vehicle-user']))
{
    $ids = $_POST['currentid'];
    $currentplate = $_POST['userphone'];
    $currentbrand = $_POST['carbrand'];
    $currentmodel = $_POST['carmodel'];
    $currentserial = $_POST['carserialnumber'];
    $currenttype = $_POST['cartype'];
    $currentmaker = $_POST['carmanufacturer'];
        $query = "INSERT INTO cardata (`plateid`,`userphone`,`carbrand`,`carmodel`,`carserialnumber`,`cartype`,`carmanufacturer`) VALUES ('$ids','$currentplate','$currentbrand','$currentmodel','$currentserial','$currenttype','$currentmaker')";
         $query_run = mysqli_query($con, $query);
          if($query_run)
            {
                $_SESSION['stats'] ='Vehicle has been registered';
        $_SESSION['stats_code'] ="success";
        header('location:../vehicle-user.php?editId='.$ids.'');
            }
            else
            {
                echo '<script> alert("Data Not Saved"); </script>';
            }
    


   
   
}

if(isset($_POST['purchaseorder']))
{
    $ids = $_POST['purchaseid'];
    $currentitem = $_POST['purchaseitem'];
    $currentprice = $_POST['purchaseprice'];
    $currentstatus = $_POST['purchasestatus'];
    $currentamount = $_POST['purchaseamount'];
    $currenttotal = $currentprice * $currentamount;
    $sql = "SELECT * FROM product_inventory WHERE p_name = '$currentitem' AND p_price = '$currentprice'";
    $result = $con->query($sql);
             while($row = $result->fetch_assoc()) {
            $tempo = $row['p_on_hand'];
            $tempofilter= $row['p_category'];
            $tempoid = $row['p_id'];
            $tempototal = $tempo - $currentamount;
            }  

    $sqluser = "SELECT * FROM users WHERE id = '$ids'";
    $resultuser = $con->query($sqluser);
             while($row = $resultuser->fetch_assoc()) {
           $fn = $row['firstname'];
           $ln = $row['lastname'];
           $full = $fn . ' ' . $ln; 
            }  
    $sqlfilter = "SELECT * FROM category WHERE c_name = '$tempofilter'";
    $resultfilter = $con->query($sqlfilter);
             while($row = $resultfilter->fetch_assoc()) {
                $tempocat = $row['c_name'];
            }   
    if($currentamount > $tempo){
         $_SESSION['stats1'] ='Not Enough Stock ' ;
         $_SESSION['stats1_text'] ='Currently Left = '.$tempo.'' ;
         $_SESSION['stats1_code'] ="warning";
          header('location:../purchase.php');
    }else{
       $query = "INSERT INTO parts_table (`item_name`,`item_price`,`item_amount`,`item_status`,`item_total_pending`,`item_user_id`,`item_category`,`item_buyer`) VALUES ('$currentitem','$currentprice','$currentamount','$currentstatus','$currenttotal','$ids','$tempocat','$full')";
         $query_run = mysqli_query($con, $query);

        //  mysqli_query($con, "UPDATE product_inventory set p_on_hand='"
           // .$tempototal . "'
        //     WHERE p_id = '".$tempoid."'"  );
          if($query_run)
            {
                $_SESSION['stats'] =''.$cname.' Order has been sent';
                $_SESSION['stats_code'] ="success";
                header('location:../purchase-request.php');
            }
            else
            {
                echo '<script> alert("Data Not Saved"); </script>';
            }}}


if(isset($_POST['purchaseupdate']))
{
     $ids = $_POST['purchaseid'];
    $currentitem = $_POST['purchaseitem'];
    $currentstatus = $_POST['purchasestatus'];
    $currentamount = $_POST['purchaseamount'];
    $currentdetails =$_POST['purchasedetails'];
    $sql = "SELECT * FROM product_inventory WHERE p_name = '$currentitem'";
    $result = $con->query($sql);
             while($row = $result->fetch_assoc()) {
            $tempo = $row['p_on_hand'];
            $tempofilter= $row['p_category'];
            $tempoid = $row['p_id'];
            $tempototal = $tempo - $currentamount;
            }  
         mysqli_query($con, "UPDATE parts_table set item_status='"
         .$currentstatus . "', item_total = '" 
      .$currentdetails . "'
          WHERE item_id = '".$ids."'"  );

          mysqli_query($con, "UPDATE product_inventory set p_on_hand='"
         .$tempototal . "'
         WHERE p_id = '".$tempoid."'"  );
        $_SESSION['stats'] ='Order has been approved';
        $_SESSION['stats_code'] ="success";
        header('location:../purchase.php');
}
if(isset($_POST['purchaseonthespot']))
{   
    $cur = date("Y-m-d");
    $ids = $_POST['purchaseid'];
    $currentbuyer =$_POST['purchasebuyer'];
    $currentitem  =$_POST['purchaseitem'];
    $currentprice =$_POST['purchaseprice'];
    $currentstatus=$_POST['purchasestatus'];
    $currentamount=$_POST['purchaseamount'];
    $currenttotal =$currentprice * $currentamount;
    $sql = "SELECT * FROM product_inventory WHERE p_name = '$currentitem' AND p_price = '$currentprice'";
    $result = $con->query($sql);
             while($row = $result->fetch_assoc()) {
            $tempo = $row['p_on_hand'];
            $tempofilter= $row['p_category'];
            $tempoid = $row['p_id'];
            $tempototal = $tempo - $currentamount;
            }  

    $sqluser = "SELECT * FROM users WHERE id = '$ids'";
    $resultuser = $con->query($sqluser);
             while($row = $resultuser->fetch_assoc()) {
           $fn = $row['firstname'];
           $ln = $row['lastname'];
           $full = $fn . ' ' . $ln; 
            }  
    $sqlfilter = "SELECT * FROM category WHERE c_name = '$tempofilter'";
    $resultfilter = $con->query($sqlfilter);
             while($row = $resultfilter->fetch_assoc()) {
                $tempocat = $row['c_name'];
            }   
    if($currentamount > $tempo){
         $_SESSION['stats1'] ='Not Enough Stock ' ;
         $_SESSION['stats1_text'] ='Currently Left = '.$tempo.'' ;
         $_SESSION['stats1_code'] ="warning";
          header('location:../purchase.php');
    }else{
       $query = "INSERT INTO parts_table (`item_name`,`item_price`,`item_amount`,`item_status`,`item_total_pending`,`item_user_id`,`item_category`,`item_buyer`,`item_transaction_sched`) VALUES ('$currentitem','$currentprice','$currentamount','$currentstatus','$currenttotal','$ids','$tempocat','$currentbuyer','$cur')";
         $query_run = mysqli_query($con, $query);

        mysqli_query($con, "UPDATE product_inventory set p_on_hand='"
         .$tempototal . "'
         WHERE p_id = '".$tempoid."'"  );
          if($currentstatus == 'Pending')
            {
                $_SESSION['stats'] ='Order has been sent';
                $_SESSION['stats_code'] ="success";
                header('location:../purchase-request.php');
            }
            else
            {
                 $_SESSION['stats'] ='Purchase completed';
                $_SESSION['stats_code'] ="success";
                header('location:../purchase.php');
            }}}


if(isset($_POST['insertexpenses']))
{
    $ids = $_POST['purchaseid'];
    $currentbuyer =$_POST['expensename'];
    $currentitem  =$_POST['expenseprice'];
    $currentprice =$_POST['expensedate'];
       $query = "INSERT INTO expense_table (`expense_name`,`expense_price`,`expense_date`) VALUES ('$currentbuyer','$currentitem','$currentprice')";
         $query_run = mysqli_query($con, $query);
                $_SESSION['stats'] ='Expense has been added';
                $_SESSION['stats_code'] ="success";
              header('location:../expenses.php');
}

if(isset($_POST['updateexpenses']))
{
    $ids = $_POST['expense_id'];
    $currentitem = $_POST['expense_name'];
    $currentprice = $_POST['expenseprice'];
    $currentdate = $_POST['expensedate'];
    
         mysqli_query($con, "UPDATE expense_table set expense_name='"
      .$_POST['expense_name'] . "', expense_price = '" 
      .$_POST['expense_price'] . "', expense_date = '" 
      .$_POST['expense_date'] . "'
      WHERE expense_id = '".$ids."'"  );
         $_SESSION['stats'] ='Expenses has been updated';
        $_SESSION['stats_code'] ="success";
        header('location:../expenses.php');
}



if(isset($_POST['bookingrequestupdate']))
{
    $ids = $_POST['bid'];
    
    $newpaytype = $_POST['payment_type'];
    $cdate = date('Y-m-d',strtotime($_POST['transact_sched']));
    
$resultcountsql = "SELECT count(*) as total FROM transacttable WHERE transact_sched = '$cdate' AND status ='Pending' ";
        $resultsq= mysqli_query($con,$resultcountsql);
        $data = mysqli_fetch_assoc($resultsq);
        $numofdates = $data['total'];
        $n = $numofdates+1;
        $mys = "SELECT * FROM transacttable WHERE transact_sched = '$cdate' AND status ='Pending' AND prioritynumber = '$n'";
        $reslmys = $con->query($mys);
        if(mysqli_num_rows($reslmys)>0){
            $nn = $n+1;
             mysqli_query($con, "UPDATE transacttable set transact_sched='"
      .$cdate . "', payment_type = '" 
      .$newpaytype . "', prioritynumber = '" 
      .$nn. "'
      WHERE transid = '".$ids."'"  );
         $_SESSION['stats'] ='Updated Successfully';
        $_SESSION['stats_code'] ="success";
        header('location:../cancellation.php?editId='.$ids.'');
        }else{
             mysqli_query($con, "UPDATE transacttable set transact_sched='"
      .$cdate . "', payment_type = '" 
      .$newpaytype . "', prioritynumber = '" 
      .$n. "'
      WHERE transid = '".$ids."'"  );
         $_SESSION['stats'] ='Updated Successfully';
        $_SESSION['stats_code'] ="success";
        header('location:../cancellation.php?editId='.$ids.'');
        }
       
        
}



if(isset($_REQUEST['deleteexpenses']) and $_REQUEST['deleteexpenses']!=""){
$temp = $_REQUEST['deleteexpenses'];
$sql = "SELECT * FROM expense_table WHERE   expense_table.expense_id = '$temp'";
$result = $con->query($sql);
             while($row = $result->fetch_assoc()) {
            }
   
    $db->delete('expense_table',array('expense_table.expense_id'=>$_REQUEST['deleteexpenses']));
    $_SESSION['stats'] ='Record deleted';
          $_SESSION['stats_code'] ="success";
           header('location:../expenses.php');
    
}

if(isset($_REQUEST['deletebookings']) and $_REQUEST['deletebookings']!=""){

$temp = $_REQUEST['deletebookings'];
$tempstatus = "Cancelled";
$temprequest = "";
 mysqli_query($con, "UPDATE transacttable set status='"
      .$tempstatus . "', request = '" 
      .$temprequest. "'
      WHERE transid = '".$temp."'"  );
  

    $_SESSION['stats'] ='Cancelled!';
          $_SESSION['stats_code'] ="success";
           header('location:../client-cancel2.php');
    
}


if(isset($_REQUEST['deletecustomer']) and $_REQUEST['deletecustomer']!=""){
    $temp = $_REQUEST['deletecustomer'];
    $sql = "SELECT * FROM users WHERE   users.id = '$temp'";
    $result = $con->query($sql);
                 while($row = $result->fetch_assoc()) {
                }
       
        $db->delete('users',array('users.id'=>$_REQUEST['deletecustomer']));
              $_SESSION['stats'] ='Record deleted';
              $_SESSION['stats_code'] ="success";
         header('Location: ../account.php'); 
        
    }

 ?>