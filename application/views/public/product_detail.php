	<section class="main-content">				
		<div class="row">						
			<div class="span9">
				<div class="row">
					<div class="span4">
						<a href="<?php echo $data->image_path; ?>" class="thumbnail" data-fancybox-group="group1" title="<?php echo $data->item_name; ?>"><img alt="" src="<?php echo $data->image_path; ?>"></a>	
					</div>

			<div class="span5">
				<address>
				<h3><strong>Product Name:</strong> <span> <?php echo $data->item_name; ?></span><br><br></h3>
				<h4><strong>Brand:</strong><span><strong> <?php echo $data->brand; ?></strong></span><br><br></h4>
				<h2><strong>Product Code:</strong> <span> <?php echo $data->code; ?></span><br></h2>							
				</address>									
				<h4><strong>Price: Rs <?php echo $data->rate; ?></strong></h4>
			</div>

			<div class="span5">
				<?php echo form_open("cart/addtocart", ['class'=>"form_inline"]); ?>
				<?php echo form_hidden('id', $data->item_id),
					  form_hidden('price', $data->rate),
					  form_hidden('name', $data->item_name),
					  form_hidden('image_path',$data->image_path),
					  form_hidden('max',$data->quantity)
										;?>
				<?php echo form_hidden('time', date('Y m d H:i:s'));?>
				
				<p>&nbsp;</p>
				<label class="checkbox">Qty</label>
				<?php echo form_input(['name'=>'qty','placeholder'=>"MAX $data->quantity", 'class'=>'span1','value'=>set_value('qty')]); ?>
				

				<?php if($feedback = $this->session->flashdata('info')): ?>
				<br>
				<div class="alert alert-info">
				<?php echo $feedback; ?>
				</div>
				<?php endif; ?>
				
				<?php echo form_submit(['class'=>'btn btn-inverse','type'=>'submit','value'=>'Add to cart']) ?>
				<div class="alert-danger"><?php echo form_error('item_qty'); ?></div>
				<?php echo form_close(); ?>
				</div>							
		</div>


			<div class="row">
				<div class="span9">
					<ul class="nav nav-tabs" id="myTab">
						<li class="active"><a href="#home">Description</a></li>
						<li class=""><a href="#profile">Additional Information</a></li>
					</ul>

			<div class="tab-content">
				<div class="tab-pane active" id="home">
					<?php echo $data->descript; ?>
				</div>

				<div class="tab-pane" id="profile">
					<table class="table table-striped shop_attributes">	
						<tbody>
							<tr class="">
								<th>Size</th>
								<td><?php echo $data->size; ?></td>
							</tr>		
							<tr class="alt">
							<th>Gender</th>
								<td><?php echo $data->gender; ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>							
		</div>		

<!-- Related Product-->
<!-- side nav bar -->
<!-- randomize -->
<!-- best seller -->
<!-- footer -->

	