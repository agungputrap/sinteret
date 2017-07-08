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
			<a href=""><img src="<?php echo $fotoGereja; ?>"></a>
			<?php echo CHtml::image($fotoGereja, 'nama gereja'); ?>
		</div>
		<div class="fs-content">

			<section class="listings-container margin-top-30">
				<!-- Sorting / Layout Switcher -->
				<div class="row fs-listings">
					<h1><?php echo $model->tipe->nama . ' ' . $model->nama ?></h1>
					<h4>Depok</h4>
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
	</div>
	<div class="fs-inner-container map-fixed">

		<!-- Map -->
		<div id="map-container">
		    <div id="map" data-map-zoom="9" data-map-scroll="true">
		        <!-- map goes here -->
		    </div>
		</div>

	</div>
</div>

<style>
	.fs-inner-container{
		padding-top: 0;
	}
</style>