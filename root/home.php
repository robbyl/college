<?php
session_start();
$user_name = $_SESSION['username'];
session_commit();

require '../config/config.php';

$query_news = "SELECT * 
                 FROM news
                 ORDER BY nws_posted_date DESC";
$result_news = mysql_query($query_news) or die(mysql_error());

$query_evnt = "SELECT * 
                 FROM events
                 ORDER BY event_posted_date DESC";
$result_evnt = mysql_query($query_evnt) or die(mysql_error());

$query_courses = "SELECT * 
                 FROM courses
                 ORDER BY course_posted_date DESC";
$result_courses = mysql_query($query_courses) or die(mysql_error());
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="./favicon.ico" type="image/x-icon" />
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/data_table.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.ui.theme.css" />
        <link rel="stylesheet" type="text/css" href="css/ui_darkness.css" />


        <script src="js/jquery-1.7.2.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.columnFilter.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.pagination.js" type="text/javascript"></script>
        <script src="js/royal-core.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="wrapper">
            <div class="header">
                <ul class="nav">
                    <li>Welcome <?php echo $user_name; ?>!</li>
                    <li><a href="../index.php">Royal-Home</a></li>|
                    <li><a href="logout.php">Logout</a></li>
                </ul>
                <!-- end .header -->
                <?php
                // Displaying message and errors
                include 'info.php';
                ?>
            </div>
            <div class="content">
                <div class="tabwrapper">
                    <div class="tabs_links">
                        <ul>
                            <li><a  href="#tab1">Post News</a></li>
                            <li><a href="#tab2">Post Events</a></li>
                            <li><a href="#tab3">Post Courses</a></li>
                            <li><a href="#tab4">Manage News</a></li>
                            <li><a href="#tab5">Manage Events</a></li>
                            <li><a href="#tab6">Manage Courses</a></li>
                            <li><a href="#tab7">Change password</a></li>
                        </ul>
                    </div>
                    <div class="tab_content" id="tab1" style="display:none" >
                        <button type="reset" class="post" form="news">Reset</button>
                        <button type="submit" class="post" style="margin-right: 0" form="news">Post</button>
                        <h2 class="label">Post News</h2>
                        <div class="form-wrapper">
                            <form id="news" action="process_news.php" method="POST" enctype="multipart/form-data">
                                <table border="0" width="100%">
                                    <tr>
                                        <td width="200">Title</td>
                                        <td><input type="text" name="title" class="text" required></td>
                                    </tr>
                                    <tr>
                                        <td>Image</td>
                                        <td><input type="file" name="image" class="text" style="padding-left: 0; padding-right: 10px"></td>
                                    </tr>
                                    <tr>
                                        <td>Attachment</td>
                                        <td><input type="file" name="attachment" required="" class="text" style="padding-left: 0; padding-right: 10px"></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: top">News Description</td>
                                        <td><textarea name="description" required=""></textarea></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="tab_content" id="tab2" style="display:none" >
                        <button type="reset" class="post" form="events">Reset</button>
                        <button type="submit" class="post" style="margin-right: 0" form="events">Post</button>
                        <h2 class="label">Post Events</h2>
                        <div class="form-wrapper">
                            <form id="events" action="process_events.php" method="POST" enctype="multipart/form-data">
                                <table border="0" width="100%">
                                    <tr>
                                        <td width="200">Title</td>
                                        <td><input type="text" name="title" class="text" required></td>
                                    </tr>
                                    <tr>
                                        <td>Image</td>
                                        <td><input type="file" name="image" class="text" style="padding-left: 0; padding-right: 10px"></td>
                                    </tr>
                                    <tr>
                                        <td>Attachment</td>
                                        <td><input type="file" name="attachment" required="" class="text" style="padding-left: 0; padding-right: 10px"></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: top">Event Description</td>
                                        <td><textarea name="description" required></textarea></td>
                                    </tr>
                                </table>
                            </form>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="tab_content" id="tab3" style="display:none" >
                        <button type="reset" class="post" form="courses">Reset</button>
                        <button type="submit" class="post" style="margin-right: 0" form="courses">Post</button>
                        <h2 class="label">Post Courses</h2>
                        <div class="form-wrapper">
                            <form id="events" action="process_courses.php" method="POST" enctype="multipart/form-data">
                                <table border="0" width="100%">
                                    <tr>
                                        <td width="200">Title</td>
                                        <td><input type="text" name="title" class="text" required></td>
                                    </tr>
                                    <tr>
                                        <td>Attachment</td>
                                        <td><input type="file" name="attachment" class="text" style="padding-left: 0; padding-right: 10px"></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: top">Courses Description</td>
                                        <td><textarea name="description" required></textarea></td>
                                    </tr>
                                </table>
                            </form>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="tab_content" id="tab4" style="display:none" >
                        <h2 class="label">Manage News</h2>
                        <div class="form-wrapper">
                            <table class="data-table" width="100%">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Date posted</th>
                                        <th>Description</th>
                                        <th>Attachment</th>
                                        <th>Actions</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row_news = mysql_fetch_array($result_news)) {
                                        $posted = date_create($row_news['nws_posted_date']);

                                        echo '<tr>';
                                        echo '<td>' . $row_news['nws_title'] . '</td>';
                                        echo '<td>' . date_format($posted, 'd M, Y @ H:i') . '</td>';
                                        echo '<td>' . $row_news['nws_description'] . '</td>';
                                        echo '<td><a href="uploads/docs/' . $row_news['nws_attachment'] . '">' . $row_news['nws_attachment'] . '</a></td>';
                                        echo '<td><a href="edit_news.php?id=' . $row_news['nws_id'] . '">Edit</a></td>';
                                        echo '<td><a href="delete_news.php?id=' . $row_news['nws_id'] . '">Delete</a></td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="tab_content" id="tab5" style="display:none" >
                        <h2 class="label">Manage Events</h2>
                        <div class="form-wrapper">
                            <table class="data-table" border="1" width="100%">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Date posted</th>
                                        <th>Description</th>
                                        <th>Attachment</th>
                                        <th>Actions</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row_evnt = mysql_fetch_array($result_evnt)) {

                                        echo '<tr>';
                                        echo '<td>' . $row_evnt['event_title'] . '</td>';
                                        echo '<td>' . $row_evnt['event_posted_date'] . '</td>';
                                        echo '<td>' . $row_evnt['event_description'] . '</td>';
                                        echo '<td><a href="uploads/docs/' . $row_evnt['event_attachment'] . '">' . $row_evnt['event_attachment'] . '</a></td>';
                                        echo '<td><a href="edit_events.php?id=' . $row_evnt['event_id'] . '">Edit</a></td>';
                                        echo '<td><a href="delete_events.php?id=' . $row_evnt['event_id'] . '">Delete</a></td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="tab_content" id="tab6" style="display:none" >
                        <h2 class="label">Manage Courses</h2>
                        <div class="form-wrapper">
                            <table border="1" class="data-table" width="100%">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Date posted</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row_courses = mysql_fetch_array($result_courses)) {
                                        echo '<tr>';
                                        echo '<td>' . $row_courses['course_title'] . '</td>';
                                        echo '<td>' . $row_courses['course_posted_date'] . '</td>';
                                        echo '<td>' . $row_courses['course_description'] . '</td>';
                                        echo '<td><a href="edit_courses.php?id=' . $row_courses['course_id'] . '">Edit</a></td>';
                                        echo '<td><a href="delete_courses.php?id=' . $row_courses['course_id'] . '">Delete</a></td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="tab_content" id="tab7" style="display:none" >
                        <button type="reset" class="post" form="charge_password">Reset</button>
                        <button type="submit" class="post" style="margin-right: 0" form="resert_password">Change</button>
                        <h2 class="label">Change your password</h2>
                        <div class="form-wrapper">
                            <form id="resert_password" action="process_change_pass.php" method="POST">
                                <table border="0" width="100%">
                                    <tr>
                                        <td width="200">Current Password</td>
                                        <td><input type="password" name="curr_pass" id="curr_pass" required size="255" class="text" ></td>
                                    </tr>
                                    <tr>
                                        <td width="200">New Password</td>
                                        <td><input type="password" name="new_pass" id="new_pass" size="255" class="text" required></td>
                                    </tr>
                                    <tr>
                                        <td width="200">Repeat New Password</td>
                                        <td>
                                            <input type="password" name="rep_new_pass" id="rep_new_pass"
                                                   required size="255" oninput="check(this)" class="text" >
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div> 
            <?php include '../includes/footer.php'; ?>
            <!-- end .footer -->
        </div>
    </body>

</html>
