<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title></title>
  </head>
  <body>
    <?php	

    if (isset($_POST['news']))
    {
	$base = fopen('stockNews.txt', 'r+');
	ftruncate($base,0);
	fwrite($base, $_POST['news']);
	fclose($base);
    ?>
    <p class="formPassword" style="width: 100%; text-align: center; margin-top: 10%;">Votre News a bien ete envoyee sur le site</p>
    <div style="margin: auto; margin-top: 5%; width: 50%; height: 50%; display:flex;">
	<img style="display:block; margin:auto;" src="img/gif/sonicCool.gif" width="15%" height="15%"/>
    </div>
    <a href="index.php" style="text-decoration: none;"><p class="formPassword" style="width: 100%; text-align: center; margin-top: 10%; color: green; font-size: 24px;">Retourner sur le site</p></a>
    <?php
    }
    else{
    ?>
    <p class="formPassword" style="width: 100%; text-align: center; margin-top: 10%;">Une erreur s'est produite</p>
    <?php
    }
    ?>

  </body>
</html>