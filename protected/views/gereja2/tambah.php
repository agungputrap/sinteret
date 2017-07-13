<?php
/**
 * Created by PhpStorm.
 * User: reals
 * Date: 7/9/2017
 * Time: 12:09 AM
 */
?>
<!--// be careful to include the parameter "libraries=places"-->
<!--<script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>-->
<div class="container">
    <!-- Titlebar -->
    <div id="titlebar">
        <div class="row">
            <div class="col-md-12">
                <h2>Menambahkan Informasi Gereja</h2>
            </div>
        </div>
    </div>
    <?php
    $form = $this->beginWidget('CActiveForm',array(
        'id' => 'gereja-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
    ));
    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="add-listing-section">
                <div class="add-listing-headline">
                    <h3><i class="sl sl-envelope-open"></i> Kontak</h3>
                </div>
                <div class="row with-forms">
                    <div class="col-md-6">
                        <h5>E-mail<i class="tip" data-tip-content="alamat email anda"></i></h5>
                        <?php echo $form->textField($model,'email',array('class'=>'search-field')); ?>
                        <?php echo $form->error($model, 'email', array('class' => 'text-danger')); ?>
                        <!--                            <input class="search-field" type="text" value=""/>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div id="add-listing">
                <!-- Section -->
                <div class="add-listing-section">
                    <!-- Headline -->
                    <div class="add-listing-headline">
                        <h3><i class="sl sl-icon-doc"></i> Informasi Gereja</h3>
                    </div>
                    <div class="row with-forms">
                        <div class="col-md-6">
                            <h5>Kota <i class="tip" data-tip-content="kota dimana gereja bereda"></i></h5>
                            <?php echo $form->textField($model,'kota',array('class'=>'search-field')); ?>
                            <?php echo $form->error($model, 'kota', array('class' => 'text-danger')); ?>
                            <!--                            <input class="search-field" type="text" value=""/>-->
                        </div>
                    </div>
                    <!-- Title -->
                    <div class="row with-forms">
                        <div class="col-md-6">
                            <h5>Nama Gereja <i class="tip" data-tip-content="nama gereja"></i></h5>
                            <?php echo $form->textField($model,'nama',array('class'=>'search-field')); ?>
<!--                            <input class="search-field" type="text" value=""/>-->
                            <?php echo $form->error($model, 'nama', array('class' => 'text-danger')); ?>
                        </div>
                    </div>
                    <!-- Row -->
                    <div class="row with-forms">
                        <!-- Status -->
                        <div class="col-md-6">
                            <h5>Tipe Gereja</h5>
                            <?php
                            $list = CHtml::listData($tipeGereja,'id', function ($tipeGereja) { return CHtml::encode($tipeGereja->nama.' - '.$tipeGereja->nama_lengkap);});
                            echo CHtml::dropDownList('FormGereja[tipe_id]','',$list,array('class'=>'chosen-select-no-single'));
                            ?>
                        </div>
                        <!-- Type -->
                    </div>
                    <div class="row with-forms">
                        <!-- Status -->
                        <div class="col-md-6">
                            <h5>Lokasi</h5>
                            <?php echo $form->textField($model,'alamat',array('class'=>'search-field','id'=>'us3-address')); ?>
<!--                            <input type="text" class="search-field" id="us3-address" />-->
                            <?php echo $form->error($model, 'alamat', array('class' => 'text-danger')); ?>
                        </div>
                        <!-- Type -->
                    </div>
                    <div class="row with-forms">
                        <div class="col-md-12">
                            <div id="us3" style="width: 550px; height: 400px;"></div>
                        </div>
                    </div>
                    <div class="row-with-forms">
                        <div class="col-md-6">
<!--                            <h5>latitude</h5>-->
                            <?php echo $form->hiddenField($model, 'latitude',array('id'=>'us3-lat')); ?>
<!--                            <input type="text" class="search-field" id="us3-lat" />-->
                        </div>
                        <div class="col-md-6">
<!--                            <h5>longitude</h5>-->
                            <?php echo $form->hiddenField($model, 'longitude',array('id'=>'us3-lon')); ?>
<!--                            <input type="text" class="search-field" id="us3-lon" />-->
                        </div>
                    </div>
                    <!-- Row / End -->
                    <div class="row with-form">
                        <div class="col-md-12">
                            <?php echo CHtml::submitButton('Kirim', array('class' => 'button preview', 'name' => 'submit', 'id' => 'submit')); ?>
<!--                            <a href="#" class="button preview">Preview <i class="fa fa-arrow-circle-right"></i></a>-->
                        </div>
                    </div>
                </div>
                <!-- Section / End -->

            </div>
        </div>
    </div>
    <?php $this->endWidget(); ?>

</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDJhgUHr15-NnoWV3kFBNNnaLlo8_oCI7Q&amp;language=id&amp;libraries=places"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/sources/scripts/locationpicker.jquery.js"></script>
<script>
    $('#us3').locationpicker({
        location: {
            latitude: -6.17511,
            longitude: 106.86503949999997
        },
        radius: 0,
        inputBinding: {
            latitudeInput: $('#us3-lat'),
            longitudeInput: $('#us3-lon'),
            locationNameInput: $('#us3-address')
        },
        enableAutocomplete: true,
        onchanged: function (currentLocation, radius, isMarkerDropped) {
            // Uncomment line below to show alert on each Location Changed event
            //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
        }
    });
</script>