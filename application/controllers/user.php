<?php 
		class User extends MY_Controller{

			public function __construct(){
				parent::__construct();
				$this->load->model('usermodel','user');
			}

			public function search_item(){
				$query = $this->input->post('query');

				if(empty($query)){
					$this->session->set_flashdata('feedback',"The search box is empty.");
					$this->session->set_flashdata('flag',"class='btn btn-info'");
						return redirect('home/index');
				}
				else{
					$total = $this->user->count_search_item($query);
						if($total>0){
						$this->session->set_flashdata('feedback'," $total $query result(s) found.");
						$this->session->set_flashdata('flag',"class='btn btn-success'");						
						return redirect("user/search_results/$query");
						}
						else{
						$this->session->set_flashdata('feedback',"The Search key doesnot match anything.");
						$this->session->set_flashdata('flag',"class='btn btn-info'");
						return redirect('home/index');
						}
				}	
		
			}

			public function search_results($query){
				$this->load->library('pagination');
						$config=[
									'base_url' 				=> base_url('user/search_item'),
									'total_rows'			=> $this->user->count_search_item($query),
									'per_page'				=> 8,
									'full_tag_open'			=> "<ul class='pagination'>",
									'full_tag_close'		=> "</ul>",
									'first_tag_open'		=> "<li>",
									'first_tag_close'		=> "</li>",
									'first_link'		    => "<li>",
									'last_link' 			=> "</li>",
									'last_tag_open'			=> "<li>",
									'last_tag_close'		=> "</li>",
									'next_tag_open'			=> "<li>",
									'next_tag_close'		=> "</li>",
									'prev_tag_open'	 		=> "<li>",
									'prev_tag_close'		=> "</li>",
									'num_tag_open'			=> "<li>",
									'num_tag_close'			=> "</li>",
									'cur_tag_open'			=> "<li class='active'><a>",
									'cur_tag_close'			=> "</a></li>",
								];
						$this->pagination->initialize($config);
				$data = $this->user->search_item($query,$config['per_page'],$this->uri->segment(8,0));
				$data['query']=$query;
				$this->load->view('public/public_header_view');
				$this->load->view('public/search_results',['data'=>$data]);
				$this->load->view('public/public_footer_view');
			}

			public function mem_login(){
				if($this->session->userdata('mem_id')){
					$this->session->set_flashdata('feedback','User already logged in. First logout to login.');
					return redirect('user/register');
				}else{
							$this->load->library('form_validation');
							$this->form_validation->set_rules($this->config->item('login'));
							$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

							if ($this->form_validation->run() == TRUE ) {
								$data = $this->input->post();
								unset($data['submit']);
								$mem_id = $this->user->mem_login($data);
								if($mem_id){
									$this->session->set_userdata('mem_id',$mem_id);
									return redirect('home');
								}
								else{
									$this->session->set_flashdata('Login Failed',' Invalid Username or Password.');
									return redirect('user/register');
								}
							} else {
								$this->load->view('public/register');
							}
				}
				
			}

			public function logout(){
				$this->session->unset_userdata('mem_id');
				return redirect('user/register');
			}

			public function register(){
				if( $this->session->userdata('user_id'))
					return redirect('admin/dashboard');
				else{
					$this->load->view('public/public_header_view');		
					$this->load->view('public/register');
					$this->load->view('public/public_footer_view');
					}
			}
		}
 ?>