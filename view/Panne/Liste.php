<?php $this->title = "Mon Blog"; ?>
<!--Afficher les types de pannes -->
<h3>Types de pannes</h3><br/>
 <table border="1">
<!--Afficher les entêtes de la table des pannes -->
	<thead>
		<tr>
			<th> <?= "Identifiant panne"?></th>
			<th><?= "Type de panne"?></th>
		</tr>
	</thead>
	<tbody>    
<!--Parcourir et Afficher les valeurs la table des pannes -->    
<?php foreach ($pannes as $panne): ?>
    <tr>
        <td><?= $this->clean($panne['Panne_Id'])?></td>
        <td><?= $this->clean($panne['Panne_Type'])?></td>
    </tr> 
<?php endforeach; ?>
</tbody>
</table>
