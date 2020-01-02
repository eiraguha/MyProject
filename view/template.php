<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <base href="<?= $webRoot ?>" >
        <link rel="stylesheet" href="Content/style.css" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <title><?= $title ?></title>
    </head>
    <!-- Page commune à toutes les vues -->
    <body>
        <div id="global">
            <header>
                
                <a href=""><h1 id="blogTitle">Projet CPA Janvier 2020 <br/>Gestion du matériel et incidents informatiques.</h1></a><br/><br/>
                <!--<p>Gestion du matériel et incidents informatiques.</p>-->
            </header>
            <div id="content">
            <!-- Affichage de la vue définie par l'action liste de chaque vue dans MyProject/Vieww/.../liste.php-->
                <?= $content ?>
            </div> <!-- #content -->
            <footer id="blogFooter">
                Projet réalisé par Emmanuel IRAGUHA <br/> # Matricule: 54731 # <br/> ESI - Spécialisation en sécurité des réseaux et systèmes informatiques 
            </footer>
        </div> <!-- #global -->
    </body>
</html>
