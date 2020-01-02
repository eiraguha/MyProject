<?php $this->title = "Mon Blog"; ?>

<h3> Création des incidents</h3></br>
<!-- Formulaire de création des incidents-->
<!-- Les préremplies provinnenet de la base de données-->
<!-- Je n'ai pas pu le mettre en MVC -->
<form method="post" action="Ajout.php">
            <b>Etablissement:</b>
            <select name="etablissement">
            <?php
            $db='mysql:host=localhost;dbname=gestincidents;charset=utf8';
            $username='root';
            $pswd='root';
                try {
                    // InstantiaTion de l'objet PDO
                    //$bdd = new PDO ($db,$username,$pswd);
                    $bdd = new PDO ($db,$username,$pswd, array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) );
                }
                catch ( Exception $e ){
                    echo 'Problème de connexion à la base de bonnée';
                    
                }

                $sql = "SELECT Etabl_Denomination FROM etablissement";
                $data = $bdd->query($sql)or die($bdd->error);
                while($etablissement = $data->fetch()){
                    echo '<option value="">' . $etablissement['Etabl_Denomination'] . '</option>' . '</br>';  
                }
                $data->closeCursor();  ?>      
            </select>
            <br/><br/>
            <b>Utilisateur:</b>
            <select name="utilisateur">
            <?php
            $db='mysql:host=localhost;dbname=gestincidents;charset=utf8';
            $username='root';
            $pswd='root';
                try {
                    // InstantiaTion de l'objet PDO
                    //$bdd = new PDO ($db,$username,$pswd);
                    $bdd = new PDO ($db,$username,$pswd, array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) );
                }
                catch ( Exception $e ){
                    echo 'Problème de connexion à la base de bonnée';
                    
                }

                $sql = "SELECT Nom_Utilisateur FROM utilisateurs";
                $data = $bdd->query($sql)or die($bdd->error);
                while($etablissement = $data->fetch()){
                    echo '<option value="">' . $etablissement['Nom_Utilisateur'] . '</option>' . '</br>';  
                }
                $data->closeCursor();  ?>
            </select>
            </br></br>
            <b>Site:</b>
            <select name="site">
            <?php
            $db='mysql:host=localhost;dbname=gestincidents;charset=utf8';
            $username='root';
            $pswd='root';
                try {
                    // InstantiaTion de l'objet PDO
                    //$bdd = new PDO ($db,$username,$pswd);
                    $bdd = new PDO ($db,$username,$pswd, array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) );
                }
                catch ( Exception $e ){
                    echo 'Problème de connexion à la base de bonnée';
                    
                }

                $sql = "SELECT Adr_Site FROM sites";
                $data = $bdd->query($sql)or die($bdd->error);
                while($etablissement = $data->fetch()){
                    echo '<option value="">' . $etablissement['Adr_Site'] . '</option>' . '</br>';  
                }
                $data->closeCursor();  ?>
            </select>
            </select>
            </br></br>
            <b>Equipement:</b>
            <select name="equipement">
            <?php
            $db='mysql:host=localhost;dbname=gestincidents;charset=utf8';
            $username='root';
            $pswd='root';
                try {
                    // InstantiaTion de l'objet PDO
                    //$bdd = new PDO ($db,$username,$pswd);
                    $bdd = new PDO ($db,$username,$pswd, array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) );
                }
                catch ( Exception $e ){
                    echo 'Problème de connexion à la base de bonnée';
                    
                }

                $sql = "SELECT Equip_Id,Equip_Type FROM equipements";
                $data = $bdd->query($sql)or die($bdd->error);
                while($etablissement = $data->fetch()){
                    echo '<option value="">' . $etablissement['Equip_Id'] . '</option>' . '</br>';  
                }
                $data->closeCursor();  ?>
             </select>
            </br></br>
            <b>Panne:</b>
            <select name="panne">
            <?php
            $db='mysql:host=localhost;dbname=gestincidents;charset=utf8';
            $username='root';
            $pswd='root';
                try {
                    // InstantiaTion de l'objet PDO
                    //$bdd = new PDO ($db,$username,$pswd);
                    $bdd = new PDO ($db,$username,$pswd, array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) );
                }
                catch ( Exception $e ){
                    echo 'Problème de connexion à la base de bonnée';
                    
                }

                $sql = "SELECT Panne_Type FROM pannes";
                $data = $bdd->query($sql)or die($bdd->error);
                while($etablissement = $data->fetch()){
                    echo '<option value="">' . $etablissement['Panne_Type'] . '</option>' . '</br>';  
                }
                $data->closeCursor();  ?>  
             </select>    
                <p><b>Description de la panne:</b></p>
                <textarea name="descripanne" placeholder="Décrivez la panne" rows="10" cols="100"></textarea></br></body></br>
                <input type="submit" value="Envoyer">

            </form>
