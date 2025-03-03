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

        $group_name = isset($_POST['group_name']) ? $_POST['group_name'] : '';
        $strength = isset($_POST['strength']) ? $_POST['strength'] : '';

        $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');
        // Update the record
        $stmt = $pdo->prepare('UPDATE party_groups SET group_name = ?, strength = ?, created_at = ? WHERE group_id = ?');
        // Prepare the SQL statement        
        $stmt->bindParam(':group_id', $id, PDO::PARAM_LOB);
        // Bind the values to the placeholders
        $stmt->execute([$group_name, $strength, $created, $id]);


        $msg = 'Updated Successfully!';
        header('Location: edit-group.php?id=' . $id);
    }
} else {
    exit('No ID specified!');
}
