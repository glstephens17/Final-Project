<h1>Artists</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Artist Name</th>
      <th>Years Active</th>
      <th>Stage Name</th>
        <th>Genre</th>
      </tr>
    </thead>
    <tbody>
 <?php
 while ($artist = $artists->fetch_assoc()) {
 ?>
   <tr>
     <td><?php echo $artist['Artist_Name']; ?></td>
     <td><?php echo $artist['Years_Active']; ?></td>
     <td><?php echo $artist['Stage_Name']; ?></td>
     <td><?php echo $artist['Genre']; ?></td>
     <td><a href="parents-pets.php?id=<?php echo $parent['parent_id']; ?>"</a><td>
   </tr>
 <?php  
 }
 ?>      
    </tbody>
  </table>
</div>
