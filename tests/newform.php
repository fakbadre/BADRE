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
<option <?php if($mon_champ == "Option 1") { echo 'selected'; } ?>>Option 1</option>
<option <?php if($mon_champ == "Option 2") { echo 'selected'; } ?>>Option 2</option>
<option <?php if($mon_champ == "Option 3") { echo 'selected'; } ?>>Option 3</option>
</select>
<input type="submit" value="OK"/>
</form>
