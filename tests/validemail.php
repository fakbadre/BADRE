<?php

$email = "makssoudf@yahoo.fr";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

    echo ("L'adresse email est valide");
    }else {
        echo "L'adresse email est non valide";
    }
?>