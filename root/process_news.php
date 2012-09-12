<?php

$title = $_POST['title'];
$description = $_POST['description'];

echo $_FILES['attachment']['name'];
exit;
// Get and upload image file
$allowed_img_ext = array("jpg", "jpeg", "gif", "png");

$image_extenstion = end(explode(".", $_FILES["image"]["name"]));
if ((($_FILES["image"]["type"] == "image/gif")
        || ($_FILES["image"]["type"] == "image/jpeg")
        || ($_FILES["image"]["type"] == "image/png")
        || ($_FILES["image"]["type"] == "image/gif")
        || ($_FILES["image"]["type"] == "image/pjpeg"))
        && ($_FILES["image"]["size"] < 2000000)
        && in_array($image_extenstion, $allowed_img_ext)) {

    // Checking file for errors
    if ($_FILES["image"]["error"] > 0) {

        $message = "This file contain errors. Return Code: " . $_FILES["image"]["error"];
        info('error', $message);
    } else {

        // Get image name
        $image_name = $_FILES['image']['name'];

        // Uploading it to image folder.
        move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/images/" . $image_name);
        
       echo 'uploaded';
    }
} else {
    
    echo 'invalid format';

//    info('error', 'This file type is not allowed');
//    header('Location: settings.php');
//    exit(0);
}

// Get and upload attachment file
$allowed_file_ext = array("pdf", "doc", "docx");

$extension = end(explode(".", $_FILES["attachment"]["name"]));
if ((($_FILES["attachment"]["type"] == "pdf")
        || ($_FILES["attachment"]["type"] == "doc")
        || ($_FILES["attachment"]["type"] == "docx"))
        && ($_FILES["attachment"]["size"] < 2000000)
        && in_array($extension, $allowed_file_ext)) {

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
    
    echo 'invalid format';

//    info('error', 'This file type is not allowed');
//    header('Location: settings.php');
//    exit(0);
}
?>
