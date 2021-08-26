<?php
	include "db.php";
	session_start();
	if(!isset($_SESSION['user_success'])){
		header('location:index.php');
	}
	$sid=$_SESSION['sid'];
	$name=$_SESSION['name'];
	$email=$_SESSION['email'];
	$phone=$_SESSION['phone'];
	$from=$_SESSION['from'];
	$to=$_SESSION['to'];
	$sdate=$_GET['date'];
	$tripid=$_GET['tripid'];
	
	$query="select * from  reservation where sid='$sid' and date='$sdate' and status='0'";
	$result=$connect->query($query);
	$array=$connect->query($query)->fetch_assoc();
	$date=$array['date'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Pintuma</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<script type="text/javascript" src="xres/js/saslideshow.js"></script>
<script type="text/javascript" src="xres/js/slideshow.js"></script>
<script src="js/jquery-1.5.min.js" type="text/javascript" charset="utf-8"></script>
<script src="vallenato/vallenato.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="vallenato/vallenato.css" type="text/css" media="screen" charset="utf-8">

		<script type="text/javascript">
		$("#slideshow > div:gt(0)").hide();

		setInterval(function() {
		  $('#slideshow > div:first')
			.fadeOut(1000)
			.next()
			.fadeIn(1000)
			.end()
			.appendTo('#slideshow');
		},  3000);
	</script>
		<script type="text/javascript" src="js/datepicker.js"></script>
        <link href="css/demo.css"       rel="stylesheet" type="text/css" />
        <link href="css/datepicker.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript">


		function makeTwoChars(inp) {
				return String(inp).length < 2 ? "0" + inp : inp;
		}

		function initialiseInputs() {
				document.getElementById("sd").value = "";
				document.getElementById("ed").value = "";

				datePickerController.addEvent(document.getElementById("sd"), "change", setReservationDates);
		}

		var initAttempts = 0;

		function setReservationDates(e) {

				try {
						var sd = datePickerController.getDatePicker("sd");
						var ed = datePickerController.getDatePicker("ed");
				} catch (err) {
						if(initAttempts++ < 10) setTimeout("setReservationDates()", 50);
						return;
				}

				var dt = datePickerController.dateFormat(this.value, sd.format.charAt(0) == "m");

				if(dt == 0) return;

				var edv = datePickerController.dateFormat(document.getElementById("ed").value, ed.format.charAt(0) == "m");

				ed.setRangeLow( dt );

				if(edv < dt) {
						document.getElementById("ed").value = "";
				}
		}

		function removeInputEvents() {
				datePickerController.removeEvent(document.getElementById("sd"), "change", setReservationDates);
		}

		datePickerController.addEvent(window, 'load', initialiseInputs);
		datePickerController.addEvent(window, 'unload', removeInputEvents);

		</script>
		<style>
			.logo{
				margin-left:-650px;
			}
		input[type=text]{
			width:600px;
		}
		</style>

</head>

<body>



<div id="wrapper">
	<div id="header">

        <ul id="mainnav" style="background:red">
			<li><a href="index.php">Home</a></li>
            <li><a href="ticketprint.php" style="colore:#000000" target="_blank">Ticket</a></li>
			   <li><a href="contact.php">Contact Us</a></li>
            <li><a href="logout.php" style="colore:#000000" target="_blank">Logout</a></li>
    	</ul>
	</div>
    <div id="content">
    	<div id="rotator">
		<center>
				<table border="1" width="600" height="200" style="background:red">
					<tr>
						<th>Your Name</th>
						<th><?php echo $name;?></th>
					</tr>
					<tr>
						<th>Your Email</th>
						<th><?php echo $email;?></th>
					</tr>
					<tr>
						<th>Your Phone</th>
						<th><?php echo $phone;?></th>
					</tr>
					<tr>
						<th>Journey From</th>
						<th><?php echo $from;?></th>
					</tr><tr>
						<th>Journey To</th>
						<th><?php echo $to;?></th>
					</tr>
					<tr>
						<th>Journey date & Time</th>
						<th><?php echo $array['date'];?>,<?php echo $array['time'];?></th>
					</tr>
					<tr>
						<th>Your Seat</th>
						<th>
						<?php if($result){?>
						<?php while($row=$result->fetch_assoc()){?>
							<span><?php echo $row['seat'];?></span>
						<?php }} ?>
						</th>
					</tr>	
					<tr>
						<th>Total Payable Amount</th>
						<th>
							<?php 
					$sql = "SELECT SUM(`fare`) AS total_working_hours FROM `reservation`where sid=$sid and status=0";
						  $result = mysqli_query($connect, $sql);
						  $row = mysqli_fetch_object($result) ;
						  $echo =$row->total_working_hours;
						  echo $echo;
					
					?>
						</th>
					</tr>
					<tr>
						<th colspan="2" style="">
							Payment Method-bkash.
							Bkash Number 01795236598
							<mark>(Please Pay With in five minutes after All It will be auto Cancel)</mark>
						</th>
					</tr>
					<tr>
						<th colspan="2">
							<form action="" method="POST">
								<input type="text" name="transaction" PlaceHolder="Enter your Transaction Id">
						
						</th>
						</tr>
						<tr>
						<th colspan="2">
							
								<input type="submit" name="submit" value="Submit">
							</form>
						</th>
					</tr>
					<tr>
						<th colspan="2">
							
								<?php
								if(isset($_POST['submit'])){
									$t=$_POST['transaction'];
									
									$tquery="insert into history (transaction,sid,tripid,date,amount) values('$t','$sid','$tripid','$date','$echo')";
									$tresult=$connect->query($tquery);
									echo "We will Verify Your transaction..Stay Connected!!";
								}
								?>
							</form>
						</th>
					</tr>
				</table>
	</center>
			  
        </div>

    </div>
    
</div>
</body>
</html>
