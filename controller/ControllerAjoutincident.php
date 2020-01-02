<?php

require_once 'framework/Controller.php';
require_once 'model/Ajoutincident.php';

/**
 * Contrôleur des actions liées au formulaire de déclaration d'incidents
 *
 */
class ControllerAjoutincident extends Controller {

    private $ajoutincident;

    /**
     * Constructeur 
     */
    public function __construct() {
        $this->ajoutincident = new Ajoutincident();
    }

    // Appel de la vue du formulaire de déclaration d'incidents
    public function ajout() {
        
        $ajoutincidents = $this->ajoutincident->getAjoutincidents();
        $this->generateView(array('ajoutincidents' => $ajoutincidents));
    }
    
    public function index() {}


}

