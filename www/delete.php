 <?php
	require_once('../bootstrap.php');
	$maBase = ADD\DB::query('SELECT * FROM paypal');

	$nom = mysqli_real_escape_string($_POST['nom']);
	$prenom = mysqli_real_escape_string($_POST['prenom']);

	//Je parcours la base de donnée au complet pour savoir si un abonnement est expiré
	//et je le suprimme de la base paypal et de toute les autres bases
	while ($donnees = mysqli_fetch_assoc($maBase)) {
		  $bdd = ADD\DB::query("DELETE FROM paypal WHERE nom='$nom' AND prenom='$prenom' ");
	}

	header('Location: http://www.addquebec.ca/admin.php');
?>
