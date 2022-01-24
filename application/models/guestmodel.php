<?php 
		class Guestmodel extends MY_Model{

			public function addguest($data){
				return $this->db->insert('guest',$data);
			}

			public function getguestid($email,$mobile){
				$q=$this->db->where(['email'=>$email,'mobile'=>$mobile])
							->get('guest');	
					return $q->row()->guest_id;
			}

			public function confirm($data){
				return $this->db->insert('cart',$data);
			}

		}


 ?>