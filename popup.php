<?php
include("db.php");
error_reporting(0);
?>

<html>
<head>
<title>Scan RFID</title>
 <style>
  *{
   margin: 0;
   padding: 0;
   box-sizing: border-box;
  }
  body{
   font-family: sans-serif;
  }
  a:link,
  a:visited{
   text-decoration: none;
  }
  .modal{
   background-color: rgba(0,0,0, .8);
   width:100%;
   height: 100vh;
   position: absolute;
   top: 0;
   left: 0;
   z-index: 10;
   opacity: 0;
   visibility: hidden;
   transition: all .5s;
  }
  .modal__content{
   width: 50%;
   height: 40%;
   background-color: #fff;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   padding: 2em;
   border-radius: 1em;
   opacity: 0;
   visibility: hidden;
   transition: all .5s;
  }
  #modal:target{
   opacity: 1;
   visibility: visible;
  }
  #modal:target .modal__content{
   opacity: 1;
   visibility: visible;
  }
  .modal__close{
   color: #363636;
   font-size: 2em;
   position: absolute;
   top: .5em;
   right: 1em;
  }
  .modal__heading{
   color: dodgerblue;
   margin-bottom: 1em;
  }
  .modal__paragraph{
    color: pink;
   line-height: 1.5em;
  }
  input {
  width: 50%;
  border: 2px solid red;
  border-radius: 4px;
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
 <div class="modal" id="modal">
    <div class="modal__content">
      <a href="search.php" class="modal__close">&times;</a>
	  
<?php
 
//Set Refresh header using PHP.
header( "refresh:10;url=search.php" );
 
//Print out some content for example purposes.
echo '<span id="time">00:10</span>';
?>

      <h2 class="modal__heading">Please Scan Your RFID Card before proceed to edit student's mark</h2>
      <center><h4 class="modal__paragraph">RFID TAG 1</h4>
      <p><input type="text" name="rfidtag" placeholder="" maxlength="10" required /></center></p>
      <br>
      <center><p><input type="hidden" name="submit" value="Submit"/></p></center>
    </div>
 </div>

</form>


<?php
if (isset($_POST['submit'])){
        // removes backslashes
  $rfidtag=$_POST['rfidtag'];
  //Checking is user existing in the database or not
  $query = "SELECT * FROM `users` WHERE rfidtag='$rfidtag'";
  $result = mysqli_query($con,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
        if($rows==1){
      while($row = mysqli_fetch_array($result)){
        if ($row['id'] == '1'){
          $_SESSION['rfidtag'] = $rfidtag;
          // Redirect user to admin.php
          header("Location: popup1.php");
        }
        else{
          $_SESSION['rfidtag'] = $rfidtag;
          // Redirect user to homepage.php
          header("Location: popup.php");
        }
      }
    }
    else{
      // Redirect user if the username/password is invalid
      echo "Wrong RFID";
    }
}
?>