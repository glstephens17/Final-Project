<?php
require_once("util-db.php");
require_once("model-songs.php");

$pageTitle = "Trending Songs";
include "view-header.php";
 if(isset($_POST['actionType'])){
  switch($_POST['actionType']){
    case "Add":
        if(insertSong($_POST['sName'],$_POST['aId'],$_POST['alId'], $_POST['duration'] )){
          echo '<div class="alert alert-success" role="alert">Added a new Song successfully!</div>';
        }
        else{
          echo '<div class="alert alert-danger" role="alert">There was an error adding the Song</div>';
        }
        break;
    case "Edit":
           if(updateSong($_POST['sName'],$_POST['aid'],$_POST['alid'], $_POST['durantion'] )){
             echo '<div class="alert alert-success" role="alert"> Somg successfully edited!</div>';
          }
          else
          {
          echo '<div class="alert alert-danger" role="alert"> Error</div>';
          }
          break;
    case "Delete":
        if (deleteSong($_POST['sid']))
        {
        echo '<div class="alert alert-success" role="alert">Song successfully deleted!</div>';
        }
        else {
        echo '<div class="alert alert-danger" role="alert"> Error</div>';
        }
  }
}

$songs = selectSongs();
include "view-songs.php";
include "view-footer.php";
?>
