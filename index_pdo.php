<?php 

$bdd = new PDO(
	'mysql:host=localhost;dbname=mon_armoire;charset=utf8',
	'root', 'root');

$reponse = $bdd->query('SELECT * FROM mes_chaussettes');

$donnees = $reponse->fetch();

while ($donnees = $reponse->fetch()) {

?>
	<p>
		id : <?= $donnees['id']; ?><br />
		couleur : <?= $donnees['couleur']; ?><br />
		description : <?= $donnees['description']; ?><br />
		pointure : <?= $donnees['pointure']; ?><br />
		date_lavage : <?= $donnees['date_lavage']; ?><br />
		temp_lavage	: <?= $donnees['temp_lavage']; ?><br />
	</p>

<?php

}

$reponse->closeCursor();

?>