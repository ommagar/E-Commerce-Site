<?php include_once('admin_header.php'); ?>
  <section class="header_text sub">
  <h4><span>EDIT ITEM</span></h4>
  </section>

  <section class="main-content">        
      <div class="row">           
        <div class="span9">
          <div class="row">
             <?php echo form_open('admin/update_item');
                   echo form_hidden('item_id', $data->item_id); ?>
             <?php $options = array(
                      'levis'         => 'Levis',
                      'gucci'           => 'Gucci',
                      'addidas'         => 'Adidas',
                      'puma'        => 'Puma',
              ); ?>

          <div class="span5">
                <address>
                  <strong>Brand:</strong>
                  <span><?php echo form_dropdown('brand',$options,set_value('brand',$data->brand));?></span><br>
                  <strong>Gender:</strong>
                  <?php $genders = array(
                      'male'         => 'male',
                      'female'       => 'female',
                      'unisex'       => 'unisex',
                       ); ?>
                  <span><?php echo form_dropdown('gender',$genders,set_value('brand',$data->gender));?></span><br>
                  <strong>Size:</strong>
                  <?php $size = array(
                      's'         => 'small',
                      'm'       => 'medium',
                      'l'       => 'large',
                      'xl'       => 'extra-large',
                      'x-xl'       => 'extra-extra-large',
                       ); ?>
                  <span><?php echo form_dropdown('size',$size);?></span><br>
                  <strong>Type:</strong>
                  <?php $type = array(
                      'latest'       => 'Latest',
                      'feature'     =>'Feature',
                      'top'       => 'Top',
                       ); ?>
                  <span><?php echo form_dropdown('type',$type,set_value('type'));?></span><br>
                  <strong>Product Name:</strong>
                  <span><?php echo form_input(['type'=>'text','class'=>'form-control','name'=>'item_name','value'=>set_value('item_name', $data->item_name)]); ?>
                        <?php echo form_error('quantity'); ?>
                  </span><br>
                  <strong>Quantity:</strong>
                  <span><?php echo form_input(['type'=>'text','name'=>'quantity','placeholder'=>'Number of product','value'=>set_value('quantity',$data->quantity)]);?>
                        <?php echo form_error('quantity'); ?>
                  </span><br>
                  <strong>Product Code:</strong>
                  <span><?php echo form_input(['type'=>'text','name'=>'code','placeholder'=>'product','value'=>set_value('code',$data->code)]);?>
                        <?php echo form_error('code'); ?>
                  </span><br> <strong>Price:</strong>
                  <span><?php echo form_input(['type'=>'text','name'=>'rate','placeholder'=>'Rate of product','value'=>set_value('rate',$data->rate)]);?>
                        <?php echo form_error('rate'); ?>
                  </span>                              
                </address>                       
          </div>
          <div class="span4">
             <div class="row">
                <div class="col-lg-6">
                   <li class="span3">
                      <div class="product-box">
                          <span class="sale_tag"></span>
                              <p> <img src="<?php echo $data->image_path; ?>" > </p>                  
                      </div>
                    </li>         
                </div>
            </div>
        </div>
          <div class="span5">
              <div class="form-inline">
                  <label class="checkbox">
                    <input type="checkbox" value=""> Option one is this and that
                  </label>
                  <br/>
                  <label class="checkbox">
                    <input type="checkbox" value=""> Be sure to include why it's great
                  </label>
                  <p>&nbsp;</p>
                  <div class="form-group">
                <?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']); ?>
                <?php echo form_submit(['name'=>'submit','value'=>'Confirm','class'=>'btn btn-primary']); ?>
              </div>
        </div>                  
    </div>              
</div>
            <div class="row">
              <div class="span9">
                <ul class="nav nav-tabs" id="myTab">
                  <li class="active">Description</li>
                </ul>              
                <div class="tab-content">
                  <div class="tab-pane active" id="home">
                  <?php echo form_textarea(['type'=>'text','name'=>'descript','placeholder'=>'Description','class'=>'tab-pane active','id'=>'home','value'=>set_value('descript',$data->descript)]); ?>
                  <?php echo form_close();?>  
                  </div>

          <div class="tab-pane" id="profile">
                <table class="table table-striped shop_attributes"> 
                  <tbody>
                    <tr class="">
                          <th>Size</th>
                          <td>Large, Medium, Small, X-Large</td>
                    </tr>   
                    <tr class="alt">
                          <th>Colour</th>
                          <td>Orange, Yellow</td>
                    </tr>
                  </tbody>
                </table>
          </div>
        </div>              
      </div> 


    <div class="span9"> 
        <br>
          <h4 class="title">
              <span class="pull-left"><span class="text"><strong>Related</strong> Products</span></span>
              <span class="pull-right">
              <a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
              </span>
          </h4>
                <div id="myCarousel-1" class="carousel slide">
                  <div class="carousel-inner">
                    <div class="active item">
                      <ul class="thumbnails listing-products">
                        <li class="span3">
                          <div class="product-box">
                            <span class="sale_tag"></span>                        
                            <a href="product_detail.html"><img alt="" src="themes/images/ladies/6.jpg"></a><br/>
                            <a href="product_detail.html" class="title">Wuam ultrices rutrum</a><br/>
                            <a href="#" class="category">Suspendisse aliquet</a>
                            <p class="price">$341</p>
                          </div>
                        </li>
                        <li class="span3">
                          <div class="product-box">
                            <span class="sale_tag"></span>                        
                            <a href="product_detail.html"><img alt="" src="themes/images/ladies/5.jpg"></a><br/>
                            <a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
                            <a href="#" class="category">Phasellus consequat</a>
                            <p class="price">$341</p>
                          </div>
                        </li>       
                        <li class="span3">
                          <div class="product-box">                       
                            <a href="product_detail.html"><img alt="" src="themes/images/ladies/4.jpg"></a><br/>
                            <a href="product_detail.html" class="title">Praesent tempor sem</a><br/>
                            <a href="#" class="category">Erat gravida</a>
                            <p class="price">$28</p>
                          </div>
                        </li>                       
                      </ul>
                    </div>
                    <div class="item">
                      <ul class="thumbnails listing-products">
                        <li class="span3">
                          <div class="product-box">
                            <span class="sale_tag"></span>                        
                            <a href="product_detail.html"><img alt="" src="themes/images/ladies/1.jpg"></a><br/>
                            <a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
                            <a href="#" class="category">Phasellus consequat</a>
                            <p class="price">$341</p>
                          </div>
                        </li>       
                        <li class="span3">
                          <div class="product-box">                       
                            <a href="product_detail.html"><img alt="" src="themes/images/ladies/2.jpg"></a><br/>
                            <a href="product_detail.html">Praesent tempor sem</a><br/>
                            <a href="#" class="category">Erat gravida</a>
                            <p class="price">$28</p>
                          </div>
                        </li>
                        <li class="span3">
                          <div class="product-box">
                            <span class="sale_tag"></span>                        
                            <a href="product_detail.html"><img alt="" src="themes/images/ladies/3.jpg"></a><br/>
                            <a href="product_detail.html" class="title">Wuam ultrices rutrum</a><br/>
                            <a href="#" class="category">Suspendisse aliquet</a>
                            <p class="price">$341</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
                <li><a href="products.html">Nike</a></li>
                <li><a href="products.html">Dunlop</a></li>
                <li><a href="products.html">Yamaha</a></li>
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
                          <a href="product_detail.html"><img alt="" src="themes/images/ladies/7.jpg"></a><br/>
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
                          <a href="product_detail.html"><img alt="" src="themes/images/ladies/8.jpg"></a><br/>
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
            <div class="block">               
              <h4 class="title"><strong>Best</strong> Seller</h4>               
              <ul class="small-product">
                <li>
                  <a href="#" title="Praesent tempor sem sodales">
                    <img src="themes/images/ladies/1.jpg" alt="Praesent tempor sem sodales">
                  </a>
                  <a href="#">Praesent tempor sem</a>
                </li>
                <li>
                  <a href="#" title="Luctus quam ultrices rutrum">
                    <img src="themes/images/ladies/2.jpg" alt="Luctus quam ultrices rutrum">
                  </a>
                  <a href="#">Luctus quam ultrices rutrum</a>
                </li>
                <li>
                  <a href="#" title="Fusce id molestie massa">
                    <img src="themes/images/ladies/3.jpg" alt="Fusce id molestie massa">
                  </a>
                  <a href="#">Fusce id molestie massa</a>
                </li>   
              </ul>
            </div>
          </div>
        </div>
      </section>      
<?php include_once('admin_footer.php'); ?>