<?php $this->title = "Mon Blog"; ?>
<!--/** Afficher un tableau d'inventaire des équipements */-->
<!--/** Afficher les entêtes du tableau */-->
<h3>Liste des équipements et leur affectation</h3><br/>
 <table border="1">
	<thead>
		<tr>
			<!-- Entêtes du tableau -->
			<th><?= "Identifiant Equipement"?></th>
			<th><?= "Déscription Equipement"?></th>
			<th><?= "Prénom Utilisateur"?></th>
			<th><?= "Nom Utilisateur"?></th>
			<th><?= "Téléphone Utilisateur"?></th>
			<th><?= "Adresse Mail <br/> Utilisateur"?></th>	
		</tr>
	</thead>
	<tbody>   
		<!--/** Parcourir la table equipements et afficher ses valeurs */-->     
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
