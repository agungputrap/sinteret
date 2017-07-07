<!DOCTYPE html>
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
    <header id="header-container" class="fixed fullwidth dashboard">

        <!-- Header -->
        <div id="header" class="not-sticky">
            <div class="container">

                <!-- Left Side Content -->
                <div class="left-side">

                    <!-- Logo -->
                    <div id="logo">
                        <a href="index.html"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/sources/images/logo.png" alt=""></a>
                        <a href="index.html" class="dashboard-logo"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/sources/images/logo2.png" alt=""></a>
                    </div>

                    <!-- Mobile Navigation -->
                    <div class="menu-responsive">
                        <i class="fa fa-reorder menu-trigger"></i>
                    </div>

                    <!-- Main Navigation -->
                    <nav id="navigation" class="style-1">
                        <ul id="responsive">

                            <li><a href="#">Home</a>
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

                            <li><a class="current" href="#">User Panel</a>
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
                    <!-- Header Widget -->
                    <div class="header-widget">

                        <!-- User Menu -->
                        <div class="user-menu">
                            <div class="user-name"><span><img src="<?php echo Yii::app()->theme->baseUrl; ?>/sources/images/dashboard-avatar.jpg" alt=""></span>Tom Perrin</div>
                            <ul>
                                <li><a href="dashboard.html"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
                                <li><a href="dashboard-messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
                                <li><a href="dashboard-my-profile.html"><i class="sl sl-icon-user"></i> My Profile</a></li>
                                <li><a href="index.html"><i class="sl sl-icon-power"></i> Logout</a></li>
                            </ul>
                        </div>

                        <a href="dashboard-add-listing.html" class="button border with-icon">Add Listing <i class="sl sl-icon-plus"></i></a>
                    </div>
                    <!-- Header Widget / End -->
                </div>
                <!-- Right Side Content / End -->

            </div>
        </div>
        <!-- Header / End -->

    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->


    <!-- Dashboard -->
    <div id="dashboard">

        <!-- Navigation
        ================================================== -->

        <!-- Responsive Navigation Trigger -->
        <a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

        <div class="dashboard-nav">
            <div class="dashboard-nav-inner">

                <ul data-submenu-title="Main">
                    <li class="active"><a href="dashboard.html"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
                    <li><a href="dashboard-messages.html"><i class="sl sl-icon-envelope-open"></i> Messages <span class="nav-tag messages">2</span></a></li>
                </ul>

                <ul data-submenu-title="Listings">
                    <li><a><i class="sl sl-icon-layers"></i> My Listings</a>
                        <ul>
                            <li><a href="dashboard-my-listings.html">Active <span class="nav-tag green">6</span></a></li>
                            <li><a href="dashboard-my-listings.html">Pending <span class="nav-tag yellow">1</span></a></li>
                            <li><a href="dashboard-my-listings.html">Expired <span class="nav-tag red">2</span></a></li>
                        </ul>
                    </li>
                    <li><a href="dashboard-reviews.html"><i class="sl sl-icon-star"></i> Reviews</a></li>
                    <li><a href="dashboard-bookmarks.html"><i class="sl sl-icon-heart"></i> Bookmarks</a></li>
                    <li><a href="dashboard-add-listing.html"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
                </ul>

                <ul data-submenu-title="Account">
                    <li><a href="dashboard-my-profile.html"><i class="sl sl-icon-user"></i> My Profile</a></li>
                    <li><a href="index.html"><i class="sl sl-icon-power"></i> Logout</a></li>
                </ul>

            </div>
        </div>
        <!-- Navigation / End -->


        <!-- Content
        ================================================== -->
        <div class="dashboard-content">

            <!-- Content -->
            <div class="row">
                <?php echo $content; ?>
            </div>
            <div class="row">
                <!-- Copyrights -->
                <div class="col-md-12">
                    <div class="copyrights">© 2017 Listeo. All Rights Reserved.</div>
                </div>
            </div>

        </div>
        <!-- Content / End -->


    </div>
    <!-- Dashboard / End -->

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



</body>
</html>