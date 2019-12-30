<?php $this->title = "Mon Blog"; ?>
<h3>Liste des fournisseurs</h3><br/>
 <table border="1">
	<thead>
		<tr>
			<th align="center"> <?= "Id fournisseur"?></th>
			<th align="center"><?= "Dénomination fournisseur"?></th>
			<th align="center"><?= "Adresse"?></th>
			<th align="center"><?= "Téléphone"?></th>
			<th align="center"><?= "Mail"?></th>
		</tr>
	</thead>
	<tbody>        
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
