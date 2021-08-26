<?php
include('../db.php');
	$id=$_GET['id'];
	$query="delete from trip where id='$id'";
	$result=$connect->query($query);
	header('location:route.php');
?>