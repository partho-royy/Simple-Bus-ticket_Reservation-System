<?php
	include('../db.php');
	
	$sid=$_GET['sid'];
	$date=$_GET['date'];
	$tripid=$_GET['tripid'];
	$id=$_GET['id'];
	
	$query="Update reservation set status=1 where sid='$sid' and date='$date' and tripid='$tripid'";
	$result=$connect->query($query);
	$uquery="update history set status=1 where id='$id'";
	$uresult=$connect->query($uquery);
	
		//email handler

			$email_query="select * from user where id='$sid'";
			$email_result=$connect->query($email_query)->fetch_assoc();
			$email=$email_result['email'];
			$name=$email_result['name'];
			
				 $to='$email';
				$subject='Ticket Booking Confirm';
				$message="Hello". $name.", You Have A new Query From Pintuma"."\n"."Your Ticket is Confirmed"."\n";
				$headers='From :' . 'admin@gmail.com';
				
				mail($to,$subject,$message,$headers);
					
			
	header('location:dashboard.php');
	

?>