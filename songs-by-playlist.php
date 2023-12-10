
<?php
require_once("util-db.php");
require_once("model-songs-by-album.php");
$pageTitle = "Songs From Playlist";
include "view-header.php";
$songs = selectSongsByPlaylist($_POST['pid']);
include "view-songs-by-playlist.php";
include "view-footer.php";
?>
