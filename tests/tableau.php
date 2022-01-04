<?php

$acc = "BONJOUR";
$caa = 5;
$bll = true;

gettype($acc . $caa . $bll);

$acc = strtolower($acc);

$tab1 = array(
    "a" => "A",
    "b" => "B",
    "c" => "C",
);

foreach($tab1 as $index => $val){

echo $val;
}

echo "<br>";
$tab2 = array();

rsort($tab1);

foreach($tab1 as $index => $val){
    echo $val; 
};


?>
