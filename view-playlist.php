<h1>Kids</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Playlist Id</th>
      <th>Name</th>
      <th>No of Songs</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
 <?php
 while ($playlist = $playlists->fetch_assoc()) {
 ?>
   <tr>
     <td><?php echo $playlist['Playlist_Id']; ?></td>
     <td><?php echo $playlist['Playlist_Title']; ?></td>
     <td><?php echo $playlist['No_of_Songs']; ?></td>
     <td>
  <form method="post" action="pets-by-kids.php">
    <input type="hidden" name="kid" value="<?php echo $playlist['Playlist_Id'];?>"/>
    <button type="submit" class="btn btn-primary">Songs</button>
  </form>
     </td>     
   </tr>
 <?php  
 }
 ?>      
    </tbody>
  </table>
</div>
