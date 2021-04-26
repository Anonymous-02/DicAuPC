<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ajout - Composant - Prévisualisation</title>
		<link rel="stylesheet" type="text/css" href="DicAuPC-evan.css">
	</head>
	<body>
<?php

$list = array("Processeur", "Carte graphique", "Carte Mère", "Disque Dur", "Mémoire", "Refroidissement", "Alimentation");
$typeid = $_POST["type"];
$type = $list[$typeid];
$title = $_POST["titre"];
$image = $_POST["image-url"];
$desc = $_POST["desc"];
$prix = $_POST["prix"];
echo "
		Prévisualisation :<br>
		accueil > Composant > {$type} <br><br>
		<div class='Prévisualisation'>
			<table>
				<tr>
					<td><img class='Composant' src='{$image}'></td>
					<td><h4>{$title}</h4>
						<h5 id='caractéristiques'>
							<ul>
								<li>Marque    AMD</li>
								<li>Vitesse du CPU    3.6 GHz</li>
								<li>Socket du CPU    Socket AM4</li>
								<li>Nombre de processeurs    6</li>
								<li>Température maximale: 95°C</li>
								<li>Termal design Power: 65 W. Configurations de PCI express: 1x16</li>
								<li>Vitesses d'horloge de mémoire prises en charge par le processeur: 3200 MHz</li>
								<li>Horloge de Max Boost: 4.2 GH</li>
								<li>Puissance    65 Watts</li>
								<li>Plateforme    Windows</li>
							</ul><br><br><br>
							<p id='prix'>{$prix} €</p>
						</h5>
					</td>
				</tr>
			</table>
		</div>";

?>
</body>
</html>