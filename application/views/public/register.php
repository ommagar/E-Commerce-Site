<?php include_once('public_header_view.php'); ?>
			<section class="header_text sub">
			<img class="pageBanner" src="<?php echo base_url(); ?>assets/themes/images/pageBanner.png" alt="New products" >
				<h4><span>Login or Regsiter</span></h4>
			</section>			
			<section class="main-content">				
				<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>
						<?php if($feedback = $this->session->flashdata('Login Failed')): ?>
								<div class="alert alert-info">
									<?php echo $feedback; ?>
								</div>
								<?php endif; ?>

	<?php echo form_open('user/mem_login'); ?>
		<fieldset>
			<div class="control-group">
				<label class="control-label">Username</label>
				<div class="controls">
					<?php echo form_input(['name'=>'username','class'=>'input-xlarge', 'placeholder'=>'username','value'=>set_value('username')]); ?>
					<div class="alert-danger"><?php echo form_error('username'); ?></div>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Password</label>
				<div class="controls">
				<?php echo form_password(['name'=>'password','class'=>'input-xlarge','placeholder'=>'password']); ?>
				<div class="alert-danger"><?php echo form_error('password'); ?></div>
				</div>
			</div>

			<div class="control-group">
				<?php echo form_submit(['name'=>'submit','class'=>'btn btn-inverse large','value'=>'Sign into your account']); ?>
								
				<hr>
				<p class="reset">Recover your <a tabindex="4" href="#" title="Recover your username or password">username or password</a></p>
			</div>
		</fieldset>
	<?php echo form_close(); ?>			
</div>


		<div class="span7">					
			<h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
			<?php if($register = $this->session->flashdata('register')): ?>
						<div class="alert alert-info">
						<?php echo $register; ?>
						</div>
					<?php endif; ?>
			<?php echo form_open('login/register',['class'=>'form-stacked']) ?>
			<fieldset>

				<div class="control-group">
					<label class="control-label">Username</label>
						<div class="controls">
						<?php echo form_input(['name'=>'uname','class'=>'input-xlarge', 'placeholder'=>'Enter your username','value'=>set_value('uname')]); ?>
							<div class="alert-danger"><?php echo form_error('uname'); ?></div>
						</div>
				</div>

				<div class="control-group">
					<label class="control-label">Email address:</label>
						<div class="controls">
						<?php echo form_input(['name'=>'email','class'=>'input-xlarge','placeholder'=>'Enter your email.','value'=>set_value('email')]); ?>
							<div class="alert-danger"><?php echo form_error('email'); ?></div>
						</div>
				</div>

				<div class="control-group">
					<label class="control-label">Password:</label>
						<div class="controls">
							<?php echo form_password(['name'=>'pass','class'=>'input-xlarge','placeholder'=>'Enter your password']); ?>
							<div class="alert-danger"><?php echo form_error('pass'); ?></div>
						</div>
				</div>							                            
								<!-- <div class="control-group">
									<p>Now that we know who you are. I'm not a mistake! In a comic, you know how you can tell who the arch-villain's going to be?</p>
								</div> -->
				<hr>

				<div class="actions">
							<?php echo form_submit(['tabindex'=>'9','name'=>'submit','value'=>'Create your account','class'=>'btn btn-inverse large']); ?>
									</div>
		</fieldset>
						
					<?php echo form_close(); ?>					
	</div>				
</div>
</section>
