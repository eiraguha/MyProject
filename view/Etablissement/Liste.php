<?php $this->title = "Mon Blog"; ?>
<?php foreach ($etablissements as $etablissement):
    ?>
        <?= "Nom de l'établissement:"?>
        <?= $this->clean($etablissement['Etabl_Denomination']) ?><br/>
        <?= "Adresse de l'établissement:"?>
        <?= $this->clean($etablissement['Adr_Etabl']) ?><br/><br/>
        
<?php endforeach; ?>
