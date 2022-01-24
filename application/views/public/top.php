</br>
<div class="row">
		<div class="span12">
			<h4 class="title">
			<span class="pull-left"><span class="text">
				<span class="line">Top <strong>Products</strong></span></span></span>
					<span class="pull-right">
						<a class="left button" href="<?php echo base_url('home/latest_load'); ?>" data-slide="prev"></a><a class="right button" href="<?php echo base_url('home/latest_load'); ?>" data-slide="next"></a>
					</span>
			</h4>
<div id="myCarousel-2" class="myCarousel carousel slide">
	<div class="carousel-inner">
		<div class="active item">
			<ul class="thumbnails">
			<?php foreach($data as $data):?>									
				<li class="span3">
					<div class="product-box">
					<span class="sale_tag"></span>
					<p>
					<a href = "<?php echo base_url("home/product_detail/$data->item_id"); ?>" alt="" />
					<img src="<?php echo $data->image_path ;?>"/>
					</a>
					</p>
					<a href="<?php echo base_url("home/product_detail/$data->item_id"); ?>" class="title">
					<?php echo $data->item_name; ?>
					</a><br/>
					<a href="<?php echo base_url("home/product_detail/$data->item_id"); ?>" class="category">
					<?php echo $data->code; ?></a>
					<p class="price">RS<?php echo $data->rate; ?></p>
					</div>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
</div>