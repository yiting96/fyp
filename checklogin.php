<?php
  session_start();
  $username = mysql_real_escape_string($_POST['username']);
  $password = hash('sha1',$_POST['password']);
  $captcha = $_POST['captcha'];
  $rfidtag = $_POST['rfidtag'];
  
  $bool = true;
if($captcha == $_SESSION['captcha']['code'])
{
  mysql_connect("localhost", "root","") or die (mysql_error()); //Connect to server
  mysql_select_db("fyp") or die ("Cannot connect to database"); //Connect to database
  $query = mysql_query("Select * from users WHERE username='$username' and rfidtag='$rfidtag'"); //Query the users table
  $exists = mysql_num_rows($query); //checks if username exists
  $table_users="";
  $table_password="";
  
  if($exists>0) //IF there are no returning rows or no existing username
  {
	  
  while($row = mysql_fetch_assoc($query)) //display all rows from query
  {
  $table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
  $table_password = $row['password']; //the first password row is passed on to $table_password, and so on until the query is finished
  }
  if(($username == $table_users) && ($password == $table_password)) //checks if there are any matching fields
  {
  $_SESSION['SESS_RFID'] = $rfidtag;
  $_SESSION['user'] = $username; //set the username in a session. This serves as a global variable 
 $sql = "INSERT INTO userlog(username)VALUES('$username')";
 $link = mysqli_connect("localhost", "root", "");

mysqli_connect("localhost","root","")or die(mysqli_connect_error());
mysqli_select_db($link,"fyp") or die("Cannot connect to database");
$result =mysqli_query($link,$sql)or die("Failed to query database".mysqli_error($link));
 header("location: search.php");//redirects the user to the authenticated home page
  
  }
 
  else if(($password != $table_password) && ($username == $table_users))
  {
  Print'<script>alert("Incorrect Password!");</script>'; //prompts user
  Print'<script>window.location.assign("login.php");</script>'; //redirects to login.php
  }
  else if (($password == $table_password) && ($username != $table_users))
  {
  Print'<script>alert("Incorrect Answer!");</script>';
  Print'<script>window.location.assign("login.php");</script>'; //redirects to login.php
}
}
}
  else
  {
Print'<script>alert("Incorrect captcha! Code is case sensitive.");</script>';  
Print'<script>window.location.assign("login.php");</script>';//redirects to login.php
  }

?>