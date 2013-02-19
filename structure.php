
<?php
require './config/config.php';

$current_file_name = 'about.php';

$query_staff = "SELECT staff_image, staff_title, `position`
                   FROM staff";

$result_staff = mysql_query($query_staff) or die(mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>STRUCTURE</title>
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
                            <div class="heading"><h2>Institution Structure</h2> </div>
                        </div>

                        <div class="clear"></div>
                        <!-- Content Block -->
                        <div class="listingblock">

                            <div class="clear"></div>
                          
                            <table class="structure" cellspacing="0">
                                    <tr>
                                        <th width="100">Photo</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                    </tr>
                                    <?php
                                    while ($row_staff = mysql_fetch_array($result_staff)) {
                                        ?>
                                        <tr>
                                            <td><img src="root/uploads/images/<?php echo $row_staff['staff_image']; ?>" width="100" /></td>
                                            <td><?php echo $row_staff['staff_title'] ?></td>
                                            <td><?php echo $row_staff['position'] ?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </table>
                                
                        </div>

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
