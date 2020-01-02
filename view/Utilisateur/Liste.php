<?php $this->title = "Projet CPA"; ?>
<!--Afficher la liste des utilisateurs -->
<h3>Liste des utilisateurs</h3><br/>
 <table border="1">
 <!--Afficher les entêtes de la table 'utilisateurs'--> 
	<thead>
		<tr>
			<th><?= "Identifiant"?></th>
			<th><?= "Prénom"?></th>
			<th><?= "Nom"?></th>
			<th><?= "Email"?></th>
			<th><?= "Téléphone"?></th>
		</tr>
	</thead>
	<tbody>        
<!--Parcourir et Afficher les valeurs la table 'utilisateurs' --> 
<?php foreach ($utilisateurs as $utilisateur):?>
      <tr>
      	<td><?= $this->clean($utilisateur['Utilisateur_Id'])?></td>
        <td><?= $this->clean($utilisateur['Prenom_Utilisateur'])?></td>
        <td><?= $this->clean($utilisateur['Nom_Utilisateur']) ?></td>
        <td><?= $this->clean($utilisateur['Mail_Utilisateur'])?></td>
        <td><?= $this->clean($utilisateur['Tel_Utilisateur'])?></td>   
      </tr>
<?php endforeach; ?>
</tbody>
</table>
