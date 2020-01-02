<?php

require_once 'framework/Model.php';

/**
 * Afficher la liste des utilisateurs et keurs propriétés
 * 
 */
class Utilisateur extends Model {

    /** Renvoie la liste des utilisateurs
     * 
          */
    public function getUtilisateurs() {
        $sql = 'select Utilisateur_Id,Nom_Utilisateur,Prenom_Utilisateur,Mail_Utilisateur,Tel_Utilisateur from utilisateurs';
        $posts = $this->executeRequest($sql);
        return $posts;
    }

    /** Renvoie les informations de l'utilisateur
     * 
     * @param int $id L'identifiant de l'utilisateur
     * @return array de l'utilisateur
     * @throws Exception Si l'utilisateur de l'établissement est inconnu
     */
    public function getUtilisateur($id) {
        $sql = 'select Utilisateur_Id from utilisateurs'
                . ' where Utilisateur_Id=$id';
        $post = $this->executeRequest($sql, array($idPost));
        if ($post->rowCount() > 0)
            return $post->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun billet ne correspond à l'identifiant '$idPost'");
    }

    /**
     * Enregistrernvoie le nombre total de billets
     * 
     * @return int Le nombre de billets
     */
    public function EnregistrerUtilisateur()
    {
        
    }
}
