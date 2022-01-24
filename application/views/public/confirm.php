<?php include_once('public_header_view.php'); ?>
<br>
<br>
<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="accordion" id="accordion2">

							<div class="accordion-group">
								<div class="accordion-heading">
									<h4>Confirm Order</h4>
									<!-- <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">Confirm Order</a> -->
								</div>
								<div>
								<!-- <div id="collapseThree" class="accordion-body collapse"> -->
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="control-group">
												<label for="textarea" class="control-label">Comments</label>
												<div class="controls">
													<?php echo form_open('home/confirm');
														  echo form_textarea(['name'=>'confirm','rows'=>'3','id'=>'textarea','class'=>'span12','placeholder'=>'Please type confirm to order.']); ?>
												<div class="controls">
													<p class="alert alert-info">Just type confirm only. Anything rather than that will be invalid order.</p>
												</div>
												</div>
											</div>
											<?php echo form_submit(['class'=>'btn btn-inverse pull-right','value'=>'Confirm']);
												  echo form_close(); ?>							
										</div>
									</div>
								</div>
							</div>


						</div>				
					</div>
				</div>
			</section>
<?php include_once('public_header_view.php'); ?>