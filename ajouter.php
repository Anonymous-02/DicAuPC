<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="DicAuPC-evan.css">
		<script type="text/javascript" src="ajouter.js"></script>
<?php
$mode  = "error, you must select one category";
$exist = array_key_exists("Catégorie",$_POST) ;
if ($exist){
	$mode = $_POST["Catégorie"];
}
if ($mode == "Composant") {
	echo '
		<title>Ajouter - Composant</title>
	</head>
	<body class="fond-admin">
		<h2>Informations du composants</h2>
		<form method="post" action="composant.php">
			<label for="composants">Composants :*</label>
			<select name="type" id="1">
				<option value="0" id="1.1">Processeur</option>
				<option value="1" id="1.2">Carte graphique</option>
				<option value="2" id="1.3">Carte Mère</option>
				<option value="3" id="1.4">Disque Dur</option>
				<option value="4" id="1.5">Mémoire</option>
				<option value="5" id="1.6">Refroidissement</option>
				<option value="6" id="1.7">Alimentation</option>
			</select>
			<input type="button" onclick="typei()" value="ok"><br><br>
			<label for="titre">Titre :*</label><input type="text" name="titre" id="nom" required="required"><br><br>
			<label for="image-url">url de l\'image</label><input type="text" name="image-url" id="image"><br><br>
			<label for="prix">Prix :*</label><input type="number" name="prix" id="prix" required="required"><br><br>
			<label for="desc">Description :</label>
			<textarea id="desc" name="desc" rows="5" cols="33" required="required"></textarea><br><br>
			<div id="caracteristiques"></div>
			<input type="submit">
		</form>';
} elseif ($mode == "Configuration") {
	echo '
		<title>Ajouter - Configuration</title>
	</head>
	<body class="fond-admin">
		<h2>Informations de la configuration</h2>
		<form method="post" action="configuration.php">
			<label for="catégorie">Catégorie :*</label>
			<select name="catégorie" id="2">
				<option value="prix" id="2.1">Prix</option>
				<option value="utilisation" id="2.2">Utilisation</option>
			</select><br><br>
			<label for="titre">Titre :*</label>
			<input type="text" name="titre" id="nom" required="required"><br><br>
			<label for="titre">Prix :*</label>
			<input type="number" name="prix" id="prix" required="required"><br><br>
			<label for="desc">Description :</label>
			<textarea id="desc" name="desc" rows="5" cols="33" required="required"></textarea><br><br>
			<label for="processeur">Processeur :*</label>
			<input type="text" name="titre" id="nom" required="required">
			Lien :*<input type="link" name="lien" id="lien" required="required">
			Image :*<input type="Image" name="Image" id="Image" required="required"><br><br>
			<label for="carte-graphique">Carte Graphique :*</label>
			<input type="text" name="titre" id="nom" required="required">
			Lien :*<input type="link" name="lien" id="lien" required="required">
			Image :*<input type="Image" name="Image" id="Image" required="required"><br><br>
			<label for="carte-mere">Carte Mère :*</label>
			<input type="text" name="titre" id="nom" required="required">
			Lien :*<input type="link" name="lien" id="lien" required="required">
			Image :*<input type="Image" name="Image" id="Image" required="required"><br><br>
			<label for="dique-dur">Disque Dur :*</label>
			<input type="text" name="titre" id="nom" required="required">
			Lien :*<input type="link" name="lien" id="lien" required="required">
			Image :*<input type="Image" name="Image" id="Image" required="required"><br><br>
			<label for="memoire">Mémoire :*</label>
			<input type="text" name="titre" id="nom" required="required">
			Lien :*<input type="link" name="lien" id="lien" required="required">
			Image :*<input type="Image" name="Image" id="Image" required="required"><br><br>
			<label for="refroidissement">Refroidissement :*</label>
			<input type="text" name="titre" id="nom" required="required">
			Lien :*<input type="link" name="lien" id="lien" required="required">
			Image :*<input type="Image" name="Image" id="Image" required="required"><br><br>
			<label for="alimentation">Alimentation :*</label>
			<input type="text" name="titre" id="nom" required="required">
			Lien :*<input type="link" name="lien" id="lien" required="required">
			Image :*<input type="Image" name="Image" id="Image" required="required"><br><br>
			<input type="submit">
		</form>';
} elseif ($mode == "Tutoriel") {
	echo '
		<title>Ajouter - Tutoriel</title>
	</head>
	<body class="fond-admin">
		<h2>Informations Tutoriel</h2>
		<form method="post" action="Tutoriel.php">
			Lien :*<input type="link" name="lien" required="required">
			<input type="submit" value="Valider"/>
		</form>';
} else{
	echo $exist;
	echo $mode ;
}
?>
	</body>
</html>