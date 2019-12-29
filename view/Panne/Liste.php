<?php $this->title = "Mon Blog"; ?>

<?php foreach ($pannes as $panne):
    ?>
        <?= $this->clean($panne['Panne_Type']) ?></br>
        
<?php endforeach; ?>
