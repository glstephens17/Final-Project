<?php
function selectAlbums() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Album_Title, a.Album_Id, a.Artist_Name, No_of_Songs FROM `Song` s JOIN Artist a ON s.Artist_Id = a.Artist_Id JOIN Album al ON s.Album_Id = al.Album_Id LIMIT 10;");
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
