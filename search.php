<?php
require_once "connection.php";
// (C) SEARCH
$stmt = $db->prepare("SELECT * FROM `tbl_file` WHERE `name` LIKE ? OR `categorie` LIKE ?");
$stmt->execute(["%".$_POST['search']."%", "%".$_POST['search']."%"]);
$results = $stmt->fetchAll();
if (isset($_POST['ajax'])) { echo json_encode($results); }

?>