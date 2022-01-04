<?php
$mon_champ = isset($_POST['mon_champ']) ? $_POST['mon_champ'] : '';
if ($mon_champ) {
?>
Vous avez choisi :
<b><?php echo $mon_champ; ?></b>
<br/><br/>
<?php
}
?>
<form method="POST">
<input type="radio" name="mon_champ" value="Option 1" <?php if($mon_champ == "Option 1") { echo 'checked'; } ?> />Option 1<br/>
<input type="radio" name="mon_champ" value="Option 2" <?php if($mon_champ == "Option 2") { echo 'checked'; } ?> />Option 2<br/>
<input type="radio" name="mon_champ" value="Option 3" <?php if($mon_champ == "Option 3") { echo 'checked'; } ?> />Option 3<br/>
<input type="submit" value="OK"/>
</form>

<?php
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
<select name="mon_champ">
<option>Option 1</option>
<option>Option 2</option>
<option>Option 3</option>
</select>
<input type="submit" value="OK"/>
</form>
