
<?php
  include '../process/sessions_view.php';
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
<div id="user-availability-status" class="text-center"></div>
<h2 class="text-center">Check Availability</h2>
<form name="frmChange">
    <div class="row">
        <label for="username" id="label-text">Username: <span
            class="validation-message"></span></label><input
            name="username" type="text" id="username" class="full-width"
            id="commentInput">
    </div>
    <div class="row">
        <button type="submit" name="submit" value="Submit" id="submit"
            class="full-width">
            Submit <img src="loader.gif" id="loaderIcon"
                class="icon-loader" style="display: none" />
        </button>

    </div>
</form>
  

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
  <script type="text/javascript">
    $(document).ready(function() {
  $("#submit").click(function(e) {
    e.preventDefault();

    var username = $('#username').val();
    $(".validation-message").text("");
    if (username == "") {
      $('.validation-message').text('required')
    } else {
      $("#loaderIcon").show();
      jQuery.ajax({
        url: "check_availability.php",
        data: 'username=' + $("#username").val(),
        type: "POST",
        success: function(data) {
          $("#user-availability-status").html(data);
          $("#loaderIcon").hide();
        },
        error: function() { }
      });
    }

  });
}); 
  </script>
</html>

<?php

include('footer.php');
?>