
<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","root") 
            or die("cannot connected");
 
// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test",$conn);
*/
 
/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */
 
$databaseHost = 'localhost';
$databaseName = 'fyp';
$databaseUsername = 'root';
$databasePassword = '';
 
 $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
 define('databaseHost','localhost');
 define('databaseName','fyp');
 define('databaseUsername','root');
 define('databasePassword','');
 
 function db_connect(){
	 
$conn = new mysqli(databaseHost, databaseUsername, databasePassword, databaseName);
 return $conn; 
}
?>