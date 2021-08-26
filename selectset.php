<?php 
	session_start();
	
	if(!isset($_SESSION['user_success'])){
		header('location:index.php');
	}
	$sid=$_SESSION['sid'];
?>
<?php include "db.php";?>
<?php
	$from=$_SESSION['from'];
	$to=$_SESSION['to'];
	$date=$_SESSION['date'];
	
	$fquery="select * from trip where fromm='$from' and too='$to'";
	$fresult=$connect->query($fquery)->fetch_assoc();
	$time=$fresult['time'];
	$fare=$fresult['fare'];
	$tripid=$fresult['id'];
?>

<?php
	$query="select * from seat";
	$result=$connect->query($query);
?>
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
				text-align:center;
			}
			table tr td a{
				display:block;
				text-decoration:none;
			}
			
			<?php
				$style_query="select * from reservation  where fare='$fare' and status='1' and date='$date' and tripid='$tripid'";
				$style_result=$connect->query($style_query);
			?>
			<?php if($style_result){?>
			<?php while($sr=$style_result->fetch_assoc()){ ?>
				
				<?php echo " .".$sr['seat'];?>{
					background:red;
					display:block;
					
					
				}
			<?php } ?>
			<?php } ?>
			<?php
				$style_query="select * from reservation  where fare='$fare' and status='0' and date='$date' and tripid='$tripid'";
				$style_result=$connect->query($style_query);
			?>
			<?php if($style_result){?>
			<?php while($sr=$style_result->fetch_assoc()){ ?>
				
				<?php echo " .".$sr['seat'];?>{
					background:yellow;
					color:red;
					display:block;
					
				}
			<?php } ?>
			<?php } ?>
			
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
			
	
		<table style="border:1px solid red;align:left;" width="200" height="500">
			<tr>
				<td>G</td>
				<td></td>
				<td></td>
				<td></td>
				<td>D</td>
			</tr>
			<?php if($result){?>
			<?php while($row=$result->fetch_assoc()){?>
			<tr>
				<td ><a class="<?php echo $row['one'];?>" href="ts.php?seat=<?php echo $row['one'];?>&& fare=<?php echo $fare ?> && sid=<?php echo $sid;?> && date=<?php echo $date;?> && time=<?php echo $time;?> && tripid=<?php echo $tripid;?>"><font color="white" style="display:block;"><?php echo $row['one'];?></font></a></td>
				<td><a class="<?php echo $row['two'];?>" href="ts.php?seat=<?php echo $row['two'];?>&& fare=<?php echo $fare ?> && sid=<?php echo $sid;?> && date=<?php echo $date;?> && time=<?php echo $time;?> && tripid=<?php echo $tripid;?>"><font color="white"><?php echo $row['two'];?></font></a></td>
				<td></td>
				<td><a class="<?php echo $row['three'];?>" href="ts.php?seat=<?php echo $row['three'];?>&& fare=<?php echo $fare ?> && sid=<?php echo $sid;?> && date=<?php echo $date;?> && time=<?php echo $time;?> && tripid=<?php echo $tripid;?>"><font color="white"><?php echo $row['three'];?></font></a></td>
				<td><a class="<?php echo $row['four'];?>" href="ts.php?seat=<?php echo $row['four'];?>&& fare=<?php echo $fare ?> && sid=<?php echo $sid;?> && date=<?php echo $date;?> && time=<?php echo $time;?> && tripid=<?php echo $tripid;?>"><font color="white"><?php echo $row['four'];?></font></a></td>
			</tr>
			<?php }} ?>
		</table>
			<?php 
				$seat_query="select * from reservation where sid=$sid and date='$date' and status=0";
				$seat_result=$connect->query($seat_query);
			?>
		
		<table style="float:right;margin-top:-400px;" width="300">
			<tr>
				<td style="background:red;"></td>
				<td colspan="2">Booked</td>
			</tr>
			<tr>
				<td style="background:Green;"></td>
				<td colspan="2">Avaiable</td>
			</tr>
			<tr>
				<td style="background:Yellow;"></td>
				<td colspan="2">Pending</td>
			</tr>
			<tr>
				<td colspan="3">Ticket Details</td>
			</tr>
			
			<tr>
				<td>Seat</td>
				<td>Fare</td>
				<td>Action</td>
			</tr>
			<?php if($seat_result){?>
			<?php while($srow=$seat_result->fetch_assoc()){?>
			<tr>
				<td><?php echo $srow['seat'];?></td>
				<td><?php echo $srow['fare'];?></td>
				<td><a href="delete.php?id=<?php echo $srow['id'];?>"><img src="delete.png" height="15" width="15"/></a></td>
			</tr>
			<?php }} ?>
			<tr >
				<td style="background:red">total</td>
				<td colspan="2" style="background:red"><?php 
					$sql = "SELECT SUM(`fare`) AS total_working_hours FROM `reservation`where sid=$sid and date='$date' and status=0";
  $result = mysqli_query($connect, $sql);
  $row = mysqli_fetch_object($result) ;
  echo $row->total_working_hours;
					
					?>
				</td>
			</tr>
			<tr>
				<td colspan="3"><a href="checkout.php?tripid=<?php echo $tripid;?> && date=<?php echo $date;?>">Check Out</a></td>
			</tr>
			<tr>
					<td colspan="3">Booked Seat List</td>
			</tr>
			<tr>
					<td colspan="3">
					<?php 
						$bquery="select * from  reservation where status='1' and tripid='$tripid' and date='$date'";
						$bresult=$connect->query($bquery);
					?>
						<?php if($bresult){?>
						<?php while($brow=$bresult->fetch_assoc()){?>
							<span><?php echo $brow['seat'];?></span>
						<?php } ?>
						<?php } ?>
					</td>
			</tr>
			<tr>
				<td>
				<?php
				if(isset($_SESSION['booked'])){
					echo "This Seat Is Booked";
				}
			?>
			</td>
			</tr>
		</table>
</div>

    </div>
    <div id="featured">
        <div id="items">
         
           
        </div>
    </div>

	
</div>
</body>
<?php unset ($_SESSION['booked']) ;?>
</html>
