<!doctype html>
<html>
<head>
	<meta name="viewport" content="initial-scale=0.9, maximum-scale=0.9, user-scalable=no"/>
	<title>Zamir Loshi Photography</title>
	<link rel="apple-touch-icon" sizes="180x180" href="/fav/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/fav/favicon-16x16.png">
<link rel="manifest" href="/fav/site.webmanifest">
<link rel="mask-icon" href="/fav/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="/fav/favicon.ico">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="msapplication-config" content="/fav/browserconfig.xml">
<meta name="theme-color" content="#161830">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	
	<meta charset="utf-8">
	
  <meta name="description" content="Sports- and Eventphotgrapher">
  <meta name="keywords" content="Fotografie Sportfotografie Sportmarketing Schweiz Fotograf">
	<link rel="stylesheet" href="https://use.typekit.net/vyc3wtt.css">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
	
<body onclick>		
	<div id="top" class="background">
   	  <img class="BGimg desk" src="Assets/BG-Top.jpg"/>
	  <img class="BGimg mobile" src="Assets/BG_Top_Mobile.png"/>
<header>
			  <img src="Assets/Logo-TextEN.png"/>
	<a href="art.php"><div class="artbutton">
		<p>Art Portrait Photography</p>
	</div></a>
    <div class="language"><a href="indexDE.php"><p class="unselected">DE</p></a><a href="index.php"><p class="selected">EN</p></a></div>
	  </header>
		  
	  	 
		  
	  <h1 class="center">Make the moment of a <span class="mark">lifetime,</span><br>
			  last <span class="mark">forever!</span> </h1>
	  <a href="#menupoints"><img class="arrow" src="Assets/Arrows.svg" alt=""/></a>
<div class="menu" id="menupoints">
		<div class="social">
		  <a href="https://www.instagram.com/zamirloshifoto/" target="_blank"><img src="Assets/instagram.svg" alt=""/></a> 
		<a href="https://www.linkedin.com/in/zamir-loshi-263b2b189" target="_blank"><img src="Assets/linkedin-in.svg" alt=""/></a>
		  </div>
			
			<div class="menupoints">
				<a href="#about"><p>About me</p></a> <a href="#offers"><p>Offers</p></a> <a href="#contact"><p>Contact</p></a> <a href="#galerie"><p>Gallery </p></a>
			</div>
		
		</div>
	</div>

	<div class="background" id="about">
   	  <img class="BGimg blur" src="Assets/BG-About.jpg"/>
		<div class="aboutwrapper">
    <img class="imgabout" src="Assets/Portrait About.jpg"/> 
	<div class="abouttext">
		<h3>About me</h3>
		<p>I have been a passionate sports photographer and photojournalist for several years and have photographed almost everything from local football clubs to international kart races to the World Economic Forum in Davos. My formal education includes an apprenticeship as a Mediamatiker EFZ and a one-year internship at the national newspaper "Blick". I would describe my photography style as high-contrast and colourful. I want to capture the emotions and performances of the athletes.
Why photography? I photographed my first Formula 1 race at the 2019 Italian Grand Prix. The ability to immortalise emotions and tell whole stories in one image fascinated me deeply.</p>
		</div>
		</div>
	</div>
	
	
	<div class="background" id="offers">
   	  <img class="BGimg blur" src="Assets/BG-Offers.jpg"/>
	  <div class="offerscontainer">
			<div class="offerpictures">
				<div class="image picture1">
					<h5>Eventphotography</h5><br>
					<p>In need of coverage for your next sporting or non-sporting event? I want to help you get the memories you deserve!</p>
					</div>
				
				<div class="image picture2">
					<h5>Kartracing</h5><br>
					<p>Images for sponsors or just to remember your victories. I offer special rates for races of the Swiss Karting Championship and the Rotax Max Switzerland Series.</p>
					</div>
		  </div>
			<h5>Marketing? Event-Photography? Design? <span class="mark">I got you covered!</span></h5>
			<div class="offerpictures">
				<div class="image picture3">
					<h5>Portraits</h5><br>
					<p>First impressions last. In just a few hours I make professional and creative portraits that leave a better impression than a selfie.</p>
					</div>
				<div class="image picture4">
					<h5>Design</h5><br>
					<p>I can also process the event photos or portraits into flyers, brochures, collages and much more. Everything under one roof.</p>
					</div>
			</div>
		  <h5>Questions? Contact me!</h5>
		</div>
	</div>
	
	
	<!-- <div class="background" id="contact">
   	  <img class="BGimg blur" src="Assets/BG-Contact.jpg"/>
		<h2 class="contactadjustement">Tell me what <span class="black">you need</span> and <br>
			I will send you <span class="black">an offer</span>.*</h2>
		
					<form method="post" action="sendmail.php">
					<div class="form">	
				<select id="contactreason" name="reason" required>
					<option value="">Reson for contact</option>
						<option value="EventPhoto">Event Photography</option>
					<option value="Kart">Kart-Racing</option>
						<option value="Portraits">Portraits</option>
						<option value="Talk">Just want to talk</option>
						
						</select>
						<div class="inline">					
						<input type="email" required name="email" placeholder="Email">
						<input type="text" required name="name" placeholder="Full Name"></div>
				<br>

						<textarea name="text" placeholder="Write your message"></textarea><br>
						<button name="submit" class="g-recaptcha" 
        data-sitekey="reCAPTCHA_site_key" 
        data-callback='onSubmit' 
        data-action='submit'>Submit</button>
						</div>
			</form>
		
	</div> -->
	
	<div class="background BGimg" id="galerie">	

	<div class="portfolio">
	<?php 
		//set main directory
$mainDir = 'portfolio';
	require(__DIR__ . "/gallery.php"); ?>
	
	</div>
	</div>
	<footer>
	
	<a href="agb.html"><p>AGB</p></a>
		<div class="social">
		  <a href="https://www.instagram.com/zamirloshifoto/" target="_blank"><img src="Assets/instagram.svg" alt=""/></a> 
		<a href="https://www.linkedin.com/in/zamir-loshi-263b2b189" target="_blank"><img src="Assets/linkedin-in.svg" alt=""/></a>
		  </div>
	</footer>
</body>
</html>
