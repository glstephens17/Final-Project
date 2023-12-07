<?php
require_once("util-db.php");
require_once("model-albums.php");

$pageTitle = "Albums";
include "view-header.php";
if(isset($_POST['actionType'])){
  switch($_POST['actionType']){
    case "Add":
        if(insertAlbums($_POST['aTitle'],$_POST['aId'],$_POST['noOfSongs'] )){          
          echo '<div class="alert alert-success" role="alert">Added a new album successfully!</div>';
        }
        else{
          echo '<div class="alert alert-danger" role="alert">There was an error adding the Album</div>';
        }
        break;
    case "Edit":
           if(updateAlbums($_POST['alid'],$_POST['altitle'],$_POST['aid'], $_POST['noofsongs']))
               {
          echo '<div class="alert alert-success" role="alert"> Album successfully edited!</div>';
          }
          else
          {
          echo '<div class="alert alert-danger" role="alert"> Error</div>';
          }
          break;
    case "Delete":
        if (deleteAlbums($_POST['alid']))
        {
        echo '<div class="alert alert-success" role="alert"> Album successfully deleted!</div>';
        }
        else {
        echo '<div class="alert alert-danger" role="alert"> Error</div>';
        }
  }
}

$albums = selectAlbums();
include "view-albums.php";
include "view-footer.php";
?>
