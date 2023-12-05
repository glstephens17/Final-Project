


 <?php
 while ($playlist = $playlists->fetch_assoc()) {
 ?>
  <div class="card-container">
  <?php while ($playlist = $playlists->fetch_assoc()) { ?>
    <div class="card" style="width: 18rem;">
<div class="card" style="width: 18rem;">
  <!--https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTY-DUTYkQNArXwRI7DchM0c6bpy987Oedwb8cjY-PECA&s-->
  <img src=<?php echo $playlist['image']; ?> class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">  <?php echo $playlist['Playlist_Title']; ?></h5>
    <p class="card-text">There are <?php echo $playlist['No_of_Songs']; ?> songs in this playlist. This is one of the best playlists created by ...</p>
    <form method="post" action="songs-by-album.php">
    <input type="hidden" name="pid" value="<?php echo $playlist['Playlist_Id'];?>"/>
    <button type="submit" class="btn btn-primary">Songs</button>
  </form>
  </div>
</div>
   
 <?php  
 }
 ?>   
  </div>
  <?php } ?>
</div>


   
