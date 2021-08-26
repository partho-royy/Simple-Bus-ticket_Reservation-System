<?php include "db.php";?>
<?php
	$seat=$_GET['seat'];
	$fare=$_GET['fare'];
	$sid=$_GET['sid'];
	$date=$_GET['date'];
	$time=$_GET['time'];
	$tripid=$_GET['tripid'];
	
	$select="select * from reservation where seat='$seat' and date='$date' and tripid='$tripid'";
	$selectr=$connect->query($select);
	$count=mysqli_num_rows($selectr);
	
	if($count == 1){
		$aq="select * from reservation where seat='$seat' and date='$date' and tripid='$tripid' and status=1";
		$aqr=$connect->query($aq);
		$aqcount=mysqli_num_rows($aqcount);
		if($aqcount == 1){
			session_start();
			$_SESSION['booked']=true;
			header('location:selectset.php');
		}
		else{
			session_start();
			$_SESSION['review']=true;
			header('location:selectset.php');
		}
	}
	else{
	$query="insert into reservation (seat,fare,sid,status,date,time,tripid) values('$seat','$fare','$sid','0','$date','$time','$tripid')";
	$result=$connect->query($query);
	header('location:selectset.php');
	}
	
?>