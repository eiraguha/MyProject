<?php $this->title = "Projet CPA"; ?>
<!-- Lister les fournisseurs du matériel informatique -->
<h3>Liste des fournisseurs</h3><br/>
 <table border="1">
	 <!-- Entêtes du tableau des fournisseurs -->
	<thead>
		<tr>
			<th> <?= "Identifiant"?></th>
			<th><?= "Dénomination"?></th>
			<th><?= "Adresse"?></th>
			<th><?= "Téléphone"?></th>
			<th><?= "Mail"?></th>
		</tr>
	</thead>
	<tbody>
<!-- Parcourir et afficher les valeurs de la table fournisseurs -->       
<?php foreach ($fournisseurs as $fournisseur):?>
    <tr>
		<td width=100px><?= $this->clean($fournisseur['Fournisseur_Id']) ?></td>
		<td width=200px><?= $this->clean($fournisseur['Fournisseur_Denom']) ?></td>
		<td width=600px><?= $this->clean($fournisseur['Adr_Fournisseur']) ?></td>
		<td width=100px><?= $this->clean($fournisseur['Tel_Fournisseur']) ?></td>
		<td width=400px><?= $this->clean($fournisseur['Mail_Fournisseur']) ?></td>
	</tr>  
<?php endforeach; ?>
</tbody>
</table>   
