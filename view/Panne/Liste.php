<?php $this->title = "Mon Blog"; ?>
<!--Afficher les types de pannes -->
<h3>Types de pannes</h3><br/>
 <table border="1">
	<thead>
		<tr>
			<th align="center"> <?= "Identifiant panne"?></th>
			<th align="center"><?= "Type de panne"?></th>
		</tr>
	</thead>
	<tbody>        
<?php foreach ($pannes as $panne): ?>
    <tr>
        <td><?= $this->clean($panne['Panne_Id'])?></td>
        <td><?= $this->clean($panne['Panne_Type'])?></td>
    </tr> 
<?php endforeach; ?>
</tbody>
</table>
