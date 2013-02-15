<?php

$title = $_POST['title'];
$description = $_POST['description'];

// Get and upload image file
//$allowed_img_ext = array("jpg", "jpeg", "gif", "png");

//$image_extenstion = end(explode(".", $_FILES["image"]["name"]));

/*if (in_array($image_extenstion, $allowed_img_ext) && in_array($image_extenstion, $allowed_img_ext)) {

    // Checking file for errors
    if ($_FILES["image"]["error"] > 0) {

        $message = "This file contain errors. Return Code: " . $_FILES["image"]["error"];
        //info('error', $message);
    } else {

        // Get image name
        $image_name = $_FILES['image']['name'];

        // Uploading it to image folder.
        move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/images/" . $image_name);
        
       echo 'uploaded';
    }
} else {
    
    echo 'invalid image format';

//    info('error', 'This file type is not allowed');
//    header('Location: settings.php');
//    exit(0);
}
*/
// Get and upload attachment file
$allowed_file_ext = array("pdf", "doc", "docx");

$extension = end(explode(".", $_FILES["attachment"]["name"]));

if (in_array($extension, $allowed_file_ext) && ($_FILES["attachment"]["size"] < 100000000)) {

    // Checking file for errors
    if ($_FILES["attachment"]["error"] > 0) {

        $message = "This file contain errors. Return Code: " . $_FILES["attachment"]["error"];
        //info('error', $message);
    } else {

        // Get file name
        $file_name = $_FILES['attachment']['name'];

        // Uploading it to doc folder.
         move_uploaded_file($_FILES["attachment"]["tmp_name"], "uploads/docs/" . $file_name);
    }
    
} else {
   
    echo 'invalid file format';

//    info('error', 'This file type is not allowed');
//    header('Location: settings.php');
//    exit(0);
}

require '../config/config.php';
require '../functions/general_functions.php';

$query_news = "INSERT INTO courses
                      (course_title, nws_posted_date, course_description, nws_attachment, nws_image)
               VALUES ('$title', CURRENT_TIMESTAMP(), '$description', '$file_name', '$image_name')";

$result_news = mysql_query($query_news) or die(mysql_error());

if($result_news){
    info('message', 'News posted successfully!');
    header('Location: home.php');
} else {
    info('error', 'Cannot post news!');
    header('Location: home.php');
}

?>
