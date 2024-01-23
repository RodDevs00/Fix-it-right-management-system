


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
 

<style>

body{
    font-family: 'Poppins', sans-serif;
  }

         /* Set the text color of info pagination buttons to black */
        .pagination .page-item.active .page-link {
            background-color: black;
            color: white;
            border-color: black;
        }

        .pagination .page-item .page-link {
            color: black;
        }
    </style>

   <!-- <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css"> -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/all.css">
   <link href="css/jquery-ui.css" rel="stylesheet" />
   <script src="css/jquery-3.6.4.min.js"></script>
    <script src="css/popper.min.js"></script>
    <script src="css/bootstrap.min.js"></script>
    <script src="css/jquery-ui.min.js"></script>
    <!-- Bootstrap core JavaScript-->
      <script src="css/sweetalert.min.js"></script>
  
<?php

   if(isset($_SESSION['stats']) && $_SESSION['stats'] !='')
      {
        ?>
        <script>
          swal({
            title: "<?php echo $_SESSION['stats']; ?>",
            
            icon: "<?php echo $_SESSION['stats_code'];?>",

            button: "Close!",
          });
        </script>
        <?php
        unset($_SESSION['stats']);

      }

   if(isset($_SESSION['stats1']) && $_SESSION['stats1'] !='')
      {
        ?>
        <script>
          swal({
            title: "<?php echo $_SESSION['stats1']; ?>",
            text: "<?php echo $_SESSION['stats1_text']; ?>",
            icon: "<?php echo $_SESSION['stats1_code'];?>",
            button: "Close!",
          });
        </script>
        <?php
        unset($_SESSION['stats1']);

      }
    ?>
    <script>
$('.btndel').on('click',function(e){
   e.preventDefault();
        const href = $(this).attr('href')
  swal({
  title: 'Are you sure?',
  text: 'Record will be deleted',
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    document.location.href = href;
  } else {
     swal({
  
  text: 'Operations has been cancelled',
  icon: "warning",
 
})
  }
});
})
 </script>
 <script>
$('.cancels').on('click',function(e){
   e.preventDefault();
        const href = $(this).attr('href')
  swal({
  title: 'Are you sure?',
  text: 'Record will be up for cancellation',
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    document.location.href = href;
  } else {
     swal({
  
  text: 'Operations has been cancelled',
  icon: "warning",
 
})
  }
});
})
 </script>

          <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
          <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
          <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    
          <!-- <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

    <!-- Core plugin JavaScript-->
    <!-- <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script> -->

    <!-- Custom scripts for all pages-->
    <script src="../../vendor/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="css/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="css/chart-area-demo.js"></script>
    <script src="css/chart-pie-demo.js"></script>


<!-- <script src="css/jquery.dataTables.js"></script> -->

<script>
  $(document).ready( function () {
    $('.table').DataTable();
   });
</script>
<script>
  $(document).ready( function () {
    $('.table1').DataTable();
   });
</script>

<script>

    var array = <?php echo json_encode($dates_ar)?>;


    $('#magic').datepicker({
        minDate: -1, 
        beforeShowDay: function(date){
            
            var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
            return [ array.indexOf(string) == -1 ]
        }
    });
</script>






