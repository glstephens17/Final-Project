
<h1>Songs from this Playlist</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Title</th>
      <th>Playlist</th>
      <th>Created On</th>
        <th>Updated At</th>
      </tr>
    </thead>
    <tbody>
 <?php
 while ($song = $songs->fetch_assoc()) {
 ?>
   <tr>
     <td><?php echo $song['Song_Title']; ?></td>
     <td><?php echo $song['Playlist_Title']; ?></td>
     <td><?php echo $song['Created_At']; ?></td>
     <td><?php echo $song['Updated_At']; ?></td>
   </tr>
 <?php  
 }
 ?>      
    </tbody>
  </table>
</div>
