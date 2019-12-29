<?php $this->title = "Mon Blog"; ?>

<?php foreach ($sites as $site):
    ?>
        <?= $this->clean($site['Site_Id']) ?>
        <?= $this->clean($site['Adr_Site']) ?>
        </br>
        
<?php endforeach; ?>
