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
  <meta name="keywords" content="Fotografie Pärchenfotografie Couplesphotography Portrait Portraitfotograf Kunst Schweiz Fotograf">
	<link rel="stylesheet" href="https://use.typekit.net/vyc3wtt.css">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
	
<body onclick>		
	<div id="top" class="background">
   	  <img class="BGimg desk" src="Assets/BG-Top-Art.jpg"/>
	  <img class="BGimg mobile" src="Assets/BG-Top-Art-mobile.jpg"/>
<header>
			  <img src="Assets/Logo-TextEN.png"/>
	 <a href="index.php"><div class="artbutton">
		<p>Sportsphotography</p>
	</div></a>
    <div class="language"><a href="artDE.php"><p class="unselected">DE</p></a><a href="art.php"><p class="selected">EN</p></a></div>
	  </header>
		  
	  	 
		  
	  <h1 class="center">More than <span class="mark">memories.</span><br>
			  It's <span class="mark">art!</span> </h1>
	  <a href="#menupoints"><img class="arrow" src="Assets/Arrows.svg" alt=""/></a>
<div class="menu white" id="menupoints">
		<div class="social">
		  <a href="https://www.instagram.com/zamirloshifoto/" target="_blank"><img src="Assets/instagram.svg" alt=""/></a> 
		<a href="https://www.linkedin.com/in/zamir-loshi-263b2b189" target="_blank"><img src="Assets/linkedin-in.svg" alt=""/></a>
		  </div>
			
			<div class="menupoints menupointsart">
				<a href="#about"><p>About me</p></a> <a href="#offers"><p>Offers</p></a> <a href="#contact"><p>Contact</p></a> <a href="#galerie"><p>Gallery </p></a>
			</div>
		
		</div>
	</div>

	<div class="background" id="about">
   	  <img class="BGimg blur" src="Assets/BG-About-Art.jpg"/>
		<div class="aboutwrapper">
    <img class="imgabout" src="Assets/Portrait About.jpg"/> 
	<div class="abouttext">
		<h3>About me</h3>
		<p>I believe that a photograph can be so much more than just the light that hits the sensor. It encapsulates the emotions and feelings of the captured moment. Since my childhood, I have been fascinated by photography and its endless possibilities. I professionalised my craft in 2020 and have worked as a professional sports- and news photographer ever since. My style is different from what you’re used to. High contrast, colourful and a complex artistic approach make for unique pictures that look just as good on a card as they do printed on canvas.</p>
		</div>
		</div>
	</div>
	
	
	<div class="background" id="offers">
   	  <img class="BGimg blur" src="Assets/BG-Offers-Art.jpg"/>
	  <div class="offerscontainer">
			<div class="offerpictures">
				<div class="imageart picture1art">
					<h5>Couples Portraits</h5><br>
					<p>Celebrate your love with a photoshoot. Available in different packages for every budget. It's also perfect as a gift for you and your special someone.</p>
					</div>
				
				<div class="imageart picture2art">
					<h5>Engagement Session</h5><br>
					<p>First of all, congratulations! Make the memory last forever and create your own personal art in the process.</p>
					</div>
		  </div>
			<h5>Looking to create art?<span class="mark">I got you covered!</span></h5>
			<div class="offerpictures flexcenter">
				<div class="imageart picture3art">
					<h5>Portraits</h5><br>
					<p>First impressions last. In just a few hours I create professional and creative or serious portraits that leave a better impression than a selfie.</p>
					</div>
			</div>
		  <h5>Questions? Contact me!</h5>
		</div>
	</div>
	
	
	<!-- <div class="background" id="contact">
   	  <div class="bgorange" src="Assets/BG-Contact.jpg">
		<h2 class="contactadjustement">Tell me what <span class="orange">you need</span> and <br>
			I will send you <span class="orange">an offer</span>.*</h2>
		
					<form method="post" action="sendmail.php">
					<div class="form">	
				<select id="contactreason" name="reason" required>
					<option value="">Reson for contact</option>
						<option value="EventPhoto">Couples portraits</option>
					<option value="Kart">Engagement Session</option>
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
	</div>
	</div> -->
	
	<div class="background BGimg" id="galerie">	

	<div class="portfolio">
	<?php 
		//set main directory
$mainDir = 'portfolioArt';
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
