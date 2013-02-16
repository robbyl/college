<?php

$title = $_POST['title'];
$description = $_POST['description'];

require '../config/config.php';
require '../functions/general_functions.php';

$query_courses = "INSERT INTO courses
                      (course_title, course_posted_date, course_description)
               VALUES ('$title', CURRENT_TIMESTAMP(), '$description')";

$result_courses = mysql_query($query_courses) or die(mysql_error());

if ($result_courses) {
    info('message', 'Course posted successfully!');
    header('Location: home.php');
} else {
    info('error', 'Cannot post course!');
    header('Location: home.php');
}
?>
