<?php
  session_start();

  include("simple-php-captcha.php");
  $_SESSION['captcha'] = simple_php_captcha();
  error_reporting(0);
		$day  = date("l");
$current_date = date("Y-m-d");
date_default_timezone_set("Asia/Kuala_Lumpur");
$current_time = date("H:i");
echo "$day&nbsp&nbsp$current_date&nbsp&nbsp$current_time"; 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Login</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
var login_attempts=3;
function check_form()
{
 var username=document.getElementById("username").value;
 var password=document.getElementById("password").value;
 if($username == $table_users && $password == $table_password)
 {
  alert("SuccessFully Logged In");
  document.getElementById("username").value="";
  document.getElementById("password").value="";
 }
 else
 {
  if(login_attempts==0)
  {
   alert("No Login Attempts Available");
  }
  else
  {
   login_attempts=login_attempts-1;
   alert("Login Failed Now Only "+login_attempts+" Login Attempts Available");
   if(login_attempts==0)
   {
    document.getElementById("username").disabled=true;
    document.getElementById("password").disabled=true;
    document.getElementById("form1").disabled=true;
   }
  }
 }
 
 return false;
}	
</script>
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
                <div id="loginform">
                    
                    <!-- Form -->
                    <form id ="form1" method="POST" class="form-horizontal m-t-20" action="checklogin.php" onsubmit="return check_form();">
                        
                               
                            
								<div class="row p-b-30">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    
                                    <input type="text" class="form-control form-control-lg" name="username" placeholder="Username" required>
                                </div>
								 <div class="input-group mb-3">
                                    
                                    <input type="password" class="form-control form-control-lg" name="rfidtag" placeholder="rfidtag" required>
                                </div>
                                <div class="input-group mb-3">
                                    
                                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required>
                                </div>
                                    <div class="input-group mb-3">
                                    <input type="text" class="form-control form-control-lg" name="captcha" placeholder="Captcha" required>
                                    <?php echo '<img src="'.$_SESSION['captcha']['image_src'].'"alt="CAPTCHA code">';?><br>
									
                                </div>
                            </div>
                        </div>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <button class="btn btn-info" type="button" ><a href="register.php"><i class="m-r-10 mdi mdi-account-multiple-plus"></i>Register</button>
                                        <button class="btn btn-success float-right" name ="login" type="submit">Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>

    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $('#to-login').click(function(){
        
        $("#recoverform").hide();
        $("#loginform").fadeIn();
    });
    </script>

</body>
</html>