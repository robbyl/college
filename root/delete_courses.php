<?php

require '../functions/general_functions.php';
require '../config/config.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {

    $id = clean($_GET['id']);

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
