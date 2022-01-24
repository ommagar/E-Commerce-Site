<tr>
									<td><?php echo form_checkbox('delete', 'delete'); ?></td>
									<td><a href="<?php echo base_url("home/product_detail/$key->item_id"); ?>"><img alt="" src="<?php echo $key->image_path; ?>"></a></td>
									<td><?php echo $key->item_name ?></td>									
									<td>
										<?php echo form_input(['name'=>'item_qty','placeholder'=>"MAX $key->quantity",'class'=>'input-mini']); ?>
									</td>
									<td>RS <?php echo $key->rate; ?></td>
									<td>RS <?php echo $key->rate; ?></td>
									<?php $total = $total + $key->rate; ?>
									<?php foreach($list as $key): ?>
										<?php 
											$data[$count++]= array(
																	'item_id'=>$key->item_id,
																	'item_qty'=>'',
																	'delete'=>''
																);
										?>
										<?php echo form_hidden('data', $data); ?>
									<?php endforeach; ?>
								</tr>					
								<?php endforeach; ?>
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td><strong>RS. <?php echo $total; ?></strong></td>
								</tr>		  
							</tbody>
						</table>
						<h4>What would you like to do next?</h4>
						
						<hr>
						<p class="cart-total right">
							<strong>Sub-Total</strong>:RS. <?php echo $total ?><br>
							<strong>Eco Tax (RS.50)</strong>:RS. 50<br>
							<?php $vat=13*($total/100); ?>
							<strong>VAT (13%)</strong>:RS. <?php echo $vat; ?><br>
							<strong>Total</strong>:RS. <?php echo $total+50+$vat; ?><br>
						</p>
						<hr/>
						<p class="buttons center">
							<?php echo form_submit('submit','Update',['class'=>'btn']); ?>
							<?php echo form_close(); ?>							
							<button class="btn" type="button">Continue</button>
							<button class="btn btn-inverse" type="submit" id="checkout">Checkout</button>
							
						</p>					
					</div>
					<div class="span3 col">
						<div class="block">	
							<ul class="nav nav-list">
								<li class="nav-header">SUB CATEGORIES</li>
								<li><a href="products.html">Nullam semper elementum</a></li>
								<li class="active"><a href="products.html">Phasellus ultricies</a></li>
								<li><a href="products.html">Donec laoreet dui</a></li>
								<li><a href="products.html">Nullam semper elementum</a></li>
								<li><a href="products.html">Phasellus ultricies</a></li>
								<li><a href="products.html">Donec laoreet dui</a></li>
							</ul>
							<br/>
							<ul class="nav nav-list below">
								<li class="nav-header">MANUFACTURES</li>
								<li><a href="products.html">Adidas</a></li>
								<li><a href="products.html">Puma</a></li>
								<li><a href="products.html">Levis</a></li>
								<li><a href="products.html">Gucci</a></li>
							</ul>
						</div>
						<div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Randomize</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>												
													<a href="product_detail.html"><img alt="" src="<?php echo base_url();?>assets/themes/images/ladies/2.jpg"></a><br/>
													<a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
													<a href="#" class="category">Suspendisse aliquet</a>
													<p class="price">$261</p>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">												
													<a href="product_detail.html"><img alt="" src="<?php echo base_url();?>assets/themes/images/ladies/4.jpg"></a><br/>
													<a href="product_detail.html" class="title">Tempor sem sodales</a><br/>
													<a href="#" class="category">Urna nec lectus mollis</a>
													<p class="price">$134</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>						
					</div>
				</div>
			</section>