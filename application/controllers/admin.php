<?php 
	class Admin extends MY_Controller{
		public function __construct()
			{
				parent::__construct();
				if(!$this->session->userdata('user_id'))
					redirect('login');
				$this->load->model('item_model','item');
			}

			private function _flashAndRedirect($success, $successMessage, $failureMessage){
			if( $success){
			$this->session->set_flashdata('feedback', $successMessage);
			$this->session->set_flashdata('flag', 'btn btn-success');
			}else{
			$this->session->set_flashdata('feedback', $failureMessage);
			$this->session->set_flashdata('flag', 'btn btn-danger');
			}
			return redirect('admin/dashboard');
			}

		public function dashboard(){
			$this->load->library('pagination');
				$config=[
							'base_url' 				=> base_url('admin/dashboard'),
							'total_rows'			=> $this->item->count_user_item_list(),
							'per_page'				=> 5,
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

				$item = $this->item->item_list( $config['per_page'], $this->uri->segment(3));
				$this->load->view('admin/dashboard',['array'=>$item]);
			}

			public function add_item(){
				
				$this->load->view('admin/add_item');

			}

			public function set_item(){
				$config=[
							'upload_path'          => './uploads/',
			                'allowed_types'        => 'gif|jpg|png',
					];
				$this->load->library('upload',$config);

				$this->load->library('form_validation');
				$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
				$this->form_validation->set_rules($this->config->item('form_rule'));

				if( $this->form_validation->run() && $this->upload->do_upload()){
				$set = $this->input->post();
				unset($set['submit']);
				
				$detail = $this->upload->data();
				$image_path = base_url("uploads/".$detail['raw_name'].$detail['file_ext']);	
				$set['image_path'] = $image_path;

						$this->_flashAndRedirect(
									$this->item->add_item($set),
									"An item inserted Successfully.",
									"An item insertion unsuccessfull." 
									);
				}
				else
					{
						$upload_error = $this->upload->display_errors();
						$this->load->view('admin/add_item',compact('upload_error'));
					}
			}

			public function edit_item(){
				$item_id = $this->input->post('item_id');
				$data = $this->item->get_item($item_id);
				$this->load->view('admin/edit_item',['data'=>$data]);
			}

			public function update_item(){
				$this->load->library('form_validation');
				$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
				$this->form_validation->set_rules($this->config->item('form_rule'));

				// if( $this->form_validation->run()){
				$data = $this->input->post();
				$item_id = $this->input->post('item_id');
				unset($data['item_id']);
				unset($data['submit']);
				
				// $detail = $this->upload->data();
				// $image_path = base_url("uploads/".$detail['raw_name'].$detail['file_ext']);	
				// $data['image_path'] = $image_path;
				$result = $this->item->update_item($data , $item_id);

						$this->_flashAndRedirect(
									$result,
									"An item updated Successfully.",
									"An item update unsuccessfull." 
									);
				// }
				// else
				// 	{
				// 		// $upload_error = $this->upload->display_errors();
				// 		return redirect('admin/edit_item','refresh');
				// 	}
			}

			public function delete_item(){
				$item_id = $this->input->post('item_id');
				if($this->item->delete_item($item_id))
					$this->_flashAndRedirect(
											  $this->item->delete_item($item_id),
											  "An item deleted successfully",
											  "An item not deleted successfully"
					);
				return redirect('admin/dashboard','refresh');
			}

			public function search_item(){
				$query = $this->input->post('query');

				if(empty($query)){
					$this->session->set_flashdata('feedback',"The search box is empty.");
					$this->session->set_flashdata('flag',"class='btn btn-info'");
						return redirect('admin/dashboard');
				}
				else{
					$user_id = $this->session->userdata('user_id');
					$total = $this->item->count_search_item($query,$user_id);
					if($total>0){
						$this->session->set_flashdata('feedback'," $total $query result(s) found.");
						$this->session->set_flashdata('flag',"class='btn btn-success'");						
						return redirect("admin/search_results/$query");
						}
						else{
						$this->session->set_flashdata('feedback',"The Search key doesnot match anything.");
						$this->session->set_flashdata('flag',"class='btn btn-info'");
						return redirect('admin/dashboard');
				}	
		
			}
		}

			public function search_results($query){
				$this->load->library('pagination');
						$config=[
									'base_url' 				=> base_url('admin/search_item'),
									'total_rows'			=> $this->item->count_search_item($query,$this->session->userdata('user_id')),
									'per_page'				=> 5,
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
				$array = $this->item->search_item($query,$config['per_page'],$this->uri->segment(4,0));
				$this->load->view('admin/search_dashboard',['array'=>$array]);
			}
			

	}
 ?>