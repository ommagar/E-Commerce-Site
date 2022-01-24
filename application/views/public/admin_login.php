<?php include_once('public_header_view.php'); ?>

                <h4><span>Admin Login</span></h4>
                <?php if($error=$this->session->flashdata('Login Failed')): ?>
                    <div class="row">
                            <div class="col-lg-6">
                                    <div class="alert alert-dismissible alert-danger">
                                        <?= $error ?>
                                    </div>
                            </div>
                    </div>
            <?php endif;?>          
            <section class="main-content">              
                <div class="row">
                    <div class="span5">                 
                        <h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>
                        <?php echo form_open('login/admin_login');?>
                            
                            <fieldset>
                                <div class="control-group">
                                    <label class="control-label">Username</label>
                                    <div class="controls">
                                         <?php echo form_input(['type'=>'text','class'=>'input-xlarge','name'=>'username','placeholder'=>'username','value'=>set_value('username')]); ?>
                                                <div class="pull-right"><?php echo form_error('username'); ?></div>            
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Password</label>
                                    <div class="controls">
                                       <?php echo form_password(['class'=>'input-xlarge','name'=>'password','placeholder'=>'password']); ?>
                                                 <div class="pull-right"><?php echo form_error('password'); ?></div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <?php echo form_submit('submit','Submit',['class'=>'btn btn-inverse large'] ); ?>
                                    <?php echo form_submit('cancel','Cancel',['class'=>'btn btn-inverse large'] ); ?>
                                    
                                    <hr>
                                    <p class="reset">Recover your <a tabindex="4" href="#" title="Recover your username or password">username or password</a></p>
                                </div>
                            </fieldset>
                        <?php echo form_close(); ?>           
                    </div>
        </div>
    </section>


<?php include_once('public_footer_view.php'); ?>