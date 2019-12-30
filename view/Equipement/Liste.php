<?php $this->title = "Mon Blog"; ?>
<h3>Liste des équipements et leur affectation</h3><br/>
 <table border="1">
	<thead>
		<tr>
			<th align="center"><?= "Identifiant équipement"?></th>
			<th align="center"><?= "Equipement"?></th>
			<th align="center"><?= "Prénom Utilisateur"?></th>
			<th align="center"><?= "Nom Utilisateur"?></th>
			<th align="center"><?= "Téléphone"?></th>
			<th align="center"><?= "Mail"?></th>	
		</tr>
	</thead>
	<tbody>        
		<?php foreach ($equipements as $equipement):?>
   		<tr>
			<td width=20px><?= $this->clean($equipement['Equip_Id']) ?></td>
			<td><?= $this->clean($equipement['Equip_Type']) ?></td>
			<td width=20px><?= $this->clean($equipement['Prenom_Utilisateur']) ?></td>
			<td><?= $this->clean($equipement['Nom_Utilisateur']) ?></td>
			<td><?= $this->clean($equipement['Tel_Utilisateur']) ?></td>
			<td width=250px><?= $this->clean($equipement['Mail_Utilisateur']) ?></td>
		</tr>  
        
		<?php endforeach; ?>
	</tbody>
	</table>
        
