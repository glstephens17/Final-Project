<?php
function selectAlbums() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Album_Title, al.Album_Id, a.Album_Name, No_of_Songs FROM `Album` al JOIN Album a ON al.Album_Id = a.Album_Id LIMIT 10;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertAlbum($aName, $yearActive, $stageName, $genre) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Album` (`Album_Title`, `No_of_Songs`, ``, `Genre`) VALUES (?, ?, ?, ?);");
        $stmt->bind_param("siss", $aName, $yearActive, $stageName, $genre);
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
