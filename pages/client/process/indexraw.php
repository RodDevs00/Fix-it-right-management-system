<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
   <form>
        User
        <select name="user" id="user">
          <option>-- Select User --</option>
          <option value="Mark">Mark</option>
          <option value="Paul">Paul</option>
          <option value="Hannah">Hannah</option>
        </select>

        <p>

          Age 
          <input type="text" name="age" id="age">

        </p>
        <p>
          Email 
          <input type="text" name="email" id="email">
        </p>
        </form>


<script>
$(document).ready(function(){
    $('#user').on('change',function(){
        var user = $(this).val();
        $.ajax({
            url : "getUser.php",
            dataType: 'json',
            type: 'POST',
            async : false,
            data : { user : user},
            success : function(data) {
                userData = json.parse(data);
                $('#age').val(userData.age);
                $('#email').val(userData.email);
            }
        }); 
    });
});
</script>	
</body>
</html>
