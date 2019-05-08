
<?php
include("config.php");
$db = db_connect();
include("session.php");
$result = mysqli_query($mysqli, "SELECT * FROM examinationresult ORDER BY id DESC"); // using mysqli_query instead
$matricnumber=$_REQUEST['matricnumber'];
$query = "SELECT * from examinationresult where matricnumber='".$matricnumber."'"; 
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
    <title>Result</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
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
                        <!-- Logo icon -->
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                            
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
                        <h4 class="page-title">Student Marks</h4>
                        
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0"></h5>
								<button style="border-radius: 8px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#mediumModal">Add New Data</button>
                            </div>
                            <table class="table">
                                  <thead>
								     
                                    <tr>
												<th>Course Name</th>
												<th>Course Code</th>
												<th>test</th>
                                                <th>quiz</th>
                                                <th>Assignment (COGNITIVE)</th>
												<th>Lab (PSYCHOMOTOR)</th>
                                                <th>Project (AFFECTIVE)</th>
                                                <th>Project (COGNITIVE)</th>
                                                <th>Project (PSYCHOMOTOR)</th>
												<th>Total Marks</th>
                                    </tr>
                                  </thead>
                                  <tbody>
								  <?php  	  
									 $qlist = "SELECT * FROM examinationresult WHERE matricnumber='".$_GET['matricnumber']."'"; 
									$reslist = $db->query($qlist);
									
									while($rowlist = $reslist->fetch_assoc()) {        
									echo "<tr>";
									
									echo "<td style='width:10%' align='center'>".$rowlist['coursename']."</td>";
									echo "<td style='width:10%' align='center'>".$rowlist['coursecode']."</td>";
									echo "<td style='width:10%' align='center'>".$rowlist['test']."</td>";
									echo "<td style='width:10%' align='center'>".$rowlist['quiz']."</td>";
									echo "<td style='width:10%' align='center'>".$rowlist['assignment']."</td>"; 
									echo "<td style='width:10%' align='center'>".$rowlist['lab']."</td>";   									
									echo "<td style='width:10%' align='center'>".$rowlist['projectA']."</td>";
									echo "<td style='width:10%' align='center'>".$rowlist['projectC']."</td>";
									echo "<td style='width:10%' align='center'>".$rowlist['projectP']."</td>";
									echo "<td style='width:10%' align='center'>".$rowlist['sum']."</td>";
								}
								?>
 
  

                                   
                                  </tbody>
                            </table>
                        </div>
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
		 <form class="form-inline"  method="post" enctype="multipart/form-data" >					
				<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Add Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                               <div class="card-body">
                                <table class="table" width="25%" border="0">

                                    <tbody>
									<tr>
                                             <th scope="col">Course Name</th>
                                             <th scope="col" ><input class="form-control" maxlength="50" type="text" name="coursename"  required></th>
                                        
                                        </tr>
										<tr>
                                             <th scope="col">Course Code</th>
                                             <th scope="col" ><input class="form-control" maxlength="8" type="text" name="coursecode"  required></th>
                                        
                                        </tr>
                                        <tr>
                                             <th scope="col">Test</th>
                                             <th scope="col" ><input class="form-control" maxlength="2" type="text" name="test"  required></th>
                                        
                                        </tr>
										
										<tr>
                                             <th scope="col">Quiz</th>
                                             <th scope="col" ><input class="form-control" maxlength="2" type="text" name="quiz" required></th>
                                        
                                        </tr>
										
										<tr>
                                             <th scope="col">Assignment (COGNITIVE)</th>
                                             <th scope="col" ><input class="form-control" maxlength="2" type="text" name="assignment" required></th>
                                        
                                        </tr>
										<tr>
                                             <th scope="col">Lab (PSYCHOMOTOR)</th>
                                             <th scope="col" ><input class="form-control" maxlength="2" type="text" name="lab" required></th>
                                        
                                        </tr>
										<tr>
                                             <th scope="col">Project (AFFECTIVE)</th>
                                             <th scope="col" ><input class="form-control" maxlength="2" type="text" name="projectA" required></th>
                                        
                                        </tr>
										<tr>
                                             <th scope="col">Project (COGNITIVE)</th>
                                             <th scope="col" ><input class="form-control" maxlength="2" type="text" name="projectC" required></th>
                                        
                                        </tr>
										<tr>
                                             <th scope="col">Project (PSYCHOMOTOR)</th>
                                             <th scope="col" ><input class="form-control" maxlength="2" type="text" name="projectP" required></th>
                                        
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                            <div class="modal-footer">
							<input style="border-radius: 8px;" type="submit" class="btn btn-success" value="Add" name="Submit"/>
							<input style="border-radius: 8px;" type="submit" class="btn btn-primary" value="Back" name="Back"/><a href="years.php"></a>
							
                            </div>
                       </div>
                    </div>
                </div>
				</form>
				
<?php
//including the database connection file
include_once("config.php");
$db = db_connect();

$qlist = "SELECT * from examinationresult where matricnumber='".$matricnumber."'"; 
$reslist = $db->query($qlist);

 while($rowlist = $reslist->fetch_assoc()) {        
           $matricnumber=$rowlist["matricnumber"];
        }

if(isset($_POST['Submit'])) { 
   
	$coursename = $_POST['coursename'];
    $coursecode = $_POST['coursecode'];
    $test = $_POST['test'];
    $quiz = $_POST['quiz'];
	$assignment = $_POST['assignment'];
	$lab = $_POST['lab'];
	$projectA = $_POST['projectA'];
	$projectC = $_POST['projectC'];
	$projectP = $_POST['projectP'];
				
	$sum=$test+$quiz+$assignment+$lab+$projectA+$projectC+$projectP;		 			


	/*Prevent sql injection*/
	$coursename = stripcslashes($coursename);
	$coursecode = stripcslashes($coursecode);
	$test = stripcslashes($test);
	$quiz = stripcslashes($quiz);
	$assignment = stripcslashes($assignment);
	$lab = stripcslashes($lab);
	$projectA = stripcslashes($projectA);
	$projectC = stripcslashes($projectC);
	$projectP = stripcslashes($projectP);
	
	
	 // Connect to server and select database.
    $link = mysqli_connect("localhost", "root", "")or die("cannot connect server "); 
    mysqli_select_db($link, "fyp")or die("cannot select DB");

	$sql = "INSERT INTO examinationresult(matricnumber,coursename,coursecode,test,quiz,assignment,lab,projectA,projectC,projectP,sum)VALUES('$matricnumber','$coursename','$coursecode','$test','$quiz','$assignment','$lab','$projectA','$projectC','$projectP','$sum')";

  $result = mysqli_query($link, $sql)or die("Failed to query database".mysqli_error($link));
$message = "Insert Successfully.";
		echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script> location.href='years.php?matricnumber=".$_GET['matricnumber']."'; </script>";
		exit;
}	?>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">

            </footer>
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
    <!-- this page js -->
    <script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

</body>

</html>