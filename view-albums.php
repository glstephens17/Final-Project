<h1>Trending Top 10 Albums</h1>
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
       <td><?php echo $album['Artist_Name']; ?></td>
     <td><?php echo $album['No_of_Songs']; ?></td>
     <td><a href="#">songs</a><td>
   </tr>
 <?php  
 }
 ?>      
    </tbody>
  </table>
</div>
