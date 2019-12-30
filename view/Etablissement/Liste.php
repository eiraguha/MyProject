<?php $this->title = "Mon Blog"; ?>
<h3>Liste des établissements et adresses</h3><br/>
 <table border="1">
	<thead>
		<tr>
			<th align="center"> <?= "Nom de l'établissement"?></th>
			<th align="center"><?= "Adresse de l'établissement"?></th>
		</tr>
	</thead>
	<tbody>        
<?php foreach ($etablissements as $etablissement): ?>
       
    <tr>
		<td width=400px><?= $this->clean($etablissement['Etabl_Denomination']) ?></td>
		<td width=400px><?= $this->clean($etablissement['Adr_Etabl']) ?></td>
	</tr>  
<?php endforeach; ?>
</tbody>
</table>
