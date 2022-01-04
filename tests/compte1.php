<?php

require 'Compte.php';
require 'CompteCourant.php';
require 'CompteEpargne.php';

//$compte1 = new Compte("Benoit", 500);

//$compte1->voirSolde();

//$compte1->deposer(500);

//var_dump($compte1);

//$compte1->retirer(1100);

//$compte1->getTitulaire();

//$compte1->SetSolde('2000');

//$compte1->SetTitulaire('Fabien');

//$compte1->__toString();

//$compte1 = new CompteCourant ('Fabien', 2000, 500);

//$compte1->retirer(2505);

$compte1 = new CompteEpargne('Mathieu', 500, 2);

$compte1->verserInterets();

var_dump($compte1);


?>
