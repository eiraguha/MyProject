<?php

require_once 'framework/Controller.php';
require_once 'model/Dummy.php';

/**
 * Contrôleur des actions liées aux billets
 *
 */
class ControllerHome extends Controller {

    private $dummy;

    /**
     * Constructeur 
     */
    public function __construct() {
        $this->dummy = new Dummy();
    }

    // Affiche les détails sur un billet
    public function index() {
        $first = $this->dummy->getFirst();
        $second = $this->dummy->getSecond();
        
        $this->generateView(array('first' => $first, 'second' => $second));
    }

}

