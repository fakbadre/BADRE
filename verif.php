<?php
require 'config.php';
$query = "SELECT * FROM `register` WHERE username=:mail and mdp=:mdp";

    $donnes = $pdo->prepare($query);

    $donnes->bindValue(':mail', $_REQUEST['mail'], PDO::PARAM_STR);
    $donnes->bindValue(':mdp', $_REQUEST['mdp'], PDO::PARAM_STR); 

    $row = $donnes->execute();

    if($_REQUEST['mail'] === $_REQUEST['mdp']){
        echo "Hey";
    }else{
        echo "Bye";
    }

?>