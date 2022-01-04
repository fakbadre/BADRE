<?php

abstract class Compte {

    public $titulaire;
    public $solde;
    


public function __construct(string $titulaire, float $solde){

      $this->titulaire = $titulaire;
      $this->solde = $solde;
     

}

public function voirSolde(){

    echo "Le solde de mon compte est de $this->solde euros";
}

public function getSolde (){

    return $this->solde;
} 

public function deposer(float $montant){

    $this->solde += $montant;
    
}

public function retirer(float $montant){

     if($this->solde >= $montant) {
         $this->solde -= $montant;
     } else {
         echo "Solde insuffisant";
     }

}

public function getTitulaire() {

       return $this->titulaire;

}

public function SetTitulaire($titulaire){
    $this->titulaire = $titulaire;
    return $this;
}

public function SetSolde(float $solde){
       if($solde>=0){
           $this->solde = $solde;
                  } return $this;
}

}?>
