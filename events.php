<?php
include 'config/config.php';
include 'functions/general_functions.php';

$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
$page = clean($page);
$limit = 5;
$startpoint = ($page * $limit) - $limit;

$statement = "events ORDER BY event_posted_date DESC";

$query_events = "SELECT *
                 FROM {$statement}
                 LIMIT {$startpoint}, {$limit}";
$result_events = mysql_query($query_events) or die(mysql_error());
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
            <?php include './includes/header.php'; ?>
            <!-- end outter--></div>
        <div id="bg">
            <!-- Wapper Sec -->
            <div id="wrapper_sec">
                <!-- masterhead -->

                <!-- Content Section -->
                <div id="content_section">
                    <!-- News Updates -->

                    <div class="clear"></div>
                    <!-- Col1 -->
                    <div class="col1">
                        <!-- Banner -->
<!--                        <div id="banner1">
                            <a href="news.html#"><img src="images/newsbanner.gif" alt="" /></a>
                            <div class="heading">
                                <h1>College News and Events</h1>
                            </div>
                        </div>
                         Content Links 
                        <div class="content_links">
                            <ul>
                                <li><a class="our_university" href="news.html#">Our University</a></li>
                                <li><a class="admission" href="news.html#">Admissions</a></li>
                                <li><a class="accommodaiton" href="news.html#">Accommodations</a></li>
                                <li><a class="community" href="news.html#">Community</a></li>
                                <li><a class="schorship" href="news.html#">scholarships</a></li>
                                <li class="last"><a class="take_tour" href="news.html#">Take a Tour</a></li>
                            </ul>
                        </div>-->
                        <!-- Content Heading -->
                        <div id="content2">
                            <h2 class="pad8">Institute Events</h2>
                            <!-- News Listing -->
                            <ul class="listing">
                                <?php
                                while ($row_events = mysql_fetch_array($result_events)) {
                                    ?>
                                    <li>
                                        <div class="thumb"><a href="events.php#"><img src="images/news1.gif"  alt="" /></a></div>
                                        <div class="description">
                                            <h6><a href="root/uploads/docs/<?php echo $row_events['event_attachment'];?>" class="colr"><?php echo $row_events['event_title']; ?></a></h6>
                                            <p>
                                                <?php echo $row_events['event_description']; ?>
                                            </p>
                                            <div class="clear"></div>
                                            <div class="info">
                                                <?php 
                                                   $posted = date_create($row_events['event_posted_date']);
                                                ?>
                                                <span class="lastupdte"> Last Update by:<i><?php echo date_format($posted, 'D, d M Y') ?></i></span>
                                                <!--<span class="tag">Tag: <a href="news.html#">Business</a></span>-->
                                                <!--<span class="comments"><a href="news.html#"><strong>852</strong> Comments</a></span>-->
                                                <a class="moreinfo" href="root/uploads/docs/<?php echo $row_events['event_attachment'];?>">:: Moreinfo</a>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                            <div class="clear"></div>
                            <!-- pagination Listing -->
                            <div class="pginaiton pad9">
                                <?php echo pagination($statement, $limit, $page)  ?>
<!--                                <ul>
                                    <li><a href="news.html#">1</a></li>
                                    <li><a href="news.html#">2</a></li>
                                    <li><a href="news.html#">3</a></li>
                                    <li><a href="news.html#">4</a></li>
                                    <li><a href="news.html#">5</a></li>
                                    <li><a href="news.html#">6</a></li>
                                    <li><a href="news.html#">7</a></li>
                                    <li class="dots"> . . . . . . .</li>
                                    <li ><a href="news.html#"> 22</a></li>
                                    <li class="nextpage"><a href="news.html#">Next Page</a></li>
                                </ul>-->
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!-- Col2 -->
                    <div class="col2">
                        <!-- Search News -->
                        <div class="searchdiv">
                            <h5>Search Events</h5>
                            <ul>
                                <li>
                                    <input name="txt" value="Search you any keyword"
                                           onfocus="if (this.value == 'Search you any keyword') {
                                                       this.value = '';
                                                   }"
                                           onblur="if (this.value == '') {
                                                       this.value = 'Search you any keyword';
                                                   }"
                                           type="text" />
                                </li>
                                <li> <a href="events.php#"><img src="images/search_btn.jpg"  alt="" /></a></li>
                            </ul>
                        </div>
                        <!-- Top Student -->
                        <div class="rtab">
                            <div class="tab_navigation">
                                <ul>
                                    <li class="active" ><a   href="events.php#rtab1">Top Students</a></li>
                                    <li><a href="events.php#rtab2">Almuni</a> </li>
                                </ul>
                            </div>
                            <div class="rtab_content" id="rtab1" style="display:none;">
                                <ul>
                                    <li>
                                        <div class="thumb" ><a href="events.php#"><img src="images/student1.jpg"  alt="" /></a></div>
                                        <div class="description">
                                            <h6><a href="events.php#">Peter Morgen</a></h6>
                                            <p><a href="events.php#" class="gray" >MBA, March 2011</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb" ><a href="events.php#"><img src="images/student2.jpg"  alt="" /></a></div>
                                        <div class="description">
                                            <h6><a href="events.phpl#">Elizabeth Simon</a></h6>
                                            <p><a href="events.php#" class="gray">BBA February 2010</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb" ><a href="events.php#"><img src="images/student3.jpg"  alt="" /></a></div>
                                        <div class="description">
                                            <h6><a href="events.php#">Remond Price</a></h6>
                                            <p><a href="events.php#" class="gray">ACCA January 2011</a></p>
                                        </div>
                                    </li>
                                    <li class="nobg" >
                                        <div class="thumb" ><a href="events.php#"><img src="images/student4.jpg"  alt="" /></a></div>
                                        <div class="description">
                                            <h6><a href="events.php#">Maria Knowls</a></h6>
                                            <p><a href="events.php#" class="gray">MBA December 2010</a></p>
                                        </div>
                                    </li>

                                </ul>
                                <div class="clear"></div>
                            </div>

                            <div class="rtab_content" id="rtab2" style="display:none;">
                                <ul>
                                    <li>
                                        <div class="thumb" ><a href="events.php#"><img src="images/student1.jpg"  alt="" /></a></div>
                                        <div class="description">
                                            <h6><a href="events.php#">Peter Morgen</a></h6>
                                            <p><a href="events.php#" class="gray" >MBA, March 2011</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb" ><a href="events.php#"><img src="images/student2.jpg"  alt="" /></a></div>
                                        <div class="description">
                                            <h6><a href="events.php#">Elizabeth Simon</a></h6>
                                            <p><a href="events.php#" class="gray">BBA February 2010</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb" ><a href="events.php#"><img src="images/student3.jpg"  alt="" /></a></div>
                                        <div class="description">
                                            <h6><a href="events.php#">Remond Price</a></h6>
                                            <p><a href="events.php#" class="gray">ACCA January 2011</a></p>
                                        </div>
                                    </li>
                                    <li class="nobg" >
                                        <div class="thumb" ><a href="events.php#"><img src="images/student4.jpg"  alt="" /></a></div>
                                        <div class="description">
                                            <h6><a href="events.php#">Maria Knowls</a></h6>
                                            <p><a href="events.php#" class="gray">MBA December 2010</a></p>
                                        </div>
                                    </li>

                                </ul>
                                <div class="clear"></div>
                            </div>

                        </div>
                        <div class="clear"></div>
                        <!--col2 ends -->
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <!-- Footer Section -->
        <?php include './includes/footer.php'; ?>
    </body>
</html>