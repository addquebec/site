<?php

require_once('../bootstrap.php');
define('ADD_EMAIL', getenv('ADD_EMAIL'));
ADD_EMAIL or die('Email mal configuré');

header('Content-Type: application/json');

if (!isset($_POST['nom'])
		OR !isset($_POST['mail'])
		OR !isset($_POST['tel'])
		OR !isset($_POST['cours'])) {
	http_response_code(400);
	$response = array(
		'success' => FALSE,
		'message' => 'Veuillez remplir tous les champs.',
	);
	echo json_encode($response);
	exit();
}

$sujet = $_POST['cours']." ".$_POST['nom']. " ". $_POST['tel'] ;
$message = $_POST['mail']. " ". $_POST['tel'] ;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: ". $_POST['email'] ."\r\n";

$headers2 = "MIME-Version: 1.0" . "\r\n";
$headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers2 .= "From: noreply@addquebec.ca"."\r\n";

mail(ADD_EMAIL, $sujet, $message, $headers);

$response = array(
	'success' => TRUE
);
echo json_encode($response);
