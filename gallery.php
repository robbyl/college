<?php
require 'config/config.php';

$values = explode('\\', __FILE__);
$current_file_name = end($values);

$query_gallery = "SELECT photo_name, photo_description
                    FROM gallery";

$result_gallery = mysql_query($query_gallery) or die(mysql_errno());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>GALLERY</title>
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
            <?php include 'includes/header.php'; ?>
        </div>
        <div id="bg">
            <!-- Wapper Sec -->
            <div id="wrapper_sec">
                <div id="content_section">
                    <div class="clear"></div>
                    <!-- Gallery -->
                    <div class="gallery">
                        <div class="gallery_top">
                            <div class="gallery_heading">
                                <h2>Our Institute Gallery</h2>
                            </div>
                            <div class="select_gallery">
                                <a  class="photo pactive" href="gallery.html#">&nbsp;</a>
                                <a class="movie " href="gallery.html#">&nbsp;</a>

                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- Col1 -->
                        <div class="categorydiv">
                            <ul>
                                <li><a class="selected" href="gallery.php#">Institute photos</a></li>
                                <!--                                <li><a href="gallery.html#">College Biulding</a></li>
                                                                <li><a href="gallery.html#">Our International Students</a></li>
                                                                <li><a href="gallery.html#">English Classis</a></li>
                                                                <li><a href="gallery.html#">Mr.Robort Lecture  </a></li>
                                                                <li><a href="gallery.html#">Lorum ipsum Dollor</a></li>-->
                            </ul>
                        </div>
                        <div class="thumbdiv">
                            <ul>
                                <?php
                                while ($row_gallery = mysql_fetch_array($result_gallery)) {
                                    ?>
                                    <li><a href="root/uploads/images/gallery/<?php echo $row_gallery['photo_name']; ?>" rel="galleryimg" class="galleryimg" title="<?php echo $row_gallery['photo_description'] ?>" ><img src="root/uploads/images/gallery/<?php echo $row_gallery['photo_name'] ?>"  height="100" /></a></li>
                                    <?php
                                }
                                ?>
                            </ul>
                            <div class="hdiv">&nbsp;</div>
                        </div>

                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <!-- Footer Section -->
        <?php include 'includes/footer.php'; ?>
    </body>
</html>
















