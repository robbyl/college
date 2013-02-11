<?php
require 'config/config.php';

$query_news = "SELECT nws_title, nws_description, nws_attachment, nws_posted_date
                 FROM news
             ORDER BY nws_posted_date DESC
                LIMIT 0, 5";

$result_news = mysql_query($query_news) or die(mysql_error());


$query_events = "SELECT event_title, event_description, event_attachment, event_posted_date
                 FROM events
                 ORDER BY event_posted_date DESC
                 LIMIT 0, 5";

$result_events = mysql_query($query_events) or die(mysql_error());
?>


<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>College02</title>
    <!-- Stylesheet -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
    <!--<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen" />-->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <!-- Javascript -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/ddsmoothmenu.js" type="text/javascript"></script>
    <script src="js/contentslider.js" type="text/javascript"></script>
    <!--<script type="text/javascript" src="js/jcarousellite_1.0.1.js"></script>-->
    <script type="text/javascript" src="js/jquery.easing.1.1.js"></script>
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/DIN_500.font.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="js/tabs.js"></script>
    <!--<script type="text/javascript" src="js/jquery.mousewheel-3.0.4.pack.js"></script>-->
    <!--<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>-->
</head>
<body>
    <div class="wapper-header">
        <?php include './includes/header.php'; ?>
        <!-- end outter--></div>
    <div id="bg">
        <!-- Wapper Sec -->
        <div id="wrapper_sec">
            <!-- masterhead -->

            <!-- Content Seciton -->
            <div id="content_section">
                <div class="clear"></div>
                <!-- Col1 -->
                <div class="col1">
                    <!-- Banner -->
                    <div id="banner">
                        <div id="wowslider-container1">
                            <div class="ws_images"><ul>
                                    <li><img src="data1/images/banner1.jpg" alt="Graduants" title="Graduants" id="wows1_0"/></li>
                                    <li><img src="data1/images/picture027.jpg" alt="Lecture rooms" title="Lecture rooms" id="wows1_1"/></li>
                                    <li><img src="data1/images/picture028.jpg" alt="Students" title="Students" id="wows1_2"/></li>
                                    <li><img src="data1/images/picture025.jpg" alt="Buildings" title="Buildings" id="wows1_3"/></li>
                                </ul></div>
                            <div class="ws_bullets"><div>
                                    <a href="#" title="Graduants"><img src="data1/tooltips/banner1.jpg" alt="Graduants"/>1</a>
                                    <a href="#" title="Lecture rooms"><img src="data1/tooltips/picture027.jpg" alt="Lecture rooms"/>2</a>
                                    <a href="#" title="Students"><img src="data1/tooltips/picture028.jpg" alt="Students"/>3</a>
                                    <a href="#" title="Buildings"><img src="data1/tooltips/picture025.jpg" alt="Buildings"/>4</a>
                                </div></div>
                            <div class="ws_shadow"></div>
                        </div>
                        <script type="text/javascript" src="engine1/wowslider.js"></script>
                        <script type="text/javascript" src="engine1/script.js"></script>
                    </div>
                    <!-- Content Links -->
                    <div class="content_links">
                        <ul>
                            <li><a class="our_university" href="index.php#">Our University</a></li>
                            <li><a class="admission" href="index.php#">Admissions</a></li>
                            <li><a class="accommodaiton" href="index.php#">Accommodations</a></li>
                            <li><a class="community" href="index.php#">Community</a></li>
                            <li><a class="schorship" href="index.php#">Scholorships</a></li>
                            <li class="last"><a class="take_tour" href="index.php#">Take a Tour</a></li>
                        </ul>
                    </div>
                    <!-- Content Heading -->
                    <div class="content_heading">
                        <div class="heading">
                            <h2>Welcome to Royal Pharmaceutical Training Institute</h2>
                        </div>
                    </div>
                    <p class="text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu porta lorem. Cras turpis ipsum, iaculis ut                                 auctor eget, euismod eget enim. Curabitur a lorem porttitor lectus euismod semper vitae eu purus. </p>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu porta lorem. Cras turpis ipsum, iaculis ut                                auctor eget, euismod eget enim. Curabitur a lorem porttitor lectus euismod semper vitae eu purus. Nulla at mi                                scelerisque urna dapibus ornare. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia                                Curae; Aliquam nec lectus elit, at aliquam est. Proin eget laoreet lectus. </p>
                    <p> Nullam scelerisque cursus leo at volutpat. Etiam non faucibus ante. Ut eget leo placerat velit imperdiet suscipit.                                , at aliquam est. Proin eget laoreet lectus. Nullam scelerisque cursus leo at volutpat. Etiam non faucibus ante.                                Ut eget leo placerat velit imperdiet suscipit.  at aliquam est. Proin eget laoreet lectus. Nullam scelerisque                                cursus leo at volutpat. <a class="readmore" href="index.php#"></a> </p>
                    <div class="clear"></div>
                    <!-- Content Block -->
                    <div class="contentblock">

                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                    <!-- col1 ends -->
                </div>
                <!-- Col2 -->
                <div class="col2">

                    <!-- Top Student -->
                    <div class="rtab">
                        <div class="tab_navigation">
                            <ul>
                                <li class="active" ><a href="#rtab1">News</a></li>
                                <li><a href="#rtab2">Events</a> </li>
                            </ul>
                        </div>
                        <div class="rtab_content" id="rtab1" style="display:none;">
                            <ul>
                                <?php
                                while ($row_news = mysql_fetch_array($result_news)) {
                                    ?>
                                    <li>
                                        <div class="thumb" ><a href="index.php#"><img src="images/student1.jpg"  alt="" /></a></div>
                                        <div class="description">
                                            <h6><a href="root/uploads/docs/<?php echo $row_news['nws_attachment']; ?>"><?php echo $row_news['nws_title'] ?></a></h6>
                                            <em>
                                                (Posted on <?php
                                                $posted = date_create($row_news['nws_posted_date']);
                                                echo date_format($posted, 'd M, Y')
                                                ?>)
                                            </em>
                                            <p><a href="root/uploads/docs/<?php echo $row_news['nws_attachment']; ?>" class="gray" ><?php echo $row_news['nws_description'] ?></a></p>
                                        </div>
                                    </li>
                                    <?php
                                }
                                ?>

                            </ul>
                            <div class="clear"></div>
                            <div><a href="news.php" class="all-news-events">View all news</a></div>
                        </div>
                        <div class="rtab_content" id="rtab2" style="display:none;">
                            <ul>
                                <?php
                                while ($row_events = mysql_fetch_array($result_events)) {
                                    ?>
                                    <li>
                                        <div class="thumb" ><a href="index.php#"><img src="images/student1.jpg"  alt="" /></a></div>
                                        <div class="description">
                                            <h6><a href="root/uploads/docs/<?php echo $row_events['event_attachment'] ?>"><?php echo $row_events['event_title'] ?></a></h6>
                                            <em>
                                                (Posted on
                                                <?php
                                                $posted = date_create($row_events['event_posted_date']);
                                                echo date_format($posted, 'd M, Y')
                                                ?>)
                                            </em>
                                            <p><a href="index.php#" class="gray" ><?php echo $row_events['event_description'] ?></a></p>
                                        </div>
                                    </li>

                                    <?php
                                }
                                ?>
                            </ul>
                            <div class="clear"></div>
                            <div><a href="events.php" class="all-news-events">View all events</a></div>
                        </div>
                    </div>
                    <!-- Our College Gallery -->
                    <div class="college_gallery">
                        <h5>Downloads</h5>
                        <ul>
                            <li>
                                <div class="thumb"><a href="index.php#"><img src="images/ourcollege1.jpg"  alt="" /></a></div>
                                <div class="description">
                                    <h6><a href="index.php#">National Sports Day</a></h6>
                                    <a class="gray" href="index.php#"><em>(Posted on 17 Jan 11 , 2011)</em></a> </div>
                            </li>
                            <li>
                                <div class="thumb"><a href="index.php#"><img src="images/ourcollege2.jpg"  alt="" /></a></div>
                                <div class="description">
                                    <h6><a href="index.php#"> Annual Walk (2010)</a></h6>
                                    <a href="index.php#"><em>(Posted on 17 Jan 11 , 2011)</em></a> </div>
                            </li>
                            <li>
                                <div class="thumb"><a href="index.php#"><img src="images/ourcollege3.jpg"  alt="" /></a></div>
                                <div class="description">
                                    <h6><a href="index.php#"> Facebook Week</a></h6>
                                    <a href="index.php#"><em>(Posted on 17 Jan 11 , 2011)</em></a> </div>
                            </li>
                            <li>
                                <div class="thumb"><a href="index.php#"><img src="images/ourcollege4.jpg"  alt="" /></a></div>
                                <div class="description">
                                    <h6><a href="index.php#">Queens Day (2010)</a></h6>
                                    <a href="index.php#"><em>(Posted on 17 Jan 11 , 2011)</em></a> </div>
                            </li>
                            <li class="nobg">
                                <div class="thumb"><a href="index.php#"><img src="images/ourcollege4.jpg"  alt="" /></a></div>
                                <div class="description">
                                    <h6><a href="index.php#">International Students Day</a></h6>
                                    <a href="index.php#"><em>(Posted on 17 Jan 11 , 2011)</em></a> </div>
                            </li>
                        </ul>
                    </div>
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

    <?php include './includes/footer.php'; ?> 
</body>
</html>
