<?php
// Initialize the session
session_start();

// Include the Google reCAPTCHA verification function
function GoogleReCaptcha(){
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){ 
        $secretKey = '6LeaiMEnAAAAAO_KpJTs-evqSto8x-jPRclpPxGp'; 
        $getResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']);  
        $responseData = json_decode($getResponse); 

        return $responseData->success; // Return the reCAPTCHA verification result
    } else {
        return false; // Return false if reCAPTCHA response is missing
    }
}

// Check if the user is already logged in, if yes then redirect him to the welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../pages/client/client-home.php");
    exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = "";
$stats1 = "";
$user_type = "";
$username_err = $password_err = $login_err = "";

// Processing form data when the form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Verify reCAPTCHA
    $recaptchaSuccess = GoogleReCaptcha();
    
    if(!$recaptchaSuccess) {
        $login_err = "reCAPTCHA verification failed.";
    } else {
        // Check if username is empty
        if(empty(trim($_POST["username"]))){
            $username_err = "Please enter username.";
        } else {
            $username = trim($_POST["username"]);
        }

        // Check if password is empty
        if(empty(trim($_POST["password"]))){
            $password_err = "Please enter your password.";
        } else {
            $password = trim($_POST["password"]);
        }

        // Validate credentials
        if(empty($username_err) && empty($password_err)){
            // Prepare a select statement
            $sql = "SELECT id, username, password FROM users WHERE username = ?";

            if($stmt = mysqli_prepare($link, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_username);

                // Set parameters
                $param_username = $username;

                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    // Store result
                    mysqli_stmt_store_result($stmt);

                    // Check if username exists, if yes then verify password
                    if(mysqli_stmt_num_rows($stmt) == 1){                    
                        // Bind result variables
                        mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                        if(mysqli_stmt_fetch($stmt)){
                            if(password_verify($password, $hashed_password)){
                                // Password is correct, so start a new session
                                session_start();

                                // Store data in session variables
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["username"] = $username;
                                $_SESSION['user_type'] = $user_type;
                                $_SESSION['stats'] = "hello";

                             
                                header("location: ../pages/client/index.php");
                  
                            } else {
                                // Password is not valid, display a generic error message
                                $login_err = "Invalid username or password.";
                            }
                        }
                    } else {
                        // Username doesn't exist, display a generic error message
                        $login_err = "Invalid username or password.";
                    }
                } else {
                    echo "Oops! Something went wrong. Please try again later.";
                }

                // Close statement
                mysqli_stmt_close($stmt);
            }
        }

        // Close connection
        mysqli_close($link);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- Custom styles for this template-->
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
  rel="stylesheet"
/>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Nunito+Sans:opsz,wght@6..12,400&display=swap" rel="stylesheet">
   <!-- <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet"> -->
<style>
    .bg-login2-image {
        background: url("../assets/img/carrep.png");
  background-position: center;
  background-image: auto-fit;
  background-size: 30rem;
  background-repeat: no-repeat;
}

.fnt{
  font-family: 'Kanit', sans-serif;
font-family: 'Nunito Sans', sans-serif;

}

.divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}


</style>
</head>

<body>
<nav class="navbar">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 " style="font-family: 'Bebas Neue', sans-serif;"> <img src="../assets/img/logo.jpeg" alt="" style="width:3rem"> Fix it Right</span>
        </div>
        </nav>

     
        <section class="mt-4">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="../assets/img/carrep.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <div class="text-center">
                                        
                <?php 
        if(!empty($login_err)){
            echo '<div class="alert text-danger" style="padding: 5px 10px; font-size: 14px;">' . $login_err . '</div>';
        }        
        ?>

    </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <h4 class="lead fw-normal mb-0 me-3 fnt" >
            Sign in to continue</h4>
           
          </div>

          <div class="divider d-flex align-items-center my-4">
           
          </div>

          <!-- Email input -->
          <div class="form-group mb-1">
            <input type="text" id="form3Example3" name="username"  class="form-control form-control-lg <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
              placeholder="Username" value="" />
              <span class="invalid-feedback"><?php echo $username_err; ?></span>
            <label class="form-label" for="form3Example3">Username</label>
          </div>

          <!-- Password input -->
          <div class="form-group mb-1">
            <input type="password" id="form3Example4" name="password" class="form-control form-control-lg <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>"
              placeholder="Password" />
              <span class="invalid-feedback"><?php echo $password_err; ?></span>
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" onchange="myFunction()" value="" id="form2Example3" />
              <label class="form-check-label fnt" for="form2Example3">
                See Password
              </label>
            </div>
           
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
             <!-- Google reCAPTCHA box -->
    <div class="g-recaptcha" data-sitekey="6LeaiMEnAAAAAGtsQm907I2AJp1RSR-HDJtSQpjV" style="transform: scale(0.77); 
-webkit-transform: scale(0.77); transform-origin: 0 0;
-webkit-transform-origin: 0 0;" data-theme="light"></div>
            <button type="submit" name="submit" class="btn btn-danger btn-lg fnt"
              style="padding-left: 2.5rem; padding-right: 2.5rem;"  value="Login" id="submit">Login</button>
              
            <p class="small fw-bold mt-2 pt-1 mb-0 fnt">Don't have an account? <a href="register.php"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
 
</section>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        function myFunction() {
    var x = document.getElementById("form3Example4");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
    </script>

</body>

</html>