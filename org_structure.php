<?php
$current_file_name = 'about.php';

require 'config/config.php';
require 'functions/general_functions.php';

$query_staff = "SELECT * 
                       FROM staff";
$result_staff = mysql_query($query_staff) or die(mysql_error());

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>INSTITUTION STRUCTURE</title>
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
        
        <style>
            th{
                font-weight: bold;
                background-color: #f4ffd0;
                color: #08387f;
                border: solid 1px #bbc1c4;
                height: 26px;
                line-height: 26px;
            }
            td{
                width: 708px;
                border: solid 1px #bbc1c4;
                background-color: #fafafa;
            }
        </style>
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
                        <h2>List below is the organisation structure</h2></br>
                        <table align="center" border="1px" cellpadding="1" cellspacing="0" width="100%">
                            <tbody>
                                <tr>
                                    <th>Picture</th>
                                    <th>Title</th>
                                    <th>Name</th>
                                </tr>
                                
                                <?php
                                   while ($row = mysql_fetch_array($result_staff)) {
                                     echo "<tr>";
                                     echo '<td><img src="root/uploads/images/' . $row['staff_image'] . '" height="80"/></td>';
                                     echo "<td>" . $row['staff_title'] . "</td>";
                                     echo "<td>" . $row['position'] . "</td>";
                                     echo "</tr>";
                                   }
                                ?>
                               
                            </tbody>
                        </table>
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