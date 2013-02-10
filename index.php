<?php
require 'config/config.php';

$query_news = "SELECT nws_title, nws_description, nws_attachment, nws_posted_date
                 FROM news
             ORDER BY nws_posted_date DESC
                LIMIT 0,10";

$result_news = mysql_query($query_news) or die(mysql_error());


$query_events = "SELECT event_title, event_description, event_attachment, event_posted_date
                 FROM events
                 ORDER BY event_posted_date DESC
                 LIMIT 0,10";

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
        <div id="masterhead">
            <!-- Logo -->
            <div class="logo"><a href="index.php"><img src="images/logo.png" alt="" /></a></div>
            <!-- masterhead Right Section -->
            <div class="topright_sec">
                <!-- top navigation -->
                <div class="topnavigation">
                    <ul>
                        <li class="first">&nbsp;</li>
                        <li><a href="news.html">News</a></li>
                        <li><a href="index.php#">Events</a></li>
                        <!--<li><a href="index.php#">Jobs</a></li>-->
                        <li><a href="index.php#">Contact Us</a></li>
                        <li><a href="index.php#" style="padding-right: 0">Site Map</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
                <!-- top search -->
                <div class="top_search">
                    <div class="advance_search"><a href="index.php#">Advance Option</a></div>
                    <ul>
                        <li>
                            <input name="txt" placeholder="Search you any keyword" type="text" />
                        </li>
                        <li><a class="search" href="index.php#">Search</a></li>
                    </ul>
                </div>
                <div class="clear"> </div>
            </div>
            <div class="clear"></div>
        </div>
        <!-- Navigation -->
        <div class="navigation" style="float: none; margin: 0 auto !important; width: 960px;">
            <div id="smoothmenu1" class="ddsmoothmenu">
                <ul>
                    <li class="first"><a class="selected" href="index.php">Home</a></li>
                    <li><a href="static.html">About Us</a>
                        <ul>
                            <li><a href="#">Background</a></li>
                            <li><a href="#">Mission, Vision & Values</a></li>
                            <li><a href="#">Institute Structure</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php#">Admissions</a>
                        <ul>
                            <li><a href="#">Entry requirements</a></li>
                            <li><a href="#">Application Form</a></li>
                            <li><a href="#">Fee Structure</a></li>
                            <li><a href="#">Programmes</a></li>
                        </ul>
                    </li>
                    <li><a href="course.html">Academics</a>
                        <ul>
                            <li><a href="course.html">Library</a></li>
                            <li><a href="course.html">Laboratory</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php#">Research</a></li>
                    <li><a href="index.php#">Campus Life</a>
                        <ul>
                            <li><a href="#">Hostel Information</a></li>
                            <li><a href="#">Student Organization</a></li>
                            <li><a href="#">Religion Life</a></li>
                            <li><a href="#">Spots and Games</a></li>
                        </ul>
                    </li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="contact.html">Contact Us</a>
                    <li><a href="contact.html" class="last">Site Map</a>
<!--                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="course.html">Courses</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blogdetail.html">Blog Detail</a></li>
                            <li><a href="news.html">News</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="static.html">Static</a></li>
                        </ul>-->
                    </li>
<!--                    <li><a href="index.php#" class="last">Themes</a>
                        <ul>
                            <li><a href="index.php">Blue</a></li>
                            <li><a href="../green/index.html">Green</a></li>
                            <li><a href="../gray/index.html">Gray</a></li>
                            <li><a href="../teal/index.html">Teal</a></li>
                        </ul>
                    </li>-->
                </ul>
            </div>
            <!-- navigation ends -->
            <div class="clear"></div>
        </div>
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
                        </div>
                        <div class="rtab_content" id="rtab2" style="display:none;">
                            <ul>
                                <?php
                                while ($row_events = mysql_fetch_array($result_events)) {
                                    ?>
                                    <li>
                                        <div class="thumb" ><a href="index.php#"><img src="images/student1.jpg"  alt="" /></a></div>
                                        <div class="description">
                                            <h6><a href="root/uploads/docs/<?php echo $row_events['event_attachment']?>"><?php echo $row_events['event_title'] ?></a></h6>
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
                        </div>
                    </div>
                    <!-- Our College Gallery -->
                    <div class="college_gallery">
                        <h5>Our College Gallery</h5>
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
    <div id="bottom_seciton">
        <div id="footer">
            <!--Find your way -->
            <div class="find_your_way">
                <h5>Find your Way</h5>
                <ul>
                    <li><a href="index.php#">Home</a></li>
                    <li><a href="index.php#">Site map</a></li>
                    <li><a href="index.php#">About Us</a></li>
                </ul>
            </div>
            <!-- Quick Links -->
            <div class="quick_links">
                <h5>ICT Links</h5>
                <ul>
                    <li><a href="index.php#">Administration</a></li>
                    <li><a href="index.php#">Staff Mail</a></li>
<!--                    <li><a href="index.php#"></a></li>
                    <li><a href="index.php#">Campus Notices</a></li>
                    <li><a href="index.php#">Emergency Information</a></li>
                    <li><a href="index.php#">Staff</a></li>-->
                </ul>
            </div>
            <!-- Addmission -->
            <div class="Addmissoin">
                <h5>Addmission</h5>
                <ul>
                    <li><a href="index.php#">Entry Requirements</a></li>
                    <li><a href="index.php#">Application Form</a></li>
                    <li><a href="index.php#">Fee Structure</a></li>
                    <li><a href="index.php#">Programmes</a></li>
                </ul>
            </div>
            <!-- Help and Support -->
            <div class="help_support">
                <h5>Help &amp;Support</h5>
                <ul>
                    <li><a href="index.php#">Physical Location</a></li>
                    <li><a href="index.php#">E-mail Address</a></li>
                    <li><a href="index.php#">Phone Number</a></li>
                    <li><a href="index.php#">Web Site</a></li>
                </ul>
            </div>
            <!-- Contact Us -->
            <div class="contact_us">
                <h5>Contact Us</h5>
                <ul>
                    <li class="telephone_no">+44 (12) 123 4567 891</li>
                    <li  class="mailing_address"> Lorem ipsum dolor sit amet
                        consectetur adipis. </li>
                    <li class="email_address"><a href="index.php#">info@college.com</a></li>
                    <li class="googlemaps"><a href="index.php#">Google Maps</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!-- Bototm seciton -->
    <div id="bottom_Section">
        <!-- page bottm -->
        <div id="pagebottom">
            <!-- copyright -->
            <div class="copyright">&copy; <?php echo date('Y') ?>  <a href="index.php#">Royal Pharm</a> All Rights Reserved</div>
            <a href="index.php#" class="top">Top</a>
            <!-- Social Networks -->
            <div class="socail_networks">
                <ul>
                    <li class="servcies">Follows us our servcies</li>
                    <li><a href="index.php#"><img src="images/facebook_icon.gif"  alt="" /> </a></li>
                    <li><a href="index.php#"><img src="images/linkedin_icon.gif"  alt="" /> </a></li>
                    <li><a href="index.php#"><img src="images/twitter_icon.gif"  alt="" /> </a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</body>
</html>
