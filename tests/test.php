<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="#" >
        <input type="text" name="n1">
        <select name="op" >                       
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select> 

        <input type="text" name="n2">
        <input type="submit" name="n3" value="Calculer">
    </form>
        <?php

            $resultat = $n1 + $n2;
            $resultat1 = $n1 - $n2;
            $resultat2 = $n1 * $n2;
            $resultat3 = $n1 / $n2;

        	$n1=$_POST['$n1'];
        	$op=$_POST['$op'];
        	$n2=$_POST['$n2'];
        	if (isset($op)){
                echo("Resultat du calcul ".$n1.$op.$n2." : ");  
            }
            if($op == "+"){
                echo $resultat; 
            }
            if($op == "-"){
                echo $resultat1; 
            }
            if($op == "*"){
                echo $resultat2;; 
            }
            if($op == "/"){
                echo $resultat3; 
            }
        ?>
        </body>
        </html>
