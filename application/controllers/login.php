<?php 

	class Login extends MY_Controller{

		public function index()
	{
		if( $this->session->userdata('user_id'))
			return redirect('admin/dashboard');
		
		$this->load->view('public/admin_login');

	}

	public function admin_login()
	{

		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','username','required|alpha_numeric');
		$this->form_validation->set_rules('password','password','required|alpha_numeric|max_length[12]|min_length[8]');
		$this->form_validation->set_error_delimiters('<p class="reset">','</p>');

		if($this->form_validation->run()==TRUE)
		{
			
			$username = $this->input->post('username');
			$password =	$this->input->post('password');
			

			$this->load->model('usermodel');

			$login_id=$this->usermodel->getuser($username,$password);
			if($login_id)
			{   
				$this->session->set_userdata('user_id',$login_id);
				return redirect('admin/dashboard');
			}
			else
			{   
				$this->session->set_flashdata('Login Failed','Invalid Username or Password.');
				return redirect('login');
			}
			
		}
		else
		{
			$this->load->view('public/admin_login');
			
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('user_id');
		return redirect('login');
	}

	public function forgot()
	{
		$this->load->view('public/forgot');
	}

	public function register(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules($this->config->item('emails'));
		if($this->form_validation->run()){
			$data = [
						'username'=> $this->input->post('uname'),
						'password'=> $this->input->post('pass'),
						'email'	=> $this->input->post('email')
						];
			$this->load->model('usermodel');
			if($this->usermodel->mem_register($data)){
			$this->session->set_flashdata('register',"You have successfully registered into our members. Login and Enjoy the services.");
			return redirect('home/register');
			}else{
				$this->session->set_flashdata('register',"Error in registering. Please try again.");
				echo("register failed");
			return redirect('home/register');
			}
		}
		else{
			$this->load->view('public/register');
		}
	}
}
?>