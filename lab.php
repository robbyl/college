<?php
include 'config/config.php';
$current_file_name = 'academics.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>LABORATORY</title>
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
                        <div id="banner1">
                            <a href="news.html#"><img src="images/lab.jpg" alt="" /></a>
                            <div class="heading">
                                <h1>Our Laboratory</h1>
                            </div>
                        </div>
                        <!--Content Links--> 
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
                        <div id="content2">
                            <h2 class="pad8">Our Laboratory</h2>
                            <!-- News Listing -->

                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!-- Col2 -->
                    <div class="col2">
                        <!-- Downloads -->
                        <?php include 'includes/downloads.php'; ?>
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
