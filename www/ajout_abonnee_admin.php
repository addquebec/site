<?php 
	require_once('../bootstrap.php');
	//Recoit courriel, nom et prénom du formulaire
	$courriel = $_POST['courriel'];
 	$nom = $_POST['nom'];
 	$prenom = $_POST['prenom'];

 	//Recoit le numeros de téléphone du compte paypal
 	$telephone = $_POST['phone'];
 	$decouverteAdd = $_POST['decouverteAdd'];
 	$debut = $_POST['debut'];
 	$fin = $_POST['fin'];
 	$horaire = $_POST['os0'];

 	//Recupere la durée selon le forfait choisit et le nombre de cours
 	$duree = $_POST['duree'];

 	switch ($duree) {
 		case '12':
 			$horaire = "illimité";
 			break;
 	}


    ADD\DB::query("SET NAMES 'utf8'");

	//Dépendament du nombre de checkbox checked j'ajoute les journées choisi dans une variable
	//si il y a plusieurs jours, ils seront séparé par des virgules
	
	$decouverteAdd = mysqli_real_escape_string($decouverteAdd);
	$horaire = mysqli_real_escape_string($horaire);
	$nom = mysqli_real_escape_string($nom);
	$prenom = mysqli_real_escape_string($prenom);
	$telephone = mysqli_real_escape_string($telephone);
	$courriel = mysqli_real_escape_string($courriel);

	$user = ADD\DB::query("INSERT INTO paypal(horaire, debut, fin, nom, prenom, telephone, courriel, decouverteAdd, id) VALUES('$horaire', '$debut', '$fin', '$nom', '$prenom', '$telephone', '$courriel', '$decouverteAdd','')");
	$user2 = ADD\DB::query("INSERT INTO bddcomplete(horaire, debut, fin, nom, prenom, telephone, courriel, decouverteAdd, id) VALUES('$horaire', '$debut', '$fin', '$nom', '$prenom', '$telephone', '$courriel','$decouverteAdd', '')");

	header('Location: http://www.addquebec.ca/merci.php');
 ?>
