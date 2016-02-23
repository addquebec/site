<?php

require_once('../bootstrap.php');
define('ADD_EMAIL', getenv('ADD_EMAIL'));
ADD_EMAIL or die('Email mal configuré');

if( /* Si j'ai bien reçu tout le formulaire sans champ manquant */ isset($_POST['nom']) AND isset($_POST['mail']) AND isset($_POST['tel']) AND isset($_POST['cours'])){

	$sujet = $_POST['cours']." ".$_POST['nom']. " ". $_POST['tel'] ;
    $message = $_POST['mail']. " ". $_POST['tel'] ;
    $headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From: ". $_POST['email'] ."\r\n";

	$headers2 = "MIME-Version: 1.0" . "\r\n";
	$headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers2 .= "From: noreply@addquebec.ca"."\r\n";

mail(ADD_EMAIL, $sujet, $message, $headers);

header("Location: http://www.addquebec.ca/inscription.php");

}

?>
