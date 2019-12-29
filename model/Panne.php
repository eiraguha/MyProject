<?php

require_once 'framework/Model.php';

/**
 * Afficher la liste des pannes 
 * 
 */
class Panne extends Model {

    /** Renvoie la liste des pannes
     * 
          */
    public function getPannes() {
        $sql = 'select Panne_Id,Panne_Type from pannes';
        $posts = $this->executeRequest($sql);
        return $posts;
    }

    /** Renvoie les informations de la panne
     * 
     * @param int $id L'identifiant de la panne
     * @return array de la panne
     * @throws Exception Si la panne est inconnue
     */
    public function getPanne($id) {
        $sql = 'select Panne_Id from pannes'
                . ' where Panne_Id=$id';
        $post = $this->executeRequest($sql, array($idPost));
        if ($post->rowCount() > 0)
            return $post->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucune panne ne correspond à l'identifiant '$idPost'");
    }

    /**
     * Enregistrernvoie le nombre total des pannes
     * 
     * @return int Le nombre de pannes
     */
    public function EnregistrerPanne()
    {
        
    }
}
