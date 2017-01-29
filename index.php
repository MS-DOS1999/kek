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
		<a class="lienMenu" href="#"><p class="textMenu">
		Accueil
		</p></a>
		<a class="lienMenu" href="#"><p class="textMenu">
		Brel In Jazz
		</p></a>
		<a class="lienMenu" href="#"><p class="textMenu">
		Jazz<br />&<br /> Blues
		</p></a>
		<a class="lienMenu" href="#"><p class="textMenu">
		Enseignements
		</p></a>
		<a class="lienMenu" href="#"><p class="textMenu">
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
					$fichier[$i]=str_replace('�',"&agrave;",$fichier[$i]);
					$fichier[$i]=str_replace('�',"&acirc;",$fichier[$i]);
					$fichier[$i]=str_replace('�',"&ccedil;",$fichier[$i]);
					$fichier[$i]=str_replace('�',"&egrave;",$fichier[$i]);
					$fichier[$i]=str_replace('�',"&eacute;",$fichier[$i]);
					$fichier[$i]=str_replace('�',"&eacute;",$fichier[$i]);
					$fichier[$i]=str_replace('�',"&euml;",$fichier[$i]);
					$fichier[$i]=str_replace('�',"&Egrave;",$fichier[$i]);
					$fichier[$i]=str_replace('�',"&Eacute;",$fichier[$i]);
					$fichier[$i]=str_replace('�',"&Ecirc;",$fichier[$i]);
					$fichier[$i]=str_replace('�',"&Euml;",$fichier[$i]);
					$fichier[$i]=str_replace(PHP_EOL,"<br>",$fichier[$i]);
					echo '<p class="textNews" charset="utf-8">' . $fichier[$i] . '</p>'; // On affiche ligne par ligne le contenu du fichier
			}

		?>
	</div>



	
	<script src="js/jquery-3.1.1.min.js"></script>
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
</body>
</html>
