<h1>Gabs Albums</h1>
<?php
include "view-albums-newform.php";
?>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Album Title</th>
       <th>Artist</th>
        <th>Number of Songs</th>
      </tr>
    </thead>
    <tbody>
 <?php
 while ($album = $albums->fetch_assoc()) {
 ?>
   <tr>
     <td><?php echo $album['Album_Title']; ?></td>
       <td><?php echo $album['Stage_Name']; ?></td>
     <td><?php echo $album['No_of_Songs']; ?></td>
     <td> <form method="post" action="songs-by-album.php">

  <input type="hidden" name="alId" value="<?php echo $album['Album_Id']; ?>"/>
            <button type="submit" class="btn btn-primary">Songs</button>
          </form><td>
   </tr>
 <?php  
 }
 ?>      
    </tbody>
  </table>
</div>
