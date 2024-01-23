<?php
  include_once('../../../include/config.php');
  include_once('../../../include/config2.php');

$conn = new PDO('mysql:host=localhost;dbname=fix-it-right', 'root','');       
$name = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$jobrole = $_POST['userjob'];
$phone = $_POST['contact'];
$email = $_POST['email'];
$hireddate = $_POST['hired'];
$prov = $_POST['userprovince'];
$city = $_POST['usercity'];
$username = $_POST['username'];
$userpass = $_POST['password'];
$confirmpass = $_POST['confirmpass'];
$tempemployee = $_POST['tempholder'];
$resultcountsql = "SELECT count(*) as total FROM users WHERE username = '$username'";
$resultsq= mysqli_query($con,$resultcountsql);
$data = mysqli_fetch_assoc($resultsq);
//echo $data['total'];
$numofmaterials = $data['total'];
$resultcountemail = "SELECT count(*) as totalemail FROM users WHERE email = '$email'";
$resultemail= mysqli_query($con,$resultcountemail);
$dataemail = mysqli_fetch_assoc($resultemail);
//echo $data['total'];
$numofemail = $dataemail['totalemail'];
//$param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

         if(!preg_match('/^[a-zA-Z]+$/',$name)){
           echo "<div class='alert alert-warning'>";
          echo 'Name can only contain letters';
        }elseif($prov == ''){
        echo "<div class='alert alert-warning'>";
          echo 'Province not Selected';
       }elseif(!preg_match('/^[a-zA-Z]+$/',$lname)){
        echo "<div class='alert alert-warning'>";
          echo 'Last Name can only contain letters';

         }elseif($numofemail >0 ){
        echo "<div class='alert alert-warning'>";
        echo 'Email already exist';

       }elseif(!preg_match('/^[a-zA-Z]+$/',$jobrole)){
        echo "<div class='alert alert-warning'>";
          echo 'Job Roles Name can only contain letters.';

      }elseif(strlen(trim($userpass)) < 6){
           echo "<div class='alert alert-warning'>";
           echo 'Password must have atleast 6 characters';
      }elseif(strlen(trim($phone)) < 11){
           echo "<div class='alert alert-warning'>";
           echo 'Phone Number exist in 11 digits.';
      }elseif($userpass != $confirmpass ){
          echo "<div class='alert alert-warning'>";
          echo 'Password did not match';
      
      }elseif(!preg_match('/^[a-zA-Z0-9_]+$/',$username)){
        echo "<div class='alert alert-warning'>";
          echo 'Username can only contain letters, numbers, and underscores.';
      
      
      }elseif($numofmaterials >0 ){
        echo "<div class='alert alert-warning'>";
        echo 'Username already exist';
      
       

      }else{
         $hpass = password_hash($userpass, PASSWORD_DEFAULT); // Creates a password hash
       // echo "i am ",$name," - ",$lname,"<br> MY GENDER IS ",$gender,"<br> MY job rOle is ",$jobrole,"<br> My PHone NUmber is",$phone,"<br> My Email is ",$email,"<br> I was hired in ",$hireddate,"<br> I lived in ",$prov," ",$city,"<br> My username is ",$username,"My Password is ",$userpass,"My Confirm Password is ",$confirmpass;
        $query = "INSERT INTO employee (
        `employee_fname`,`employee_lname`,`employee_gender`,`employee_email`,`employee_phone`,`employee_province`,`employee_city`,`employee_hired_date`,`employee_job`,`employee_user_id`)VALUES (
        '$name',
        '$lname',
        '$gender',
        '$email',
        '$phone',
        '$prov',
        '$city',
        '$hireddate',
        '$jobrole',
        '$tempemployee')";


        $querys = "INSERT INTO users (
        `username`,`user_type`,`password`,`firstname`,`lastname`,`phone`,`email`)VALUES (
        '$username',
        '$jobrole',
        '$hpass',
        '$name',
        '$lname',
        '$phone',
        '$email')";
        $query_run = mysqli_query($con, $query);
        $query_runs = mysqli_query($con, $querys);
         if($query_run){
             echo "<div class='alert alert-success'>";
           echo 'Employee Addeed';
         }else{

            }
       

      }

?>