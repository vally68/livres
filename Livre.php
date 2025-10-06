<?php
// Livre.php
class Livre {
    private $_titre;
    private $_annee;
    private $_nbpages;
    private $_prix;

    public function __construct(string $_titre, int $_annee, int $_nbpages, float $_prix) {
        $this->titre   = $_titre;
        $this->annee   = $_annee;
        $this->nbpages = $_nbpages;
        $this->prix    = $_prix;
    }

    public function getTitre(): string { return $this->titre; }
    public function getAnnee(): int     { return $this->annee; }
    public function getNbpages(): int   { return $this->nbpages; }
    public function getPrix()           { return $this->prix; }

    // Pratique pour affichage rapide
    public function __toString(): string {
        return "{$this->titre} ({$this->annee}) : {$this->nbpages} pages / {$this->prix} €";
    }
}
