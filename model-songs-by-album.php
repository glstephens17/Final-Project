<?php
function selectSongsByPlaylist($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT s.Song_Title, p.Playlist_Title, s.Song_Id,sp.Created_At,sp.Updated_At FROM `SongPlaylist` sp join Playlist p on sp.Playlist_Id=p.Playlist_Id join Song s on s.Song_Id=sp.Song_Id where p.PlaylistId=?");
        $stmt->bind_param("i", $pid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function selectSongsByAlbum($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Song_Title, s.Song_Id, a.Artist_Name, al.Album_Title, Duration FROM `Song` s JOIN Artist a ON s.Artist_Id = a.Artist_Id JOIN Album al ON s.Album_Id = al.Album_Id where al.Album_Id=?;");
        $stmt->bind_param("i", $pid);
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
