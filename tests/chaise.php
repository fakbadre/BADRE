<?php

class Chaise{
    public $salut;
    function dismoi($salut){
        echo $salut;  
    }
}

$chaise = new Chaise();
$chaise->dismoi("Bonjour!");

?>