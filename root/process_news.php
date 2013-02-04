<?php

$title = $_POST['title'];
$description = $_POST['description'];

// Get and upload image file
$allowed_img_ext = array("jpg", "jpeg", "gif", "png");

$image_extenstion = end(explode(".", $_FILES["image"]["name"]));
if ((($_FILES["image"]["type"] == "image/gif")
        || ($_FILES["image"]["type"] == "image/jpeg")
        || ($_FILES["image"]["type"] == "image/png")
        || ($_FILES["image"]["type"] == "image/gif")
        || ($_FILES["image"]["type"] == "image/pjpeg"))
        && ($_FILES["image"]["size"] < 20000000)
        && in_array($image_extenstion, $allowed_img_ext)) {

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

// Get and upload attachment file
$allowed_file_ext = array("pdf", "msword", "vnd.openxmlformats-officedocument.wordprocessingml.document");


$extension = end(explode(".", $_FILES["attachment"]["name"]));

if ((($_FILES["attachment"]["type"] == "application/pdf")
        || ($_FILES["attachment"]["type"] == "application/msword")
        || ($_FILES["attachment"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document"))
        && ($_FILES["attachment"]["size"] < 100000000)
        ) {

    // Checking file for errors
    if ($_FILES["image"]["error"] > 0) {

        $message = "This file contain errors. Return Code: " . $_FILES["attachment"]["error"];
        //info('error', $message);
    } else {

        // Get file name
        $file_name = $_FILES['attachment']['name'];

        // Uploading it to doc folder.
         move_uploaded_file($_FILES["attachment"]["tmp_name"], "uploads/docs/" . $file_name);

       echo 'doc uploaded';
    }
} else {
    
    echo 'invalid file format';

//    info('error', 'This file type is not allowed');
//    header('Location: settings.php');
//    exit(0);
}

require '../config/config.php';

$query_news = "INSERT INTO news
                      (nws_title, nws_posted_date, nws_description,
                       nws_attachment, nws_image)
               VALUES ('$title', CURRENT_TIMESTAMP(), '$description',
                   '$file_name', '$image_name')";

$result_news = mysql_query($query_news) or die(mysql_error());

if($result_news){
    echo 'posted successfully';
} else {
    echo 'cannot post event';
}

?>
