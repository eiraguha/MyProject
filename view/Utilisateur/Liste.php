<?php $this->title = "Mon Blog"; ?>

<?php foreach ($utilisateurs as $utilisateur):?>
        <?= "Utilisateur:"?>
        <?= $this->clean($utilisateur['Prenom_Utilisateur'])?><tr>
        <?= $this->clean($utilisateur['Nom_Utilisateur']) ?><br/>
        <?= "Adresse mail:"?>
        <?= $this->clean($utilisateur['Mail_Utilisateur']) ?><br/>
        <?= "Télephone:"?>
        <?= $this->clean($utilisateur['Tel_Utilisateur']) ?><br/>
              </br>
        
<?php endforeach; ?>
