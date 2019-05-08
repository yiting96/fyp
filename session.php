<!-- Session timeout start-->
<?php
session_start();
//authentication session, user need to login to stay on secure page
if($_SESSION['user'] ){
}
else{
header("location:login.php");
}
$user=$_SESSION['user'] ;

$inactive = 120; //set expired session time

if(isset($_SESSION['timeout']) ) {
  $session_life = time() - $_SESSION['timeout'];
  if($session_life > $inactive) { 
    header("Location: logout.php"); 
  }
}

$_SESSION['timeout'] = time();
?>
<!---Session timeout end--->
