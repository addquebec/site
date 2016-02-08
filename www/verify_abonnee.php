<?php	
	require_once('../bootstrap.php');

	$maBase = ADD\DB::query('SELECT * FROM paypal');
	//Je parcours la base de donnée au complet pour savoir si un abonnement est expiré
	//et je le suprimme de la base paypal et de toute les autres bases
	while ($donnees = mysqli_fetch_assoc($maBase))
	{
   		$fin = $donnees['fin'];

   		if (time() >= strtotime($fin)) {
   		  $id = $donnees['id'];
		  $bdd = mysqli_query("DELETE FROM paypal WHERE id='$id' ");
		}
	}
?>
