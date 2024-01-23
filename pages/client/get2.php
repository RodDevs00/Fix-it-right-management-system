 <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">Name</label>
             <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="customer_name" name="name" placeholder="Enter Product ID.">
            </div>
        </div>
  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label">Phone</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="phone" name="phone" placeholder="Enter Phone no.">
            </div>
        </div>

<div class="form-group row">
         <label for="inputEmail3" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="Enter Email" onkeyup="checkemail();" required="">
            </div>
        </div>
<script src="css/jquery-3.6.4.min.js"></script>
<script type="text/javascript">
 $(document).ready(function(){
 $('#customer_name').on('change',function(){
 var user = $(this).val();
 $.ajax({
    url : "get4.php",
    dataType: 'json',
    type: 'POST',
    async : true,
    data : { user : user},
    success : function(data) {    
        $('#phone').val(data.p_price);
        $('#email').val(data.p_category);
    }
}); 
});
});
</script>