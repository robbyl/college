<?php

require '../config/config.php';
require '../functions/general_functions.php';

$id = clean($_POST['id']);
$dwn_title = clean($_POST['title']);
$dwn_file_name = clean($_POST['download']); // attachment name from database

if ($dwn_file_name !== $dwn_file_name && !empty($dwn_file_name)) {
// Get and upload attachment file
    $allowed_file_ext = array("pdf", "doc", "docx");

    $extension = end(explode(".", $dwn_file_name));

    if (in_array($extension, $allowed_file_ext) && ($_FILES["download"]["size"] < 100000000)) {

        // Checking file for errors
        if ($_FILES["download"]["error"] > 0) {

            $message = "This file contain errors. Return Code: " . $_FILES["download"]["error"];
            //info('error', $message);
        } else {

            // Uploading new attachment to doc folder.
            move_uploaded_file($_FILES["download"]["tmp_name"], "uploads/docs/" . $dwn_file_name);

            // Deleting old attachment file
            unlink("uploads/docs/" . $dwn_file_name);

            $dwn_file_name = "UPDATE downloads
                                 SET dwn_file_name = '$dwn_file_name'
                               WHERE dwn_id = '$id'";

            $result_dwn_file_name = mysql_query($dwn_file_name) or die(mysql_error());
        }
    } else {

    info('error', 'This file type is not allowed');
    header('Location: home.php');
    exit(0);
    }
}

$query_dwn = "UPDATE downloads
                  SET dwn_title = '$dwn_title',
                WHERE dwn_id = '$id'";

$result_dwn = mysql_query($query_dwn) or die(mysql_error());

if ($result_dwn) {
    info('message', 'Downloads updated successfully!');
    header("Location: home.php");
} else {
    info('error', 'Cannot update downloads, please try again!');
    header("Location: home.php");
}
?>
