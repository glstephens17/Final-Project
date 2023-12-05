<?php
function selectArtists() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Artist_Name, Artist_Id, Years_Active, Stage_Name, Genre FROM `Artist`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertArtist($aName, $yearActive, $stageName, $genre) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Artist` (`Artist_Name`, `Years_Active`, `Stage_Name`, `Genre`) VALUES (?, ?, ?, ?);");
        $stmt->bind_param("siss", $aName, $yearActive, $stageName, $genre);
        $success = $stmt->execute();
            $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateArtist($aName, $yearActive, $stageName, $genre, $aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Artist` set `Artist_Name` = ?, `Years_Active` = ?, `Stage_Name` = ?, `Genre` = ? WHERE `artist_id` = ?");
        $stmt->bind_param("sissi",$aName, $yearActive, $stageName, $genre, $aid);
        $success = $stmt->execute();
            $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteArtist($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `artist` WHERE `artist_id` = ?");
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
