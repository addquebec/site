<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">
<head>
 <title>Inscription cours à Québec</title>
 <link rel="icon" type="image/png" href="images/ico.png" />
 <link rel="shortcut icon" href="favicon.ico" />
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
 <meta name="description" content="Inscription aux cours à Québec.">
 <meta name="keyword" content="art du déplacement, ADD, ADD Academy, Yamakasi, parkour, freerun, freerunning, sports urbains, québec, canada, cours, entraînement, école">
 <?php include 'link.php'; ?>
</head>
 
<body>
 <?php include 'header.php'; ?>  
 
 <div class="contenue"> 
 <div class="part1"> 
 <h1 style="margin:20px 0 10px 0;">Inscription aux cours à Québec en <span style="text-decoration:underline;">trois étapes</span> faciles!</h1>

 <span class="etape">Étape 1 </span>
 <p class="forfaitDesc" style="float:left;">Cliquez sur le forfait souhaité.<br/>Exemple : 2 activités par semaine pendant six mois.</p>
 <a title="Quebec_files/horaire_AOUT2014.pdf" target="_blank" href="Quebec_files/horaire_AOUT2014-2.pdf" style="float:right;padding-top:22px;font-style:normal;font-size:13px;">Cliquez ici pour une version imprimable de l’horaire! </a>
 <div style="clear:both;border-bottom:1px dotted rgba(0,0,0,0.3);margin-bottom:15px;"></div> 

<div class="lesForfaits" ><h3 style="text-align:left;">ADD Découverte et remise en forme</h3><p style="text-align:left;">Premiers essais? Retour au sport après six saisons intensives de votre 
série télé préférée? Découvrez les bienfaits de l’ADD avec ces cours de 90 minutes qui ne requièrent aucune 
expérience préalable.</p></div>

<div class="lesForfaits"><h3>ADD Jeunes</h3><p>Strictement réservé aux jeunes de 8 à 14 ans! Des jeux, des défis physiques, créatifs et 
d’équipe, des techniques de passements d’obstacles… Aucune expérience requise, mais il faut avoir envie de fournir des efforts!</p></div>

<div class="lesForfaits" style="margin-right:0;"><h3 style="text-align:right;">ADD Cours avancés</h3><p style="text-align:right;">Après un minimum de deux ans d’entraînement et sous autorisation d’un instructeur 
: les guerriers et amazones auront un test à passer pour être admis! Les élus auront droit à 5% de réduction sur tous 
leurs abonnements.</p></div>

<div class="lesForfaits"><h3 style="text-align:left;">ADD Cours réguliers</h3><p style="text-align:left;">Vous aimez les défis plus intenses physiquement et êtes à l’aise avec les mouvements 
de base? Dépassez-vous avec ces cours de deux heures.</p></div>

<div class="lesForfaits"><h3>Force et mobilité</h3><p>Ces entrainements différents de l’ADD visent à entretenir votre santé, avec des
 exercices variés et adaptables à vos besoins. Aucune expérience requise!</p></div>

<div class="lesForfaits" style="margin-right:0;"><h3 style="text-align:right;">Pratique libre</h3><p style="text-align:right;">Au 88 rue St-Jean, notre salle spécialement aménagée, modulable et évoluant au fil 
des saisons. Venez vous entrainer à votre rythme!</p></div>
 

<?php include 'forfait.php'; ?>


<div style="clear:both;height:25px;"></div>

<span class="etape">Étape 2 </span>
<p class="forfaitDesc">Entrez vos informations et cliquez sur S’abonner. Vous serez dirigé vers un système de paiement sécurisé, après quoi votre abonnement entrera <br/>immédiatement en vigueur.</p>
<div style="clear:both;border-bottom:1px dotted rgba(0,0,0,0.3);margin-bottom:15px;"></div> 

	<div class="formInscription">

		 <form name="inscription" method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr"  target="_top" onsubmit="return validateForm()">
		 <!-- method="post" action="https://www.paypal.com/cgi-bin/webscr" target="_top" onsubmit="return validateForm()" -->
		 
		 <table class="tableForm" style="float:left;"> 
		 <tr>
			 <td class="formLabel" style="width:40px;">Nom :</td>
			 <td><input class="input" type="text" placeholder="Entrez votre nom" id="formNom" style="width: 181px" required name="nom"></td> 
			 <td class="formLabel" >Prénom :</td>
			 <td><input class="input" type="text" placeholder="Entrez votre prénom" id="formPrenom" style="width: 181px" required name="prenom"></td>
		 </tr>

		 <tr>
			 <td class="formLabel" style="width:40px;">Tél. :</td>
			 <td><input class="input" type="text" placeholder="Téléphone" id="tel" style="width: 181px" required name="phone"></td>
			 <td class="formLabel">Courriel :</td>
			 <td><input class="input" type="text" placeholder="Entrez votre courriel" id="courriel" style="width: 181px" required name="courriel"></td>
			 <td class="formLabel" style="width:35px;">Âge :</td>
			 <td><input class="input" type="number" required name="age" id="age" value="0" min="8" max="100" style="width:45px;"></td>
		 </tr>
		 </table>

		 <div style="clear:both;"></div>

		 <div class="decouverteAdd">
		 <p>Comment avez-vous connu l’Académie? </p>
		 <textarea name="decouverteAdd" id="formComments" required rows="5" cols="79" style="resize:none;"></textarea>
		 </div>

		 <div style="clear:both;"></div>

		<!-- VALEUR DU BOUTON D'ORIGINE <input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="Z8Q6ZJD8NE9YW"> -->

		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="NL8W4X5Q8PMBU">
 
		<table style="visibility:hidden;float:right;margin-top:-140px;">
		<tr><td><input type="hidden" name="on0" value="Votre forfait">Votre forfait</td></tr><tr><td>
		<select name="os0" id="os0">
			<option value="12 semaines - 1 act/sem">12 semaines - 1 act/sem $180.00 CAD</option>
			<option value="12 semaines - 2 act/sem">12 semaines - 2 act/sem $324.00 CAD</option>
			<option value="12 semaines - 3 act/sem">12 semaines - 3 act/sem $432.00 CAD</option>
			<option value="24 semaines - 1 act/sem">24 semaines - 1 act/sem $336.00 CAD</option>
			<option value="24 semaines - 2 act/sem">24 semaines - 2 act/sem $600.00 CAD</option>
			<option value="24 semaines - 3 act/sem">24 semaines - 3 act/sem $792.00 CAD</option>
			<option value="Forfait annuel illimité">Forfait annuel illimité $1,100.00 CAD</option>
		</select> </td></tr>
		</table>
		<input type="hidden" name="custom" id="custom" value="" >
		<input type="hidden" name="on3" id="on3" value="" >
		<input type="hidden" name="currency_code" value="CAD">
		 <div style="clear:both;height:5px;"></div>
		 <button type="submit" class="submit" style="float:left;" name="submit" >S'abonner</button>
		 <input type="hidden" id="duree" name="duree" value="0">
	 </form>

	 <div style="clear:both;margin-bottom:25px;"></div>

	 <div class="comments">
		<p class="commentaire" style="border:none;margin-top:-10px;">
		Pas convaincu?
		Découvrez les <a href="9raisons.php" style="font-style:normal;text-decoration:underline;"><span style="font-family:Arial;font-weight:normal;">9</span> raisons d’essayer l’ADD! </a><br/>
		 Pas certain de la formule qui vous convient? Faites un <b>cours d'essai gratuit</b> ou <a class="contactForm" style="font-style:normal;text-decoration:underline;">contactez-nous!</a><br/>
		<br/>Pour la politique de réservation et d’annulation : 
		<a title="Quebec_files/politique_annulation.pdf" href="Quebec_files/politique_annulation.pdf" style="font-style:normal;text-decoration:underline;" target="_blank">cliquez ici.</a></p>
		</div>

 <div style="clear:both;margin-bottom:5px;"></div>

<span class="etape">Étape 3 </span>
	<p class="forfaitDesc">Confirmez votre présence aux cours. Ce système est très souple et vous permet de venir quand vous voulez dans la semaine, mais vous avez <br/>la responsabilité de confirmer votre présence aux cours chaque semaine, au moins 3 heures à l’avance.</p>
	<div style="clear:both;border-bottom:1px dotted rgba(0,0,0,0.3);margin-bottom:15px;"></div> 


	<form method="post" action="mailCours.php" onsubmit="alert('Merci!')">
		 <table class="tableForm" > 
			 <tr>
			 	 <td class="formLabel" style="width:46px;">Nom :</td>
				 <td><input class="input" type="text" placeholder="Entrez votre nom et prénom" style="width:200px;" required name="nom"></td>   
				 <td class="formLabel" style="width:60px;">Courriel :</td>
				 <td><input class="input" type="text" placeholder="Entrez votre adresse courriel" style="width: 175px" required name="mail"></td> 
			 </tr>
			 <tr>
			 	<td class="formLabel" style="width:32px;">Tél. :</td>
				<td><input class="input" type="text" placeholder="Numéros de téléphone"  style="width:200px;" required name="tel"></td> 
			 	<td class="formLabel" style="width:170px;">Je viendrai au cours de :</td>
				<td>
				 	<select style="width:181px;" name="cours"> 
				 		<option>Choisissez un cours...</option>
				 		<option value="Lundi, pratique libre : 15h-18h">Lundi Pratique libre : 15h-18h</option>
				 		<option value="Lundi, ADD découverte : 18h30 à 20h00">Lundi ADD découverte : 18h30-20h</option>
				 		<option value="Mardi, ADD régulier : 18h30-20h30">Mardi ADD régulier : 18h30-20h30</option>
				 		<option value="Mercredi, ADD avancé : 19h-20h30">Mercredi ADD avancé : 19h-20h30</option> 
				 		<option value="Jeudi, ADD régulier : 18h30-20h30">Jeudi ADD régulier : 18h30-20h30</option>
				 		<option value="Vendredi, ADD découverte : 16h-17h30">Vendredi ADD découverte : 16h-17h30</option>
				 		<option value="Vendredi, Pratique libre : 17h30-20h30">Vendredi Pratique libre : 17h30-20h30</option>
				 		<option value="Samedi, force et mobilité : 11h-12h30">Samedi Force et mobilité : 11h-12h30</option>
				 		<option value="Samedi, pratique libre 13h-16h">Samedi Pratique libre 13h-16h</option>
				 		<option value="Dimanche, ADD 8 à 14ans : 16h à 17h30">Dimanche ADD 8 à 14ans : 16h-17h30</option>
				 		<option value="Dimanche ADD découverte : 17h30-19h00">Dimanche ADD découverte : 17h30-19h</option>
				 	</select>
				 </td>
			 </tr>
			
		 </table>
		 
		 <button type="submit" class="submit"  name="submit" style="width:250px;float:left;">Confirmez ma présence</button>
	</form>

<div style="clear:both;margin-bottom:10px;"></div>

		<p style="font-size:12px;float:right;"><i>Veuillez noter que les cours n'ont pas lieu les jours <a target="blank" href="http://www.revenuquebec.ca/fr/nous_joindre/entreprises/feries.aspx">fériés.</a> </i></p>
	<div class="horaire">
	<?php include 'horaire.php'; ?>
	</div>

	<div style="clear:both;margin-bottom:5px;"></div>

<h2>Les lieux</h2>
<p>Les pratiques libres et la plupart des cours « Force et mobilité » ont lieu dans notre salle au 88 rue St-Jean. Les autres cours se tiennent généralement en <b>plein air</b>, sauf l’hiver et en cas d’orage violent. Attention : <b>en cas de doute</b> (ex. : pluie), jetez un coup d'œil à la page Facebook avant de partir de chez vous. L’adresse de la page Facebook est www.facebook.com/addquebec et il n’est pas nécessaire d’avoir un compte pour la consulter. En l’absence d’un avis contraire, les lieux de ralliement sont les suivants :
<br/> <b>Les lundis, vendredis et samedis</b>, le point de rendez-vous est ici même!<br/><br/>
Les mardis, mercredis, jeudis et dimanches, nous changeons fréquemment de parc. Jusqu’à la fin du mois d’août, les cours ont lieu le long de la rivière St-Charles (rendez-vous à l’entrée du Centre récréatif St-Roch, 230 rue du Pont, près du cercle de rochers.<a href="https://www.google.ca/maps/dir//46.8181083,-71.2237802/@46.8179785,-71.224022,18z/data=!4m3!4m2!1m0!1m0" target="_blank" style="font-style:normal;"> Voir sur Google Maps.</a>). 
<br/><br/>
L’instructeur dirige souvent le groupe vers un autre lieu : il est donc important d’arriver à l’heure!
</p>

<div style="clear:both;margin-bottom:25px;"></div>



 </div>

 <h2 style="margin-top:20px;">Documents obligatoires : </h2>
 <p class="txtDocument">
 Aussi important que la bouteille d’eau! Pour participer à nos 
 activités, veuillez imprimer et signer les deux documents suivants.
 N’oubliez pas de les apporter au premier cours. Pour les mineurs, 
 un parent ou tuteur doit signer. 
 </p>

 <span class="iconic" style="opacity:0.8;font-size:30px;margin-bottom:5px;"> $</span> <a title="Quebec_files/responsabilites.pdf" href="Quebec_files/responsabilites.pdf" target="_blank">Acceptation des risques</a><br/>
 <div style="height:5px;"></div>
 <span class="iconic" style="opacity:0.8;font-size:30px;">$</span> <a title="Quebec_files/diffusion.pdf" href="Quebec_files/diffusion.pdf" target="_blank">Acceptation de diffusion</a>

 <div class="iconeDocument">
 <img src="images/docIcone.png" alt="" class="iconeDoc">
 <span class="iconic" style="opacity:0.8;float:left;margin-top:35px;padding-left:9px;">+</span>
 <img src="images/bottle.png" alt="" class="bouteille">
 </div>
 
 <div style="clear:both;"></div> 
 </div> 
 </div> 

<?php include 'footer.php'; ?>
  
<script type="text/javascript">
$forfait = 0;
$horaire = "";

//Fonction construit les tableaux qui seront passé
//a ajout_abonnee.php
function validateForm(){

	if($forfait != 0){
		//Préparation des variables contenant les valeurs des champs du formulaire
		$duree = document.getElementById('duree').value;
		$nom = document.getElementById("formNom").value;
		$prenom = document.getElementById("formPrenom").value;
		$tel = document.getElementById("tel").value;
		$courriel = document.getElementById("courriel").value;
		$comments = document.getElementById("formComments").value;
		
		
		//Construction des tableaux qui seront envoyés aux variables "custom" et "on3"	
		$formValue = [$duree, $nom, $prenom, $tel, $courriel, $comments];
		document.getElementById("custom").value = $formValue;
		document.getElementById("os0").value = $horaire;

		return true;
	}
	else
	{
		alert("Veuillez choisir un forfait!");
		return false;
	}
}

//Fonction qui gère le changement de forfait
function buildHoraire($nbForfait, $nbcours, $duree){
$forfait = $nbForfait;

 $("#1,#2,#3,#4,#5,#6,#7,#8").css('background-color', '#dddcdc');
 document.getElementById($nbForfait).style.backgroundColor = "rgba(255,0,0,0.6)";

//"nbcours et duree" ne sont pas pas visibles, elles servent seulement au traitement des données.
 document.getElementById('duree').value = $duree;

//Lorsqu'un forfait est sélectionné, l'index du selectbox du boutton paypal est modifié.
//Le selectbox est caché.
 switch($nbForfait){// select name = os0 
 	case 2:document.getElementById("os0").selectedIndex = 0;
 		break;
 	case 3:document.getElementById("os0").selectedIndex = 3;
 		break;
 	case 4:document.getElementById("os0").selectedIndex = 1;
 		break;
 	case 5:document.getElementById("os0").selectedIndex = 4;
 		break;
 	case 6:document.getElementById("os0").selectedIndex = 2;
 		break;
 	case 7:document.getElementById("os0").selectedIndex = 5;
 		break;
 	case 8:document.getElementById("os0").selectedIndex = 6;
 		break;
 	}
 	$horaire = document.getElementById("os0").value;
}

</script>
</body>
</html>