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
<div class="main-search-container">
    <div class="main-search-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Mencari Informasi Gereja</h2>
                    <h4>daerah baru tidak jadi penghalang bagi anda untuk beribadah</h4>
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
                                    <span><?php echo GerejaCustom::getAlamatGereja($setiap['gereja_id']); ?></span>
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

<!-- Info Section -->
<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="headline centered margin-top-80">
                Informasi gereja akan terus berkembang
                <span class="margin-top-25">saat ini kami mengumpulkan sendiri informasi gereja. Anda juga dapat turut serta dalam menambahkan informasi tersebut</span>
            </h2>
        </div>
    </div>
    <div class="row icons-container">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <div class="icon-box-2">
                <?php echo CHtml::link('Menambahkan Informasi',array('gereja/tambah'),array('class'=>'button')); ?>
<!--                <button class="button">Menambahkan Informasi</button>-->
                <h3></h3>
                <p></p>
            </div>
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>
<!-- Info Section / End -->