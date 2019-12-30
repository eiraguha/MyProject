<?php $this->title = "Mon Blog"; ?>
<h3>Lister les sites</h3>
 <table border="1">
	<thead>
		<tr>
			<th align="center"> <?= "Identifiant du site"?></th>
			<th align="center"><?= "Adresse du site"?></th>
		</tr>
	</thead>
	<tbody>        
<?php foreach ($sites as $site):?>
    <tr>
        <td><?= $this->clean($site['Site_Id']) ?></td>
        <td><?= $this->clean($site['Adr_Site']) ?></td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>
