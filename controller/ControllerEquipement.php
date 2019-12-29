<?php

require_once 'framework/Controller.php';
require_once 'model/Equipement.php';

/**
 * Contrôleur des actions liées à l'équipement
 *
 */
//class ControllerHome extends Controller {
class ControllerEquipement extends Controller {

    //private $dummy;
    private $equipement;

    /**
     * Constructeur 
     */
    public function __construct() {
        $this->equipement = new Equipement();
    }

    // Affiche les détails de l'équipement
    public function liste() {
        
        $equipements = $this->equipement->getEquipements();
        $this->generateView(array('equipements' => $equipements));
    }
    
    public function index() {}


}

