<select class="form-select" id="aId" name="aId"> 
<?php while ($artistItem = $artistList->fetch_assoc()) {
$selText="";
if($selectedArtist==$artistItem['Artist_Id'])
{
$selText=" selected";
}
?>
<option value="<?php echo $artistItem['Artist_Id'];?>"<?=$selText?>><?php echo
$artistItem['stage_name']; ?></option>
<?php } ?>
</select>
