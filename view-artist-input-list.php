<select class="form-select" id="aId" name="aId"> 
<?php while ($artistItem = $artistList->fetch_assoc()) {
$selText="";
if($selectedArtist==$artistItem['artist_id'])
{
$selText=" selected";
}
?>
<option value="<?php echo $artistItem['Artist_id'];?>"<?=$selText?>><?php echo
$artistItem['stage_name']; ?></option>
<?php } ?>
</select>
