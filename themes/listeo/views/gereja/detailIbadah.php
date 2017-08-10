<?php
/* @var $this GerejaController */

$this->breadcrumbs=array(
	'Gereja',
);
?>
<!-- <h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
	You may change the content of this page by modifying
	the file <tt><?php /*echo __FILE__*/; ?></tt>.
</p> -->
<div class="fs-container">

	<div class="fs-inner-container content">
		<div class="listing-item-image">
			<?php echo CHtml::image($fotoGereja, 'nama gereja',array('width'=>'100%')); ?>
		</div>
		<div class="fs-content">

			<section class="listings-container margin-top-30">
				<!-- Sorting / Layout Switcher -->
				<div class="row fs-listings">
					<h1><?php echo $model->tipe->nama . ' ' . $model->nama ?></h1>
					<h4><?php echo $model->alamat ?></h4>
				</div>
			</section>
			<section class="listings-container margin-top-30">
				<!-- Sorting / Layout Switcher -->
				<div class="row fs-listings">
					<h1>Informasi Gereja</h1>
					<!-- <h4>Lorem ipsum dolor sit amet, vim in ignota neglegentur, cu probo complectitur vel, cibo sale omittam no his. Sea tollit dolore appareat ad, tota partiendo omittantur quo ea. At constituto consectetuer eos. Mei te animal aliquid. Alia verear iriure in qui. Te eos facete regione erroribus.

Nam ad facilis appetere principes. Ne duo quas ipsum rationibus, his ne putant recusabo conceptam. Iuvaret meliore eu duo, usu tation delenit ei. Ubique consectetuer at vis, esse everti vis an. Dolor commune ne qui, ludus utamur est ne. Eius graeco posidonium eos no.

Dicta ceteros ex ius, at est aliquam ponderum. Et vix dolor efficiantur disputationi, per no nisl case. Sit in altera facete, an mea iudico mollis. In mea modus euismod. Accusam erroribus appellantur ea vis.

Ut quo posse dicam, fabulas dolorem nusquam eam no. Ex omnis numquam vix. Eum nusquam propriae ne. Mei eripuit facilis et. Albucius detraxit ne duo, eu mea aliquam debitis. Ea affert oratio dictas mea, detracto consetetur ex pri, vim posse concludaturque ea.

Ut pro omnis mazim intellegebat, te porro possim eum, wisi error senserit ad vel. Cu elitr elaboraret eam, qui at sumo oportere. Te sed veri scaevola, est ei nonumy vivendum expetendis. Epicuri accusata concludaturque et mea, vero essent alienum te cum. Assentior intellegam et eum.</h4> -->
				<p>
					Lorem ipsum dolor sit amet, vim in ignota neglegentur, cu probo complectitur vel, cibo sale omittam no his. Sea tollit dolore appareat ad, tota partiendo omittantur quo ea. At constituto consectetuer eos. Mei te animal aliquid. Alia verear iriure in qui. Te eos facete regione erroribus.
				</p>
				<p>
					
Nam ad facilis appetere principes. Ne duo quas ipsum rationibus, his ne putant recusabo conceptam. Iuvaret meliore eu duo, usu tation delenit ei. Ubique consectetuer at vis, esse everti vis an. Dolor commune ne qui, ludus utamur est ne. Eius graeco posidonium eos no.
				</p>
				</div>
			</section>
			<section class="listings-container margin-top-30">
				<div class="row fs-listings">
					<h3>Jadwal Ibadah</h3>
					<?php foreach($jadwalIbadah as $jadwal) { ?>
						<div class="col-lg-12 col-md-12">
							<?php echo $jadwal->jam_ibadah ?>
						</div>
					<?php } ?>
				</div>
			</section>

		</div>
		<div class="copyrights margin-top-0">© 2017 Gemana. </div>
	</div>
	<div class="fs-inner-container map-fixed">

		<!-- Map -->
		<div id="map-container">
		    <div id="map-custom" 
		    			data-map-zoom="9" 
		    			data-map-scroll="true" 
		    			lat="<?php echo $model->latitude ?>" 
		    			long="<?php echo $model->longitude ?>"
		    			desc="<?php echo $model->tipe->nama . ' ' . $model->nama ?>" >
		        <!-- map goes here -->
		    </div>
		</div>

	</div>
</div>

<style>
	#map-custom {
		height: 100%;
		width: 100%;
	}
</style>

<script>
	var lat = $('#map-custom').attr('lat');
	var long = $('#map-custom').attr('long');
	var desc = $('#map-custom').attr('desc');
	var myLatLng = {lat: -6.380130, lng: 106.827569};
	var farZoom = 2;
	if (lat !== null && long !== null) {
		myLatLng = {lat: Number(lat), lng: Number(long)};
		farZoom = 15;
	}
  function initMap() {
    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map-custom'), {
      center: myLatLng,
      scrollwheel: true,
      zoom: farZoom
    });
    var infoWindow = new google.maps.InfoWindow({map: map});
    console.log('isi map ', map);

    /*var marker = new google.maps.Marker({
      map: map,
      position: myLatLng,
      title: 'Hello World!'
    });*/
    infoWindow.setPosition(myLatLng);
    infoWindow.setContent(desc);

    /*if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        var pos = {
          lat: Number(lat),
          lng: Number(long)
        };

        infoWindow.setPosition(pos);
        infoWindow.setContent('Location found.');
        map.setCenter(pos);
      }, function() {});
    }*/ 
  }
</script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDJhgUHr15-NnoWV3kFBNNnaLlo8_oCI7Q&amp;language=en&amp;callback=initMap"></script>