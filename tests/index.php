<!-- Tableau + fonction -->
<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

function blabla(){
    echo "salut";
}
blabla()
?>
<!--Exo age -->
<?php
$nom = "texte";

$age = 19;
$ville = "Paris";

$limit = 18;

if ($age > $limit){
  echo "Salut";
} else{
	echo "T'est petit!";
}
?>
<!--Calcul -->
<?php
$y = 1;
$x = 1;
echo $y + $x;

?>

<!--Exo syntaxe text conquaténation -->
<?php
$txt = "W3Schools.com";
echo("I \"love\" ".$txt." !<br>");
?>

<!-- html avec php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>


<?php

$acc = "BONJOUR";
$caa = 5;
$bll = true;

echo gettype($acc)."<br>";
echo gettype($caa)."<br>";
echo gettype($bll)."<br>";

$acc = strtolower($acc);

$tab1 = array("a", "b", "c", "d","e");

foreach($tab1 as $i => $val){
  echo $val."<br>";
}

$koo = array_rand($tab1,4);


foreach($koo as $i => $val){
  echo $val."<br>";
}
?>



