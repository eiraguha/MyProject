<?php

require_once 'framework/Controller.php';
//require_once 'model/Dummy.php';
require_once 'model/Incident.php';

/**
 * Contrôleur des actions liées à l'incident
 *
 */
//class ControllerHome extends Controller {
class ControllerIncident extends Controller {

    private $incident;

    /**
     * Constructeur 
     */
    public function __construct() {
        $this->incident = new Incident();
    }

    // Affiche les détails sur l'incident
    public function liste() {
        
        $incidents = $this->incident->getIncidents();
        $this->generateView(array('incidents' => $incidents));
    }
    
    public function index() {}


}

