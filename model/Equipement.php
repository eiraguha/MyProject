<?php

require_once 'framework/Model.php';

/**
 * Equipements 
 * 
 */
class Equipement extends Model {

    /** Renvoie la liste des équipements
     * 
          */
    public function getEquipements() {
        /*$sql = 'select Equip_Id,Equip_Type,Utilisateur_Id from equipements'; */
        $sql ='SELECT equipements.Equip_Id,equipements.Equip_Type,utilisateurs.Utilisateur_Id,utilisateurs.Nom_Utilisateur,utilisateurs.Prenom_Utilisateur,utilisateurs.Tel_Utilisateur,utilisateurs.Mail_Utilisateur FROM equipements JOIN utilisateurs ON equipements.Utilisateur_Id = utilisateurs.Utilisateur_Id;
        ';    
        $posts = $this->executeRequest($sql);
        return $posts;
        
    }

    /** Renvoie les informations sur l'équipement
     * 
     * @param int $id L'identifiant de l'équipement
     * @return array de l'équipement
     * @throws Exception Si l'identifiant de l'équipement est inconnu
     */
    public function getEquipement($id) {
        /*$sql = 'select Equip_Id from equipements'
                . ' where Equip_Id=$id';*/
                /*$sql = 'SELECT equipements.Equip_Id,equipements.Equip_Type,utilisateurs.Utilisateur_Id,utilisateurs.Nom_Utilisateur,utilisateurs.Prenom_Utilisateur,utilisateurs.Tel_Utilisateur,utilisateurs.Mail_Utilisateur FROM equipements JOIN utilisateurs ON equipements.Utilisateur_Id = utilisateurs.Utilisateur_Id;*/
                $sql = 'SELECT equipements.Equip_Id,equipements.Equip_Type,utilisateurs.Utilisateur_Id,utilisateurs.Nom_Utilisateur,utilisateurs.Prenom_Utilisateur,utilisateurs.Tel_Utilisateur,utilisateurs.Mail_Utilisateur FROM equipements JOIN utilisateurs ON equipements.Utilisateur_Id = $utilisateurs.Utilisateur_Id;

                ';
        $post = $this->executeRequest($sql, array($idPost));
        if ($post->rowCount() > 0)
            return $post->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun equipement ne correspond à l'identifiant '$idPost'");
    }

    /**
     * Enregistrernvoie le nombre total d'équipements
     * 
     * @return int Le nombre d'équipements
     */
    public function EnregistrerIncident()
    {
        
    }
}
