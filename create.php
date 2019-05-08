<?php
include("session.php");
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/quill/dist/quill.snow.css">
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
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
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                         <a class="navbar-brand" href="index.html">
                        <p>Welcome <?php echo  $_SESSION['user'] ?>
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                            
                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>   
                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                       
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                       
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                      
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        
                                <a href="logout.php"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.html" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="search.php" aria-expanded="false"><i class="mdi mdi-account-search"></i><span class="hide-menu">Search</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="create.php" aria-expanded="false"><i class="mdi mdi-account-plus"></i><span class="hide-menu">Add</span></a></li>
                    	<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="logs.php" aria-expanded="false"><i class="m-r-10 mdi mdi-book-open"></i><span class="hide-menu">Audit Logs</span></a></li>
					</ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Add New Students</h4>
                       
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form class="form-horizontal" method="post">
							<?php
							require('db.php');
							$status = "";
							if(isset($_POST['new']) && $_POST['new']==1){
								$matricnumber =$_REQUEST['matricnumber'];
								$name = $_REQUEST['name'];
								$icnumber =$_REQUEST['icnumber'];
								$registrationstatus = $_REQUEST['registrationstatus'];   
								$dob =$_REQUEST['dob'];
								$gender = $_REQUEST['gender'];
								$religion =$_REQUEST['religion'];
								$nationality = $_REQUEST['nationality'];  
								$phonenumber =$_REQUEST['phonenumber'];
								$email = $_REQUEST['email'];
								$address =$_REQUEST['address'];
								$faculty = $_REQUEST['faculty'];   
								$programme =$_REQUEST['programme'];
								$dateofenroll = $_REQUEST['dateofenroll'];  
								$gpa = $_REQUEST['gpa'];  
								$ins_query="insert into students
								(`matricnumber`,`name`,`icnumber`,`registrationstatus`,`dob`,`gender`,`religion`,`nationality`,`phonenumber`,`email`,`address`,`faculty`,`programme`,`dateofenroll`,`gpa`)values
								('$matricnumber','$name','$icnumber','$registrationstatus','$dob','$gender','$religion','$nationality','$phonenumber','$email','$address','$faculty','$programme','$dateofenroll','$gpa')";
								mysqli_query($con,$ins_query)
								or die(mysql_error());
								echo "<script> alert('Create Successfully ');</script>";
							}
							?>
                                <div class="card-body">
                                    <h4 class="card-title">Personal Infomation</h4>
									<input type="hidden" name="new" value="1" />
									<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
                                    <div class="form-group row">
                                        <label for="matricnumber" class="col-sm-2 text-right control-label col-form-label">Matric Number</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="matricnumber" maxlength="8" class="form-control" placeholder="Matric Number Here">
                                        </div>
										<label for="name" class="col-sm-2 text-right control-label col-form-label">Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="name" maxlength="50" class="form-control" placeholder="Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="icnumber" class="col-sm-2 text-right control-label col-form-label">IC Number</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="icnumber" maxlength="12" class="form-control" placeholder="IC Number Here">
                                        </div>
										<label for="registrationstatus" class="col-sm-2 text-right control-label col-form-label">Registration Status</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="registrationstatus">
											<option value="" disabled selected>Enter Registration Status</option>
											<option value="active">Active</option>
											<option value="notactive">Not Active</option>
											</select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="dob" class="col-sm-2 text-right control-label col-form-label">Date Of Birth</label>
                                        <div class="col-sm-4">
                                            <input type="date" name="dob" class="form-control" placeholder="DOB Here">
                                        </div>
										<label for="gender" class="col-sm-2 text-right control-label col-form-label">First Name</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="gender">
											<option value="" disabled selected>Enter Gender</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
											</select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="religion" class="col-sm-2 text-right control-label col-form-label">Religion</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="religion" maxlength="20" class="form-control" placeholder="Religion Here">
                                        </div>
										<label for="nationality" class="col-sm-2 text-right control-label col-form-label">Nationality</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="nationality" maxlength="40" class="form-control" placeholder="Nationality Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phonenumber" class="col-sm-2 text-right control-label col-form-label">Phone Number</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="phonenumber" maxlength="12" class="form-control" placeholder="Phone Number Here">
                                        </div>
										<label for="email" class="col-sm-2 text-right control-label col-form-label">Email</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="email" maxlength="30" class="form-control" placeholder="Email Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="faculty" class="col-sm-2 text-right control-label col-form-label">Faculty</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="faculty" maxlength="50" class="form-control" placeholder="Faculty Here">
                                        </div>
										<label for="programme" class="col-sm-2 text-right control-label col-form-label">Programme</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="programme" maxlength="50" class="form-control" placeholder="Programme Here">
                                        </div>
                                    </div>
									 <div class="form-group row">
                                        <label for="dateofenroll" class="col-sm-2 text-right control-label col-form-label">Date of Enroll</label>
                                        <div class="col-sm-4">
                                            <input type="date" name="dateofenroll" class="form-control" placeholder="Date of Enroll Here">
                                        </div>										
                                    </div>
									 <div class="form-group row">
                                        <label for="address" class="col-sm-2 text-right control-label col-form-label">Address</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="address" maxlength="296" class="form-control" placeholder="Address Here">
                                        </div>
                                    </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <input name="submit" type="submit" value="Submit" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                        
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="dist/js/pages/mask/mask.init.js"></script>
    <script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/libs/quill/dist/quill.min.js"></script>
    
</body>

</html>