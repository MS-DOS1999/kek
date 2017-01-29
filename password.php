<!DOCTYPE html> 
<html> 
<head> 
<title>Page prot�g�e par mot de passe</title> 
<link rel="stylesheet" type="text/css" href="css/style.css">
</head> 
<body> 
<?php 
 
$mot_de_passe_correct = 'pousaraque'; 
 
// On r?cup?re le mot de passe envoy? par le visiteur 
$mot_de_passe = $_POST['password']; 
 
IF (isset($mot_de_passe)) 
{ 
    IF ($mot_de_passe == $mot_de_passe_correct) 
    { 
        ?> 
        <form action="writeNews.php" method="post" width="100%">
		<label class="formPassword" style="display:block; margin-left: auto; margin-right: auto; margin-top: 10%;" for="news">Votre news : <br/><br/></label>
		<textarea style="display:block; margin-left: auto; margin-right: auto; width: 40%; height: 400px;" name="news" id="news" maxlength="600"><?php 			function Rec($text){
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
					echo $fichier[$i]; // On affiche ligne par ligne le contenu du fichier
			}
?></textarea><br/>
		<input style="display:block; margin-left: auto; margin-right: auto; width: 50px;" id="submit" type="submit" name="submit" value="ok"/>
	</form>
        <?php 
    } 
 
    ELSEIF ($mot_de_passe != $mot_de_passe_correct) 
    { 
        ?> 
        <!-- Message indiquant au visiteur qu'il s'est tromp? de mot de passe et qu'il doit r?essayer --> 
 
        <p class="formPassword" style="width: 100%; text-align: center; margin-top: 10%;" >Le mot de passe communique est incorrect ! </p><a href="laChancla.php" style="text-decoration: none;"><p class="formPassword" style="width: 100%; text-align: center; margin-top: 10%; color: green; font-size: 24px;">Reessayer ?</p></a>
 
        <!-- Fin du message --> 
        <?php 
    } 
} 
 
ELSE 
{ 
    ?> 
    <!-- Message indiquant au visiteur que la page et prot�g�e par mot de passe --> 
 
    <p class="formPassword" style="width: 100%; text-align: center; margin-top: 10%;" >Cette page est reservee aux visiteurs autorises</p> 
 
    <!-- Fin du message --> 
    <?php 
} 
?> 
</body> 
</html>