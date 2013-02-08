<?php

require '../config/config.php';
require '../functions/general_functions.php';

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = clean($_GET['id']);
    
    $query_courses = "SELECT *
                     FROM courses
                    WHERE course_id = '$id'
                    LIMIT 1";
    
    $result_courses = mysql_query($query_courses) or die(mysql_error());
    
   $row_courses = mysql_fetch_array($result_courses);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <link href="css/style.css" rel="stylesheet" />

        <script type="text/javascript">
            $('.close').click(function (){
               $('#pop-up').children().remove();
            });
        </script>
    </head>
    <body>
        <div class="pop-up-wrapper">
            <div class="pop-up-contents">
                <div class="pop-up-header">Edit news<div class="close"></div></div>
                <form class="pop-up-form" id="news-form" action="process_edit_events.php" method="POST" enctype="multipart/form-data">
                    <table border="0" width="100%">
                        <tr>
                            <td width="200">Title</td>
                            <td><input type="text" name="title" value="<?php echo $row_courses['course_title'] ?>" class="text" required></td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td><input type="file" name="image" class="text" style="padding-left: 0; padding-right: 10px"></td>
                        </tr>
                        <tr>
                            <td>Attachment</td>
                            <td><input type="file" name="attachment" class="text" style="padding-left: 0; padding-right: 10px"></td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">News Description</td>
                            <td><textarea name="description" required><?php echo $row_courses['course_description']; ?></textarea></td>
                        </tr>
                    </table>
                </form>
                <div class="pop-up-footer">
                    <button type="reset" class="post" style="margin-right: 0" form="news-form">Cancel</button>
                    <button type="submit" class="post" form="news-form">Update</button>
                    <div style="clear: both"></div>
                </div>
            </div>
        </div>
    </body>
</html>
