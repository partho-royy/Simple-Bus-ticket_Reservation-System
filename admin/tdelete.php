<?php
	include('../db.php');
	
	$sid=$_GET['sid'];
	$date=$_GET['date'];
	$tripid=$_GET['tripid'];
	$id=$_GET['id'];
	
	$query="delete from reservation where status='0' and sid='$sid' and date='$date' and tripid='$tripid'";
	$result=$connect->query($query);
	$uquery="delete from  history where sid='$sid'";
	$uresult=$connect->query($uquery);
	header('location:dashboard.php');
?>