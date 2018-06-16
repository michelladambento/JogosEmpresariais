<?php 
Class Jornal_model extends CI_Model{

	function save_image($data){		
		$this->db->insert('jornal',$data);
	}
	
	function get_images(){
		$this->db->from('jornal');
		$this->db->order_by('idJornal', 'asc');
		$query = $this->db->get();		
		return $query->result();
	}

	public function totalJornal()
	{	
	  return $this->db->get('jornal')->num_rows();
	}

	public function selecionarJornal($id)
	{
		$this->db->select('*');	
		$this->db->where('idJornal', $id);
		$query = $this->db->get('jornal');
		return $query->result();
	}	

	public  function listarJornal()
	{
	  $this->db->select("*");           
	  $query = $this->db->get('jornal');
	  return $query->result();
	} 

	public function deletarJornal($id)
	{
		$this->db->where('idJornal', $id);
		$this->db->delete('jornal');
	}

}
?>