<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/sources/css/style.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/sources/css/colors/main.css" id="colors">
    <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/sources/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/sources/images/favicon.ico" type="image/x-icon">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header Container
    ================================================== -->
    <header id="header-container">

        <!-- Header -->
        <div id="header">
            <div class="container">

                <!-- Left Side Content -->
                <div class="left-side">

                    <!-- Logo -->
                    <div id="logo">
                        <a href="index.html"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/sources/images/logo.png" alt=""></a>
                    </div>

                    <!-- Mobile Navigation -->
                    <div class="menu-responsive">
                        <i class="fa fa-reorder menu-trigger"></i>
                    </div>

                    <!-- Main Navigation -->
                    <nav id="navigation" class="style-1">
                        <ul id="responsive">

                            <li><a class="current" href="#">Home</a>
                                <ul>
                                    <li><a href="index.html">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                    <li><a href="index-3.html">Home 3</a></li>
                                    <li><a href="index-4.html">Home 4</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Listings</a>
                                <ul>
                                    <li><a href="#">List Layout</a>
                                        <ul>
                                            <li><a href="listings-list-with-sidebar.html">With Sidebar</a></li>
                                            <li><a href="listings-list-full-width.html">Full Width</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Grid Layout</a>
                                        <ul>
                                            <li><a href="listings-grid-with-sidebar-1.html">With Sidebar 1</a></li>
                                            <li><a href="listings-grid-with-sidebar-2.html">With Sidebar 2</a></li>
                                            <li><a href="listings-grid-full-width.html">Full Width</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Half Screen Map</a>
                                        <ul>
                                            <li><a href="listings-half-screen-map-list.html">List Layout</a></li>
                                            <li><a href="listings-half-screen-map-grid-1.html">Grid Layout 1</a></li>
                                            <li><a href="listings-half-screen-map-grid-2.html">Grid Layout 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="listings-single-page.html">Single Listing</a></li>
                                </ul>
                            </li>

                            <li><a href="#">User Panel</a>
                                <ul>
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="dashboard-messages.html">Messages</a></li>
                                    <li><a href="dashboard-my-listings.html">My Listings</a></li>
                                    <li><a href="dashboard-reviews.html">Reviews</a></li>
                                    <li><a href="dashboard-bookmarks.html">Bookmarks</a></li>
                                    <li><a href="dashboard-add-listing.html">Add Listing</a></li>
                                    <li><a href="dashboard-my-profile.html">My Profile</a></li>
                                    <li><a href="dashboard-invoice.html">Invoice</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="pages-blog.html">Blog</a>
                                        <ul>
                                            <li><a href="pages-blog.html">Blog</a></li>
                                            <li><a href="pages-blog-post.html">Blog Post</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="pages-contact.html">Contact</a></li>
                                    <li><a href="pages-elements.html">Elements</a></li>
                                    <li><a href="pages-pricing-tables.html">Pricing Tables</a></li>
                                    <li><a href="pages-typography.html">Typography</a></li>
                                    <li><a href="pages-404.html">404 Page</a></li>
                                    <li><a href="pages-icons.html">Icons</a></li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                    <div class="clearfix"></div>
                    <!-- Main Navigation / End -->

                </div>
                <!-- Left Side Content / End -->


                <!-- Right Side Content / End -->
                <div class="right-side">
                    <div class="header-widget">
                        <a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i> Sign In</a>
                        <a href="dashboard-add-listing.html" class="button border with-icon">Add Listing <i class="sl sl-icon-plus"></i></a>
                    </div>
                </div>
                <!-- Right Side Content / End -->

                <!-- Sign In Popup -->
                <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

                    <div class="small-dialog-header">
                        <h3>Sign In</h3>
                    </div>

                    <!--Tabs -->
                    <div class="sign-in-form style-1">

                        <ul class="tabs-nav">
                            <li class=""><a href="#tab1">Log In</a></li>
                            <li><a href="#tab2">Register</a></li>
                        </ul>

                        <div class="tabs-container alt">

                            <!-- Login -->
                            <div class="tab-content" id="tab1" style="display: none;">
                                <form method="post" class="login">

                                    <p class="form-row form-row-wide">
                                        <label for="username">Username:
                                            <i class="im im-icon-Male"></i>
                                            <input type="text" class="input-text" name="username" id="username" value="" />
                                        </label>
                                    </p>

                                    <p class="form-row form-row-wide">
                                        <label for="password">Password:
                                            <i class="im im-icon-Lock-2"></i>
                                            <input class="input-text" type="password" name="password" id="password"/>
                                        </label>
                                        <span class="lost_password">
										<a href="#" >Lost Your Password?</a>
									</span>
                                    </p>

                                    <div class="form-row">
                                        <input type="submit" class="button border margin-top-5" name="login" value="Login" />
                                        <div class="checkboxes margin-top-10">
                                            <input id="remember-me" type="checkbox" name="check">
                                            <label for="remember-me">Remember Me</label>
                                        </div>
                                    </div>

                                </form>
                            </div>

                            <!-- Register -->
                            <div class="tab-content" id="tab2" style="display: none;">

                                <form method="post" class="register">

                                    <p class="form-row form-row-wide">
                                        <label for="username2">Username:
                                            <i class="im im-icon-Male"></i>
                                            <input type="text" class="input-text" name="username" id="username2" value="" />
                                        </label>
                                    </p>

                                    <p class="form-row form-row-wide">
                                        <label for="email2">Email Address:
                                            <i class="im im-icon-Mail"></i>
                                            <input type="text" class="input-text" name="email" id="email2" value="" />
                                        </label>
                                    </p>

                                    <p class="form-row form-row-wide">
                                        <label for="password1">Password:
                                            <i class="im im-icon-Lock-2"></i>
                                            <input class="input-text" type="password" name="password1" id="password1"/>
                                        </label>
                                    </p>

                                    <p class="form-row form-row-wide">
                                        <label for="password2">Repeat Password:
                                            <i class="im im-icon-Lock-2"></i>
                                            <input class="input-text" type="password" name="password2" id="password2"/>
                                        </label>
                                    </p>

                                    <input type="submit" class="button border fw margin-top-10" name="register" value="Register" />

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Sign In Popup / End -->

            </div>
        </div>
        <!-- Header / End -->

    </header>
    <div class="container">
        <?php echo $content; ?>
    </div>
    <!-- Footer
    ================================================== -->
    <div id="footer" class="sticky-footer">
        <!-- Main -->
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <img class="footer-logo" src="<?php echo Yii::app()->theme->baseUrl; ?>/sources/images/logo.png" alt="">
                    <br><br>
                    <p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
                </div>

                <div class="col-md-4 col-sm-6 ">
                    <h4>Helpful Links</h4>
                    <ul class="footer-links">
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Sign Up</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Add Listing</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>

                    <ul class="footer-links">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Our Partners</a></li>
                        <li><a href="#">How It Works</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="col-md-3  col-sm-12">
                    <h4>Contact Us</h4>
                    <div class="text-widget">
                        <span>12345 Little Lonsdale St, Melbourne</span> <br>
                        Phone: <span>(123) 123-456 </span><br>
                        E-Mail:<span> <a href="#">office@example.com</a> </span><br>
                    </div>

                    <ul class="social-icons margin-top-20">
                        <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                        <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                        <li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
                    </ul>

                </div>

            </div>

            <!-- Copyright -->
            <div class="row">
                <div class="col-md-12">
                    <div class="copyrights">© 2017 Listeo. All Rights Reserved.</div>
                </div>
            </div>

        </div>

    </div>
    <!-- Footer / End -->


    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->



<!-- Scripts
================================================== -->
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/sources/scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/sources/scripts/jpanelmenu.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/sources/scripts/chosen.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/sources/scripts/slick.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/sources/scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/sources/scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/sources/scripts/waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/sources/scripts/counterup.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/sources/scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/sources/scripts/tooltips.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/sources/scripts/custom.js"></script>

<!-- Maps -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDJhgUHr15-NnoWV3kFBNNnaLlo8_oCI7Q&amp;language=en"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/sources/scripts/infobox.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/sources/scripts/markerclusterer.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/sources/scripts/maps.js"></script>



</body>
</html>