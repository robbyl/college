
<?php
require './config/config.php';

$current_file_name = 'admissions.php';

$query_course = "SELECT course_title, course_description, duration
                   FROM courses";

$result_courses = mysql_query($query_course) or die(mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>COURSE</title>
        <!-- Stylesheet -->
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen" />
        <!--Javascript--> 
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/ddsmoothmenu.js" type="text/javascript"></script>
        <script src="js/contentslider.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/jcarousellite_1.0.1.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.1.js"></script>
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/DIN_500.font.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
        <script type="text/javascript" src="js/tabs.js"></script>
        <script type="text/javascript" src="js/jquery.mousewheel-3.0.4.pack.js"></script>
        <script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
    </head>
    <body>
        <div class="wapper-header">
            <?php include 'includes/header.php'; ?>
            <!-- end outter--></div>
        <div id="bg">
            <!-- Wapper Sec -->
            <div id="wrapper_sec">
                <!-- masterhead -->

                <!-- Content Seciton -->
                <div id="content_section">
                    <!-- News Updates -->
                    <div class="clear"></div>
                    <!-- Col1 -->
                    <div class="col1">
                        <!-- Content Links -->

                        <!-- Content Heading -->
                        <div class="content_heading">
                            <div class="heading"><h2>Courses</h2> </div>
                        </div>
                        <p>
                            List of Courses that we offer.
                        </p>
                        <!--                        <div class="make_slection">
                                                    <span>To view the schedule for a different quarter, make your selection.</span>
                                                    <select name="txt">
                                                        <option>Spring 2011</option>
                                                        <option>Spring 2011</option>
                                                        <option>Spring 2011</option>
                                                        <option>Spring 2011</option>
                                                    </select>
                                                </div>-->
                        <div class="clear"></div>
                        <!-- Content Block -->
                        <div class="listingblock">
                            <div class="sheading">
                                <div class="sheadings">
                                    <!--<h5>Spring 2011 Courses Schedule</h5>-->
                                </div>
                                <div class="sheading_action">
                                    <div class="share left"><a href="course.html#">Share to your friends</a></div>
                                    <div class="print_this"><a href="course.html#">Print This</a></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="course_listing">
                                <ul class="listheading">
                                    <li class="coursename colr">Course Name</li>
                                    <li class="time colr">Course Description</li>
                                    <li class="instructor colr">Duration</li>
                                </ul>
                                <?php
                                while ($row_courses = mysql_fetch_array($result_courses)) {
                                    ?>
                                    <ul class="courselisting">
                                        <li class="coursename"><?php echo $row_courses['course_title']; ?></li>
                                        <li class="time"><?php echo $row_courses['course_description'] ?></li>
                                        <li class="instructor"><?php echo $row_courses['duration'] ?></li>
                                    </ul>
                                    <?php
                                }
                                ?>

                                <div class="clear"></div>
                            </div>
                        </div>

                        <!-- Note -->
                        <!--                        <div class="note">
                                                    <a href="course.html#" class="close">&nbsp;</a>
                                                    <p>
                                                        <strong> NOTE:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et dui dolor. Fusce auctor dolor a diam tincidunt quis malesuada tellus
                                                        Integer sit amet lorem ac ligula interdum elementum.
                                                    </p>
                                                </div>-->
                        <!--<h5 class="cheading">Spring 2011 Short Courses Schedule</h5>-->
                        <!-- Shore Course Listing -->

                        <!--                        <div class="listingblock">
                        
                                                    <div class="course_listing">
                                                        <ul class="listheading">
                                                            <li class="code colr">Code</li>
                                                            <li class="coursename colr">Course Name</li>
                                                            <li class="time colr">Time</li>
                                                            <li class="location colr">Location</li>
                                                            <li class="instructor colr">Instructor</li>
                                                        </ul>
                                                        <ul class="courselisting">
                                                            <li class="code">12345</li>
                                                            <li class="coursename"><a href="course.html#" class="colr">Firms, Government and Activists</a></li>
                                                            <li class="time">Th 4:30-7:20 p.m</li>
                                                            <li class="location"><a href="course.html#">Abc Campus</a></li>
                                                            <li class="instructor">Susan Mayer</li>
                                                        </ul>
                                                        <ul class="courselisting">
                                                            <li class="code">12345</li>
                                                            <li class="coursename"><a href="course.html#" class="colr">State-Building and Failure in the Developing World</a></li>
                                                            <li class="time">Tu 9:00-11:50 a.m.</li>
                                                            <li class="location"><a href="course.html#">Abc Campus</a></li>
                                                            <li class="instructor">Matt Demon</li>
                                                        </ul>
                                                        <ul class="courselisting">
                                                            <li class="code">12345</li>
                                                            <li class="coursename"><a href="course.html#" class="colr">Management in Organizations</a></li>
                                                            <li class="time">MW 10:30-11:50 a.m</li>
                                                            <li class="location"><a href="course.html#">Abc Campus</a></li>
                                                            <li class="instructor">Pablo Montagnes</li>
                        
                                                        </ul>
                                                        <ul class="courselisting nobdr">
                                                            <li class="code">12345</li>
                                                            <li class="coursename"><a href="course.html#" class="colr">Firms, Government and Activists</a></li>
                                                            <li class="time">Th 4:30-7:20 p.m</li>
                                                            <li class="location"><a href="course.html#">Abc Campus</a></li>
                                                            <li class="instructor">Susan Mayer</li>
                                                        </ul>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>-->

                        <div class="clear"></div>
                        <!-- col1 ends -->
                    </div>
                    <!-- Col2 -->
                    <div class="col2">
                        <!-- Downloads Gallery -->
                        <?php
                        include 'includes/downloads.php';
                        ?>
                        <div class="clear"></div>
                        <!--col2 ends -->
                    </div>
                    <div class="clear"></div>
                    <!-- Slder -->

                </div>
                <div class="clear"></div>
            </div>
        </div>
        <!-- Footer Section -->
        <?php include 'includes/footer.php'; ?>
    </body>
</html>
