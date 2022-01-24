<?php
		class Mycart extends MY_Model{

			public function addtocart($data){
				return $this->db->insert('cart',$data);
			}
				
			}

			public function find($item_id){
	 		$q =$this->db->select(['item_id','item_name','brand','quantity','code','rate','size','gender','descript','image_path'])
	 				->where('item_id',$item_id)
					->get('item');
			return $q->row();
			}

			
		}


 ?>