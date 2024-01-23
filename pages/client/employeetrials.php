<?php
  include 'process/session.php';
?>

<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
 <script>  
window.onload = function() {  

  // ---------------
  // basic usage
  // ---------------
  var $ = new City();
  $.showProvinces("#userprovince");
  $.showCities("#usercity");

  // ------------------
  // additional methods 
  // -------------------

  // will return all provinces 
  console.log($.getProvinces());
  
  // will return all cities 
  console.log($.getAllCities());
  
  // will return all cities under specific province (e.g Batangas)
  console.log($.getCities("Batangas")); 
  
}
</script>

<body>
              <div class="form-group">
                <select class="form-control" id="userprovince" placeholder="Province" name="userprovince" required></select>
              </div>
              <div class="form-group">
                <select class="form-control"  placeholder="City" name="usercity" id="usercity" required></select>
              </div>
          
        </div>
      </div>
    </div>
</div>
            
  </body>
  </html>
<script src="css/city.js"></script>

<?php
include ('footer.php');
 ?>