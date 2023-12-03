<?php
function selectPlaylists() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT image,Playlist_Id,Playlist_Title,No_of_Songs FROM `Playlist`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
