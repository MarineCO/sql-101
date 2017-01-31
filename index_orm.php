<?php 

require 'vendor/autoload.php';

ORM::configure('mysql:host=localhost;dbname=mon_armoire');
ORM::configure('username', 'root');
ORM::configure('password', 'root');

$donnees = ORM::for_table('mes_chaussettes')
->where_gt('pointure', '40')
->find_many();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice BDD</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<table>
	
		<tr>
			<td>Id :</td>
			<td>Couleur :</td>
		</tr>

<?php foreach ($donnees as $donnee) : ?>

		<tr>
			<td><?= $donnee->id; ?></td>
			<td><?= $donnee->pointure; ?></td>
		</tr>

<?php endforeach; ?>

	</table>

</body>
</html>