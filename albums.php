<?php
require_once("util-db.php");
require_once("model-albums.php");

$pageTitle = "Trending Albums";
include "view-header.php";
$albums = selectAlbums();
include "view-albums.php";
include "view-footer.php";
?>
