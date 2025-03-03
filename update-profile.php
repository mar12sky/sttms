<?php
//print_r($_POST);
include 'debug.php';
include 'connection.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_POST['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = $_POST['id'];
        $name = isset($_POST['del_name_en']) ? $_POST['del_name_en'] : '';
        $hindi = isset($_POST['del_name_hi']) ? $_POST['del_name_hi'] : '';
        $div = isset($_POST['div_no']) ? $_POST['div_no'] : '';
        $ip = isset($_POST['ip']) ? $_POST['ip'] : '';
        $party = isset($_POST['party']) ? $_POST['party'] : '';
        $designation = isset($_POST['designation']) ? $_POST['designation'] : '';
        $state = isset($_POST['state_name']) ? $_POST['state_name'] : '';
        $partyfullname = isset($_POST['full_party_name']) ? $_POST['full_party_name'] : '';
        $groupname = isset($_POST['group_name']) ? $_POST['group_name'] : '';
        $pics = $_FILES['picture']['name'];
        $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');
        if (empty($pics)) {
            $stmt = $pdo->prepare('SELECT pics FROM delegates WHERE id = ?');
            $stmt->execute([$id]);
            $contact = $stmt->fetch(PDO::FETCH_ASSOC);
            $pics = $contact['pics'];
            // Prepare the SQL statement
            $stmt = $pdo->prepare('UPDATE delegates SET id = ?, div_no = ?, name_en = ?, name_hi = ?, pics = ?, ip = ?, designation = ?, state_name = ?, party = ?, full_party_name = ?, group_name = ?, created_at = ? WHERE id = ?');
            $stmt->bindParam(':pics', $pics, PDO::PARAM_LOB);
            // Bind the values to the placeholders
            $stmt->execute([$id, $div, $name, $hindi, $pics, $ip, $designation, $state, $party, $partyfullname, $groupname, $created, $id]);


            $msg = 'Updated Successfully!';
            header('Location: profile.php?id=' . $id);
        } else {

            //$pics = file_get_contents($_FILES['picture']['tmp_name']);
            $pics = $_FILES['picture'];
            $image_temp = $pics['tmp_name'];
            $image_name = $pics['name'];
            $image_size = $pics['size'];
            $image_error = $pics['error'];
            $image_type = $pics['type'];
            $allowed_image_types = 'image/png';
            if ($image_type == $allowed_image_types) {
                //echo "valid png file";
                $pics = $image_name;
                move_uploaded_file($image_temp, 'pics/' . $image_name);
                $stmt = $pdo->prepare('UPDATE delegates SET id = ?, div_no = ?, name_en = ?, name_hi = ?, pics = ?, ip = ?, designation = ?, state_name = ?, party = ?, full_party_name = ?, group_name = ?, created_at = ? WHERE id = ?');
                $stmt->bindParam(':pics', $pics, PDO::PARAM_LOB);
                $stmt->execute([$id, $div, $name, $hindi, $pics, $ip, $designation, $state, $party, $partyfullname, $groupname, $created, $id]);
                $msg = 'Updated Successfully!';
                header('Location: profile.php?id=' . $id);
            } else {
                echo "Your choosen file is not a valid image type";
            }
        }
    }
} else {
    exit('No ID specified!');
}
