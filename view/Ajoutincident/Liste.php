<?php $this->title = "Mon Blog"; ?>
<?php
require 'framework/Router.php';

$router = new Router();
$router->routerRequest();
?>
<h3> Création des incidents</h3></br>
<!-- Formulaire de création des incidents-->
<form method="post" action="Liste.php">
            <b>Etablissement:</b>
            <select name="etablissement">
            <br/>              
            </select>
            </br></br>
            <b>Utilisateur:</b>
            <select name="utilisateur">
                
            </select>
            </br></br>
            <b>Site:</b>
            <select name="site">
               
            </select>
            </select>
            </br></br>
            <b>Equipement:</b>
            <select name="equipement">
            
             </select>
            </br></br>
            <b>Panne:</b>
            <select name="panne">
                
             </select>    
                <p><b>Description de la panne:</b></p>
                <textarea name="descripanne" placeholder="Décrivez la panne" rows="10" cols="100"></textarea></br></body></br>
                <input type="submit" value="Envoyer">

            </form>
