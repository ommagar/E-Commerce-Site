<?php include_once('public_header_view.php'); ?>				
			<section class="header_text sub">
			<img class="pageBanner" src="<?php echo base_url() ?>assets/themes/images/pageBanner.png" alt="New products" >
				<h4><span>Check Out</span></h4>
			</section>	
			<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="accordion" id="accordion2">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Checkout Options</a>
								</div>
<div id="collapseOne" class="accordion-body in collapse">
<div class="accordion-inner">
<div class="row-fluid">
<div class="span6">
		<h4>New Customer</h4>
		<p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>

	<?php echo form_open('guest/checkin'); ?>
		<fieldset>
			<label class="radio" for="register">
			<?php echo form_radio(['name'=>'account','value'=>'register','id'=>'register','checked'=>'checked']) ?>
			Register account
			</label>
			<label class="radio" for="guest">
			<?php echo form_radio(['name'=>'account','value'=>'guest','id'=>'guest']) ?>
			Guest Checkout
			</label>
			<br>
			<?php echo form_submit(['name'=>'submit','value'=>'Continue','class'=>'btn btn-inverse']); ?><!-- 'data-toggle'=>'collapse','data-parent'=>'#collapse2' -->
		</fieldset>
	<?php echo form_close(); ?>
</div>

<div class="span6">
		<h4>Returning Customer</h4>
		<p>I am a returning customer</p>

<?php echo form_open(); ?>
		<fieldset>
				<div class="control-group">
					<label class="control-label">Username</label>
					<div class="controls">
					<input type="text" placeholder="Enter your username" id="username" class="input-xlarge">
					</div>
				</div>

				<div class="control-group">
					<label class="control-label">Password</label>
					<div class="controls">
					<input type="password" placeholder="Enter your password" id="password" class="input-xlarge">
					</div>
				</div>
				<button class="btn btn-inverse">Continue</button>
		</fieldset>
<?php echo form_close(); ?>
</div>
</div>
</div>
</div>
</div>




						</div>				
					</div>
				</div>
			</section>
<script src="<?php echo base_url();?>assets/themes/js/common.js"></script>	
<?php include_once('public_footer_view.php'); ?>