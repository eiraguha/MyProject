<?php $this->title = "Mon Blog"; ?>

<?php foreach ($fournisseurs as $fournisseur):
    ?>
        <?= "Identifiant du fournisseur:"?>
        <?= $this->clean($fournisseur['Fournisseur_Id']) ?><br/>
        <?= "Dénomination du fournisseur:"?>
        <?= $this->clean($fournisseur['Fournisseur_Denom']) ?><br/>
        <?= "Adresse:"?>
        <?= $this->clean($fournisseur['Adr_Fournisseur']) ?><br/>
        <?= "Téléphone:"?>
        <?= $this->clean($fournisseur['Tel_Fournisseur']) ?><br/>
        <?= "Adresse mail:"?>
        <?= $this->clean($fournisseur['Mail_Fournisseur']) ?><br/><br/>
        
<?php endforeach; ?>
