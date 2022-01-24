<?php 
	class Cart extends CI_Controller{

		public function __construct(){
				parent::__construct();
				$this->load->library('cart');
			}

		public function addtocart(){
				if($this->session->userdata('mem_id')){
					$this->load->library('form_validation');
					$this->form_validation->set_rules('qty','Product Quantity','required|numeric');
					$id=$this->input->post('id');
					if ($this->form_validation->run() == TRUE) {
						if($this->input->post('qty')<=$this->input->post('max')){
							$data = $this->input->post();
							$options = array(
												'mem_id'=>$this->session->userdata('mem_id'),
												'time'  =>$data['time'],
												'max'	=>$data['max'],
												'image_path'=>$data['image_path']
											);
							$data['options'] = $options;
							unset($data['max']);unset($data['image_path']);unset($data['time']);
							$this->cart->insert($data);
							// $this->load->model('mycart');
							// $this->cart->addtocart($data);
							$this->session->set_flashdata('info',"This product is added to your cart.");
							return redirect(base_url().'home/product_detail/'.$data['id']);
							}else{
								$this->session->set_flashdata('info','Error in Product Quantity. It must be numeric and less than Max value');
								return redirect("home/product_detail/$id");
							}
					}else{
						$this->session->set_flashdata('info','Error in Product Quantity. It must be numeric and less than Max value');
						return redirect("home/product_detail/$id");
					}
				}else{
					$this->session->set_flashdata('feedback','You need to register and login first to add product on cart. Or click on checkout and create guest account.');
					$this->session->set_flashdata('flag','text-danger');
					return redirect('user/register');
				}
				
			}

			public function your_cart(){
				if( $mem_id = $this->session->userdata('mem_id')){
					$this->load->view('public/yourcart');					
				}
				else
				{
					$this->session->set_flashdata('feedback',"You need to login and add product to cart first. Or click on checkout and create guest account.");
					return redirect('user/register');
				}
			}

			

			public function update(){
				$data = $this->input->post();
				unset($data['submit']);
   				$this->cart->update($data);
   				return redirect('cart/your_cart');
			}
	}
 ?>