<?php

require_once 'framework/Controller.php';
require_once 'model/Fournisseur.php';

/**
 * Contrôleur des actions liées au fournisseur
 *
 */
//class ControllerHome extends Controller {
class ControllerFournisseur extends Controller {

    //private $dummy;
    private $fournisseur;

    /**
     * Constructeur 
     */
    public function __construct() {
        $this->fournisseur = new Fournisseur();
    }

    // Affiche les détails du fournisseur
    public function liste() {
        
        $fournisseurs = $this->fournisseur->getFournisseurs();
        $this->generateView(array('fournisseurs' => $fournisseurs));
    }
    
    public function index() {}


}

