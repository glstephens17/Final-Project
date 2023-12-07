<?php
function selectAlbums() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT a.Stage_Name, al.Album_Title, al.Album_Id, No_of_Songs FROM `Album` al JOIN Artist a ON al.Artist_Id = a.Artist_Id LIMIT 10;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertAlbums($aTitle, $aId, $noOfSongs, $genre) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Album` (`Album_Title`, `Arist_Id`, `No_of_Songs`, `Genre`) VALUES (?, ?, ?, ?);");
        $stmt->bind_param("siis", $aTitle, $aId, $noOfSongs, $genre);
        $success = $stmt->execute();
            $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateAlbum($aName, $yearActive, $stageName, $genre, $aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Album` set `Album_Name` = ?, `Years_Active` = ?, `Stage_Name` = ?, `Genre` = ? WHERE `album_id` = ?");
        $stmt->bind_param("sissi",$aName, $yearActive, $stageName, $genre, $aid);
        $success = $stmt->execute();
            $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteAlbum($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `Album` WHERE `Album_Id` = ?");
        $stmt->bind_param("i", $aid);
        $success = $stmt->execute();
            $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
