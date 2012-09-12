<?php 

require 'config/config.php';

$query_news = "SELECT nws_title, nws_description, nws_posted_date, nws_attachment
                 FROM news
             ORDER BY nws_posted_date DESC
                LIMIT 0,10";

$result_news = mysql_query($query_news) or die(mysql_error());
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>College02</title>
        <!-- Stylesheet -->
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen" />
        <!-- Javascript -->
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
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="index.php#">Jobs</a></li>
                            <li><a href="index.php#">Student Profile </a></li>
                            <li><a href="index.php#" style="padding-right: 0">Our Campuses</a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                    <!-- top search -->
                    <div class="top_search">
                        <div class="advance_search"><a href="index.php#">Advance Option</a></div>
                        <ul>
                            <li>
                                <input name="txt" value="Search you any keyword"
                                       onfocus="if(this.value=='Search you any keyword') {this.value='';}"
                                       onblur="if(this.value=='') {this.value='Search you any keyword';}"   type="text" />
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
                        <li><a href="static.html">About Us</a></li>
                        <li><a href="index.php#">Admissions</a></li>
                        <li><a href="course.html">Academics</a>
                            <!-- Sub Menu level 1 -->
                            <ul>
                                <li><a href="course.html">Integer eu mi lorem, sit amet</a></li>
                                <li><a href="course.html" class="dropdown">Accumsan neque</a>
                                    <!-- Sub Menu Level 2 -->
                                    <ul>
                                        <li><a href="course.html">nteger eu mi lorem, sit amet</a></li>
                                        <li><a href="course.html">Accumsan neque</a></li>
                                        <li><a href="course.html">Donec varius arcu eu quam</a></li>
                                        <li><a href="course.html">Rutrum rhoncus.</a></li>
                                        <li><a href="course.html">Donec suscipit enim et</a></li>
                                    </ul>
                                </li>
                                <li><a href="course.html">Donec varius arcu eu quam</a></li>
                                <li><a href="course.html">Rutrum rhoncus.</a></li>
                                <li><a href="course.html">Donec suscipit enim et </a></li>
                                <li><a href="course.html">Ipsum eleifend quis luctus</a></li>
                                <li><a href="course.html">Arcu scelerisque.</a></li>
                                <li><a href="course.html">Duis a tortor tellusvel egestas</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php#">Research</a> </li>
                        <li><a href="index.php#">Campus &amp; Community</a></li>
                        <li><a href="index.php#">Support Us</a> </li>
                        <li><a href="index.php#">Pages</a>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="course.html">Courses</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blogdetail.html">Blog Detail</a></li>
                                <li><a href="news.html">News</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="static.html">Static</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php#" class="last">Themes</a>
                            <ul>
                                <li><a href="index.php">Blue</a></li>
                                <li><a href="../green/index.html">Green</a></li>
                                <li><a href="../gray/index.html">Gray</a></li>
                                <li><a href="../teal/index.html">Teal</a></li>
                            </ul>
                        </li>
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
                            <div id="slider2">
                                <div class="contentdiv"> <a href="index.php#"><img src="images/banner.jpg" alt="" /></a>
                                    <div class="banner_des">
                                        <h4>Fermentum accumsan metus et sagittis. duis molestie nunc </h4>
                                        <p>Nullam fermentum accumsan metus et sagittis. duis molestie nunc nec felis sollicitudin sed ornare lorem varius quisque </p>
                                    </div>
                                </div>
                                <div class="contentdiv"> <a href="index.php#"><img src="images/banner1.jpg" alt="" /></a>
                                    <div class="banner_des">
                                        <h4>Fermentum accumsan metus et sagittis. duis molestie nunc </h4>
                                        <p>Nullam fermentum accumsan metus et sagittis. duis molestie nunc nec felis sollicitudin sed ornare lorem varius quisque </p>
                                    </div>
                                </div>
                                <div class="contentdiv"> <a href="index.php#"><img src="images/banner2.jpg" alt="" /></a>
                                    <div class="banner_des">
                                        <h4>Fermentum accumsan metus et sagittis. duis molestie nunc </h4>
                                        <p>Nullam fermentum accumsan metus et sagittis. duis molestie nunc nec felis sollicitudin sed ornare lorem varius quisque </p>
                                    </div>
                                </div>
                                <div class="contentdiv"> <a href="index.php#"><img src="images/banner3.jpg" alt="" /></a>
                                    <div class="banner_des">
                                        <h4>Fermentum accumsan metus et sagittis. duis molestie nunc </h4>
                                        <p>Nullam fermentum accumsan metus et sagittis. duis molestie nunc nec felis sollicitudin sed ornare lorem varius quisque </p>
                                    </div>
                                </div>
                                <div class="contentdiv"> <a href="index.php#"><img src="images/banner4.jpg" alt="" /></a>
                                    <div class="banner_des">
                                        <h4>Fermentum accumsan metus et sagittis. duis molestie nunc </h4>
                                        <p>Nullam fermentum accumsan metus et sagittis. duis molestie nunc nec felis sollicitudin sed ornare lorem varius quisque </p>
                                    </div>
                                </div>
                            </div>
                            <div id="paginate-slider2" class="pagination"> </div>
                            <script type="text/javascript" src="js/slider.js" ></script>
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
                                <h2>Welcome to University of College Education</h2>
                            </div>
                        </div>
                        <p class="text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu porta lorem. Cras turpis ipsum, iaculis ut                                 auctor eget, euismod eget enim. Curabitur a lorem porttitor lectus euismod semper vitae eu purus. </p>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu porta lorem. Cras turpis ipsum, iaculis ut                                auctor eget, euismod eget enim. Curabitur a lorem porttitor lectus euismod semper vitae eu purus. Nulla at mi                                scelerisque urna dapibus ornare. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia                                Curae; Aliquam nec lectus elit, at aliquam est. Proin eget laoreet lectus. </p>
                        <p> Nullam scelerisque cursus leo at volutpat. Etiam non faucibus ante. Ut eget leo placerat velit imperdiet suscipit.                                , at aliquam est. Proin eget laoreet lectus. Nullam scelerisque cursus leo at volutpat. Etiam non faucibus ante.                                Ut eget leo placerat velit imperdiet suscipit.  at aliquam est. Proin eget laoreet lectus. Nullam scelerisque                                cursus leo at volutpat. <a class="readmore" href="index.php#"></a> </p>
                        <div class="clear"></div>
                        <!-- Content Block -->
                        <div class="contentblock">
                            <!-- Tabs -->
                            <div class="tabwrapper">
                                <div class="tabs_links">
                                    <ul>
                                        <li><a  href="index.php#tab1">News</a></li>
                                        <li><a class="nobg" href="index.php#tab2">Events</a></li>

                                    </ul>
                                </div>
                                <div class="tab_content" id="tab1" style="display:none" >
                                    <ul>
                                        <li>
                                            <div class="thumb"> <a href="news.html"><img src="images/news1.jpg"  alt=" " /></a> </div>
                                            <div class="descripton">
                                                <h6><a href="news.html">Lorem ipsum dolor sit amet, conse</a></h6>
                                                <em>(Posted on 17 Jan 11 , 2011)</em>
                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    placerat dignissim, diam lacus placerat ligula, </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb"> <a href="news.html"><img src="images/news2.jpg"  alt=" " /></a> </div>
                                            <div class="descripton">
                                                <h6><a href="news.html">Lorem ipsum dolor sit amet, conse</a></h6>
                                                <em>(Posted on 17 Jan 11 , 2011)</em>
                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    placerat dignissim, diam lacus placerat ligula, </p>
                                            </div>
                                        </li>
                                        <li class="nbbdr">
                                            <div class="thumb"> <a href="news.html"><img src="images/news3.jpg"  alt=" " /></a> </div>
                                            <div class="descripton">
                                                <h6><a href="news.html">Lorem ipsum dolor sit amet, conse</a></h6>
                                                <em>(Posted on 17 Jan 11 , 2011)</em>
                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    placerat dignissim, diam lacus placerat ligula, </p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                                <div class="tab_content" id="tab2" style="display:none" >
                                    <ul>
                                        <li>
                                            <div class="thumb"> <a href="news.html"><img src="images/news1.jpg"  alt=" " /></a> </div>
                                            <div class="descripton">
                                                <h6><a href="news.html">Lorem ipsum dolor sit amet, conse</a></h6>
                                                <em>(Posted on 17 Jan 11 , 2011)</em>
                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    placerat dignissim, diam lacus placerat ligula, </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb"> <a href="news.html"><img src="images/news2.jpg"  alt=" " /></a> </div>
                                            <div class="descripton">
                                                <h6><a href="news.html">Lorem ipsum dolor sit amet, conse</a></h6>
                                                <em>(Posted on 17 Jan 11 , 2011)</em>
                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    placerat dignissim, diam lacus placerat ligula, </p>
                                            </div>
                                        </li>
                                        <li class="nbbdr">
                                            <div class="thumb"> <a href="news.html"><img src="images/news3.jpg"  alt=" " /></a> </div>
                                            <div class="descripton">
                                                <h6><a href="news.html">Lorem ipsum dolor sit amet, conse</a></h6>
                                                <em>(Posted on 17 Jan 11 , 2011)</em>
                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    placerat dignissim, diam lacus placerat ligula, </p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <!-- Search Course -->
                            <div class="search_course">
                                <h4>Search Our New Courses</h4>
                                <p><a href="index.php#">Our courses</a> are applied,innovative and grounded in the real world.</p>
                                <div class="box">
                                    <div class="search_option">
                                        <ul class="option">
                                            <li>
                                                <input name="txt" value="Search you any keyword"
                                                       onfocus="if(this.value=='Search you any keyword') {this.value='';}"
                                                       onblur="if(this.value=='') {this.value='Search you any keyword';}"
                                                       type="text" />
                                            </li>
                                            <li><a class="search right" href="index.php#">Search</a></li>
                                        </ul>
                                        <ul class="advance_option">
                                            <li class="selected"><a href="index.php#">Advance Option</a></li>
                                            <li><a href="index.php#">Help</a></li>
                                            <li><a href="index.php#">A to Z Courses </a></li>
                                            <li class="nobg"><a href="index.php#"> Support</a></li>
                                        </ul>
                                    </div>
                                    <!-- Degree Type -->
                                    <div class="degree_type">
                                        <h5>Degree type</h5>
                                        <ul>
                                            <li>
                                                <input class="radiobutton" name="txt" type="radio" value="" />
                                                <span>Undergraduate</span></li>
                                            <li>
                                                <input class="radiobutton" name="txt" type="radio" value="" />
                                                <span>Post graduate</span></li>
                                            <li>
                                                <input class="radiobutton" name="txt" type="radio" value="" />
                                                <span>School</span></li>
                                            <li>
                                                <input class="radiobutton" name="txt" type="radio" value="" />
                                                <span>Others</span></li>
                                            <li>
                                                <input class="radiobutton" name="txt" type="radio" value="" />
                                                <span>Vocational Course</span></li>
                                        </ul>
                                    </div>
                                    <!-- Residnece Type -->
                                    <div class="resident_type">
                                        <h5>Resident Type</h5>
                                        <ul>
                                            <li>
                                                <input class="radiobutton" name="txt" type="radio" value="" />
                                                <span>United Kingdom</span></li>
                                            <li>
                                                <input class="radiobutton" name="txt" type="radio" value="" />
                                                <span>Wales</span></li>
                                            <li>
                                                <input class="radiobutton" name="txt" type="radio" value="" />
                                                <span>Ireland</span></li>
                                            <li>
                                                <select class="select_country" name="txt">
                                                    <option>USA</option>
                                                    <option>United Kingdom</option>
                                                    <option>Canada</option>
                                                </select>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="clear"></div>

                                    <!-- apply now -->
                                    <div class="apply_now"> <a class="aply_now" href="index.php#">Apply Now</a> <a class="find_out_how" href="index.php#">find out how</a> </div>
                                </div>
                            </div>
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
                                    <li class="active" ><a   href="index.php#rtab1">News</a></li>
                                    <li><a href="index.php#rtab2">Events</a> </li>
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
                                            <h6><a href="index.php#"><?php echo $row_news['nws_title'] ?></a></h6>
                                            <em>(Posted on <?php echo $row_news['nws_posted_date'] ?>)</em>
                                            <p><a href="index.php#" class="gray" ><?php echo $row_news['nws_description'] ?></a></p>
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
                                    <li>
                                        <div class="thumb" ><a href="index.php#"><img src="images/student1.jpg"  alt="" /></a></div>
                                        <div class="description">
                                            <h6><a href="index.php#">Peter Morgen</a></h6>
                                            <p><a href="index.php#" class="gray" >MBA, March 2011</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb" ><a href="index.php#"><img src="images/student2.jpg"  alt="" /></a></div>
                                        <div class="description">
                                            <h6><a href="index.php#">Elizabeth Simon</a></h6>
                                            <p><a href="index.php#" class="gray">BBA February 2010</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb" ><a href="index.php#"><img src="images/student3.jpg"  alt="" /></a></div>
                                        <div class="description">
                                            <h6><a href="index.php#">Remond Price</a></h6>
                                            <p><a href="index.php#" class="gray">ACCA January 2011</a></p>
                                        </div>
                                    </li>
                                    <li class="nobg" >
                                        <div class="thumb" ><a href="index.php#"><img src="images/student4.jpg"  alt="" /></a></div>
                                        <div class="description">
                                            <h6><a href="index.php#">Maria Knowls</a></h6>
                                            <p><a href="index.php#" class="gray">MBA December 2010</a></p>
                                        </div>
                                    </li>
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
                        <li><a href="index.php#">International students</a></li>
                        <li><a href="index.php#">About Collegeme</a></li>
                        <li><a href="index.php#">Current Students</a></li>
                        <li><a href="index.php#">Staff</a></li>
                    </ul>
                </div>
                <!-- Help and Support -->
                <div class="help_support">
                    <h5>Help &amp;Support</h5>
                    <ul>
                        <li><a href="index.php#">Academic Calendar</a></li>
                        <li><a href="index.php#">Bookstore</a></li>
                        <li><a href="index.php#">Colleges &amp; Schools</a></li>
                        <li><a href="index.php#">Courses</a></li>
                        <li><a href="index.php#">Professional Programs</a></li>
                        <li><a href="index.php#">Our Help Desk</a></li>
                    </ul>
                </div>
                <!-- Quick Links -->
                <div class="quick_links">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="index.php#">Directories</a></li>
                        <li><a href="index.php#">Site map</a></li>
                        <li><a href="index.php#">cMail | xMail</a></li>
                        <li><a href="index.php#">Campus Notices</a></li>
                        <li><a href="index.php#">Emergency Information</a></li>
                        <li><a href="index.php#">Staff</a></li>
                    </ul>
                </div>
                <!-- Addmission -->
                <div class="Addmissoin">
                    <h5>Addmission</h5>
                    <ul>
                        <li><a href="index.php#">Business</a></li>
                        <li><a href="index.php#">Financial Aid</a></li>
                        <li><a href="index.php#">Graduate</a></li>
                        <li><a href="index.php#">Law</a></li>
                        <li><a href="index.php#">Undergraduate</a></li>
                        <li><a href="index.php#">School</a></li>
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
                <div class="copyright">&copy; <?php echo date('Y') ?>  <a href="index.php#">College Site</a> All Rights Reserved</div>
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
