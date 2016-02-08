<?php
require_once('../bootstrap.php');
// On prolonge la session
session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['login'])) 
{
 // Si inexistante ou nulle, on redirige vers le formulaire de login
 header('Location: adminform.php');
 exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
 <head>
 <meta charset="utf-8">
 <title>Administration</title>
 <style type="text/css">
 table {
 float: left;
 margin-right: 50px;
 margin-bottom: 50px;
 }
 .titreAbonnement {
 background:#2d2d2c;
 border:none;
 color:#FFF;
 height:45px;
 font-size:17px;
 -webkit-transition:color 1s ease;
 -moz-transition:color 1s ease;
 transition:color 1s ease;
 }

 .titreAbonnement:hover {
 color:#358fcb;
 }

 td {
 width:215px;
 height:35px;
 text-align:center;
 border:1.5px solid #e7e7e7;
 background:#dddcdc;
 -webkit-transition:background 1s ease;
 -moz-transition:background 1s ease;
 transition:background 1s ease;
 }

 h1{
 font-size: 40px;
 text-align: center;
 }

 .tableComplet{
 display: none;
 }
 </style>

 </head>
 <body style="background:#6babf9;">
 <?php
 // Ici on est bien loggué, on affiche un message
 echo '<h1>Bienvenue</h1>'; 
 ?>

<a href="inscription_admin.php" style="position:absolute;top:20px;left:20px;">Cliquez ici pour accèder à la page d'inscription administrateur</a>


<div style="background:rgba(255,0,0,0.8);width:660px;height:120px;margin-bottom:25px;"> 
<h2 style="height:45px; background:#2d2d2c;width:100%;color:white;text-align:center;line-height:45px;">Suprimmer une personne de la base de donnée</h2>
	<form onsubmit="return confirm('Êtes vous sûre de vouloir supprimer cette personne ?');" action="delete.php" method="post">
		<label style="font-size:20px;margin-left:20px;float:left;line-height:30px;">Nom : </label><input type="text" name="nom" placeholder="Entrez le nom" style="width:180px;height:25px;float:left;margin:0 10px;">
		<label style="font-size:20px;margin-left:20px;float:left;line-height:30px;">Prénom : </label><input type="text" name="prenom" placeholder="Entrez le prénom" style="width:180px;height:25px;float:left;margin:0 10px;">
		<button type="submit" class="submit" style="float:left;height:32px;">Suprimmer</button>
	</form>
</div>

<table style="float:none;">
 <tr>
 <td class="titreAbonnement">Horaire</td>
 <td class="titreAbonnement">Début abonnement</td>
 <td class="titreAbonnement">Fin abonnement</td>
 <td class="titreAbonnement">Nom</td>
 <td class="titreAbonnement">Prénom</td>
 <td class="titreAbonnement">Téléphone</td>
 <td class="titreAbonnement">Courriel</td>
 <td class="titreAbonnement">Comment ils ont découvert l'ADD</td>
 <td class="titreAbonnement">ID (identifiant unique)</td>
 </tr>

<?php

$reponse = ADD\DB::PDO()->query('SELECT * FROM paypal ORDER BY horaire ASC');

while ($donnees = $reponse->fetch())
{
 ?>
 <tr> 
 <td><?php echo $donnees['horaire']; ?></td>
 <td><?php echo $donnees['debut']; ?></td>
 <td><?php echo $donnees['fin']; ?></td>
 <td><?php echo $donnees['nom']; ?></td>
 <td><?php echo $donnees['prenom']; ?></td>
 <td><?php echo $donnees['telephone']; ?></td>
 <td><?php echo $donnees['courriel']; ?></td>
 <td><?php echo $donnees['decouverteAdd']; ?></td>
 <td><?php echo $donnees['id']; ?></td>
 </tr>
 <?php
}

?>
</table>

<h1 class="titreBddComplete" onclick="show()" style="cursor:pointer;">Cliquez ici pour afficher/cacher la liste de tous les abonnés (sans suppression)</h1>
<table style="float:none;" class="tableComplet" id="tableComplet">
 <tr>
 <td class="titreAbonnement">Horaire</td>
 <td class="titreAbonnement">Début abonnement</td>
 <td class="titreAbonnement">Fin abonnement</td>
 <td class="titreAbonnement">Nom</td>
 <td class="titreAbonnement">Prenom</td>
 <td class="titreAbonnement">Téléphone</td>
 <td class="titreAbonnement">Courriel</td>
 <td class="titreAbonnement">Comment ils ont découvert l'ADD</td>
 </tr>

<?php

$reponse = ADD\DB::PDO()->query('SELECT * FROM bddcomplete ORDER BY horaire ASC');

while ($donnees = $reponse->fetch())
{
 ?>
 <tr> 
 <td><?php echo $donnees['horaire']; ?></td>
 <td><?php echo $donnees['debut']; ?></td>
 <td><?php echo $donnees['fin']; ?></td>
 <td><?php echo $donnees['nom']; ?></td>
 <td><?php echo $donnees['prenom']; ?></td>
 <td><?php echo $donnees['telephone']; ?></td>
 <td><?php echo $donnees['courriel']; ?></td>
 <td><?php echo $donnees['decouverteAdd']; ?></td>
 </tr>
 <?php
}

?>
</table>

 <br/><a href="logout.php" style="position:fixed;top:20px;right:20px;">Se déconnecter</a>
<script>
$toggle = false; 

 function show(){
 if ($toggle) {
 document.getElementById("tableComplet").style.display='none';
 $toggle = false;
 }
 else
 {
 document.getElementById("tableComplet").style.display='inline';
 $toggle = true;
 }
 }
</script>

 </body>
</html>
