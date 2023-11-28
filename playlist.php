<?php
require_once("util-db.php");
require_once("model-playlist.php");

$pageTitle = "Playlists";

$playlists = selectPlaylists();
include "view-playlist.php";
?>
