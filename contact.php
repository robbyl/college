<?php
$values = explode('\\', __FILE__);
$current_file_name = end($values);
?>

<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>CONTACTS</title>
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

        <style type="text/css">
            .note1, .note2 {
                display: none;
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
                <!-- masterhead -->

                <!-- Content Seciton -->
                <div id="content_section">
                    <!-- News Updates -->
                    <div class="clear"></div>
                    <!-- Col1 -->
                    <div class="col1">
                        <!-- Content Links -->

                        <!-- Content Heading -->
                        <div class="sheading pad">
                            <div class="sheadings">
                                <h2>Contact Us</h2>
                            </div>
                            <div class="sheading_action">
                                <div class="print_this"><a href="#">Print This</a></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <?php
                        @include './includes/info.php';
                        ?>
                        <!-- Note -->
                        <!--                        <div class="note1">
                                                    <a href="contact.html#" class="close close1">&nbsp;</a>
                                                    <p >
                                                        <strong> NOTE:</strong>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et dui dolor. Fusce auctor dolor a diam tincidunt quis malesuada tellus.					</p>
                                                </div>-->
                        <div class="clear"></div>
                        <p class="contact_text">
                            If you have anything to say or ask, please don't hesitate to contact us. 
                        </p>
                        <div class="contactblock">
                            <!-- Contact block  -->
                            <div class="block1">
                                <h5>Postal Address</h5>

                                <div class="mailingaddress">
                                    <p>Royal pharmaceutical training institute,</p>
                                    <p>P.O.Box 100198,</p>
                                    <p>Dar es Salaam.</p>
                                </div>
                                <div class="teleno colr">
                                    +255 713 353 310, +255 765 353 310
                                </div>
                                <!--<div class="teleno1 colr">+44 123 4567 89</div>-->
                                <div class="emailaddress">
                                    <a href="mailto:info@royalpharm.ac.tz">info@royalpharm.ac.tz</a>
                                    <a href="#">www.royalpharm.ac.tz</a>
                                </div>
                            </div>
                            <div class="block2">
                                <!-- Visit Address -->
                                <h5>Visit Adress</h5>
                                <div class="mailingaddress">
                                    <p>Plot No.1</p>
                                    <p>Block C - Mbande</p>
                                    <p>Temeke District.</p>
                                </div>
                                <div class="teleno colr">+255 713 325 507, +255 688 353 310</div>
                                <!--                                <div class="emailaddress">
                                                                    <a href="contact.html#">info@universityofcollege.com</a>
                                                                    <a href="contact.html#">www.universityofcollege.com</a>
                                                                </div>
                                                                <div class="contacticon colr"> 464 64 65 4 64 56</div>-->

                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="contactblock">

                            <div class="block1">
                                <h5>Quick Inquiry</h5>
                                <form action="process_contact.php" method="post">
                                    <ul class="inquiry">
                                        <li><input name="txtName" type="text" placeholder="Name"  required=""/></li>
                                        <li><input name="txtEmail" type="email" placeholder="Email" required="" /></li>
                                        <li><input name="txtPhoneno" placeholder="Phone Number" type="tel" /></li>
                                        <li>
                                            <textarea name="txtMessage" class="txtarea" placeholder="Comments/Questions" required=""></textarea>
                                        </li>
                                    </ul>
                                    <div class="action1">
                                        <input type="submit" value="Submit"  class="btn1 left"/>
                                        <input type="reset" value="Cancel"  class="btn2 right"/>
                                        <!--<a href="#" class="btn1 left">Submit</a>-->
                                        <!--<a href="#" class="right">Cancel</a>-->
                                    </div>
                                </form>
                            </div>
                            <div class="block2">
                                <h5>Our Location</h5>
                                <div class="map">
                                    <img src="images/map.jpg"  alt="" />
                                </div>
                                <!--                                <div class="map_cities">
                                                                    <ul>
                                                                        <li><a href="contact.html#"><span>London</span></a> </li>
                                                                        <li><a href="contact.html#"><span>Surrey</span></a> </li>
                                                                        <li><a href="contact.html#"><span>Kent</span></a> </li>
                                                                        <li><a href="contact.html#"><span>Manchester</span></a> </li>
                                
                                                                    </ul>
                                                                </div>-->
                            </div>

                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                        <!-- Contact Other Campuses -->
                        <!--<h2 class="cheadng">Contact Other Campuses</h2>
                                                <div class="contactblock">
                                                    <div class="camuses_address">
                                                        <ul>
                                                            <li>
                                                                <h5>Surrey</h5>
                                                                <div class="mailingaddress">
                                                                    <p>Lempor hendrerit. Phasellus quis</p>
                                                                    <p>lacus diam. Sed nisl ligula,</p>
                                                                    <p>semper in ultricies sed</p>
                                                                </div>
                                                                <div class="teleno colr">+44 123 4567 89</div>
                                                                <div class="emailaddress">
                                                                    <a href="contact.html#">surry@universityofcollege.com</a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <h5>Kent</h5>
                                                                <div class="mailingaddress">
                                                                    <p>Lempor hendrerit. Phasellus quis</p>
                                                                    <p>lacus diam. Sed nisl ligula,</p>
                                                                    <p>semper in ultricies sed</p>
                                                                </div>
                                                                <div class="teleno colr">+44 123 4567 89</div>
                                                                <div class="emailaddress">
                                                                    <a href="contact.html#">surry@universityofcollege.com</a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <h5>Manchester</h5>
                                                                <div class="mailingaddress">
                                                                    <p>Lempor hendrerit. Phasellus quis</p>
                                                                    <p>lacus diam. Sed nisl ligula,</p>
                                                                    <p>semper in ultricies sed</p>
                                                                </div>
                                                                <div class="teleno colr">+44 123 4567 89</div>
                                                                <div class="emailaddress">
                                                                    <a href="contact.html#">surry@universityofcollege.com</a>
                                                                </div>
                                                            </li>
                        
                        
                                                        </ul>
                        
                                                    </div>
                        
                        
                                                </div>-->

                        <div class="clear"></div>
                        <!-- col1 ends -->
                    </div>
                    <!-- Col2 -->
                    <div class="col2">
                        <!-- Downloads -->

                        <?php
                        include './config/config.php';
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
        <?php include 'includes/footer.php'; ?>
    </body>
</html>
