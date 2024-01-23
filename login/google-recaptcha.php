<?php
function GoogleReCaptcha(){

   // Validate reCAPTCHA box 
   if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){ 
      
    $secretKey = '6LeaiMEnAAAAAO_KpJTs-evqSto8x-jPRclpPxGp'; 
    $getResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']);  
     $responseData = json_decode($getResponse); 

    }else{
     $responseData = ''; 
    }
}

?>