<?php
//print_r($_POST);
include 'debug.php';
include 'connection.php';
$pdo = pdo_connect_mysql();
$msg = '';
// var_dump($_POST);
// die;
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_POST['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = $_POST['id'];
        $short_name = isset($_POST['short_name']) ? $_POST['short_name'] : '';
        $party_name = isset($_POST['party_name']) ? $_POST['party_name'] : '';
        $group_name = isset($_POST['group_name']) ? $_POST['group_name'] : '';
        $strength = isset($_POST['total_delegates']) ? $_POST['total_delegates'] : '';

        $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');
        // Update the record
        $stmt = $pdo->prepare('UPDATE parties SET party_name = ?, short_name = ?,  group_name = ?, total_delegates = ?, created_at = ? WHERE party_id = ?');
        // Prepare the SQL statement        
        $stmt->bindParam(':party_id', $id, PDO::PARAM_LOB);
        // Bind the values to the placeholders
        $stmt->execute([$party_name, $short_name, $group_name, $strength, $created, $id]);


        $msg = 'Updated Successfully!';
        header('Location: edit-party.php?id=' . $id);
    }
} else {
    exit('No ID specified!');
}
