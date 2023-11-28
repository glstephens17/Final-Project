<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'gabsoucr_gabspotify_user', 'gabspotify123', 'gabsoucr_gabspotify');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
