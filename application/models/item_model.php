<?php 
	class Item_model extends MY_Model{

	public function count_user_item_list(){
		$user_id=$this->session->userdata('user_id');
		$q=$this->db
					->select(['item_name','item_id'])
					->from('item')
					->where('user_id',$user_id)
					->get();
		return $q->num_rows();
	}	

	public function item_list($limit,$offset)
	{
		$user_id=$this->session->userdata('user_id');
		$q=$this->db
					->select(['item_id','item_name','quantity','rate','inserted_at'])
					->from('item')
					->where('user_id',$user_id)
					->limit($limit,$offset)
					->order_by('inserted_at','DESC')
					->get();

		return $q->result();
	}

	public function add_item($data){
		return $this->db->insert('item',$data);
	}

	public function get_item($item_id){
		$q=$this->db->select(['item_id','brand','gender','size','item_name','quantity','code','rate','image_path','descript'])
				 ->where('item_id',$item_id)
				 ->get('item');
		return $q->row();
	}

	public function update_item($data,$item_id)
	{
		return $this->db->where('item_id',$item_id)
						->update('item',$data);
	}

	public function delete_item($item_id)
	{
		return $this->db->where('item_id',$item_id)
						->delete('item');
	}

	public function count_search_item($query,$user_id){
		$q=$this->db ->like('item_name',$query)
					 ->or_like('code',$query)
					 ->or_like('descript',$query)
					 ->or_like('brand',$query)
					 ->where('user_id',$user_id)
					 ->order_by('inserted_at','DESC')
					 ->get('item');
		return $q->num_rows();
		
	}

	public function search_item($query,$limit,$offset){
		$user_id = $this->session->userdata('user_id');
		$q=$this->db ->like('item_name',$query)
					 ->or_like('code',$query)
					 ->or_like('descript',$query)
					 ->or_like('brand',$query)
					 ->where('user_id',$user_id)
					 ->limit($limit,$offset)
					 ->order_by('inserted_at','DESC')
					 ->get('item');
		return $q->result();
	}

}

 ?>