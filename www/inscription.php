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
 <script src="js/reserve.js"></script>
</head>

<body>
 <?php include 'header.php'; ?>

 <div class="contenue">

 <div class="part1">

<h1 style="margin:20px 0 10px 0;">Nos types d'activités</h1>
<div class="forfaitsWrap">
	<div class="lesForfaits" >
	<h3 style="text-align:left;">ADD Débutant et remise en forme</h3><p style="text-align:left;">Premiers essais? Retour au sport après six saisons intensives de votre
	série télé préférée? Découvrez les bienfaits de l’ADD avec ces cours de 90 minutes qui ne requièrent aucune
	expérience préalable.</p></div>

	<div class="lesForfaits"><h3>ADD Jeunes</h3><p>Strictement réservé aux jeunes de 8 à 14 ans! Des jeux, des défis physiques, créatifs et
	d’équipe, des techniques de passements d’obstacles… Aucune expérience requise, mais il faut avoir envie de fournir des efforts!</p></div>

	<div class="lesForfaits" style="margin-right:0;"><h3 style="text-align:right;">ADD Cours avancés</h3><p style="text-align:right;">Après un minimum de deux ans d’entraînement et sous autorisation d’un instructeur
	: les guerriers et amazones auront un test à passer pour être admis! Les élus auront droit à 5% de réduction sur tous
	leurs abonnements.</p></div>

	<div class="lesForfaits"><h3 style="text-align:left;">ADD Cours intermédiaire</h3><p style="text-align:left;">Vous aimez les défis plus intenses physiquement et êtes à l’aise avec les mouvements
	de base? Dépassez-vous avec ces cours de deux heures.</p></div>

	<div class="lesForfaits"><h3>Mobilité et renforcement</h3><p>Entretenir votre santé ou récupérer d’une blessure sont vos objectifs, venez essayer ces entraînements différents de l'ADD qui vous permettront de travailler sur vos besoins spécifiques avec notre thérapeute du sport de la clinique Makinos Médic. Aucune expérience requise! (réservation 24hrs à l’avance)</p></div>

	<div class="lesForfaits" style="margin-right:0;"><h3 style="text-align:right;">Entrainement libre</h3><p style="text-align:right;">Au 88 rue St-Jean, notre salle spécialement aménagée, modulable et évoluant au fil
	des saisons. Venez vous entrainer à votre rythme!</p></div>

	<div style="clear:both;"></div>
</div>


 <h1 style="margin:20px 0 10px 0;">Inscription aux cours à Québec en <span style="text-decoration:underline;">trois étapes</span> faciles!</h1>

 <span class="etape">Étape 1 </span>
 <p class="forfaitDesc" style="float:left;">Cliquez sur le forfait souhaité.<br/>Exemple : 2 activités par semaine pendant six mois.</p>
 <div style="clear:both;border-bottom:1px dotted rgba(0,0,0,0.3);margin-bottom:15px;"></div>

<?php include 'forfait.php'; ?>

<p style="padding-top:5px;font-weight:bold;">Nos formules d'abonnement sont souples et vous permettent de choisir le nombre de cours que vous désirez suivre pendant une semaine.</p>


<div style="clear:both;height:25px;"></div>

<span class="etape">Étape 2 </span>
<p class="forfaitDesc">Entrez vos informations et cliquez sur <i>M’abonner</i>. Vous serez dirigé vers un système de paiement sécurisé, après quoi votre abonnement entrera <br/>immédiatement en vigueur.</p>
<div style="clear:both;border-bottom:1px dotted rgba(0,0,0,0.3);margin-bottom:15px;"></div>

	<div class="formInscription">

		 <form name="inscription" id="inscription" method="post"  action="https://www.paypal.com/cgi-bin/webscr"  target="_top">

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

		 <input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="JT9L9MLX3SZEQ">

		<table style="visibility:hidden;float:right;margin-top:-140px;">
		<tr><td><input type="hidden" name="on0" value="Votre forfait">Votre forfait</td></tr><tr><td>
		<select name="os0" id="os0">
		</select> </td></tr>
		</table>
		<input type="hidden" name="custom" id="custom" value="" >
		<input type="hidden" name="on3" id="on3" value="" >
		<input type="hidden" name="currency_code" value="CAD">
		 <div style="clear:both;height:5px;"></div>
		 <button type="submit" class="submit" style="float:left;" name="submit" >M'abonner</button>
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

	<!--<div class="h2Etape3">
		<h2>Cours découverte et remise en forme -> <span class="blue">ADD Débutant et remise en forme</span></h2>

		<h2>Cours régulier -> <span class="blue">ADD Cours intermédiaire</span></h2>

		<h2>Force et mobilité ->  <span class="blue">Mobilité et renforcement</span></h2>
	</div>

	<p>Entretenir votre santé ou récupérer d’une blessure sont vos objectifs, venez essayer ces entraînements différents de l'ADD qui vous permettront de travailler sur vos besoins spécifiques avec notre thérapeute du sport de la clinique Makinos Médic. Aucune expérience requise! (réservation 24hrs à l’avance)

	Pratique libre  Entrainement libre</p>
	-->

	<form method="post" action="mailCours.php" class="reserve-form">
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
				 	<select style="width:181px;" name="cours" required>
				 		<option value="" disabled selected>Choisissez un cours...</option>
				 		<option value="Lundi, ADD découverte : 18h30 à 20h00">Lundi ADD débutant : 18h30-20h</option>
				 		<option value="Mardi, ADD régulier : 18h30-20h30">Mardi ADD intermédiaire : 18h30-20h30</option>
				 		<option value="Mercredi, ADD débutant : 17h-18h30">Mercredi ADD débutant : 17h-18h30</option>
						<option value="Mercredi, ADD avancé : 19h-20h30">Mercredi ADD avancé : 18h30-20h00</option>
				 		<option value="Jeudi, ADD régulier : 18h30-20h30">Jeudi ADD intermédiaire : 18h30-20h30</option>
				 		<option value="Vendredi, ADD découverte : 16h-17h30">Vendredi ADD débutant : 16h-17h30</option>
				 		<option value="Samedi, force et mobilité : 11h-12h30">Samedi Mobilité &amp; Renforcement : 11h-12h30</option>
				 		<option value="Samedi, pratique libre 13h-16h">Samedi Entrainement libre en salle : 13h30-16h</option>
				 		<option value="Dimanche, ADD 8 à 10ans : 15h à 16h15">Dimanche ADD 8 à 10ans : 15h-16h15</option>
						<option value="Dimanche, ADD 11 à 15ans : 16h à 17h30">Dimanche ADD 11 à 15ans : 16h30-17h45</option>
				 		<option value="Dimanche ADD découverte : 17h30-19h00">Dimanche ADD débutant : 17h45-19h15</option>
				 	</select>
				 </td>
			 </tr>

		 </table>

		 <button type="submit" class="submit"  name="submit" style="width:250px;">Confirmez ma présence</button>
         <span class="response-message"></span>
	</form>

<div style="clear:both;margin-bottom:10px;"></div>

		<p style="font-size:12px;float:right;"><i>Veuillez noter que les cours n'ont pas lieu les jours <a  target="blank" href="http://www.revenuquebec.ca/fr/nous_joindre/entreprises/feries.aspx" >fériés.</a> </i></p>
	<div class="horaire">

	<?php include 'horaire.php'; ?>
	<p style="text-align: right;">
		<a title="Quebec_files/horaire_AOUT2014.pdf" target="_blank" href="Quebec_files/horaire.pdf" style="font-style:normal;font-size:13px;">Cliquez ici pour une version imprimable de l’horaire! </a>
	</p>
	</div>

	<div style="clear:both;margin-bottom:5px;"></div>

<h2>Les lieux</h2>
À partir du 15 octobre, pour la fin de l'automne et la période hivernale, nous nous rejoignons à notre nouvelle salle au 88 rue St-Jean. Chaussures de sport propres requises!
</br></br>
RAPPELS :</br>
* L'été et pendant les saisons chaudes, les cours se tiennent le plus souvent en plein air; cette page est alors mise à jour avec les points de ralliement. Même lorsque le point de rencontre est notre salle comme en ce moment, il est important de ne pas arriver en retard : s'il fait doux, l'instructeur dirige parfois une partie du cours à l'extérieur.</br>
* Quelle que soit la saison, nous vous recommandons de suivre de près notre page Facebook (www.facebook.com/addquebec).</br>
* N'oubliez pas de confirmer votre présence à chaque fois (étape 3), sachant que les cours n'ont pas lieu les jours fériés.</br>


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

(function() {
var selectedForfaitId = null;

var forfaits = {
	'12_sem_12_cours': {
		paypalId: '12 semaines - 12 cours',
		nom: '12 semaines - 12 cours $180,00 CAD',
		mois: 3
	},
	'12_sem_24_cours': {
		paypalId: '12 semaines - 24 cours',
		nom: '12 semaines - 24 cours $324,00 CAD',
		mois: 3
	},
	'12_sem_36_cours': {
		paypalId: '12 semaines - 36 cours',
		nom: '12 semaines - 36 cours $432,00 CAD',
		mois: 3
	},
	'24_sem_24_cours': {
		paypalId: '24 semaines - 24 cours',
		nom: '24 semaines - 24 cours $336,00 CAD',
		mois: 6
	},
	'24_sem_48_cours': {
		paypalId: '24 semaines - 48 cours',
		nom: '24 semaines - 48 cours $600,00 CAD',
		mois: 6
	},
	'24_sem_72_cours': {
		paypalId: '24 semaines - 72 cours',
		nom: '24 semaines - 72 cours $792,00 CAD',
		mois: 6
	},
	'illimite': {
		paypalId: 'Forfait annuel illimité',
		nom: 'Forfait annuel illimité $1 100,00 CAD',
		mois: 12
	}
};

var $os0 = $('#os0');
$os0.append($.map(forfaits, function(forfait, key) {
	return $('<option/>', {
		text: forfait.nom,
		value: forfait.paypalId,
		'data-forfait-id': key
	});
}));

$('.forfait-item').on('click', function() {
	var $forfait = $(this),
		forfaitId = $forfait.data('forfait-id');

	if(!forfaitId || !forfaits[forfaitId]) {
		return;
	}

	if(forfaitId == 'illimite') {
		alert("Vous désirez vous inscrire pour un forfait illimité, nous vous proposons de nous contacter ou de payer en personne par chèque ou argent comptant. \nMerci!\n\ninfo@addquebec.ca\n581-300-6545");
		return;
	}

	$('.forfait-item').removeClass('selected');
	$forfait.addClass('selected');
	selectedForfaitId = forfaitId;
});

$('#inscription').on('submit', function validateForm(){
	if(selectedForfaitId){
		//Préparation des variables contenant les valeurs des champs du formulaire
		$duree = forfaits[selectedForfaitId].mois;
		$nom = document.getElementById("formNom").value;
		$prenom = document.getElementById("formPrenom").value;
		$tel = document.getElementById("tel").value;
		$courriel = document.getElementById("courriel").value;
		$comments = document.getElementById("formComments").value;

		//Construction des tableaux qui seront envoyés aux variables "custom" et "on3"
		$formValue = [$duree, $nom, $prenom, $tel, $courriel, $comments];
		$os0.find('option[data-forfait-id="'+ selectedForfaitId +'"]').prop('selected', 'selected');
		document.getElementById("custom").value = $formValue;

		return true;
	}
	else {
		alert("Veuillez choisir un forfait!");
		return false;
	}
});
})();
</script>
</body>
</html>
