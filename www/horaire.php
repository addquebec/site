<?php require('../bootstrap.php'); ?>

<table class="table" cellspacing="0" cellpadding="0">
	<thead>
		<tr>
			<td class="titreAbonnement"></td>
			<?php foreach(ADD\Horaire::jours() as $_ => $jour): ?>
				  <td class="titreAbonnement"><?= $jour; ?></td>
			<?php endforeach; ?>
		</tr>
	</thead>
	<?php
	$horaireDebut = ADD\Horaire::heureDebut() * 60;
	$horaireFin = ADD\Horaire::heureFin() * 60;
	$rowspanRestants = [];
	?>
	<?php for($i = $horaireDebut; $i < $horaireFin; $i += ADD\Horaire::$minIncr): ?>
		<tr>
			<?php if($i % 60 == 0): ?>
				<td class="heure" rowspan="<?= 60 / ADD\Horaire::$minIncr ?>">
					<?= $i / 60 ?>h
				</td>
			<?php endif; ?>
			<?php foreach(ADD\Horaire::jours() as $j => $_): ?>
				<?php if(!empty($rowspanRestants[$j])): ?>
					<?php $rowspanRestants[$j]--; ?>
				<?php elseif(($cours = ADD\Horaire::coursDebutant($j, (int)($i / 60), $i % 60))): ?>
					<?php
					$rowspan = $cours->duree() / ADD\Horaire::$minIncr;
					$rowspanRestants[$j] = $rowspan - 1;
					?>
					<td class="cours <?= $cours->type; ?>" rowspan="<?= $rowspan; ?>"><?= $cours->textHoraire() ?></td>
				<?php else: ?>
					<td></td>
				<?php endif; ?>
			<?php endforeach; ?>
		</tr>
	<?php endfor; ?>
</table>
