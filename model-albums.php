<?php
function selectAlbums() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Album_Title, al.Album_Id, a.Artist_Name, No_of_Songs FROM `Album` al JOIN Artist a ON al.Artist_Id = a.Artist_Id LIMIT 10;");
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
