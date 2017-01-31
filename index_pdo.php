<?php 

$bdd = new PDO(
	'mysql:host=localhost;dbname=mon_armoire;charset=utf8',
	'root', 'root');

$reponse = $bdd->query('SELECT * FROM mes_chaussettes WHERE couleur="bleu" && pointure > 40');

$donnees = $reponse->fetch();


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mini CRM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<table>
		<tr>
			<td>id :</td>
			<td>couleur :</td>
			<td>description :</td>
			<td>pointure :</td>
			<td>temp_lavage :</td>
			<td>date_lavage :</td>
		</tr>
<?php while ($donnees = $reponse->fetch()) { ?>
		<tr>
			<td><?= $donnees['id']; ?></td>
			<td><?= $donnees['couleur']; ?></td>
			<td><?= $donnees['description']; ?></td>
			<td><?= $donnees['pointure']; ?></td>
			<td><?= $donnees['temp_lavage']; ?></td>
			<td><?= $donnees['date_lavage']; ?></td>
		</tr>
<?php

}

$reponse->closeCursor();

?>
	</table>

</body>
</html>
