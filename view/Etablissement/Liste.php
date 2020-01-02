<?php $this->title = "Mon Blog"; ?>
<h3>Liste des établissements et adresses</h3><br/>
 <table border="1">
	<thead>
		<tr>
			<!-- Entêtes du tableau -->
			<th><?= "Nom de l'établissement"?></th>
			<th><?= "Adresse de l'établissement"?></th>
		</tr>
	</thead>
	<tbody>   
<!-- Parcourir et afficher les valeurs de la table 'etablissements'-->      
<?php foreach ($etablissements as $etablissement): ?>
       
    <tr>
		<td><?= $this->clean($etablissement['Etabl_Denomination']) ?></td>
		<td><?= $this->clean($etablissement['Adr_Etabl']) ?></td>
	</tr>  
<?php endforeach; ?>
</tbody>
</table>
