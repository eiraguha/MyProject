<?php

require_once 'framework/Controller.php';
//require_once 'model/Dummy.php';
require_once 'model/Utilisateur.php';

/**
 * Contrôleur des actions liées à l'etablissement
 *
 */
//class ControllerHome extends Controller {
class ControllerUtilisateur extends Controller {

    //private $dummy;
    private $utilisateur;

    /**
     * Constructeur 
     */
    public function __construct() {
        //$this->dummy = new Dummy();
        //$this->dummy = new Dummy();
        $this->utilisateur = new Utilisateur();
    }

    // Affiche les détails sur l'utilisateur
    public function liste() {
        //$first = $this->dummy->getFirst();
        //$second = $this->dummy->getSecond();
        $utilisateurs = $this->utilisateur->getUtilisateurs();
        //$second = $this->etablissement->getSecond();
        
        //$this->generateView(array('first' => $first, 'second' => $second));
        $this->generateView(array('utilisateurs' => $utilisateurs));
    }
    
    public function index() {}


}

