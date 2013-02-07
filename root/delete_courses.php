<?php

require '../functions/general_functions.php';
require '../config/config.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {

    $id = clean($_GET['id']);
    
   /* // Obtaining courses attachment name according to the given id
    $query_attachment = "SELECT nws_attachment
                           FROM news
                          WHERE nws_id = '$id'
                          LIMIT 1";

    $result_attachment = mysql_query($query_attachment) or die(mysql_error());

    $attachment = mysql_fetch_array($result_attachment);

    $attachment_name = $attachment['nws_attachment'];

    // Obtaining news attachment path
    $attachment_path = 'uploads/docs/' . $attachment_name;

    // Deleting news attachment file.
    unlink($attachment_path);
*/
    // Deleting news detail in the database.
    $query_courses = "DELETE FROM courses
                         WHERE course_id = '$id'";

    $result_courses = mysql_query($query_courses) or die(mysql_error());

    if ($result_courses) {
        info('message', 'Courses deleted successfully!');
        header('Location: home.php');
    } else {
        info('error', 'Cannot delete courses');
        header('Location: home.php');
    }
} else {
    info('error', 'Invalid course id');
    header('Location: home.php');
}
?>
