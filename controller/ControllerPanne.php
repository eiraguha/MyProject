<?php

require_once 'framework/Controller.php';
//require_once 'model/Dummy.php';
//require_once 'model/Etablissement.php';
require_once 'model/Panne.php';

/**
 * Contrôleur des actions liées à la panne
 *
 */
//class ControllerHome extends Controller {
class ControllerPanne extends Controller {

    //private $dummy;
    private $panne;

    /**
     * Constructeur 
     */
    public function __construct() {
        //$this->dummy = new Dummy();
        //$this->dummy = new Dummy();
        $this->panne = new Panne();
    }

    // Affiche les détails sur la panne
    public function liste() {
        //$first = $this->dummy->getFirst();
        //$second = $this->dummy->getSecond();
        $pannes = $this->panne->getPannes();
        //$second = $this->etablissement->getSecond();
        
        //$this->generateView(array('first' => $first, 'second' => $second));
        $this->generateView(array('pannes' => $pannes));
    }
    
    public function index() {}


}

