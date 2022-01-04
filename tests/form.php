<!DOCTYPE html>
<html lang="fr  ">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="traitement.php" method="post">
<p>
<select name="couleur">
     <option value="rouge">Couleur rouge</option>
     <option value="vert" selected="selected">Couleur verte</option>
     <option value="bleu">Couleur bleue</option>
</select></p>
<p><input type="submit" value="Envoyer" /></p>
</form>


<?php

     if(isset($_POST['couleur']) AND is_array($_POST['couleur']))
     {
          foreach($_POST['couleur'] AS $valeur)
          {
                echo 'Vous avez sélectionné la couleur'.htmlentities($valeur).'<br />';
          }
     }
?> 

    
</body>
</html>
