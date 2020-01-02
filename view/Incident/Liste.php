<?php $this->title = "Mon Blog"; ?>
<!--/** Afficher un tableau reprenant l'historique des incidents */-->
<!--/** Afficher les entêtes des incidents enregistrés */-->
<h3>Lister l'historique des incidents</h3><br/>
 <table border="1">
	<thead>
		<tr>
			<th><?= "Identifiant incident"?></th>
			<th><?= "Identifiant équipement"?></th>
			<th><?= "Identifiant Panne"?></th>
			<th><?= "Debut"?></th>
            <th><?= "Fin"?></th>	
            <th><?= "Commentaires"?></th>
		</tr>
	</thead>
	<tbody>     
        <!--/** Parcourir la tables des incidents et afficher les éléments liés */-->   
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
