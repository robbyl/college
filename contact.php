<?php
$values = explode('\\', __FILE__);
$current_file_name = end($values);
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
                                <div class="print_this"><a href="contact.html#">Print This</a></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <!-- Note -->
                        <div class="note1">
                            <a href="contact.html#" class="close close1">&nbsp;</a>
                            <p >
                                <strong> NOTE:</strong>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et dui dolor. Fusce auctor dolor a diam tincidunt quis malesuada tellus.					</p>
                        </div>
                        <div class="clear"></div>
                        <p class="contact_text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et dui dolor. Fusce auctor dolor a diam tincidunt quis malesuada tellus auctor.                                  Integer samet lorem ac ligula interdum elementum. Maecenas lectus mauris.
                        </p>
                        <div class="contactblock">
                            <!-- Contact block  -->
                            <div class="block1">
                                <h5>Postal Adress</h5>

                                <div class="mailingaddress">
                                    <p>Royal pharmaceutical training institute,</p>
                                    <p>P.O.Box 100198,</p>
                                    <p>Dar es Salaam.</p>
                                </div>
                                <div class="teleno colr">
                                    +255 713 353 310, +255 765 353 310
                                </div>
                                <div class="teleno1 colr">+44 123 4567 89</div>
                                <div class="emailaddress">
                                    <a href="contact.html#">info@universityofcollege.com</a>
                                    <a href="contact.html#">www.universityofcollege.com</a>
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
                                <div class="emailaddress">
                                    <a href="contact.html#">info@universityofcollege.com</a>
                                    <a href="contact.html#">www.universityofcollege.com</a>
                                </div>
                                <div class="contacticon colr"> 464 64 65 4 64 56</div>

                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="contactblock">

                            <div class="block1">
                                <h5>Quick Inquiry</h5>
                                <ul class="inquiry">
                                    <li><input name="txtName" value="Name" type="text"
                                               onfocus="if (this.value == 'Name') {
                                                           this.value = '';
                                                       }"
                                               onblur="if (this.value == '') {
                                                           this.value = 'Name';
                                                       }"

                                               /></li>
                                    <li><input name="txtEmail" value="Email"
                                               onfocus="if (this.value == 'Email') {
                                                           this.value = '';
                                                       }"
                                               onblur="if (this.value == '') {
                                                           this.value = 'Email';
                                                       }"
                                               type="text" /></li>
                                    <li><input name="txtPhoneno" value="Phone Number"
                                               onfocus="if (this.value == 'Phone Number') {
                                                           this.value = '';
                                                       }"
                                               onblur="if (this.value == '') {
                                                           this.value = 'Phone Number';
                                                       }"
                                               type="text" /></li>
                                    <li>
                                        <select name="txtcountry">
                                            <option>USA</option>
                                            <option>Uk</option>
                                            <option>Pakistan</option>
                                        </select>
                                    </li>
                                    <li>
                                        <textarea  rows="0" cols="0" name="txtMessage" class="txtarea">Comments</textarea>
                                    </li>

                                </ul>
                                <div class="action1">
                                    <a href="contact.html#" class="btn1 left">Submit</a>
                                    <a href="contact.html#" class="right">Cancel</a>
                                </div>
                            </div>
                            <div class="block2">
                                <h5>Our Location</h5>
                                <div class="map">
                                    <a href="contact.html#"><img src="images/map.gif"  alt="" /></a>
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
                        <!-- Downloads Gallery -->
                        <div class="course_right">
                            <div class="crheading">
                                <h5 class="download" >Downloads</h5>
                                <a href="contact.html#">View More</a>
                            </div>
                            <ul>
                                <li>
                                    <div class="thumb"><a href="contact.html#"><img src="images/pdf_icon.png"  alt="" /></a></div>
                                    <div class="description">
                                        <h6><a href="contact.html#">Lorem ipsum dolor sit amet</a></h6>
                                        <a class="gray1" href="contact.html#">March 2011 </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb"><a href="contact.html#"><img src="images/wordicon.png"  alt="" /></a></div>
                                    <div class="description">
                                        <h6><a href="contact.html#">Lorem ipsum dolor sit amet</a></h6>
                                        <a class="gray1" href="contact.html#">March 2011 </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb"><a href="contact.html#"><img src="images/pdf_icon.png"  alt="" /></a></div>
                                    <div class="description">
                                        <h6><a href="contact.html#">Lorem ipsum dolor sit amet</a></h6>
                                        <a class="gray1" href="contact.html#">March 2011 </a>
                                    </div>
                                </li>
                                <li class="nobg">
                                    <div class="thumb"><a href="contact.html#"><img src="images/wordicon.png"  alt="" /></a></div>
                                    <div class="description">
                                        <h6><a href="contact.html#">Lorem ipsum dolor sit amet</a></h6>
                                        <a class="gray1" href="contact.html#">March 2011 </a>
                                    </div>
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
        <?php include 'includes/footer.php'; ?>
    </body>
</html>