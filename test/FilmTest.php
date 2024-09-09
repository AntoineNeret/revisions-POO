<?php
require_once '../src/Film.php';
require_once '../src/Acteur.php';

//Instancier la classe Film

$film1 = new Film("Phong va à Intermarché", "Khang", DateTime::createFromFormat("d/m/Y","36/05/1972"));

echo $film1->getTitre()."\n";

echo $film1->getAnciennete()."\n";

$acteur1 = new Acteur("Nguyen","Phong");
$acteur2 = new Acteur("Mougin","Leo");
$acteur3 = new Acteur("Schiesle","Dididou");

$film1->addActeur($acteur1);
$film1->addActeur($acteur2);
$film1->addActeur($acteur3);
foreach ($film1->getActeurs() as $acteur ){
     echo $acteur->getPrenom()." ".$acteur->getNom()."\n";
}