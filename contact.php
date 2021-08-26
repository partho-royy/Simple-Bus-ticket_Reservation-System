<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Pintuma</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />
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
    <h1><!--<a href="index.php"><img src="xres/images/logo.png" class="logo" alt="Pintuma" /></a>--></h1>
        <ul id="mainnav" style="background:red">
			<li><a href="index.php">Home</a></li>
            <li><a href="signup.php" style="colore:#000000">SignUP</a></li>
            <li><a href="location.php">location</a></li>
            <li  class="current"><a href="contact.php">Contact Us</a></li>
    	</ul>
	</div>
    <div id="content">
    	<div id="gallerycontainer">
			<div class="portfolio-area" style="margin:0 auto; padding:140px 20px 20px 20px; width:820px;">
				<div id="contactleft">
					BRTC BUS<br>
(G.V. Pintuma TRANSPORT, INCORPORATED)<br>
Dhaka , Bangladesh<br>
Phone:  8801717359437<br><br>

BRTC BUS<br>
(G.V. Pintuma TRANSPORT, INCORPORATED)<br>
Dhaka , Bangladesh<br>
Phone:  8801717359437<br><br>

BRTC Bus Terminal in Dhaka City by G.V.Pintuma Transport, Inc.<br>
Location: New airport Road, Dhaka Bangladesh <br><br>

Contact Numbers:<br>
Pintuma Bus Company <br>
8801717359437<br>
				</div><br>
				<div id="contactright">
					<h3>Message Form</h3>
					<form class="validate" action="messageexec.php" method="POST">
                        <p>
                            <label for="name" class="required label">Name:</label><br>
                            <input id="name" class="contactform" type="text" name="name" />
                        </p>
                        <p>
                            <label for="email" class="required label">Email:</label><br>
                            <input id="email" class="contactform" placeholder="Example: mamun@gmail.com" type="text" name="email" />
                        </p>
                        <p>
                            <label for="subject" class="required label">Subject:</label><br>
                            <input id="subject" class="contactform" type="text" name="subject" />
                        </p>
                        <p>
                            <label id="message-label" for="message" class="required label">Message:</label><br>
                            <textarea id="message" class="contactform" name="message" cols="28" rows="5"></textarea>
                        </p>
                        <p>
                            <label></label>
                            <input class="contactform" id="submit-button" type="submit" name="Submit" value="Submit" style="height: 35px;" />
                        </p>
                    </form>
				</div>
               	<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        </div>
    </div>





	<div id="footer">
	<h4>+880178525652&bull; <a href="contact-us.php">Kamal Atarktuk,Avenue  </a></h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 10:00 am - 8:00 pm</p>
	<p>&copy; Copyright 2018 Pintuma travels | All Rights Reserved <br /></p>
</div>

</div>
</body>
</html>
