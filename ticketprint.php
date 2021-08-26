
<?php
	include('db.php');
	session_start();
	
	$id=$_SESSION['sid'];
	$name=$_SESSION['name'];
	$phone=$_SESSION['phone'];
	$email=$_SESSION['email'];
	$date= date('Y-m-d');
	
	$query="select * from history where sid='$id' and status=1";
	$query_r=$connect->query($query);
	$arr_r=$connect->query($query)->fetch_assoc();
	$hdate=$arr_r['date'];
	$count=mysqli_num_rows($query_r);
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
	
			table tr td{
				background:green;
				color:white;
				text-align:center;
			}
			table tr td:hover{
				background:red;
			}
		</style>
</head>
	<body>
	<div id="wrapper">
	<div id="header">

      
	</div>
    <div id="content">
    	<div id="rotator">
		<center>
			<table border="1" height="300" width="400" style="margin-top:100px;color:white;background:red;">
				<tr>
					<th>Seat</th>
					<th>
						<?php
								if($count >= 1 && $date <= $hdate){
								$tquery="select * from reservation where sid='$id'";
								$tresult=$connect->query($tquery);
								$ttresult=$connect->query($tquery)->fetch_assoc();
								
								while($row=$tresult->fetch_assoc()){
									echo $row['seat'];
								}
							}
						?>
					</th>
				</tr>
				<tr>
					<th>Name</th>
					<th><?php echo $name;?></th>
				</tr>
				<tr>
					<th>Phone</th>
					<th><?php echo $phone;?></th>
				</tr><tr>
					<th>Email</th>
					<th><?php echo $email;?></th>
				</tr><tr>
					<th>Journey Date</th>
					<th><?php echo $hdate;?></th>
				</tr><tr>
					<th>Time</th>
					<th><?php echo $ttresult['time'];?></th>
				</tr><tr>
					<th></th>
					<th><button onclick="myFunction()">Print Tickete</button></th>
				</tr>
			</table>
		</center>
</div>

    </div>
    <div id="featured">
        <div id="items">
         
           
        </div>
    </div>

	<div id="footer">
	<h4>+880178525652&bull; <a href="contact-us.php">Kamal Atarktuk,Avenue  </a></h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 10:00 am - 8:00 pm</p>
	<p>&copy; Copyright 2018 PINTUMA travels | All Rights Reserved <br /></p>
</div>
</div>
</body>
<script>
function myFunction() {
  window.print();
}
</script>

</html>