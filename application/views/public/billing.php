<?php include_once('public_header_view.php'); ?>
<br>
<br>
<div class="accordion-group">
		<div class="accordion-heading">
			<h4 ><p class="text-info"> Account and Billing Details. </p></h4>
			<p class="text-info"> Fill up the following form to enable the guest services.</p>
			<!-- <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Account &amp; Billing Details</a> -->
		</div>
	<!-- <div id="collapseTwo" class="accordion-body collapse"> -->
		<br>
	<div>
		<div class="accordion-inner">
			<div class="row-fluid">
				<div class="span6">
					<h4>Your Personal Details</h4>
					<?php echo form_open('guest/checkguest'); ?>
					<?php echo form_hidden('time',date('Y m d H:i:s')); ?>
						<div class="control-group">
						<label class="control-label"><span class="required">*</span>First Name</label>
							<div class="controls">
								<?php echo form_input(['name'=>'firstname','class'=>'input-xlarge','placeholder'=>'first name','value'=>set_value('firstname')]); ?>
								<?php echo form_error('firstname'); ?>
						</div>
						</div>

						<div class="control-group">
							<label class="control-label"><span class="required">*</span>Last Name</label>
						<div class="controls">
								<?php echo form_input(['name'=>'lastname','class'=>'input-xlarge','placeholder'=>'last name','value'=>set_value('lastname')]); ?>
								<?php echo form_error('lastname'); ?>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label"><span class="required">*</span>Email Address</label>
							<div class="controls">
								<?php echo form_input(['name'=>'email','class'=>'input-xlarge','placeholder'=>'Your email','value'=>set_value('email')]); ?>
								<?php echo form_error('email'); ?>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Telephone</label>
							<div class="controls">
							<?php echo form_input(['name'=>'telephone','class'=>'input-xlarge','placeholder'=>'Telephone no.','value'=>set_value('telephone')]); ?>
								<?php echo form_error('telephone'); ?>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label"><span class="required">*</span>Mobile</label>
							<div class="controls">
								<?php echo form_input(['name'=>'mobile','class'=>'input-xlarge','placeholder'=>'Mobile no.','value'=>set_value('mobile')]); ?>
								<?php echo form_error('mobile'); ?>
							</div>
						</div>
						</div>
											
			<div class="span6">
				<h4>Your Address</h4>

					<div class="control-group">
						<label class="control-label">Company</label>
							<div class="controls">
								<?php echo form_input(['name'=>'company','class'=>'input-xlarge','placeholder'=>'company','value'=>set_value('company')]); ?>
								<?php echo form_error('company'); ?>
							</div>
					</div>

					<div class="control-group">
					<label class="control-label">Company ID:</label>
						<div class="controls">
							<?php echo form_input(['name'=>'com_id','class'=>'input-xlarge','placeholder'=>'Company ID','value'=>set_value('com_id')]); ?>
								<?php echo form_error('com_id'); ?>
						</div>
					</div>	

					<div class="control-group">
						<label class="control-label"><span class="required">*</span> Address 1:</label>
								<div class="controls">
								<?php echo form_input(['name'=>'add1','class'=>'input-xlarge','placeholder'=>'Address 1','value'=>set_value('add1')]); ?>
								<?php echo form_error('add1'); ?>
								</div>
					</div>

					<div class="control-group">
						<label class="control-label">Address 2:</label>
							<div class="controls">
								<?php echo form_input(['name'=>'add2','class'=>'input-xlarge','placeholder'=>'Address 2','value'=>set_value('add2')]); ?>
								<?php echo form_error('add2'); ?>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label"><span class="required">*</span> City:</label>
							<div class="controls">
								<?php echo form_input(['name'=>'city','class'=>'input-xlarge','placeholder'=>'City','value'=>set_value('city')]); ?>
								<?php echo form_error('city'); ?>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label"><span class="required">*</span> Post Code:</label>
							<div class="controls">
								<?php echo form_input(['name'=>'postcode','class'=>'input-xlarge','placeholder'=>'postcode','value'=>set_value('postcode')]); ?>
								<?php echo form_error('postcode'); ?>
							</div>
					</div>
					
					<div class="control-group">
						<label class="control-label"><span class="required"></span> Country:</label>
							<div class="controls">
								<!-- <select class="input-xlarge">
									<option value="1">Afghanistan</option>
									<option value="2">Albania</option>
									<option value="3">Algeria</option>
									<option value="4">American Samoa</option>
									<option value="5">Andorra</option>
									<option value="6">Angola</option>
								</select> -->
								<label></span> Nepal </label>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label"><span class="required">*</span> Region / State:</label>

							<div class="controls">
								<!-- <select name="zone_id" class="input-xlarge">
									<option value=""> --- Please Select --- </option>
									<option value="3513">Aberdeen</option>
									<option value="3514">Aberdeenshire</option>
									<option value="3515">Anglesey</option>
									<option value="3516">Angus</option>
									<option value="3517">Argyll and Bute</option>
								</select> -->
								<?php $regions= array(
									'province1'=>'Province 1',
									'province2'=>'Province 2',
									'province3'=>'Province 3',
									'province4'=>'Province 4',
									'province5'=>'Province 5',
									'province6'=>'Province 6',
									'province7'=>'Province 7',
								); ?>
								<?php echo form_dropdown('region', $regions, set_value('region')); ?>
							</div>
												</div>
											</div>
										</div>
									</div>
<!-- class accordance heading --></div>
<!-- class accordance group --> </div>
<div class="md-inline-block">
<?php echo form_submit('submit', 'Continue',['class'=>'btn btn-inverse pull-center']); ?>
</div>
<?php echo form_close(); ?>
<?php include_once('public_footer_view.php'); ?>