<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="./favicon.ico" type="image/x-icon" />
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/jquery-1.7.2.js" type="text/javascript"></script>
        <script src="js/tabs.js" type="text/javascript"></script>
        <script type="text/javascript">
            
        </script>
    </head>

    <body>
        <div class="wrapper">
            <div class="header">
                <ul class="nav">
                    <li><a href="">Welcome</a></li>
                    <li><a href="">Logout</a></li>
                </ul>
                <!-- end .header --></div>
            <div class="content">
                <div class="tabwrapper">
                    <div class="tabs_links">
                        <ul>
                            <li><a  href="#tab1">News</a></li>
                            <li><a href="#tab2">Events</a></li>
                            <li><a href="#tab3">Courses</a></li>
                            <li><a href="#tab4">Change password</a></li>
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
                                        <td><input type="file" name="attachment" class="text" style="padding-left: 0; padding-right: 10px"></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: top">News Description</td>
                                        <td><textarea name="description" required></textarea></td>
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
                                        <td><input type="file" name="attachment" class="text" style="padding-left: 0; padding-right: 10px"></td>
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
                        <button type="reset" class="post" form="charge_password">Reset</button>
                        <button type="submit" class="post" style="margin-right: 0" form="resert_password">Change</button>
                        <h2 class="label">Change your password</h2>
                        <div class="form-wrapper">
                            <form id="resert_password" action="resert_password.php" method="POST" enctype="multipart/form-data">
                            <table border="0" width="100%">
                                <tr>
                                    <td width="200">Current Password</td>
                                    <td><input type="password" name="title" class="text" required></td>
                                </tr>
                                <tr>
                                    <td width="200">New Password</td>
                                    <td><input type="password" name="title" class="text" required></td>
                                </tr>
                                <tr>
                                    <td width="200">Repeat New Password</td>
                                    <td><input type="password" name="title" class="text" required></td>
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
               
            <div class="footer"> 

                <!-- end .footer --></div>

    </body>
</html>