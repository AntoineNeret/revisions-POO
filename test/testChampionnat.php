<?php
require "./vendor/autoload.php";

use App\Championnat;
use App\Entite\Equipe;
use App\Personne;

$psg = new Equipe("PSG");
$om = new Equipe("OM");
$ligue1 = new Championnat("Ligue 1");
$phong = new Personne("Phong");
$leo = new Personne("Leo");

$ligue1->ajouterEquipe($psg);
$ligue1->ajouterEquipe($om);
echo "Il y a ".$ligue1->getNombreEquipes()." équipes en ligue1 \n";
$phong->liker($psg);
$leo->liker($om);
echo $psg->getNom()." a ". $psg->getNombreLikes();

dump($ligue1);