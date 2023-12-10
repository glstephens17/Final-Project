<div class="row">
  <?php
  $count = 0;
  while ($playlist = $playlists->fetch_assoc()) {
    // Start a new row after every third playlist
    if ($count % 3 == 0 && $count != 0) {
      echo '</div><div class="row">';
    }
  ?>
    <div class="col-sm-4"> <!-- Adjusted to col-sm-4 for three columns -->
      <div class="card" style="width: 18rem;">
        <img src="<?php echo $playlist['image']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $playlist['Playlist_Title']; ?></h5>
          <p class="card-text">There are <?php echo $playlist['No_of_Songs']; ?> songs in this playlist. This is one of the best playlists created by ...</p>
          <form method="post" action="songs-by-album.php">

<input type="hidden" name="pid" value="<?php echo $playlist['Playlist_Id']; ?>"/>
            <button type="submit" class="btn btn-primary">Songs</button>
          </form>
        </div>
      </div>
    </div>
  <?php
    $count++;
  }
  ?>
</div>
