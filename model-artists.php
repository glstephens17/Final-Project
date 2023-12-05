<?php
function selectArtists() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Artist_Name, Artist_Id, Years_Active, Stage_Name, Genre FROM `Artist` WHERE 1");
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
?>
