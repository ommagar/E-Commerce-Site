<?php 
	class Guest extends MY_Controller{

		public function checkin(){
				$data = $this->input->post('account');
				if($data=='register'){
					echo "register process";
				}
				else{
					$this->index();
				}
			}

			public function index(){
					$this->load->view('public/billing');
			}

			public function checkguest(){
				$this->load->library('form_validation');
				$this->form_validation->set_rules($this->config->item('guest'));
				$this->form_validation->set_error_delimiters('<div class="alert-danger">','</div>');
				if($this->form_validation->run()==TRUE){
					$data = $this->input->post();
					$email = $data['email'];
					$mobile = $data['mobile'];
					// $check = array(
					// 				'email'=>$data['email'],
					// 				'mobile'=>$data['mobile'],
					// 				);
					unset($data['submit']);
					$this->load->model('guest');
					if($this->guest->addguest($data)){
						$guest_id = $this->guest->getguestid($email,$mobile);
						$this->session->set_userdata('guest_id',$guest_id);
						$this->session->set_flashdata('feedback', 'Your order is ready just confirm now');
						return redirect('home/validconfirm');
					}else{
						$this->session->set_flashdata('feedback', 'Your guest account is having trouble. Try again.');
						return redirect('home/guest');
					}
				}else{
					$this->load->view('public/billing');
				}
			}

			public function validconfirm(){
					$this->load->view('public/confirm');
			}

			public function confirm(){
					$this->load->library('form_validation');
					$this->form_validation->set_rules('confirm', 'Confirm', 'trim|required|alpha');
					$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div');
					if ($this->form_validation->run()) {
						$data = $this->input->post();
						$this->load->model('guest');

						if($data['confirm'] == 'confirm'){
									$id = $this->session->userdata('guest_id');
								if($this->guest->confirm($data,$id)){
									$this->session->set_flashdata('feedback','Your order is confirmed.');
									$this->session->set_flashdata('flag','alert alert-success');
									$this->session->unset_userdata('guset_id');
									return redirect('home');
								}else{
									$this->session->set_flashdata('feedback','Order failed. Try again.');
									$this->session->set_flashdata('flag','alert alert-danger');
									return redirect('home/guest');
								}
						}else{
							
							$this->session->set_flashdata('feedback','You have invalid order. Try again.');
							$this->session->set_flashdata('flag','alert alert-danger');
							return redirect('home/guest');
							
						}
					}else{
						$this->load->view('public/confirm');
					}

				}

				public function checkout(){
				$this->load->view('public/checkout');
				}
	}
 ?>