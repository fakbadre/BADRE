//<?php

// $a = 3;

// function salut(){
//     // global $a;
//     $a = "Hello world!";
//     echo $a;

// }
// salut();
// echo "<br>";
// print $a;
// echo "<br>";
// $dvd = "1euro";
// $produit = "dvd";

// echo $$produit;

// $v1 = "coucou ";
// $v2 = "coucou2 ";
// $v3 = "coucou3 ";

// print "<br>";

// for ($i=1; $i <= 3; $i++){
//     echo ${"v".$i};
//     echo "<br>";
// }
// echo "<br>";
// define("COUCOU","jean");

// echo COUCOU;
// echo"<br>";
// $prenom = 3;
// echo(gettype($prenom));

// $hh = "Ricardo";
// echo "<br>";
// echo ("Bonjour , je suis "$hh);

// $nombre = 60;

// if ($nombre < 18) {
//     echo "Vous etes mineur!";
// } elseif ($nombre > 18 && $nombre < 60) {
//     echo "Vous etes majeur!";
// }else{
//     echo"Vous etes sénior";
// }

// $homme = false;
// $age = 31;

// if ($homme === false and $age <18) {
//     echo "Va t'en !";
// } elseif ($homme === true and $age <18) {
//     echo "Va t'en !";
// }else{
//     echo "Hello";
// }
// $i =0;
// $j =2;

// while($i <=4 AND $j <= 7){
//     echo 'Boucle numéro '.$i."<br>";
//     // echo "Les maths c'est super! ".$j."<br>";
//     $i++;
//     $j++;
// }
// $ilk = "ricardo";

// for ($i=0; $i < 5; $i++) { 
//     echo 'Je suis '.$ilk." ".$i. "<br>";
// }

// $prenom = "Alex"; 
// $nom = "Doe";  
// $note1 = 10; 
// $note2 = 20; 
// $note3 = 18;

// $note = ($note1 + $note2 + $note3) /3;

// echo 'Bonjour' . ' '. $prenom . ' ' . $nom . ' ' . 'vous avez eu ' . $note . ' ' . 'de moyenne.';


// $t[0] = "Bonjour";
// $t[1] = "Bonsoir";
// $t[2] = "Bla la la";

// echo "Case numéro 2: ".$t[2]."<br>";
// for ($i=0; $i < 3; $i++) { 
//     echo "Case numéro $i : " .$t[$i]."<br>";
// }

// $nom["Thècle"]="Assicmonpote";
// $nom["Édith"]="Avuleur";
// $nom["Kelly"]="Diocy";
// $nom["Mélusine"]="Enfaillite";
// $nom["Elmer"]="Hitmieux";
// foreach ($nom as $clef => $valeur) {
// echo "<TR><TD>$clef</TD><TD>$valeur</TD> </TR>'<br>'";
// }

// $colors = array("rouge","vert","bleu");
// echo '<pre>';
// print_r($colors);
// var_dump($colors); 
// echo '</pre>';

// $result_2002 = array(12250, 12000, 21300, 25252, 20010, 8460);
// $result_2003 = array(1520, 25000, 13530, 1052, 5010, 3680);
// $result_2002_2003 = array_merge($result_2002, $result_2003);
// print_r($result_2002_2003);

/*
if (isset($_POST['mon_champ'])) {
?>
Votre champ contenait :
<b> <?php echo $_POST['mon_champ']; ?></b>
<br/><br/>
<?php
}
?>
<form method="POST">
<input name="mon_champ" type="text"/>
<input name="valider" type="submit" value="OK"/>
</form>
*/

/*
$mon_champ = isset($_POST['mon_champ']) ? $_POST['mon_champ'] : '';
if ($mon_champ) {
?>
Votre champ contenait :
<b><?php echo $mon_champ; ?></b>
<br/><br/>
<?php
}
?>
<form method="POST">
<textarea name="mon_champ"></textarea>
<input type="submit" value="OK"/>
</form>
*/
