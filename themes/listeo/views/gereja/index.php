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
<div id="map-container" class="fullwidth-home-map">
	<div id="map">
		
	</div>
	<div class="row">
		<div class="col-md-12">
			
			<div class="main-search-input">

				<div class="main-search-input-item">
					<input type="text" placeholder="Gereja Apa?" value=""/>
				</div>

				<div class="main-search-input-item location">
					<input type="text" placeholder="Lokasi" value=""/>
					<a href="#"><i class="fa fa-dot-circle-o"></i></a>
				</div>

				<div class="main-search-input-item location">
					<input type="text" placeholder="Jam Ibadah" value=""/>
					<a href="#"><i class="fa fa-clock-o"></i></a>
				</div>

				<!-- <div class="main-search-input-item">
					<select data-placeholder="All Categories" class="chosen-select" >
						<option>All Categories</option>	
						<option>Shops</option>
						<option>Hotels</option>
						<option>Restaurants</option>
						<option>Fitness</option>
						<option>Events</option>
					</select>
				</div> -->

				<button class="button">Search</button>

			</div>
		</div>
	</div>
	<a href="#" id="scrollEnabling" title="Enable or disable scrolling on map">Enable Scrolling</a>
</div>