<!doctype html>
<html>
<head>
    <meta name="viewport" content="initial-scale=0.9, maximum-scale=0.9, user-scalable=no"/>
    <title>Zamir Loshi Fotografie</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/fav/favicon-16x16.png">
    <link rel="manifest" href="/fav/site.webmanifest">
    <link rel="mask-icon" href="/fav/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/fav/favicon.ico">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-config" content="/fav/browserconfig.xml">
    <meta name="theme-color" content="#161830">
    <meta charset="utf-8">
    <meta name="description" content="Sport- und Eventfotografie">
    <meta name="keywords" content="Fotografie Sportfotografie Sportmarketing Schweiz Fotograf">
    <link rel="stylesheet" href="https://use.typekit.net/vyc3wtt.css">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
    
<body>        
    <section id="top">
    <header>
        <img src="Assets/Logo-Text.png" alt=""/>
        <nav id="language"><a class="selected" href="indexDE.php">DE</a><a href="index.php">EN</a></nav>
    </header>
          
    <h1 id="main-title">Halte <strong class="mark">einmalige</strong> Momente<br>
              <strong class="mark">für immer</strong> fest!</h1>
    <a href="#navigation"><img id="arrow" src="Assets/Arrows.svg" alt=""/></a>

    <nav id="navigation">
        <div class="social">
          <a href="https://www.instagram.com/zamirloshifoto/" target="_blank"><img src="Assets/instagram.svg" alt=""/></a> 
          <a href="https://www.linkedin.com/in/zamir-loshi-263b2b189" target="_blank"><img src="Assets/linkedin-in.svg" alt=""/></a>
        </div>
            
        <div class="menupoints">
            <a href="#about">Über mich</a> <a href="#offers">Angebote</a> <a href="#contact">Kontakt</a> <a href="#galerie">Galerie</a> <a href="artDE.php">Portraitfotografie</a>
        </div>
    </nav>
    </section>

    <section id="about">
        <img class="imgabout" src="Assets/Portrait About.jpg"/> 
        <div class="abouttext">
            <h3>Über mich</h3>
            <p>Seit mehreren Jahren bin ich als leidenschaftlicher Sportfotograf und Fotojournalist tätig und habe in dieser Zeit vom lokalen Fussballclub über internationale Kartrennen bis zum Volleyball Turnier fast alles fotografiert. Meine formelle Ausbildung beinhaltet eine Lehre als Mediamatiker EFZ und ein einjähriges Praktikum bei der Blick Zeitung. Meinen Fotografiestil würde ich als kontrastreich und farbenfroh bezeichnen. Ich will die Emotionen und Leistungen der Sportler*innen einfangen.<br>
            Wieso die Fotografie? Am Grossen Preis von Italien 2019 fotografierte ich mein erstes Formel 1 Rennen. Die Fähigkeit, Emotionen zu verewigen und ganze Geschichten in einem Bild zu erzählen, faszinierte mich zutiefst.</p>
        </div>
    </section>
    
    <section class="offers">
      <div class="flexcontainer">
            <div class="offerpictures">
                <div class="image picture1">
                    <h5>Eventfotografie</h5><br>
                    <p>Brauchst du Fotos deines nächsten Sport- oder Nichtsportevents? Ich möchte dir helfen, deine Veranstaltung so festzuhalten, wie du es verdienst!</p>
                </div>
                
                <div class="image picture2">
                    <h5>Kartrennen</h5><br>
                    <p>Bilder für Sponsoren oder einfach zur Erinnerung an deine Siege: Ich biete spezielle Preise für Rennen der Schweizer Kart Meisterschaft und der Rotax Max Schweiz Serie.</p>
                </div>
          </div>
          <h5>Marketing? Event-Fotografie? Design? <span class="mark">Ich habe ein passendes Angebot!</span></h5>
          <div class="offerpictures">
                <div class="image picture3">
                    <h5>Portraits</h5><br>
                    <p>Der erste Eindruck zählt. In nur ein paar Stunden mache ich professionelle und kreative Portraits, die einen besseren Eindruck hinterlassen als ein Selfie.</p>
                </div>
                <div class="image picture4">
                    <h5>Design</h5><br>
                    <p>Ich kann mit den Event-Fotos oder Portraits auch gleich Flyer, Broschüren, Collagen und noch vieles mehr gestalten. Alles aus einer Hand.</p>
                </div>
          </div>
          <h5>Fragen? Kontaktier mich!</h5>
      </div>
    </section>
    
    <section class="contact" id="contact">
        <h2 class="contactadjustement">Sag mir was <strong class="mark navy">du brauchst</strong> und <br>
            ich sende dir <strong class="mark navy">eine Offerte</strong></h2>
        <a href="mailto:info@zamir-loshi.ch">info@zamir-loshi.ch</a>
    </section>
    
    <section id="galerie">    
        <div class="portfolio">
            <?php 
                //set main directory
                $mainDir = 'portfolio';
                require(__DIR__ . "/gallery.php"); 
            ?>
        </div>
    </section>

    <footer>
        <a href="agb.html"><p>AGB</p></a>
        <div class="social">
          <a href="https://www.instagram.com/zamirloshifoto/" target="_blank"><img src="Assets/instagram.svg" alt=""/></a> 
          <a href="https://www.linkedin.com/in/zamir-loshi-263b2b189" target="_blank"><img src="Assets/linkedin-in.svg" alt=""/></a>
        </div>
    </footer>
</body>
</html>
