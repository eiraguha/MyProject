<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <base href="<?= $webRoot ?>" >
        <link rel="stylesheet" href="Content/style.css" />
        <title><?= $title ?></title>
    </head>
    <body>
        <div id="global">
            <header>
                <a href=""><h1 id="blogTitle">Projet CPA Janvier 2020 <br/>Gestion du matériel et incidents informatiques.</h1></a>
                <!--<p>Gestion du matériel et incidents informatiques.</p>-->
            </header>
            <div id="content">
                <?= $content ?>
            </div> <!-- #content -->
            <footer id="blogFooter">
                Projet réalisé avec PHP, HTML5 et CSS.
            </footer>
        </div> <!-- #global -->
    </body>
</html>
