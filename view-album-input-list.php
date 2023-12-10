<select class="form-select" id="alId" name="alId"> 
<?php while ($albumItem = $albumList->fetch_assoc()) {
$selText="";
if($selectedAlbum==$albumItem['Album_Id'])
{
$selText=" selected";
}
?>
<option value="<?php echo $albumItem['Album_Id'];?>"<?=$selText?>><?php echo
$albumItem['Album_Title']; ?></option>
<?php } ?>
</select>
