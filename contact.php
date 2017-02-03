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
		<a class="lienMenu" href="#"><p class="textMenu">
			Contact
		</p></a>
	</div>
	<div class="combleMenuFix">

	</div>
	<p class="titleClassic"> CONTACTEZ-MOI </p>
	<div class="NewsCase">
		<div class="formDescription">
			<form method="post" action="traitement.php">
				<div style="display: flex;">
				<p style="flex: 1;">
					<label class="formLabel">Prénom<span class="asterix">*</span></label></br><input class="formInput" type="text" name="prenom" required />
				</p>
				<p style="flex: 1;">
					<label class="formLabel">Nom<span class="asterix">*</span></label></br><input class="formInput" type="text" name="nom" required />
				</p>
				<p>
				</div>
				<p>
				<label class="formLabel">Adresse e-mail<span class="asterix">*</span></label></br><input class="formInputEmail" type="email" name="email" required />
				</p>
				<p>
					<label class="formLabel">Message<span class="asterix">*</span></label></br><textarea class="formInputMessage" name="message" required ></textarea>
				</p>
				<input class="submit" name="envoi" type="submit" value="Envoyer" />
				<p class="champsRequis"><span class="asterix">*</span>Champ requis</p>
			</form>
		</div>
	</div>

			</body>
			</html>