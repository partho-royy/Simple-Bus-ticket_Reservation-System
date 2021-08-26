<?php
	session_start();

	require "db.php";


	$login = $_POST['username'];
	$password = $_POST['password'];

	$qry="SELECT * FROM admin WHERE username='$login' AND password='$password'";
	$result=mysqli_query($connect,$qry);
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['username'];
			session_write_close();
			header("location: admin/dashboard.php");
			exit();
		}else {
			header("location: index.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>
