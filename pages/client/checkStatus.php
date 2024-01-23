
<?php
 include 'process/session.php';
  $sql1 = "SELECT * FROM transacttable";
$result1 = mysqli_query($con,$sql1);
$dates_ar = [""];
if(mysqli_num_rows($result1)>0){
     while($rows = mysqli_fetch_array($result1)){
        $tempdate = $rows["transact_sched"];
          $resultcountsql = "SELECT count(*) as total FROM transacttable WHERE transact_sched = '$tempdate' AND status='Pending'";
       $resultsq= mysqli_query($con,$resultcountsql);
       $data = mysqli_fetch_assoc($resultsq);
      $totalcount = $data['total'];
        // LIMIT TO BOOKING COUNT 
       if($totalcount == 3){
         
          $dates_ar[] = $tempdate;
      }
      }


    }
?>
<script>
  
  function my_fun(str){
    if(window.XMLHttpRequest){
      xmlhttp = new XMLHttpRequest();
    }else{
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange= function(){
      if(this.readyState ==4 && this.status ==200){
        document.getElementById('poll').innerHTML = this.responseText;

      }
    }
    xmlhttp.open("GET","process/helper.php?value="+str, true);
    xmlhttp.send();
  }
</script>
<script>
  
  function my_fun2(str){
    if(window.XMLHttpRequest){
      xmlhttp = new XMLHttpRequest();
    }else{
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange= function(){
      if(this.readyState ==4 && this.status ==200){
        document.getElementById('poll2').innerHTML = this.responseText;

      }
    }
    xmlhttp.open("GET","process/helper2.php?value="+str, true);
    xmlhttp.send();
  }
</script>




 



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



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: "Poppins", sans-serif;
}

.step-wizard {
    height: 50vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.step-wizard-list {
    background: #fff;
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
    color: #333;
    list-style-type: none;
    border-radius: 10px;
    display: flex;
    padding: 40px 10px;
    position: relative;
    z-index: 10;
}

.step-wizard-item {
    padding: 0 20px;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
    display: flex;
    flex-direction: column;
    text-align: center;
    min-width: 170px;
    position: relative;
}

.step-wizard-item + .step-wizard-item:after {
    content: "";
    position: absolute;
    left: 0;
    top: 19px;
    background: #FF0000;
    width: 100%;
    height: 2px;
    transform: translateX(-50%);
    z-index: -10;
}

.progress-count {
    height: 40px;
    width: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-weight: 600;
    margin: 0 auto;
    position: relative;
    z-index: 10;
    color: transparent;
}

.progress-count:after {
    content: "";
    height: 50px;
    width: 50px;
    background: #FF0000;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    z-index: -10;
}

.progress-count:before {
    content: "";
    height: 10px;
    width: 20px;
    border-left: 3px solid #fff;
    border-bottom: 3px solid #fff;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -60%) rotate(-45deg);
    transform-origin: center center;
}

.progress-label {
    font-size: 14px;
    font-weight: 600;
    margin-top: 10px;
}

.current-item .progress-count:before,
.current-item ~ .step-wizard-item .progress-count:before {
    display: none;
}

.current-item ~ .step-wizard-item .progress-count:after {
    height: 10px;
    width: 10px;
}

.current-item ~ .step-wizard-item .progress-label {
    opacity: 0.5;
}

.current-item .progress-count:after {
    background: #fff;
    border: 2px solid #FF0000;
}

.current-item .progress-count {
    color: #FF0000;
}

/* Media queries for improved responsiveness */

/* For screens smaller than 768px */
@media (max-width: 768px) {
  
    .step-wizard {
        height: auto;
    }
    .step-wizard-list {
        flex-direction: column;
        padding: 20px;
    }
    .step-wizard-item {
        min-width: auto;
        padding: 20px;
        text-align: center;
    }
    .progress-count {
        height: 30px;
        width: 30px;
    }
    .progress-count:after {
        height: 40px;
        width: 40px;
    }
    .progress-count:before {
        height: 8px;
        width: 16px;
    }

    .step-wizard-item + .step-wizard-item:after {
        display: none; /* Hide the lines on small screens */
    }
}

/* For screens smaller than 480px */
@media (max-width: 480px) {
    .progress-count {
        height: 24px;
        width: 24px;
    }
    .progress-count:after {
        height: 32px;
        width: 32px;
    }
    .progress-count:before {
        height: 6px;
        width: 12px;
    }
    .step-wizard-item + .step-wizard-item:after {
        display: none; /* Hide the lines on small screens */
    }
}

</style>

</head>



<body>
             

<div class="container ">
<div class="row mx-3 mt-5">
  <div class="col"><h2>Booking Status</h2> </div>
  <div class="col"><a  href="cancellation.php?editId=<?php echo  $_GET['editId'];?>" type="button" class="float-right btn btn-danger " >Back<i class="fas fa-fw fa-arrow-right"></i></a> </div>
</div>
  


<?php
$stat = $_GET['editId'];
$resultcountsql = "SELECT status_no FROM transacttable WHERE transid = '$stat'";
$resultsq = mysqli_query($con, $resultcountsql);
$data = mysqli_fetch_assoc($resultsq);

// Check if $data is not null and if it has 'status_no' offset
$totalcount = (!is_null($data) && isset($data['status_no'])) ? $data['status_no'] : null;
?>
<?php if (!is_null($totalcount)) {   ?>
 <?php if($totalcount ==0){?>
 <section class="step-wizard">
        <ul class="step-wizard-list">
            <li class="step-wizard-item current-item">
                <span class="progress-count">1</span>
                <span class="progress-label">Pending</span>
            </li>
            <li class="step-wizard-item ">
                <span class="progress-count">2</span>
                <span class="progress-label">Approved</span>
            </li>
            <li class="step-wizard-item ">
                <span class="progress-count">3</span>
                <span class="progress-label">In Queue</span>
            </li>
            <li class="step-wizard-item">
                <span class="progress-count">4</span>
                <span class="progress-label">Fixing</span>
            </li>
            <li class="step-wizard-item">
                <span class="progress-count">5</span>
                <span class="progress-label">Done Fixing</span>
            </li>
        </ul>
    </section>

<?php } ?>

<?php if($totalcount ==1){?>
 <section class="step-wizard">
        <ul class="step-wizard-list">
            <li class="step-wizard-item">
                <span class="progress-count">1</span>
                <span class="progress-label">Pending</span>
            </li>
            <li class="step-wizard-item current-item">
                <span class="progress-count">2</span>
                <span class="progress-label">Approved</span>
            </li>
            <li class="step-wizard-item ">
                <span class="progress-count">3</span>
                <span class="progress-label">In Queue</span>
            </li>
            <li class="step-wizard-item">
                <span class="progress-count">4</span>
                <span class="progress-label">Fixing</span>
            </li>
            <li class="step-wizard-item">
                <span class="progress-count">5</span>
                <span class="progress-label">Done Fixing</span>
            </li>
        </ul>
    </section>

<?php } ?>

<?php if($totalcount ==2){?>
 <section class="step-wizard">
        <ul class="step-wizard-list">
            <li class="step-wizard-item">
                <span class="progress-count">1</span>
                <span class="progress-label">Pending</span>
            </li>
            <li class="step-wizard-item ">
                <span class="progress-count">2</span>
                <span class="progress-label">Approved</span>
            </li>
            <li class="step-wizard-item current-item">
                <span class="progress-count">3</span>
                <span class="progress-label">In Queue</span>
            </li>
            <li class="step-wizard-item">
                <span class="progress-count">4</span>
                <span class="progress-label">Fixing</span>
            </li>
            <li class="step-wizard-item">
                <span class="progress-count">5</span>
                <span class="progress-label">Done Fixing</span>
            </li>
        </ul>
    </section>

<?php } ?>

<?php if($totalcount ==3){?>
 <section class="step-wizard">
        <ul class="step-wizard-list">
            <li class="step-wizard-item">
                <span class="progress-count">1</span>
                <span class="progress-label">Pending</span>
            </li>
            <li class="step-wizard-item ">
                <span class="progress-count">2</span>
                <span class="progress-label">Approved</span>
            </li>
            <li class="step-wizard-item ">
                <span class="progress-count">3</span>
                <span class="progress-label">In Queue</span>
            </li>
            <li class="step-wizard-item current-item">
                <span class="progress-count">4</span>
                <span class="progress-label">Fixing</span>
            </li>
            <li class="step-wizard-item">
                <span class="progress-count">5</span>
                <span class="progress-label">Done Fixing</span>
            </li>
        </ul>
    </section>

<?php } ?>

<?php if($totalcount >=4){?>
 <section class="step-wizard">
        <ul class="step-wizard-list">
            <li class="step-wizard-item">
                <span class="progress-count">1</span>
                <span class="progress-label">Pending</span>
            </li>
            <li class="step-wizard-item ">
                <span class="progress-count">2</span>
                <span class="progress-label">Approved</span>
            </li>
            <li class="step-wizard-item ">
                <span class="progress-count">3</span>
                <span class="progress-label">In Queue</span>
            </li>
            <li class="step-wizard-item">
                <span class="progress-count">4</span>
                <span class="progress-label">Fixing</span>
            </li>
            <li class="step-wizard-item  current-item">
                <span class="progress-count">5</span>
                <span class="progress-label">Done Fixing</span>
            </li>
        </ul>
    </section>

<?php } ?>



<?php } else{ ?>
    <section class="step-wizard">
        <ul class="step-wizard-list">
            <li class="step-wizard-item">
                <span class="progress-count">1</span>
                <span class="progress-label">Deleted</span>
            </li>
            <li class="step-wizard-item ">
                <span class="progress-count">2</span>
                <span class="progress-label">Booking Deleted</span>
            </li>
            <li class="step-wizard-item ">
                <span class="progress-count">3</span>
                <span class="progress-label">Booking Deleted</span>
            </li>
            <li class="step-wizard-item">
                <span class="progress-count">4</span>
                <span class="progress-label">Booking Deleted</span>
            </li>
            <li class="step-wizard-item">
                <span class="progress-count">5</span>
                <span class="progress-label">Booking Deleted</span>
            </li>
        </ul>
    </section>
<?php }?> 
                  </div>


   

  
           
</body>
  <script>
    
    $(document).ready(function(){
    
     
      $(document).on('click','.removebtn', function(e){
        e.preventDefault();
        $("#add_btn").hide();

      });
      $("#add_form").submit(function(e){
        e.preventDefault();
        $("#add_btn").val('Adding...');
        $.ajax({
          url: 'process/action7.php',
          method: 'post',
          data: $(this).serialize(),
          success: function(response){
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
include 'footer.php'; ?>