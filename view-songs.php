<h1>Songs</h1>
<?php include "view-song-newform.php"; ?>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Album</th>
                <th>Stage Name</th>
                <th>Duration</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($song = $songs->fetch_assoc()) : ?>
                <tr>
                    <td><?= $song['Song_Title']; ?></td>
                    <td><?= $song['Album_Title']; ?></td>
                    <td><?= $song['Stage_Name']; ?></td>
                    <td><?= $song['Duration']; ?></td>
                    <td><?php include "view-song-editform.php"; ?></td>
                    <td>
                        <form method="post" action="">
                            <input type="hidden" name="sid" value="<?= $song['Song_Id']; ?>">
                            <input type="hidden" name="actionType" value="Delete">
                            <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to Delete this Song?')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16
