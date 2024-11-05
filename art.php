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
	
<body>		
	<section id="topart">
<header>
		<img src="Assets/Logo-TextEN.png"/>

		<nav id="language"><a active href="artDE.php">DE</a><a class="selected" href="index.php">EN</a></nav>
		</header>
		  
	  	 
		  
		<h1 id="main-title">More than <strong class="mark">memories.</strong><br>
			  It's <strong class="mark">art!</strong> </h1>
			  <a href="#navigation"><img id="arrow" src="Assets/Arrows.svg" alt=""/></a>
			  <nav id="navigation">
		<div class="social">
		  <a href="https://www.instagram.com/zamirloshifoto/" target="_blank"><img src="Assets/instagram.svg" alt=""/></a> 
		<a href="https://www.linkedin.com/in/zamir-loshi-263b2b189" target="_blank"><img src="Assets/linkedin-in.svg" alt=""/></a>
		  </div>
			
			<div class="menupoints">
				<a href="#about">About me</a> <a href="#offers">Offers</a> <a href="#contact">Contact</a> <a href="#galerie">Gallery</a> <a href="art.php">Sportsphotography</a>
			</div>
		
</nav>
</section>

<section id="about">
    <img class="imgabout" src="Assets/Portrait About.jpg"/> 
	<div class="abouttext">
		<h3>About me</h3>
		<p>I believe that a photograph can be so much more than just the light that hits the sensor. It encapsulates the emotions and feelings of the captured moment. Since my childhood, I have been fascinated by photography and its endless possibilities. I professionalised my craft in 2020 and have worked as a professional sports- and news photographer ever since. My style is different from what you’re used to. High contrast, colourful and a complex artistic approach make for unique pictures that look just as good on a card as they do printed on canvas.</p>
		</div>
</section>
	
	
<section class="offersart" id="offers">
	  <div class="flexcontainer">
			<div class="offerpictures">
				<div class="card art-card picture1art">
					<h5>Couples Portraits</h5><br>
					<p>Celebrate your love with a photoshoot. Available in different packages for every budget. It's also perfect as a gift for you and your special someone.</p>
					</div>
				
				<div class="card art-card picture2art">
					<h5>Engagement Session</h5><br>
					<p>First of all, congratulations! Make the memory last forever and create your own personal art in the process.</p>
					</div>
		  </div>
			<h5>Looking to create art?<span class="mark">I got you covered!</span></h5>
			<div class="offerpictures">
				<div class="card art-card picture3art">
					<h5>Portraits</h5><br>
					<p>First impressions last. In just a few hours I create professional and creative or serious portraits that leave a better impression than a selfie.</p>
					</div>
			</div>
		  <h5>Questions? Contact me!</h5>
		</div>
</section>
	
	
<section class="contact contactart" id="contact">
		<h2 class="contactadjustement">Tell me what <strong class="mark navy">you need</strong> and <br>
			I will send you <strong class="mark navy">an offer</strong></h2>
		<a href="mailto:info@zamir-loshi.ch">info@zamir-loshi.ch</a>
</section>
	
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
