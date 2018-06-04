<?php

//...crée la classe Developpeur
    class Developpeur {

                //...attributs de la classe Developpeur
                private $idDeveloppeur;
                private $nomDeveloppeur;
                private $prenomDeveloppeur;
                private $langagesDeveloppeur;

                function __construct($idDeveloppeur="", $nomDeveloppeur="", $prenomDeveloppeur="", $langagesDeveloppeur="") {
                            $this->idDeveloppeur = $idDeveloppeur;
                            $this->nomDeveloppeur = $nomDeveloppeur;
                            $this->prenomDeveloppeur = $prenomDeveloppeur;
                            $this->langagesDeveloppeur = $langagesDeveloppeur;
                }
                
                public function getIdDeveloppeur() {
                            return $this->idDeveloppeur;
                }

                public function getNomDeveloppeur() {
                            return $this->nomDeveloppeur;
                }

                public function getPrenomDeveloppeur() {
                            return $this->prenomDeveloppeur;
                }

                public function getLangagesDeveloppeur() {
                            return $this->langagesDeveloppeur;
                }

                public function setIdDeveloppeur($idDeveloppeur) {
                            $this->idDeveloppeur = $idDeveloppeur;
                }

                public function setNomDeveloppeur($nomDeveloppeur) {
                            $this->nomDeveloppeur = $nomDeveloppeur;
                }

                public function setPrenomDeveloppeur($prenomDeveloppeur) {
                            $this->prenomDeveloppeur = $prenomDeveloppeur;
                }

                public function setLangagesDeveloppeur($langagesDeveloppeur) {
                            $this->langagesDeveloppeur = $langagesDeveloppeur;
                }

    
        }
?> 

