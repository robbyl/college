<?php

require '../config/config.php';
require '../functions/general_functions.php';

$title = clean($_POST['title']);
$image_name = clean($_FILES['image']['name']); // Get image name
$position = clean($_POST['position']);

$query_org = "INSERT INTO staff
                      (staff_title, position, posted_date, staff_image)
               VALUES ('$title', '$position', CURRENT_TIMESTAMP(), '$image_name')";

$result_org = mysql_query($query_org) or die(mysql_error());

if ($result_org) {
    info('message', 'Staff posted successfully!');
    header('Location: home.php');
} else {
    info('error', 'Cannot post staff, please try again!');
    header('Location: home.php');
}
?>
