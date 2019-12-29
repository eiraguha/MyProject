<?php

require_once 'framework/Controller.php';
//require_once 'model/Dummy.php';
require_once 'model/Etablissement.php';

/**
 * Contrôleur des actions liées à l'établissement
 *
 */
//class ControllerHome extends Controller {
class ControllerEtablissement extends Controller {

    //private $dummy;
    private $etablissement;

    /**
     * Constructeur 
     */
    public function __construct() {
        //$this->dummy = new Dummy();
        //$this->dummy = new Dummy();
        $this->etablissement = new Etablissement();
    }

    // Affiche les détails sur l'établissement
    public function liste() {
        //$first = $this->dummy->getFirst();
        //$second = $this->dummy->getSecond();
        $etablissements = $this->etablissement->getEtablissements();
        $this->generateView(array('etablissements' => $etablissements));
    }
    
    public function index() {}


}

