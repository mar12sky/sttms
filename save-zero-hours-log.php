<?php
header("Access-Control-Allow-Origin: *");
date_default_timezone_set("Asia/Kolkata");
error_reporting(E_ALL);
include 'connection.php';
//var_dump($_POST);
$data = '';
$agenda_id = isset($_POST['agenda_id']) ? $_POST['agenda_id'] : '';
$del_id = isset($_POST['delegate_id']) ? $_POST['delegate_id'] : '';
$time_allotted = isset($_POST['time_allotted']) ? $_POST['time_allotted'] : '';
$time_taken = isset($_POST['time_taken']) ? $_POST['time_taken'] : '';
$created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');
$pdo = pdo_connect_mysql();
if (!empty($_POST)) {
    $stmt = pdo_connect_mysql()->prepare('INSERT INTO agenda_meta (agenda_meta_id, agenda_id, del_id, time_allotted, time_taken, created_at) VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute([NULL, $agenda_id, $del_id, $time_allotted, $time_taken, $created]);
    $data = [
        "status" => "success",
        "message" => "Time log has been saved Successfully "
    ]; //"Attendance for session date" .$date. "h "];

}
echo json_encode($data);
