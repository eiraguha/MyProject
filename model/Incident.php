<?php

require_once 'framework/Model.php';

/**
 * Fournit la liste des incidents survenus enregistrés dans la table 'incidents' 
 * 
 */
class Incident extends Model {

    /** Renvoie la liste des incidents
     * 
          */
    public function getIncidents() {
        $sql = 'select Incident_Id,Panne_Id,Equip_Id,DateHeure_Deb,DateHeure_Fin,Commentaires from incidents';     
        $posts = $this->executeRequest($sql);
        return $posts;
        
    }
    
    /** Renvoie les informations sur l'incident
     * 
     * @param int $id L'identifiant de l'incident
     * @return array de l'incident
     * @throws Exception Si l'identifiant de l'incident est inconnu
     */
    public function getIncident($id) {
        $sql = 'select Incident_Id from incidents'
                . ' where Incident_Id=$id';

        $post = $this->executeRequest($sql, array($idPost));
        if ($post->rowCount() > 0)
            return $post->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun incident ne correspond à l'identifiant '$idPost'");
    }

    /**
     * Enregistrernvoie le nombre total d'incidents
     * 
     * @return int Le nombre d'incidents
     */
    public function EnregistrerIncident()
    {
        
    }
}
