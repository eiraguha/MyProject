<?php

require_once 'framework/Controller.php';
//require_once 'model/Dummy.php';
require_once 'model/Site.php';

/**
 * Contrôleur des actions liées au site
 *
 */
//class ControllerHome extends Controller {
class ControllerSite extends Controller {

    //private $dummy;
    private $site;

    /**
     * Constructeur 
     */
    public function __construct() {
        //$this->dummy = new Dummy();
        $this->site = new Site();
    }

    // Affiche les détails sur l'utilisateur
    public function liste() {
        //$first = $this->dummy->getFirst();
        //$second = $this->dummy->getSecond();
        $sites = $this->site->getSites();
        //$second = $this->etablissement->getSecond();
        
        //$this->generateView(array('first' => $first, 'second' => $second));
        $this->generateView(array('sites' => $sites));
    }
    
    public function index() {}


}

