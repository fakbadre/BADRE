<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
<!-- Methode gETT  -->
<!-- Input -->

<?php
if (isset($_GET['mon_champ'])) {
?>
Votre champ Input contenait :
<b> <?php echo $_GET['mon_champ']; ?></b>
<br/><br/>
<?php
}
?>
<form method="GET">
<input name="mon_champ" type="text"/>
<input name="valider" type="submit" value="OK"/>
</form>
