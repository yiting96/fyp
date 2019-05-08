<?php
require('db.php');
include("session.php");
$id=$_REQUEST['id'];
$query = "SELECT * from students where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
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
    <title>Edit Students Information</title>
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
                    <a class="navbar-brand" href="index.html">
                        <p>Welcome <?php echo  $_SESSION['user'] ?></p>
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
                        <h4 class="page-title">Edit Student Information</h4>
                        
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
                            <form class="form-horizontal" id="edit" method="post" action="">
							<?php
							$status = "";
							if(isset($_POST['new']) && $_POST['new']==1)
							{
								$id=$_REQUEST['id'];
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
							$update="update students set matricnumber='".$matricnumber."', name='".$name."', icnumber='".$icnumber."', registrationstatus='".$registrationstatus."',dob='".$dob."', gender='".$gender."',religion='".$religion."', nationality='".$nationality."',phonenumber='".$phonenumber."', email='".$email."',address='".$address."', faculty='".$faculty."',programme='".$programme."' where id='".$id."'";
							mysqli_query($con, $update) or die(mysqli_error());
							$status = "Record Updated Successfully. </br></br>
							<a href='search.php'>View Updated Record</a>";
							echo '<p style="color:#FF0000;">'.$status.'</p>';}
							?>
                                <div class="card-body">
                                    <h4 class="card-title">Personal Infomation</h4>
									<input type="hidden" name="new" value="1" />
									<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
                                    <div class="form-group row">
                                        <label for="matricnumber" class="col-sm-2 text-right control-label col-form-label">Matric Number</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="matricnumber" placeholder="Matric Number Here" required value="<?php echo $row['matricnumber'];?>" />
                                        </div>
										<label for="name" class="col-sm-2 text-right control-label col-form-label">Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="name" placeholder="Name Here" required value="<?php echo $row['name'];?>" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="icnumber" class="col-sm-2 text-right control-label col-form-label">IC Number</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="icnumber" placeholder="IC Number Here" required value="<?php echo $row['icnumber'];?>" />
                                        </div>
										<label for="registrationstatus" class="col-sm-2 text-right control-label col-form-label">Registration Status</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="registrationstatus" placeholder="Registration Status Here" required value="<?php echo $row['registrationstatus'];?>" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="dob" class="col-sm-2 text-right control-label col-form-label">Date Of Birth</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="dob" placeholder="DOB Here" required value="<?php echo $row['dob'];?>" />
                                        </div>
										<label for="gender" class="col-sm-2 text-right control-label col-form-label">First Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="gender" placeholder="Gender Here" required value="<?php echo $row['gender'];?>" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="religion" class="col-sm-2 text-right control-label col-form-label">Religion</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="religion" placeholder="Religion Here" required value="<?php echo $row['religion'];?>" />
                                        </div>
										<label for="nationality" class="col-sm-2 text-right control-label col-form-label">Nationality</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="nationality" placeholder="Nationality Here" required value="<?php echo $row['nationality'];?>" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phonenumber" class="col-sm-2 text-right control-label col-form-label">Phone Number</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="phonenumber" placeholder="Phone Number Here" required value="<?php echo $row['phonenumber'];?>" />
                                        </div>
										<label for="email" class="col-sm-2 text-right control-label col-form-label">Email</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="email" placeholder="Email Here" required value="<?php echo $row['email'];?>" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="faculty" class="col-sm-2 text-right control-label col-form-label">Faculty</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="faculty" placeholder="Faculty Here" required value="<?php echo $row['faculty'];?>" />
                                        </div>
										<label for="programme" class="col-sm-2 text-right control-label col-form-label">Programme</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="programme" placeholder="Programme Here" required value="<?php echo $row['programme'];?>" />
                                        </div>
                                    </div>
									 <div class="form-group row">
                                        <label for="dateofenroll" class="col-sm-2 text-right control-label col-form-label">Date of Enroll</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="dateofenroll" placeholder="Date of Enroll Here" required value="<?php echo $row['dateofenroll'];?>" />
                                        </div>
										<label for="gpa" class="col-sm-2 text-right control-label col-form-label">GPA</label>
                                        <div class="col-sm-4">
										 <a class="form-control"><?php echo $row['gpa'];?></a>
                                        </div>
                                    </div>
									 <div class="form-group row">
                                        <label for="address" class="col-sm-2 text-right control-label col-form-label">Address</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="address" placeholder="Address Here" required value="<?php echo $row['address'];?>" />
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