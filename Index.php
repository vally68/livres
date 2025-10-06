<?php
// index.php
session_start();

include 'Livre.php';
include 'Auteur.php';
include 'AgeCalculator.php';

// Création des livres (séparés)
$livres = [
    new Livre("Ca", 1986, 1138, 20),
    new Livre("Simetierre", 1983, 374, 15),
    new Livre("Le Fléau", 1978, 823, 14),
    new Livre("Shining", 1977, 447, 16),
];

// Auteur (date de naissance en ISO pour DateTime)
$auteur = new Auteur('King', 'Stephen', '1947-09-21');

// Calcul de l'âge via AgeCalculator
$ageCalc = new AgeCalculator($auteur->getBirth());
$age = $ageCalc->getAge();

// Affichage — format proche de l'image fournie
echo '<h3>Livres de ' . htmlspecialchars($auteur->getPrenom()) . ' ' . htmlspecialchars($auteur->getNom()) . '</h3>';
foreach ($livres as $livre) {
    // Format: Titre (année) : N pages / X € 
    echo htmlspecialchars($livre->getTitre()) 
       . " (" . $livre->getAnnee() . ") : " 
       . $livre->getNbpages() . " pages / " 
       . $livre->getPrix() . " €<br>\n";
}

// Affiche l'âge (calculé)
echo "<br>Âge de l'auteur (calculé) : {$age} ans.<br>\n";
