<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Shopper</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="<?php echo base_url(); ?>assets/themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="<?php echo base_url(); ?>assets/themes/css/main.css" rel="stylesheet"/>
		<link href="<?php echo base_url(); ?>assets/themes/css/jquery.fancybox.css" rel="stylesheet"/>
				
		<!-- scripts -->
		<script src="<?php echo base_url(); ?>assets/themes/js/jquery-1.7.2.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>				
		<script src="<?php echo base_url(); ?>assets/themes/js/superfish.js"></script>	
		<script src="<?php echo base_url(); ?>assets/themes/js/jquery.scrolltotop.js"></script>
		<script src="<?php echo base_url(); ?>assets/themes/js/jquery.fancybox.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>
    <div id="top-bar" class="container">
			<div class="row">
					<div class="span4">
							<?php echo form_open('user/search_item'),
							form_input(['type'=>'text','name'=>'query', 'class'=>'input-block-level search-query', 'Placeholder'=>'search']); ?>
							<div class="row">
								<div class="span2">							
									<?php echo form_submit('submit', 'Search',['class'=>'btn btn-info pull-left']),
							      	form_close(); ?>
								</div>
							</div>
					</div>									
					<div class="span8">
							<div class="account pull-right">
								<ul class="user-menu">				
									<li><a href="#">My Account</a></li>
									<li><?php echo anchor('cart/your_cart', 'Your Cart'); ?></li>
									<?php if($this->session->userdata('mem_id')): ?>
									<li><?php echo anchor('user/logout', 'Logout'); ?></li>
									<?php else: ?>
									<li><?php echo anchor('guest/checkout', 'Checkout'); ?></li>
									<?php endif; ?>	
									<li><?php echo anchor('user/register', 'Register'); ?></li>		
								</ul>
							</div>
					</div>
			</div>
	</div>

	<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="<?php echo base_url('home/homepage') ?>" class="logo pull-left"><img src="<?php echo base_url() ?>assets/themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
							<ul>
								<li><a href="./products.html">Brand</a>					
									<ul>
										<li><a href="./products.html">Puma</a></li>		
										<li><a href="./products.html">Addidas</a></li>
									    <li><a href="./products.html">Gucci</a></li>
									    <li><a href="./products.html">Levis</a></li>
									</ul>
								</li>															
									<li><a href="./products.html">Type</a>
										<ul>
										<li><a href="./products.html">Feature</a></li>		
										<li><a href="./products.html">Top</a></li>
									    <li><a href="./products.html">Latest</a></li>
									</ul>
									</li>			
									<li><a href="./products.html">Clothing</a>
								<ul>									
									<li><a href="./products.html">Pants</a></li>
									<li><a href="./products.html">Shirts</a></li>
									<li><a href="./products.html">Jackets</a></li>
								</ul>
																			</li>							
									<li><a href="./products.html">Gender</a>
									<ul>									
									<li><a href="./products.html">Unisex</a></li>
									<li><a href="./products.html">Female</a></li>
									<li><a href="./products.html">Male</a></li>
									</ul></li>
							</ul>
					</nav>
				</div>
			</section>

<?php if( $feedback = $this->session->flashdata('feedback')): 
				  $flag = $this->session->flashdata('flag');?>	
 	<div class="service">
		<div class="customize">
			<div class="alert alert-dimissible <?php echo $flag ?>">		
			<p><?php echo $feedback ?></p>				
			</div> 
		</div>
	</div>
	<?php endif; ?>