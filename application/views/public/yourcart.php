<?php include_once('public_header_view.php'); ?>			
			<section class="header_text sub">
			<img class="pageBanner" src="<?php echo base_url();?>assets/themes/images/pageBanner.png" alt="New products" >
				<h4><span>Shopping Cart</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Image</th>
									<th>Product Name</th>
									<th>Quantity</th>
									<th>Remove</th>
									<th>Unit Price</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>	
		<?php echo form_open('cart/update'); ?>											
		<?php if($this->cart->contents()): ?>
		<?php $i = 1; ?>
		<?php $flag=1; ?>
		<?php foreach ($this->cart->contents() as $items): ?>
		<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
        <tr>
             
             <td> <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
                           <p>
                                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                               <?php if ($option_name=='image_path'): ?>
                                               	
                                              <img src="<?php echo $option_value; ?>">
                                               <?php endif; ?>

                                        <?php endforeach; ?>
                                </p>
                        <?php endif; ?>
             </td>
             <td><?php echo $items['name']; ?></td>
             <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
             <td><?php echo form_checkbox(array('name' => $i.'[qty]', 'value' => 0)); ?></td>
             <td>RS <?php echo $this->cart->format_number($items['price']); ?></td>
             <td>RS <?php echo $this->cart->format_number($items['subtotal']); ?></td>
        </tr>
<?php $i++; ?>
<?php endforeach; ?>
<?php else: ?>
<?php $flag = 0;?>
<div class="alert alert-warning">
<h4><p class="text-capitalize text-center text-danger"><?php echo "This cart is empty"; ?></p></h4>
</div>
<?php endif; ?>
<?php if ($flag==0): ?>
<?php elseif($flag==1): ?>
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td><?php $total = $this->cart->format_number($this->cart->total()); ?>
									<td><strong>RS. <?php echo $total; ?></strong></td>
								</tr>		  
							</tbody>
						</table>
						<h4>What would you like to do next?</h4>
						
						<hr>
						<p class="cart-total right">
							<strong>Total</strong>:RS. <?php echo $total ?><br>
						</p>
						<hr/>
						<p class="buttons center">
							<?php echo form_submit('submit','Update',['class'=>'btn']); ?>
							<?php echo form_close(); ?>				
							<?php echo anchor('Adaptive_payments', 'Continue', ['class'=>'btn']); ?>
							<button class="btn btn-inverse" type="submit" id="checkout">Checkout</button>
							<?php endif;?>
						</p>					

<script src="<?php echo base_url(); ?>assets/themes/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "<?php echo base_url("guest/checkout"); ?>";
				})
			});
		</script>



<?php include_once('public_footer_view.php'); ?>