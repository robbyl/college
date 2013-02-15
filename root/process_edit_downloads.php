<?php

require '../config/config.php';
require '../functions/general_functions.php';

$id = clean($_POST['id']);
$title = clean($_POST['title']);
$file_name = clean($_FILES['download']['name']); // Get file name

// Get and upload attachment file
$allowed_file_ext = array("pdf", "doc", "docx");

$extension = end(explode(".", $file_name));

if (in_array($extension, $allowed_file_ext) && ($_FILES["download"]["size"] < 100000000)) {

    // Checking file for errors
    if ($_FILES["download"]["error"] > 0) {

        $message = "This file contain errors. Return Code: " . $_FILES["download"]["error"];
        info('error', $message);
        header('Location: home.php');
        exit(0);
    } else {

        // Uploading it to doc folder.
        move_uploaded_file($_FILES["download"]["tmp_name"], "uploads/downloads/" . $file_name);
    }
} else {

    info('error', 'This file type is not allowed');
    header('Location: home.php');
    exit(0);
}

$query_dwn = "UPDATE downloads
                   SET dwn_title = '$title', 
                       dwn_date_uploaded = CURRENT_TIMESTAMP(), 
                       dwn_file_name = '$file_name'
                   WHERE dwn_id = '$id'";

$result_dwn = mysql_query($query_dwn) or die(mysql_error());

if ($result_dwn) {
    info('message', 'File updated successfully!');
    header('Location: home.php');
} else {
    info('error', 'Cannot updated file, please try again!');
    header('Location: home.php');
}
?>