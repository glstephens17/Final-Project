
<?php
require_once("util-db.php");
require_once("model-songs-by-album.php");
$pageTitle = "Songs From Album";
include "view-header.php";
$songs = selectSongsByAlbum($_POST['alId']);
include "view-songs-by-album.php";
include "view-footer.php";
?>
