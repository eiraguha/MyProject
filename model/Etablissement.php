<?php

require_once 'framework/Model.php';

/**
 * Fournit les services d'accès aux établissements 
 * 
 */
class Etablissement extends Model {

    /** Renvoie la liste des etablissements
     * 
          */
    public function getEtablissements() {
        $sql = 'select Etabl_Id,Etabl_Denomination,Adr_Etabl,Nr_Tel_Etabl from etablissement';
        $posts = $this->executeRequest($sql);
        return $posts;
    }

    /** Renvoie les informations sur l'établissement
     * 
     * @param int $id L'identifiant de l'établissement
     * @return array de l'établissement
     * @throws Exception Si l'identifiant de l'établissement est inconnu
     */
    public function getEtablissement($id) {
        $sql = 'select Etabl_Id from etablissement'
                . ' where Etabl_Id=$id';
        $post = $this->executeRequest($sql, array($idPost));
        if ($post->rowCount() > 0)
            return $post->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun établissement ne correspond à l'identifiant '$idPost'");
    }

    /**
     * Enregistrernvoie le nombre total d'établissements
     * 
     * @return int Le nombre d'etablissements
     */
    public function EnregistrerEtablissement()
    {
        
    }
}
