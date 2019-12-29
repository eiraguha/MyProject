<?php $this->title = "Mon Blog"; ?>

<form method="post" action="Liste.php">
            <b>Etablissement:</b>
            <select name="etablissement">
            <?php foreach ($incidents as $incident):?>
            <?= $this->clean($incident['Etabl_Denomination']) ?></br>
               
            <?php endforeach; ?>
                <?php
                    include 'model/etablissement.php';

                    echo '<option value="">' . $incident['Etabl_Denomination']. '</option>' . '</br>';
                ?>
            </select>
            </br></br>
            <b>Utilisateur:</b>
            <select name="utilisateur">
                <?php
                include 'model/utilisateur.php';
                echo '<option value="">' . $incident['Nom_utilisateur'] . '</option>' . '</br>';   
                ?>
            </select>
            </br></br>
            <b>Site:</b>
            <select name="site">
                <?php
                include 'model/site.php';
                
                    echo '<option value="">' . $incident['Adr_Site'] . '</option>' . '</br>';   
                ?>
            </select>
            </select>
            </br></br>
            <b>Equipement:</b>
            <select name="equipement">
                <?php
                include 'model/equipement.php';
                    echo '<option value="">' . $incident['Equip_Type'] . '</option>' . '</br>';   
                ?>
             </select>
            </br></br>
            <b>Panne:</b>
            <select name="panne">
                <?php
                include 'model/panne.php';
                
                    echo '<option value="">' . $incident['Panne_Type'] . '</option>' . '</br>';              
                ?>
             </select>    
                <p><b>Description de la panne:</b></p>
                <textarea name="descripanne" placeholder="Décrivez la panne" rows="10" cols="100"></textarea></br></body></br>
                <input type="submit" value="Envoyer">

            </form>
