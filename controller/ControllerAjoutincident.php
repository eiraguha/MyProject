<?php

require_once 'framework/Controller.php';
//require_once 'model/Dummy.php';
require_once 'model/Ajoutincident.php';

/**
 * Contrôleur des actions liées à l'incident
 *
 */
//class ControllerHome extends Controller {
class ControllerAjoutincident extends Controller {

    private $ajoutincident;

    /**
     * Constructeur 
     */
    public function __construct() {
        $this->ajoutincident = new Ajoutincident();
    }

    // Affiche les détails sur l'incident
    public function liste() {
        
        $ajoutincidents = $this->ajoutincident->getAjoutincidents();
        $this->generateView(array('ajoutincidents' => $ajoutincidents));
    }
    
    public function index() {}


}

