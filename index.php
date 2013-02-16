<?php
$values = explode('\\', __FILE__);
$current_file_name = end($values);

require 'config/config.php';

$query_news = "SELECT nws_title, nws_description, nws_attachment,
                      nws_posted_date, nws_image
                 FROM news
             ORDER BY nws_posted_date DESC
                LIMIT 0, 5";

$result_news = mysql_query($query_news) or die(mysql_error());


$query_events = "SELECT event_title, event_description, event_attachment,
                        event_posted_date, event_image
                 FROM events
                 ORDER BY event_posted_date DESC
                 LIMIT 0, 5";

$result_events = mysql_query($query_events) or die(mysql_error());

$query_downloads = "SELECT dwn_title, dwn_date_uploaded, dwn_file_name
                 FROM downloads
                 ORDER BY dwn_date_uploaded DESC
                 LIMIT 0, 10";

$result_donwloads = mysql_query($query_downloads) or die(mysql_error());
?>


<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>HOME</title>
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
                                    <li><img src="data1/images/banner1.jpg" alt="GRADUATES" title="GRADUATES" id="wows1_0"/></li>
                                </ul></div>
                            <div class="ws_bullets"><div>
                                    <a href="data1/images/banner1.jpg" title="GRADUATES"><img src="data1/tooltips/banner1.jpg" alt="GRADUATES"/>1</a>
                                    <a href="data1/images/picture027.jpg" title="LECTURE ROOMS">2</a>
                                    <a href="data1/images/picture028.jpg" title="STUDENTS">3</a>
                                    <a href="data1/images/picture025.jpg" title="BUILDINGS">4</a>
                                    <a href="data1/images/picture014.jpg" title="CEREMONY">5</a>
                                </div></div>
                            <div class="ws_shadow"></div>
                        </div>
                        <script type="text/javascript" src="engine1/wowslider.js"></script>
                        <script type="text/javascript" src="engine1/script.js"></script>
                    </div>
                    <!-- Content Links -->
                    <div class="content_links">
                        <ul>
                            <li><a class="our_university" href="background.php">Our Institute</a></li>
                            <li><a class="admission" href="requirements.php">Admissions</a></li>
                            <li><a class="accommodaiton" href="#">Accommodations</a></li>
                            <li><a class="community" href="#">Community</a></li>
                            <li><a class="schorship" href="#">Scholorships</a></li>
                            <li class="last"><a class="take_tour" href="gallery.php">Take a Tour</a></li>
                        </ul>
                    </div>
                    <!-- Content Heading -->
                    <div class="content_heading">
                        <div class="heading">
                            <h2>Welcome to Royal Pharmaceutical Training Institute</h2>
                        </div>
                    </div>
                    <p class="text">The Royal pharmaceutical training Institute is a private institution, established in August 2010.  As a Pharmaceutical College, our core responsibility is to provide a conducive environment for teaching and learning, knowledge generation and community service. </p>
                    <p>The educational programmes that are offered have been carefully designed to suite a wide range of clientele. Individual students have the opportunity to choose programmes depending on their interest and convenience. <a class="readmore" href="index.php#"></a> </p>
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
                                        <div class="thumb" ><a href="#"><?php if (!empty($row_news['nws_image'])) echo '<img src="root/uploads/images/' . $row_news['nws_image'] . '"  alt="" />'; ?></a></div>
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
                                        <div class="thumb" ><a href="#"><?php if (!empty($row_events['event_image'])) echo '<img src="root/uploads/images/' . $row_events['event_image'] . '"  alt="" />'; ?></a></div>
                                        <div class="description" class="thumb">
                                            <h6><a href="root/uploads/docs/<?php echo $row_events['event_attachment'] ?>"><?php echo $row_events['event_title'] ?></a></h6>
                                            <em>
                                                (Posted on
                                                <?php
                                                $posted = date_create($row_events['event_posted_date']);
                                                echo date_format($posted, 'd M, Y')
                                                ?>)
                                            </em>
                                            <p><a href="root/uploads/docs/<?php echo $row_events['event_attachment'] ?>" class="gray" ><?php echo $row_events['event_description'] ?></a></p>
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
                            <?php
                            while ($row_download = mysql_fetch_array($result_donwloads)) {
                                $posted = date_create($row_download['dwn_date_uploaded']);
                                ?>
                                <li>
                                    <div class="thumb"><a href="root/uploads/downloads/<?php echo $row_download['dwn_file_name'] ?>"><img src="images/pdf_icon.png"  alt="" /></a></div>
                                    <div class="description">
                                        <h6><a href="root/uploads/downloads/<?php echo $row_download['dwn_file_name'] ?>"><?php echo $row_download['dwn_title'] ?></a></h6>
                                        <a class="gray1" href="root/uploads/downloads/<?php echo $row_download['dwn_file_name'] ?>"><?php echo date_format($posted, 'd M, Y') ?></a>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>
                            <!--                            <li>
                                                            <div class="thumb"><a href="contact.html#"><img src="images/wordicon.png"  alt="" /></a></div>
                                                            <div class="description">
                                                                <h6><a href="contact.html#">Lorem ipsum dolor sit amet</a></h6>
                                                                <a class="gray1" href="contact.html#">March 2011 </a>
                                                            </div>
                                                        </li>-->
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
