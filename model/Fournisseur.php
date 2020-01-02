<?php

require_once 'framework/Model.php';

/**
 * Fournit les services d'accès aux fournisseurs 
 * 
 */
class Fournisseur extends Model {

    /** Renvoie la liste des fournisseurs
     * 
          */
    public function getFournisseurs() {
        $sql = 'select Fournisseur_Id,Fournisseur_Denom,Adr_Fournisseur,Tel_Fournisseur,Mail_Fournisseur from fournisseurs';     
        $posts = $this->executeRequest($sql);
        return $posts;
        
    }

    /** Renvoie les informations sur le fournisseur
     * 
     * @param int $id L'identifiant du fournisseur
     * @return array du fournisseur
     * @throws Exception Si l'identifiant du fournisseur est inconnu
     */
    public function getFournisseur($id) {
        $sql = 'select Fournisseur_Id from fournisseurs'
                . ' where Fournisseur_Id=$id';
        $post = $this->executeRequest($sql, array($idPost));
        if ($post->rowCount() > 0)
            return $post->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun fournisseur ne correspond à l'identifiant '$idPost'");
    }

    /**
     * Enregistrernvoie le nombre total de fournisseurs
     * 
     * @return int Le nombre de fournisseurs
     */
    public function EnregistrerIncident()
    {
        
    }
}
