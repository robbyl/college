<?php
$current_file_name = 'about.php';

require 'config/config.php';
require 'functions/general_functions.php';

$query_staff = "SELECT * 
                       FROM staff";
$result_staff = mysql_query($query_staff) or die(mysql_error());

$row_staff = mysql_fetch_array($result_staff);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>BACKGROUND</title>
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
                    <div class="col1">
                        <div class="clear"></div>
                        <table align="center" border="1" cellpadding="1" cellspacing="0" width="100%">
                            <thead><h2>List below is the organisation structure</h2></thead>
                            <tbody>
                                <tr>
                                    <th>Picture</th>
                                    <th>Title</th>
                                    <th>Name</th>
                                </tr>
                                <tr align="center">
                                    <td><img src="images/gallery16.gif" style=" width: 120px; height: 100px; al"/></td>  
                                    <td>HEAD</td>  
                                    <td>JOSEPH</td>  
                                </tr>
                                <tr align="center">
                                    <td><img src="images/gallery16.gif" style=" width: 120px; height: 100px; al"/></td>  
                                    <td>HEAD</td>  
                                    <td>JOSEPH</td>  
                                </tr>
                                <tr align="center">
                                    <td><img src="images/gallery16.gif" style=" width: 120px; height: 100px; al"/></td>  
                                    <td>HEAD</td>  
                                    <td>JOSEPH</td>  
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- Col1 -->
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <!-- Footer Section -->
        <?php include 'includes/footer.php'; ?>
    </body>
</html>