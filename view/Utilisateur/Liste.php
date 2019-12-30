<?php $this->title = "Mon Blog"; ?>
<!--Afficher la liste des utilisateurs -->
<h3>Liste des utilisateurs</h3><br/>
 <table border="1">
	<thead>
		<tr>
			<th align="center"><?= "Identifiant"?></th>
			<th align="center"><?= "Prénom"?></th>
			<th align="center"><?= "Nom"?></th>
			<th align="center"><?= "Email"?></th>
			<th align="center"><?= "Téléphone"?></th>
		</tr>
	</thead>
	<tbody>        

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
