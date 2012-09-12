<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="./favicon.ico" type="image/x-icon" />
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/jquery-1.7.2.js" type="text/javascript"></script>
        <script src="js/tabs.js" type="text/javascript"></script>
        <script type="text/javascript">
            
        </script>
    </head>

    <body>
        <div class="wrapper">
            <div class="header">
                <ul class="nav">
                    <li><a href="">Welcome</a></li>
                    <li><a href="">Logout</a></li>
                </ul>
                <!-- end .header --></div>
            <div class="content">
                <div class="tabwrapper">
                    <div class="tabs_links">
                        <ul>
                            <li><a  href="#tab1">News</a></li>
                            <li><a href="#tab2">Events</a></li>
                            <li><a href="#tab3">Courses</a></li>
                            <li><a href="#tab4">Change password</a></li>
                        </ul>
                    </div>
                    <div class="tab_content" id="tab1" style="display:none" >
                        <button type="reset" class="post" form="news">Rest</button>
                        <button type="submit" class="post" style="margin-right: 0" form="news">Post</button>
                        <h2 class="label">Post News</h2>
                        <div class="form-wrapper">
                            <form id="news" action="process_news.php" method="POST" enctype="multipart/form-data">
                                <table border="0" width="100%">
                                    <tr>
                                        <td width="200">Title</td>
                                        <td><input type="text" name="title" class="text" required></td>
                                    </tr>
                                    <tr>
                                        <td>Image</td>
                                        <td>
                                            <input type="file" name="image" class="text" style="padding-left: 0; padding-right: 10px"></td>
                                    </tr>
                                    <tr>
                                        <td>Attachment</td>
                                        <td><input type="file" name="attachment" class="text" style="padding-left: 0; padding-right: 10px"></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: top">News Description</td>
                                        <td><textarea name="description" required></textarea></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
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
                    <div class="tab_content" id="tab3" style="display:none" >
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
                    <div class="tab_content" id="tab4" style="display:none" >
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
                    <!-- .end tab-wrapper --></div>
                <!-- end .content --></div>
            <div class="footer">

                <!-- end .footer --></div>
            <!-- end .wrapper --></div>
    </body>
</html>