<?php
require_once("util-db.php");
require_once("model-songs.php");

$pageTitle = "Trending Songs";
include "view-header.php";
$songs = selectSongs();
include "view-songs.php";
include "view-footer.php";
?>
