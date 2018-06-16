<?php 

class Equipe_model extends CI_Model {

public function __construct()
{
  parent::__construct();
       
}


public  function listarEquipe()
{
  $this->db->select("*");           
  $query = $this->db->get('empresa');
  return $query->result();
} 


public function totalEquipe()
{	
  return $this->db->get('empresa')->num_rows();
}

public function inserirEquipe($data)
{
	$this->db->insert('empresa', $data);
}

public function deletarEquipe($id)
{
	$this->db->where('idEmpresa', $id);
	$this->db->delete('empresa');
}


public function selecionarEquipe($id)
{
	$this->db->select('*');	
	$this->db->where('idEmpresa', $id);
	$query = $this->db->get('empresa');
	return $query->result();
}

public function atualizarEquipe($dados, $id)
{
	$this->db->update('empresa', $dados, array('idEmpresa'=>$id));
}
       

}