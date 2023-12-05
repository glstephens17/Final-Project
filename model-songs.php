<?php
function selectSongs() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Song_Title, s.Song_Id, a.Artist_Name, a.Stage_Name al.Album_Title, Duration FROM `Song` s JOIN Artist a ON s.Artist_Id = a.Artist_Id JOIN Album al ON s.Album_Id = al.Album_Id LIMIT 100;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertSong($aName, $yearActive, $stageName, $genre) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Song` (`Artist_Name`, `Years_Active`, `Stage_Name`, `Genre`) VALUES (?, ?, ?, ?);");
        $stmt->bind_param("siss", $aName, $yearActive, $stageName, $genre);
        $success = $stmt->execute();
            $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updatSong($aName, $yearActive, $stageName, $genre, $aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Song` set `Artist_Name` = ?, `Years_Active` = ?, `Stage_Name` = ?, `Genre` = ? WHERE `artist_id` = ?");
        $stmt->bind_param("sissi",$aName, $yearActive, $stageName, $genre, $aid);
        $success = $stmt->execute();
            $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteSong($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `Song` WHERE `Song_Id` = ?");
        $stmt->bind_param("i", $sid);
        $success = $stmt->execute();
            $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
