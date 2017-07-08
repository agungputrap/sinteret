<?php
/**
 * Created by PhpStorm.
 * User: reals
 * Date: 7/7/2017
 * Time: 2:14 PM
 */
?>
<!-- Banner
================================================== -->
<div class="main-search-container" data-background-image="images/main-search-background-01.jpg">
    <div class="main-search-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Find Nearby Attractions</h2>
                    <h4>Expolore top-rated attractions, activities and more</h4>
                    <?php
                    $form = $this->beginWidget('CActiveForm',array(
                        'id' => 'search-form',
                        'enableAjaxValidation' => true,
                        'htmlOptions' => array('enctype' => 'multipart/form-data'),
                    ));
                    ?>
                    <div class="main-search-input">
                        <div class="main-search-input-item ">
                            <?php echo $form->textField($modelSearch,'kota',array('placeholder'=>'Cari informasi gereja berdasarkan kota')); ?>
                        </div>
                        <button class="button" name="cari">Cari</button>
                    </div>
                    <?php $this->endWidget(); ?>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Fullwidth Section -->
<section class="fullwidth margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f8f8f8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="headline centered margin-bottom-45">
                    Halaman informasi Gereja
                    <span>yang sering dilihat pada situs ini</span>
                </h3>
            </div>
            <div class="col-md-12">
                <div class="simple-slick-carousel dots-nav">
                    <?php foreach ($listCarousel as $setiap) { ?>
                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <a href="<?php echo Yii::app()->createUrl('gereja/detail', array('id'=>$setiap['gereja_id']));?>" class="listing-item-container">
                            <div class="listing-item">
                                <img src="<?php echo $setiap['gambar'];?>" alt="">
                                <div class="listing-item-content">
                                    <h3><?php echo $setiap['nama'];?></h3>
                                    <span>964 School Street, New York</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Listing Item / End -->
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fullwidth Section / End -->
