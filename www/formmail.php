<?php

if( /* Si j'ai bien reçu tout le formulaire sans champ manquant */ isset($_POST['nom']) AND isset($_POST['email']) AND isset($_POST['message']) ){

	$destinataire = "info@addquebec.ca";
	$sujet = "Message de " . $_POST['nom']." : "."\r\n";
	$sujet .= $_POST['sujet'];
    $message = $_POST['message'] ;
    $headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From: ". $_POST['email'] ."\r\n";

 

mail($destinataire, $sujet, $message, $headers);
header("Location: http://www.addquebec.ca/index.php");

}

?>

