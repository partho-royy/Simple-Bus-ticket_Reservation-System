<?php include "db.php";?>
<?php
	$gid=$_GET['id'];
	$query="delete from reservation where id='$gid'";
	$result=$connect->query($query);
	header('location:selectset.php');
?>