<?php
	include "db.php";
	session_start();
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
			
			.deconstructed {
  position: relative;
  margin: auto;
  height: 0.71em;
  color: transparent;
  font-family: 'Cambay', sans-serif;
  font-size: 3vw;
  font-weight: 700;
  letter-spacing: -0.02em;
  line-height: 1.03em;
}

.deconstructed > div {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  color: #ffff64;
  pointer-events: none;
}

.deconstructed > div:nth-child(1) {
  -webkit-mask-image: linear-gradient(black 25%, transparent 25%);
  mask-image: linear-gradient(black 25%, transparent 25%);
  animation: deconstructed1 5s infinite;
}

.deconstructed > div:nth-child(2) {
  -webkit-mask-image: linear-gradient(transparent 25%, black 25%, black 50%, transparent 50%);
  mask-image: linear-gradient(transparent 25%, black 25%, black 50%, transparent 50%);
  animation: deconstructed2 5s infinite;
}

.deconstructed > div:nth-child(3) {
   -webkit-mask-image: linear-gradient(transparent 50%, black 50%, black 75%, transparent 75%);
  mask-image: linear-gradient(transparent 50%, black 50%, black 75%, transparent 75%);
  animation: deconstructed3 5s infinite;
}

.deconstructed > div:nth-child(4) {
   -webkit-mask-image: linear-gradient(transparent 75%, black 75%);
  mask-image: linear-gradient(transparent 75%, black 75%);
  animation: deconstructed4 5s infinite;
}

@keyframes deconstructed1 {
  0% {
    transform: translateX(100%);
  }
  26% {
    transform: translateX(0%);
  }
  83% {
    transform: translateX(-0.1%);
  }
  100% {
    transform: translateX(-120%);
  }
}

@keyframes deconstructed2 {
  0% {
    transform: translateX(100%);
  }
  24% {
    transform: translateX(0.5%);
  }
  82% {
    transform: translateX(-0.2%);
  }
  100% {
    transform: translateX(-125%);
  }
}

@keyframes deconstructed3 {
  0% {
    transform: translateX(100%);
  }
  22% {
    transform: translateX(0%);
  }
  81% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-130%);
  }
}

@keyframes deconstructed4 {
  0% {
    transform: translateX(100%);
  }
  20% {
    transform: translateX(0%);
  }
  80% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-135%);
  }
}

		</style>

</head>

<body>


<div class="top-header" style="background:red;height:40px;">
	<div class="deconstructed" style="margin-left:250px;">
	
  Pintuma
  <div>Pintuma</div>
  <div>Pintuma</div>
  <div>Pintuma</div>
  <div>Pintuma</div>

	</div>
</div>
<div id="wrapper">
	<div id="header">
		<ul id="mainnav" style="background:red">
			<li ><a href="index.php">Home</a></li>
            <li class="current"><a href="signup.php" style="colore:#000000">SignUP</a></li>
            <li><a href="location.php">location</a></li>
            <li><a href="contact.php">Contact Us</a></li>
    	</ul>
      
	</div>
    <div id="content">
    	<div id="rotator">
		<?php
			if(isset($_POST['submit'])){
				$name=$_POST['name'];
				$email=$_POST['email'];
				$phone=$_POST['phone'];
				$pass=$_POST['password'];
				$selectemail="select * from user where email='$email'";
				$emailresult=$connect->query($selectemail);
				$emailcount=mysqli_num_rows($emailresult);
				
				if($emailcount==1){
					echo "<h1 style='background:red;padding:10px;'>"."Email Already Exists!"."</h1>";
				}
				else{
				$query="insert into user (name,email,password,phone) values('$name','$email','$pass','$phone')";
				$result=$connect->query($query);
				
				echo "<h1 style='background:green;padding:10px;'>"."Registration Successfull!!"."<a href='index.php'>"."Go to Login Page"."</a>"."</h1>";
			}
			}
		?>
		<form action="" method="post" style="background:red;">
		<center>
				<table border="1" width="600" height="200">
					<tr>
						<th>Your Name</th>
						<th><input type="text" name="name" required /></th>
					</tr>
					<tr>
						<th>Your Email</th>
						<th><input type="email" name="email" required /></th>
					</tr>
					<tr>
						<th>Your Password</th>
						<th><input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required /></th>
					</tr>
					<tr>
						<th>Your Phone</th>
						<th><input type="text" name="phone" value="8801" minlength="13" maxlength="13" required /></th>
					</tr>
					
						<th colspan="2">
							
								<input type="submit" name="submit" value="Submit">
							</form>
						</th>
					</tr>
				</table>
		</center>
			  
        </div>

    </div>
   

	<div id="footer">
	<h4>+880178525652&bull; <a href="contact-us.php">Kamal Atarktuk,Avenue  </a></h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 10:00 am - 8:00 pm</p>
	<p>&copy; Copyright 2018 PINTUMA travels | All Rights Reserved <br /></p>
</div>
</div>
</body>
</html>
