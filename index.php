<?php
  session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

 
    header("location: pages/client/client-home.php");
    echo "hi";
    
}else{
  header("location: login/login.php");
}

?>
