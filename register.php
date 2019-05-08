<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Registration</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
                <div>
                    
                    <!-- Form -->
                    <form class="form-horizontal m-t-20" action="register.php" method="post">
                        <div class="row p-b-30">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" maxlength="50" name="username" placeholder="Username" required>
                                </div>
                                <!-- password -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon2"></span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg" maxlength="50" name="password" placeholder="Password" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-info text-white" id="basic-addon2"></span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg" maxlength="50" name="repeatpass" placeholder=" Confirm Password" required>
                                </div>
								 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white" id="basic-addon2"></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" pattern="\d{10}" maxlength="10" name="rfidtag" placeholder="RFID Tag" required>
                                </div>
                            </div>
                        </div>
                         <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <button class="btn btn-info" type="button" ><a href="login.php"><i class="m-r-10 mdi mdi-lock-open-outline"></i>Login</button>
                                        <button class="btn btn-success float-right" name ="register" type="submit">Register</button>
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
    </script>
</body>

</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$username = mysql_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$repeatpass = mysql_real_escape_string($_POST['repeatpass']);
$rfidtag = mysql_real_escape_string($_POST['rfidtag']);
$bool=true;

mysql_connect("localhost","root","")or die(mysql_error());//Connect to server
mysql_select_db("fyp")or die("Cannot connect to database");//Connect to database
$query=mysql_query("Select*from users");//Query the users table
while($row=mysql_fetch_array($query))//Display all rows from query
{
$table_users=$row['username'];//the first username row is passed on to $table_users, and so on until the query is finished
if($username==$table_users)//check if there are any matching fields
{
$bool=false;//sets bool to false
Print'<script>alert("Username has been taken!");</script>';//Prompts the user
Print'<script>window.location.assign("register.php");</script>';//redirects to register.php
}

if(!preg_match('/(?=.*[a-z])(?=.*[0-9])/', $password)) 
{ 
$bool=false;
Print'<script>alert("password should contain alphanumeric");</script>';
Print'<script>window.location.assign("register.php");</script>';    
}
if(!preg_match('/[A-Z]/', $password)) 
{ 
$bool=false;
Print'<script>alert("password should contain capital letter");</script>';
Print'<script>window.location.assign("register.php");</script>';    
}

if(strlen($username) < 6)
{
$bool=false;
Print'<script>alert("Username is too short");</script>';
Print'<script>window.location.assign("register.php");</script>';      
}
if ($password != $repeatpass)
{
$bool=false;
Print'<script>alert("Error... Passwords do not match");</script>';
Print'<script>window.location.assign("register.php");</script>';

}}
if (strlen($password) < 8)
{
$bool=false;
Print'<script>alert("Password need to contain at least 8 character");</script>';
Print'<script>window.location.assign("register.php");</script>';
}
if (strlen($password) > 16)
{
$bool=false;
Print'<script>alert("Password is too long");</script>';
Print'<script>window.location.assign("register.php");</script>';
}
if($bool)//checks if bool is true
{
$encrypted_password=hash('sha1',$password);
mysql_query("INSERT INTO users(username,password,rfidtag)VALUES('$username','$encrypted_password','$rfidtag')");//inserts the value to table users
Print'<script>alert("Successfully Registered!");</script>';//Prompts the user
Print'<script>window.location.assign("login.php");</script>';//redirects to register.php
}}?>
