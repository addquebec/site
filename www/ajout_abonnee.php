<?php
	require_once('../bootstrap.php');
	//Recoit les informations du formulaire
	//Les informations sont passées par les variables "custom" et "on3", car cela doit être des variables prédéfénies
	//par Paypal, sinon elles ne passeront pas à travers la validation de paiement(ipn.php) et tout les champs ajoutés à la BDD seront vide

	//Les informations reçus sous forme de string sont séparés en tableaux pour pouvoir les utilisées
	$custom = explode("," , $_POST['custom']);

	$courriel = $custom[4];
 	$nom = $custom[1];
 	$prenom = $custom[2]; 
 	$telephone = $custom[3];
 	$decouverteAdd = $custom[5];
	$duree = $custom[0];
	$horaire = $_POST['os0'];
	
	//Date du début de l'abonnement
 	$debut = date("Y-m-d");

 	$fin = "";

 	//Calcul le fin de l'abonnement selon la durée choisi
 	switch ($duree) {
 		case '0':
 			$fin = date('Y-m-d', strtotime('+1 week'));
 			break;
 		
 		case '3':
 			$fin = date('Y-m-d', strtotime('+3 month'));
 			break;

 		case '6':
 			$fin = date('Y-m-d', strtotime('+6 month'));
 			break;

 		case '12':
 			$fin = date('Y-m-d', strtotime('+12 month'));
 			break;
 	}

    //Définit le format d'écriture en utf-8 pour l'insertion à la BDD
    ADD\DB::query("SET NAMES 'utf8'");

	//Protège les variables contre les injections sql
	$decouverteAdd = mysqli_real_escape_string($decouverteAdd);
	$horaire = mysqli_real_escape_string($horaire);
	$nom = mysqli_real_escape_string($nom);
	$prenom = mysqli_real_escape_string($prenom);
	$telephone = mysqli_real_escape_string($telephone);
	$courriel = mysqli_real_escape_string($courriel);

    //Insert dans la BDD 

	$user = ADD\DB::query("INSERT INTO paypal(horaire, debut, fin, nom, prenom, telephone, courriel, decouverteAdd, id) VALUES('$horaire', '$debut', '$fin', '$nom', '$prenom', '$telephone', '$courriel', '$decouverteAdd','')");
	$user2 = ADD\DB::query("INSERT INTO bddcomplete(horaire, debut, fin, nom, prenom, telephone, courriel, decouverteAdd, id) VALUES('$horaire', '$debut', '$fin', '$nom', '$prenom', '$telephone', '$courriel','$decouverteAdd', '')");

	header('Location: http://www.addquebec.ca/merci.php');
 ?>
