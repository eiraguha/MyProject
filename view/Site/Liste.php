<?php $this->title = "Mon Blog"; ?>
<h3>Lister les sites</h3></br>
 <table border="1">
<!--Afficher les entêtes de la table 'sites'-->
	<thead>
		<tr>
			<th> <?= "Identifiant du site"?></th>
			<th><?= "Adresse du site"?></th>
		</tr>
	</thead>
	<tbody>
<!--Parcourir et fficher les valeurs de la table 'sites'-->		       
<?php foreach ($sites as $site):?>
    <tr>
        <td><?= $this->clean($site['Site_Id']) ?></td>
        <td><?= $this->clean($site['Adr_Site']) ?></td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>
