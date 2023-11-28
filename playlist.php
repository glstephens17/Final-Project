<?php
require_once("util-db.php");
require_once("model-playlist.php");

$pageTitle = "Playlists";
include "view-header.php";
$kids = selectPlaylists();
include "view-playlist.php";
include "view-footer.php";
?>
