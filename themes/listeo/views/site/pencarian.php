<?php
/**
 * Created by PhpStorm.
 * User: reals
 * Date: 7/8/2017
 * Time: 4:29 PM
 */
?>
<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>Listings</h2><span>Grid Layout With Sidebar</span>

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="#">G'mana</a></li>
                        <li>Pencarian</li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</div>


<!-- Content
================================================== -->
<div class="container">
    <div class="row">

        <!-- Search -->
        <div class="col-md-12">
            <?php
            $form = $this->beginWidget('CActiveForm',array(
                'id' => 'search-form',
                'enableAjaxValidation' => true,
                'htmlOptions' => array('enctype' => 'multipart/form-data'),
            ));
            ?>
            <div class="main-search-input gray-style margin-top-0 margin-bottom-10">
                <div class="main-search-input-item">
                    <?php echo $form->textField($modelSearch,'kota',array('placeholder'=>'Cari informasi gereja berdasarkan kota')); ?>
                </div>
                <button class="button" name="cari">Cari</button>
            </div>
            <?php $this->endWidget(); ?>
        </div>
        <!-- Search Section / End -->


        <div class="col-md-12">
            <div class="row">
                <!-- Listing Item -->
                <div class="col-lg-4 col-md-6">
                    <a href="listings-single-page.html" class="listing-item-container compact">
                        <div class="listing-item">
                            <img src="images/listing-item-01.jpg" alt="">

                            <div class="listing-badge now-open">Now Open</div>

                            <div class="listing-item-content">
                                <div class="numerical-rating" data-rating="3.5"></div>
                                <h3>Tom's Restaurant</h3>
                                <span>964 School Street, New York</span>
                            </div>
                            <span class="like-icon"></span>
                        </div>
                    </a>
                </div>
                <!-- Listing Item / End -->
            </div>
            <!-- Pagination -->
<!--            <div class="clearfix"></div>-->
<!--            <div class="row">-->
<!--                <div class="col-md-12">-->
<!--                    <!-- Pagination -->-->
<!--                    <div class="pagination-container margin-top-20 margin-bottom-40">-->
<!--                        <nav class="pagination">-->
<!--                            <ul>-->
<!--                                <li><a href="#" class="current-page">1</a></li>-->
<!--                                <li><a href="#">2</a></li>-->
<!--                                <li><a href="#">3</a></li>-->
<!--                                <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>-->
<!--                            </ul>-->
<!--                        </nav>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <!-- Pagination / End -->

        </div>

    </div>
</div>

