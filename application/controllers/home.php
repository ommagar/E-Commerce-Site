<?php 
		class Home extends My_Controller{

			public function __construct(){
				parent::__construct();
				$this->load->model('usermodel','umodel');
			}

			public function index(){
				
				$this->load->view('public/public_header_view');
				$this->load->view('public/carousel');
				$data = $this->feature_load();
				$this->load->view('public/feature',compact('data'));
				$data = $this->latest_load();
				$this->load->view('public/latest',compact('data'));
				$data = $this->top_load();
				$this->load->view('public/top',compact('data'));
				$this->load->view('public/modern');
				$this->load->view('public/manufacture');
				$this->load->view('public/public_footer_view');
			}

			public function homepage(){
				return redirect('home/index');
			}

			public function about_us(){
				$this->load->view('public/contact');
			}

			public function contact_us(){
				$this->load->view('public/contact');
			}

			public function product_detail(){
				$item_id = $this->uri->segment(3);
				$data = $this->umodel->find($item_id);
				$key = $data->item_name;
				$this->load->view('public/public_header_view');
				$this->load->view('public/product_detail',compact('data'));
				$data = $this->related_product($key);
				$this->load->view('public/relatedproduct',compact('data'));
				$this->load->view('public/sidenavbar');
				$this->load->view('public/randomize');
				$this->load->view('public/bestseller');
				$this->load->view('public/randomize');
				$this->load->view('public/manufacture');
				$this->load->view('public/public_footer_view');

			}

			public function product(){
				$this->load->view('public/products');
			}

			public function feature_load(){
				$feature = "feature";
				return $data = $this->umodel->feature_load($feature);
			}

			public function latest_load(){
				$latest = "latest";
				return $new = $this->umodel->latest_load($latest);
			}

			public function top_load(){
				$top = "top";
				return $data = $this->umodel->top_load($top);
			}

			public function related_product($key){
				return $data = $this->umodel->find_related($key);

			}

			public function register(){
				$this->load->view('public/register');
			}

			
			
		}



 ?>