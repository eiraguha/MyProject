<?php $this->title = "Mon Blog"; ?>

<?php foreach ($equipements as $equipement):
    ?>
        <?= "Identifiant de l'équipement:"?>
        <?= $this->clean($equipement['Equip_Id']) ?><br/>
        <?= "Type d'équipement:"?>
        <?= $this->clean($equipement['Equip_Type']) ?><br/>
        <?= "Identifiant Utilisateur:"?>
        <?= $this->clean($equipement['Utilisateur_Id']) ?><br/>
        <?= "Utilisateur:"?>
        <?= $this->clean($equipement['Prenom_Utilisateur']) ?>
        <?= $this->clean($equipement['Nom_Utilisateur']) ?><br/>
        <?= "Téléphone:"?>
        <?= $this->clean($equipement['Tel_Utilisateur']) ?><br/>
        <?= "Adresse mail:"?>
        <?= $this->clean($equipement['Mail_Utilisateur']) ?><br/><br/>
        
<?php endforeach; ?>
