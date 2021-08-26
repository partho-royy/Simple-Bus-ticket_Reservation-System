<?php
	session_start();
	if(!isset($_SESSION['user_success'])){
		header('location:index.php');
	}
?>
<?php
	include "db.php";

?>
<?php
	if(isset($_POST['submit'])){
		$from=$_POST['from'];
		$to=$_POST['to'];
		$date=$_POST['date'];
		
		
		$_SESSION['from']=$from;
		$_SESSION['to']=$to;
		$_SESSION['date']=$date;
		header('location:selectset.php');
	}
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
              <ul>
                    <li class="show"><img src="xres/images/jb2/01.jpg" width="861" height="379"  alt="" /></li>
                    <li><img src="xres/images/jb2/02.jpg" width="861" height="379"  alt="" /></li>
                    <li><img src="xres/images/jb2/03.jpg" width="861" height="379"  alt="" /></li>
                    <li><img src="xres/images/jb2/04.jpg" width="861" height="379"  alt="" /></li>
              </ul>

			  <div id="logo" style="left: 600px; height: auto; top: 23px; width: 260px; position: absolute; z-index:4;">

					<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">Ticket Booking</h2>
					<div class="accordion-content" style="margin-bottom: 15px;">
						<form action="searchticket.php" method="post" style="margin-bottom:none;">
							<?php
								$tquery="select * from trip";
								$tresult=$connect->query($tquery);
							?>
						<span style="margin-right: 11px;">From:
							<select style="width: 191px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;" name="from">
							<?php if($tresult){?>
							<?php while($trow=$tresult->fetch_assoc()){?>
								<option value="<?php echo $trow['fromm'];?>"><?php echo $trow['fromm'];?></option>
							<?php }}?>
							</select>
						</span><br><br>
						<span style="margin-right: 11px;">To:
						<?php
								$ttquery="select * from trip";
								$ttresult=$connect->query($ttquery);
							?>
							<select style="width: 191px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;" name="to">
							<?php if($ttresult){?>
							<?php while($ttrow=$ttresult->fetch_assoc()){?>
								<option value="<?php echo $ttrow['too'];?>"><?php echo $ttrow['too'];?></option>
							<?php }}?>
							</select>
						</span><br><br>
						<span style="margin-right: 11px;">Date:
							<input type="date" name="date" style="width: 191px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;">
						</span><br><br>
						
						<input type="submit" name="submit" id="submit" value="Search Ticket" style="height: 34px; margin-left: 15px; width: 191px; padding: 5px; border: 3px double rgb(204, 204, 204);" />
						</form>
					</div>
				</div>
        </div>

    </div>
   
</div>
</body>
</html>
