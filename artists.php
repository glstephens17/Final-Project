<?php
require_once("util-db.php");
require_once("model-artists.php");

$pageTitle = "Artists";
include "view-header.php";
  if(isset($_POST['actionType'])){
  switch($_POST['actionType']){
    case "Add":
        if(insertArtist($_POST['aName'],$_POST['yearActive'],$_POST['stageName'], $_POST['genre'] )){
          echo '<div class="alert alert-success" role="alert">Added a new artist successfully!</div>';
        }
        else{
          echo '<div class="alert alert-danger" role="alert">There was an error adding the artist</div>';
        }
        break;
    case "Edit":
           if(updateArtist($_POST['aName'],$_POST['yearActive'],$_POST['stageName'], $_POST['genre'], $_POST['aid']))
               {
          echo '<div class="alert alert-success" role="alert"> Artist successfully edited!</div>';
          }
          else
          {
          echo '<div class="alert alert-danger" role="alert"> Error</div>';
          }
          break;
    case "Delete":
        if (deleteKid($_POST['kId']))
        {
        echo '<div class="alert alert-success" role="alert"> Kid successfully deleted!</div>';
        }
        else {
        echo '<div class="alert alert-danger" role="alert"> Error</div>';
        }
  }
}
$artists = selectArtists();
include "view-artists.php";
include "view-footer.php";
?>
