<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css" media="screen" title="no title">
	<title></title>
</head>
<body>
	<div class="menuFix">
		<div class="logoContainer">
			<img class="logoMenu" src="img/logo.png" alt="logo" />
		</div>
		<a class="lienMenu" href="index.php"><p class="textMenu">
			Accueil
		</p></a>
		<a class="lienMenu" href="#"><p class="textMenu">
			Brel In Jazz
		</p></a>
		<a class="lienMenu" href="jazzblues.html"><p class="textMenu">
			Jazz<br />&<br /> Blues
		</p></a>
		<a class="lienMenu" href="enseignements.html"><p class="textMenu">
			Enseignements
		</p></a>
		<a class="lienMenu" href="contact.php"><p class="textMenu">
			Contact
		</p></a>
	</div>
	<div class="combleMenuFix">

	</div>
	<div class="container">
		<div id="slides">
			<img class="slideIMG" src="img/slide1.jpg" alt=""/>
			<img class="slideIMG" src="img/slide2.jpg" alt=""/>
			<img class="slideIMG" src="img/slide3.jpg" alt=""/>
			<img class="slideIMG" src="img/slide4.jpg" alt=""/>
			<img class="slideIMG" src="img/slide5.jpg" alt=""/>
			<img class="slideIMG" src="img/slide7.jpg" alt=""/>
			<img class="slideIMG" src="img/slide8.jpg" alt=""/>
			<img class="slideIMG" src="img/slide9.jpg" alt=""/>
			<img class="slideIMG" src="img/slide10.jpg" alt=""/>
			<img class="slideIMG" src="img/slide11.jpg" alt=""/>
		</div>
	</div>
	
	<p class="titleClassic"> NEWS & ACTUALITES </p>

	<div class="NewsCase">
		<?php
		
		function Rec($text){
			$text = htmlspecialchars($text, "UTF-8");
			return $text;
		};
					
		$fichier = file("stockNews.txt");

		$total = count($fichier); // Nombre total des lignes du fichier

		for($i = 0; $i < $total; $i++){
			$fichier[$i]=str_replace('à',"&agrave;",$fichier[$i]);
			$fichier[$i]=str_replace('â',"&acirc;",$fichier[$i]);
			$fichier[$i]=str_replace('ç',"&ccedil;",$fichier[$i]);
			$fichier[$i]=str_replace('è',"&egrave;",$fichier[$i]);
			$fichier[$i]=str_replace('é',"&eacute;",$fichier[$i]);
			$fichier[$i]=str_replace('ê',"&eacute;",$fichier[$i]);
			$fichier[$i]=str_replace('ë',"&euml;",$fichier[$i]);
			$fichier[$i]=str_replace('È',"&Egrave;",$fichier[$i]);
			$fichier[$i]=str_replace('É',"&Eacute;",$fichier[$i]);
			$fichier[$i]=str_replace('Ê',"&Ecirc;",$fichier[$i]);
			$fichier[$i]=str_replace('Ë',"&Euml;",$fichier[$i]);
			$fichier[$i]=str_replace(PHP_EOL,"<br>",$fichier[$i]);
			echo '<p class="textNews" charset="utf-8">' . $fichier[$i] . '</p>'; // On affiche ligne par ligne le contenu du fichier
		}

		?>
	</div>
	
	<p class="titleSweet">Qui est Edith ?</p>
	
	<div class="NewsCase">
		<br><p class="textNews">Jacques Brel, Edith Piaf, Serge Lama, Barbara, Léo Ferré…<br>C'est à 17 ans, qu'inspirée par ces grands noms de la chanson française, Edith découvre sa voix.<br>Elle apprend alors le chant et commence très vite à se produire sur les scènes régionales.</p><br>
		<p class="textNews">C'est vers 19&nbsp; ans qu'elle rencontre le jazz au travers de  la voix et des improvisations sensationnelles d'Ella Fitzgerald ! Dès lors&nbsp; elle travaille les standards s'imprégnant des  interprétations d'Ella,&nbsp; Billie  Holiday,&nbsp; Carmen Mac Ray,&nbsp; Ray Charles, Diane Schuur…. Elle intègre  alors la grande famille du jazz Marseillais en jouant avec des musiciens tels  que Pierre Levan, Gilles Alamel, Claude Strazzieri, Joël Grégo, Jean-Paul  Artero,&nbsp; Lionel Dandine, Gabriel Béchara,  Roy's Swarts,&nbsp; Pierre-André Moll, Daniel  Huck, Pierre Jaillard… et d'autres encore !<br>
			Mais elle "glisse"  inexorablement vers le blues , le gospel et le Rythm &amp; Blues d'Aretha  Franklin, Etta james … avec sa participation au groupe<br>
			"What' s on Pettrof" en&nbsp; 2003.</p><br>
			<p class="textNews">Cinq années passées dans la ville&nbsp; du Havre lui ont permis de découvrir le monde  de l'art contemporain, des performances et&nbsp;  créations musico-théatrales … Elle participe à des spectacles vivants en  tant qu'interprète, auteur de chanson, arrangeur vocal et chef de choeur comme  dans " L'esplanade des Libertés" (spectacle de rue à Bolbec) sous la  direction de Jocelyn Brudey, "Automne en Normandie ( Jupo, ville du Havre,  Normandie, Associations…) ou encore "A l'ombre des vergers" (Jupo,  ville du Havre, maisons de quartiers…).<br>
				C'est ici qu'elle crée les "SATAN'S  DAUGHTERS", un groupe composé uniquement de filles, qui re-visite le  répertoire Jazz, Blues, R&amp;B, Rock et Variétés tant au niveau des paroles  qu'au niveau des mises en scène, mêlant esprit cabaret et ambiance club noir-  américain !!! En Mai 2009, quelques mois après leurs débuts, les Satan's  Daughters font la première partie des frères Touré Kunda à l'EXOCET à Rouen et  se produisent dans de nombreuses salles régionales….</p><br>
				<p class="textNews">Depuis 2010, Edith Darasse&nbsp; vit à nouveau dans la région marseillaise où  elle joue régulièrement dans les clubs ou sur scène avec des formations qui  vont du duo au Big Band, toujours dans la diversité des styles musicaux, en  passant par la direction de chorale lors de spectacle Gospel , d'animation de  stage de chant sur Marseille et&nbsp; Le  Havre… </p><br>
			</div>
			<p class="titleSweet">Quelques morceaux</p>
			<div class="NewsCase">
				<br>
				<div style="width: 35%; margin-left: auto; margin-right:auto;">
				<audio tabindex="0" id="player" controls="controls">
					balise audio HTML5 inconnue</audio>
					<ul id="playlist">
						<br>
						<li class="liMusic"><a id="linkMusic0" href="music/Soleil.mp3" onclick="loadSong()">Il est mort le soleil</a></li>
						<br>
						<li class="liMusic"><a id="linkMusic1" href="music/MissCelie.mp3" onclick="loadSong()">Miss Celie's Blues</a></li>
						<br>
						<li class="liMusic"><a id="linkMusic2" href="music/Valentine.mp3" onclick="loadSong()">My funny Valentine</a></li>
						<br>
						<li class="liMusic"><a id="linkMusic3" href="music/Blackbird.mp3" onclick="loadSong()">Bye Bye Blackbird</a></li>
						<br>
						<li class="liMusic"><a id="linkMusic4" href="music/Georgia.mp3" onclick="loadSong()">Georgia on my mind</a></li>
						<br>
					</ul>
				</div>
			</div>
			<p class="titleSweet">Quelques articles de presse</p>
			<div class="NewsCase">
				<div class="presseContainer">
					<div class='presseSplit'>
						<a class="flexpress" href='img/presse/presse0.jpg' target="_blank"><img class="imgPresse" src="img/presse/presse0.jpg"/></a>
						<a class="flexpress" href='img/presse/presse1.jpg' target="_blank"><img class="imgPresse" src="img/presse/presse1.jpg"/></a>
						<a class="flexpress" href='img/presse/presse2.jpg' target="_blank"><img class="imgPresse" src="img/presse/presse2.jpg"/></a>
						<a class="flexpress" href='img/presse/presse3.jpg' target="_blank"><img class="imgPresse" src="img/presse/presse3.jpg"/></a>
						<a class="flexpress" href='img/presse/presse4.jpg' target="_blank"><img class="imgPresse" src="img/presse/presse4.jpg"/></a>
					</div>
					<div class='presseSplit'>
						<a class="flexpress" href='img/presse/presse5.jpg' target="_blank"><img class="imgPresse" src="img/presse/presse5.jpg"/></a>
						<a class="flexpress" href='img/presse/presse6.jpg' target="_blank"><img class="imgPresse" src="img/presse/presse6.jpg"/></a>
						<a class="flexpress" href='img/presse/presse7.jpg' target="_blank"><img class="imgPresse" src="img/presse/presse7.jpg"/></a>
						<a class="flexpress" href='img/presse/presse8.jpg' target="_blank"><img class="imgPresse" src="img/presse/presse8.jpg"/></a>
						<a class="flexpress" href='img/presse/presse9.jpg' target="_blank"><img class="imgPresse" src="img/presse/presse9.jpg"/></a>
					</div>
				</div>
			</div>
				
				<script src="js/jquery-3.1.1.min.js"></script>
				<script src="js/linkMusic.js"></script>
				<script src="js/jquery.slides.min.js"></script>
				<script>
				$(function(){
					$("#slides").slidesjs({
						effect: {
							slide: {
								speed: 4500
							}
						},
						navigation: {
							active: false
						},
						pagination: {
							active: false
						},
						play: {
							auto: true,
							effect: "slide",
							interval: 6500
						},
						width: 700,
						height: 350
					});
				});
				</script>
				<script>
				function loadSong(elt, e) {
					if(!e) var e = window.event;
					document.getElementById("player").src=elt.href;
					document.getElementById("player").load();
					document.getElementById("player").play();
					return false;
				}
				window.onload = function() {
					links = document.getElementById("playlist").getElementsByTagName("a");
					for(var i = 0; i<links.length; i++) {
						links[i].onclick=function(e) { return loadSong(this, e); };
					}
				}
				</script>
		
			</body>
			</html>
