<?php
include("db.php");
error_reporting(0);
include("session.php");
$matricnumber=$_REQUEST['matricnumber'];
$query = "SELECT * from examinationresult where matricnumber='".$matricnumber."'"; 
?>

<html>
<head>
<title>Scan RFID</title>
<style>
.color {
	align: center;
  background-color: lightgrey;
  width: 55%;
  border: 15px solid green;
  padding: 50px;
  margin-left: 15%;
}
</style>
</head>
<body>
<script>
function startTimer(duration, display) {
    var timer = duration, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

window.onload = function () {
    var tenSeconds = 9 * 1,
        display = document.querySelector('#time');
    startTimer(tenSeconds, display);
};
</script>
<form action="" method="POST">
 <a href="search.php" class="modal__close">&times;</a>
<?php
 
//Set Refresh header using PHP.
header( "refresh:10;url=search.php" );
 
//Print out some content for example purposes.
echo '<span id="time">00:10</span>';
?>
<div class="color">
<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
												<div class="modal-body">
												   <div class="card-body">
													<table class="table" width="25%" border="0">
													 <input name="matricnumber" type="hidden" value="<?php  echo $_GET['matricnumber'];?>" />
														 <h2 class="modal__heading">Please Scan Your RFID Card before proceed to edit student's mark</h2>
      <center><h4 class="modal__paragraph">RFID TAG 2</h4>
	  <?php echo $_SESSION['user'] ?>
      <p><input type="text" name="rfidtag" placeholder="" maxlength="10" required /></center></p>
      <br>
      <center><p><input type="hidden" name="submit" value="Submit"/></p></center>
										
										</div>
									</div>
								</div>
							</div>
							
</div>
</div>
</form>


<?php
if (isset($_POST['submit'])){
        // removes backslashes
  $rfidtag=$_POST['rfidtag'];
  //Checking is user existing in the database or not
  $query = "SELECT * FROM `users` WHERE rfidtag='$rfidtag'";
  $matricnumber=$_POST['matricnumber'];
  $query1 = "SELECT * FROM `examinationresult` WHERE matrinumber='$matricnumber'";
  $result = mysqli_query($con,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
       
	   if($rows==1){
      while($row = mysqli_fetch_array($result)){
         if ($rfidtag == $_SESSION['SESS_RFID']) {
         
          // Redirect user to admin.php
		   echo "<script> location.href='years.php?matricnumber=".$_GET['matricnumber']."'; </script>";
        }
        else{
         
          // Redirect user to homepage.php
          header("Location: popup1.php");
        }
      }
    }
    else{
      // Redirect user if the username/password is invalid
      echo "Wrong RFID";
    }
}
?>    