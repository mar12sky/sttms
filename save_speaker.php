<?php
var_dump($_POST);
include 'debug.php';
include 'connection.php';
$pdo = pdo_connect_mysql();

if (isset($_POST['order'])) {
    //$order = $_POST['order'];
    $order = implode(',', $_POST['order']);
    $agenda_id = $_POST['agenda_id'];

    $stmt = $pdo->prepare("UPDATE agenda SET speaker_list = :speaker_list WHERE agenda_id = :agenda_id");
                $stmt->bindParam(':speaker_list', $order, PDO::PARAM_STR); // Assuming 'session_status' is a string
                $stmt->bindParam(':agenda_id', $agenda_id, PDO::PARAM_INT);
                $stmt->execute(); 
   echo "Order saved!";
}

//$pdo = null;
?>
