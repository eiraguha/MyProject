<?php $this->title = "Mon Blog"; ?>
<!--Affichage de la liste des incidents -->
<h3>Liste des incidents</h3><br/>
 <table border="1">
	<thead>
		<tr>
			<th align="center"> <?= "Identifiant incident"?></th>
			<th align="center"><?= "Identifiant équipement"?></th>
			<th align="center"><?= "Identifiant panne"?></th>
			<th align="center"><?= "Debut"?></th>
			<th align="center"><?= "Fin"?></th>
            <th align="center"><?= "Description incident"?></th>
		</tr>
	</thead>
	<tbody>        
<?php foreach ($incidents as $incident):
    ?>
        <tr>
            <td width=100px><?= $this->clean($incident['Incident_Id'])?></td>
            <td width=100px><?= $this->clean($incident['Equip_Id']) ?></td>
            <td width=100px><?= $this->clean($incident['Panne_Id'])?></td>
            <td width=100px><?= $this->clean($incident['DateHeure_Deb']) ?></td>
            <td width=100px><?= $this->clean($incident['DateHeure_Fin'])?></td>
            <td width=100px><?= $this->clean($incident['Commentaires'])?></td>
        </tr>     
<?php endforeach; ?>
</tbody>
</table>  
