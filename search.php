			<?php include('db.php');?>
<?php

	session_start();


	unset($_SESSION['SESS_MEMBER_ID']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Pintuma Search</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<script type="text/javascript" src="xres/js/saslideshow.js"></script>
<script type="text/javascript" src="xres/js/slideshow.js"></script>
<script src="js/jquery-1.5.min.js" type="text/javascript" charset="utf-8"></script>
<script src="vallenato/vallenato.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="vallenato/vallenato.css" type="text/css" media="screen" charset="utf-8">


		<style>
			.logo{
				margin-left:-650px;
			}
			.table{
				background:black;
				height:300px;
				margin-bottom:10px;
				margin-top:150px;
			}
			input[type=text]{
				width:800px;
				height:30px;
			}
			input[type=submit]{

				height:30px;
			}

		</style>

</head>

<body>
	<h1 style="font-family:Chalkduster, fantasy;color:blue;font-size:45px;margin-left:-550px;margin-top:45px;"><img src="logo.png" height="150px" width="300px"></h1>

<div id="wrapper">
	<div id="header">
    <h1><a href="index.php"><img src="logo.png" class="logo" alt="Pintuma" /></a></h1>
        <ul id="mainnav">
			<li><a href="index.php">Home</a></li>


            <li><a href="routes.php">Routes</a></li>
            <li><a href="location.php">location</a></li>
            <li><a href="contact.php">Contact Us</a></li>
			      <li  class="current"><a href="Search.php">Search Seat</a></li>
    	</ul>
	</div>
	<div class="table">
	<?php
		if(isset($_POST['submit'])){
			$pin=$_POST['pin'];


		$select="select * from  reserve where transactionnum ='$pin'";
		$result=$connect->query($select)->fetch_assoc();
		}
	?>
				<form method="POST">
					<input type="text" name="pin" placeholder="Enter your transaction number" required><br>
					<input type="submit" name="submit" style="color:#ffffff;" Value="Search">
				</form>
	<table  border="1" width="400" align="center" backgroundColor = "#FFFFFF">

		<tr>
			<th>Journey Date</th>
			<th>Total Seat</th>
			<th>Seat Number</th>
		</tr>
		<tr>
			<td>.<?php echo $result['date'];?></td>
			<td>.<?php echo $result['seat_reserve'];?></td>
			<td>.<?php echo $result['seat'];?></td>
		</tr>
	</table>
	</div>
    <div id="featured">
        <div id="items">
            <div class="item"> <a href="main-course.php"><img src="xres/images/01_featured.jpg" alt="" /></a>
            <h3><a href="main-course.php">Specials Offers</a></h3>
            <p><a href="#"><strong>Desh Travels</strong><br />
			Come in and experience<br /> Our
			new Bus Type<br /> specials today!</a></p>
            </div>
            <div class="item"> <a href="lodging.php"><img src="xres/images/02_featured.jpg" alt="" /></a>
            <h3><a href="lodging.php">New Route</a></h3>
            <p><a href="lodging.php"><strong>From Dhaka to Chittagong</strong><br />
			Spend a relaxing time in our bus, steeped in history. </a></p>
			</div>
			<div class="item" style="width: 860px;">
				<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FFlorida-Bus%2F224961217554604%3Fref%3Dts%26fref%3Dts&amp;width=800&amp;height=290&amp;show_faces=true&amp;colorscheme=dark&amp;stream=false&amp;border_color&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:800px; height:290px;" allowTransparency="true"></iframe>
			</div>
        </div>
    </div>

	<div id="footer">
	<h4>+8801717359437&bull; <a href="contact-us.php">Kamal Atarktuk,Avenue  </a></h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 10:00 am - 8:00 pm</p>

	<p>&copy; Copyright 2018 Pintuma travels | All Rights Reserved <br /></p>
</div>
</div>
</body>
</html>
