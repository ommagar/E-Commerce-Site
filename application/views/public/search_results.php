			<section class="header_text">
				These items are the result of 
				<br/><p><?php echo $data['query']; ?>.</p>
			</section>


			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left">
										<span class="text">
											<span class="line"><strong><?php echo $data['query']; ?></strong>
											</span>
										</span>
									</span>
								</h4>

			<div id="myCarousel" class="myCarousel carousel slide">
				<div class="carousel-inner">
					<div class="active item">
						<ul class="thumbnails">
							<?php unset($data['query']); ?>

<?php $count = $this->uri->segment(3, 0);
		foreach($data as $data):?>												
							<li class="span3">
									<div class="product-box">
											<span class="sale_tag"></span>
										<p>
											<a href = "<?= base_url("home/product_detail/$data->item_id") ?>">
											<img src="<?php echo $data->image_path; ?>"/>
											</a>
										</p>

							<a href="<?= base_url("home/product_detail/$data->item_id") ?>" class="title">
							<?php echo $data->item_name; ?></a>
							<br/>

							<a href="<?= base_url("home/product_detail/$data->item_id"); ?>" class="category">
							<?php echo $data->code; ?>
							</a>
							<p class="price">RS <?php echo $data->rate ?></p>
									</div>
							<?php ++$count ?>		
							</li>
<?php endforeach; ?>									
						</ul>
					</div>
				</div>
			</div>
<br><br><br>

<?php if($count>4): ?>				
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
<?php endif; ?>
			</div>							
		</div>
	</div>						
</div>
		<br/>
						
<?php echo $this->pagination->create_links(); ?>

	
								
					</div>				
				</div>
			</section>		