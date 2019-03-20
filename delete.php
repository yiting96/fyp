<?php
include_once("db.php");
$query = "DELETE from students where id='".$_GET['del_id']."'";
$result = mysqli_query($con, $query) or die($query);
header ("Location: search.php");
?>