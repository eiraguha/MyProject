<?php

require_once 'framework/Model.php';

/**
 * Afficher la liste des sites 
 * 
 */
class site extends Model {

    /** Renvoie la liste des sites
     * 
          */
    public function getSites() {
        $sql = 'select Site_Id,Adr_Site from sites';
        $posts = $this->executeRequest($sql);
        return $posts;
    }

    /** Renvoie les informations du site
     * 
     * @param int $id L'identifiant du site
     * @return array du site
     * @throws Exception Si le site est inconnu
     */
    public function getSite($id) {
        $sql = 'select Site_Id from sites'
                . ' where Site_Id=$id';
        $post = $this->executeRequest($sql, array($idPost));
        if ($post->rowCount() > 0)
            return $post->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun site ne correspond à l'identifiant '$idPost'");
    }

    /**
     * Enregistrernvoie le nombre total des sites
     * 
     * @return int Le nombre des sites
     */
    public function EnregistrerSite()
    {
        
    }
}
