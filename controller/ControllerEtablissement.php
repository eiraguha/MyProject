<?php

require_once 'framework/Controller.php';
require_once 'model/Etablissement.php';

/**
 * Contrôleur des actions liées à l'établissement
 *
 */

class ControllerEtablissement extends Controller {

    private $etablissement;

    /**
     * Constructeur d'initialisation de la classe Etablissement
     */
    public function __construct() {
        
        $this->etablissement = new Etablissement();
    }

    // Méthode qui génère la vue de l'établissement
    public function liste() {
       
        $etablissements = $this->etablissement->getEtablissements();
        $this->generateView(array('etablissements' => $etablissements));
    }
    
    public function index() {}


}

