<?php
function selectSongs() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT s.Artist_Id, al.Album_Id, Song_Title, s.Song_Id, a.Artist_Name, a.Stage_Name, al.Album_Title, Duration FROM `Song` s JOIN Artist a ON s.Artist_Id = a.Artist_Id JOIN Album al ON s.Album_Id = al.Album_Id LIMIT 10;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertSong($sName, $aId, $alId, $duration) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Song` (`Song_Title`, `Artist_Id`, `Album_Id`, `Duration`) VALUES (?, ?, ?, ?);");
        $stmt->bind_param("siid", $sName, $aId, $alId, $duration);
        $success = $stmt->execute();
            $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateSong( $sName, $aid, $alId, $duration,$sId) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `Song` set `Song_Title` = ?, `Artist_Id` = ?, `Album_Id` = ?, `Duration` = ? WHERE `Song_Id` = ?");
        $stmt->bind_param("siidi", $sName, $aid, $alId, $duration,$sId);
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
function selectArtistsForInput() {
try {
$conn = get_db_connection();
$stmt = $conn->prepare("SELECT Artist_id, stage_name FROM `Artist` order by stage_name;");
$stmt->execute();
$result = $stmt->get_result();
$conn->close();
return $result;
} catch (Exception $e) {
$conn->close();
throw $e;
}
}

function selectAlbumsForInput() {
try {
$conn = get_db_connection();
$stmt = $conn->prepare("SELECT Album_Id, Album_Title FROM `Album` order by Album_Title;");
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
