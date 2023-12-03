<h1>Songs from this Album</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Title</th>
      <th>Album</th>
      <th>Artist</th>
        <th>Duration</th>
      </tr>
    </thead>
    <tbody>
 <?php
 while ($song = $songs->fetch_assoc()) {
 ?>
   <tr>
     <td><?php echo $song['Song_Title']; ?></td>
     <td><?php echo $song['Album_Title']; ?></td>
     <td><?php echo $song['Artist_Name']; ?></td>
     <td><?php echo $song['Duration']; ?></td>
     <td><a href="parents-pets.php?id=<?php echo $parent['parent_id']; ?>"</a><td>
   </tr>
 <?php  
 }
 ?>      
    </tbody>
  </table>
</div>
