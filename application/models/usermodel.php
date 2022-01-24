<?php defined('BASEPATH') OR exit ('NO DIRECT ACCESSS');

class UserModel extends MY_Model{
	public function getuser($username,$password)
	{	
		$q=$this->db->where(['username'=>$username,'password'=>$password])
			->get('users');	
		
		if($q->num_rows())
		{
			return $q->row()->user_id;
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function count_search_item($query){
		$q=$this->db ->like('item_name',$query)
					 ->or_like('code',$query)
					 ->or_like('descript',$query)
					 ->or_like('brand',$query)
					 ->order_by('inserted_at','DESC')
					 ->get('item');
		return $q->num_rows();
		
	}

	public function search_item($query,$limit,$offset){
		$q=$this->db ->like('item_name',$query)
					 ->or_like('code',$query)
					 ->or_like('descript',$query)
					 ->or_like('brand',$query)
					 ->limit($limit,$offset)
					 ->order_by('inserted_at','DESC')
					 ->get('item');
		return $q->result();
	}

	public function feature_load($key){
		$q=$this->db->select(['item_id','item_name','code','rate','size','gender','image_path'])
					->where('type',$key)
					->limit(4)
					->order_by('inserted_at','DESC')
					->get('item');
		return $q->result();
	}

	public function latest_load($key){
		$q=$this->db->select(['item_id','item_name','code','rate','size','gender','image_path'])
					->where('type',$key)
					->limit(4)
					->order_by('inserted_at','DESC')
					->get('item');
		return $q->result();
	}

	public function top_load($key){
		$q=$this->db->select(['item_id','item_name','code','rate','size','gender','image_path'])
					->where('type',$key)
					->limit(4)
					->order_by('inserted_at','DESC')
					->get('item');
		return $q->result();
	}

	public function mem_login($data){
		$q=$this->db->where($data)
					->get('member');
		if($q->num_rows()){
			return $q->row()->mem_id;
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	public function mem_register($data){
		return $this->db->insert('member',$data);
	}

	public function find($item_id){
	 $q =$this->db->where('item_id',$item_id)
				->get('item');
	return $q->row();
	}

	public function find_related($key){
	 $q =$this->db->like('item_name',$key)
		 		  ->or_like('code',$key)
		 		  ->or_like('brand',$key)
		 		  ->or_like('descript',$key)
		 		  ->limit(3)
		 		  ->order_by('inserted_at','ASC')
				  ->get('item');
	return $q->result();
	}

	public function addtocart($data){
			$item = json_encode($data);			
			return $this->db->set('cart')
							->where('item',$item);
		}


}
?>