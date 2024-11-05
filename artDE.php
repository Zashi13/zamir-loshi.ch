<!doctype html>
<html>
<head>
	<meta name="viewport" content="initial-scale=0.9, maximum-scale=0.9, user-scalable=no"/>
	<title>Zamir Loshi Fotograf</title>
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
			<img src="Assets/Logo-Text.png" alt="Zamir Loshi Logo"/>
			<nav id="language">
				<a href="artDE.php" class="selected">DE</a>
				<a href="index.php">EN</a>
			</nav>
		</header>

		<h1 id="main-title">Mehr als nur <strong class="mark">Erinnerungen.</strong><br> Sondern <strong class="mark">Kunst!</strong></h1>
		<a href="#navigation"><img id="arrow" src="Assets/Arrows.svg" alt=""/></a>

		<nav id="navigation">
			<div class="social">
				<a href="https://www.instagram.com/zamirloshifoto/" target="_blank"><img src="Assets/instagram.svg" alt="Instagram"/></a> 
				<a href="https://www.linkedin.com/in/zamir-loshi-263b2b189" target="_blank"><img src="Assets/linkedin-in.svg" alt="LinkedIn"/></a>
			</div>
			<div class="menupoints">
				<a href="#about">Über mich</a>
				<a href="#offers">Angebote</a>
				<a href="#contact">Kontakt</a>
				<a href="#galerie">Galerie</a>
				<a href="art.php">Sportfotografie</a>
			</div>
		</nav>
	</section>

	<section id="about">
		<img class="imgabout" src="Assets/Portrait About.jpg" alt="Portrait of Zamir Loshi"/>
		<div class="abouttext">
			<h3>Über mich</h3>
			<p>Ich glaube, dass ein Foto so viel mehr sein kann als nur das Licht, das auf den Sensor trifft. Es fasst die Emotionen und Gefühle des eingefangenen Moments zusammen. Seit meiner Kindheit bin ich von der Fotografie und ihren unendlichen Möglichkeiten fasziniert. Im Jahr 2020 habe ich mein Handwerk professionalisiert und arbeite seither als professioneller Sport- und Nachrichtenfotograf. Mein Stil ist anders, als du es gewohnt bist. Kontrastreich, farbenfroh und mit einem komplexen künstlerischen Ansatz entstehen einzigartige Bilder, die auf einer Karte genauso gut aussehen wie auf Leinwand gedruckt.</p>
		</div>
	</section>

	<section class="offersart" id="offers">
		<div class="flexcontainer">
			<div class="offerpictures">
				<div class="card art-card picture1art">
					<h5>Pärchenfotografie</h5><br>
					<p>Feiere deine Liebe mit einem Fotoshooting. Erhältlich in verschiedenen Paketen für jedes Budget. Es eignet sich auch perfekt als Geschenk für dich und deinen Liebsten.</p>
				</div>
				
				<div class="card art-card picture2art">
					<h5>Verlobung</h5><br>
					<p>Zuallererst: Herzlichen Glückwunsch! Lass die Erinnerung ewig währen und schaffe dabei deine eigene persönliche Kunst.</p>
				</div>
			</div>
			
			<h5>Interessiert an eigener Kunst?<span class="mark">Ich habe das passende Angebot!</span></h5>
			
			<div class="offerpictures">
				<div class="card art-card picture3art">
					<h5>Portraits</h5><br>
					<p>Der erste Eindruck zählt. In nur ein paar Stunden mache ich professionelle und kreative Portraits, die einen besseren Eindruck hinterlassen als ein Selfie.</p>
				</div>
			</div>
			
			<h5>Fragen? Schreib mir!</h5>
		</div>
	</section>

	<section class="contact contactart" id="contact">
		<h2 class="contactadjustement">Sag mir, was <strong class="mark navy">du brauchst</strong> und <br> ich sende dir <strong class="mark navy">eine Offerte</strong></h2>
		<a href="mailto:info@zamir-loshi.ch">info@zamir-loshi.ch</a>
	</section>

	<div class="background BGimg" id="galerie">
		<div class="portfolio">
			<?php 
				// set main directory
				$mainDir = 'portfolioArt';
				require(__DIR__ . "/gallery.php"); 
			?>
		</div>
	</div>

	<footer>
		<a href="agb.html"><p>AGB</p></a>
		<div class="social">
			<a href="https://www.instagram.com/zamirloshifoto/" target="_blank"><img src="Assets/instagram.svg" alt="Instagram"/></a> 
			<a href="https://www.linkedin.com/in/zamir-loshi-263b2b189" target="_blank"><img src="Assets/linkedin-in.svg" alt="LinkedIn"/></a>
		</div>
	</footer>
</body>
</html>