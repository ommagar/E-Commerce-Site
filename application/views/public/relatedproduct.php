<div class="span9">	
		<br>
			<h4 class="title">
				<span class="pull-left">
					<span class="text"><strong>Related</strong> Products</span>
				</span>

				<span class="pull-right">
				<a class="left button" href="#myCarousel-1" data-slide="prev"></a>
				<a class="right button" href="#myCarousel-1" data-slide="next"></a>
				</span>
			</h4>

	<div id="myCarousel" class="myCarousel carousel slide">
		<div class="carousel-inner">
			<div class="active item">
				<ul class="thumbnails">
					<?php foreach($data as $data): ?>												
						<li class="span3">
							<div class="product-box">
									<span class="sale_tag"></span>
										<p><a href = "<?= base_url("home/product_detail/$data->item_id"); ?>">
											<img src="<?php echo $data->image_path ;?>"/>
				   							</a>
										</p>
											<a href="<?= base_url('home/product_detail') ?>" class="title">
											<?php echo $data->item_name;?> </a>
										<br/>
											<a href="<?= base_url('home/product'); ?>" class="category"><?php echo $data->code; ?></a>
										<p class="price">RS <?php echo $data->rate; ?></p>
							</div>
						</li>
					<?php endforeach; ?>												
				</ul>
			</div>
		</div>
	</div>