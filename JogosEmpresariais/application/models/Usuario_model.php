<?php 

class Usuario_model extends CI_Model {

	public function __construct()
	{
	    parent::__construct();
	       
	}
	/*
	public  function listarUsuario()
	{
	  $this->db->select("*");           
	  $query = $this->db->get('usuario');
	  return $query->result();
	} 
	*/ 
	/* ***** Inicio join tabela usuario e empresa **** */
	public function listarUsuario()
	{
		$this->db->select("usuario.*, empresa.nome_equipe");
		$this->db->join("empresa", "usuario.Empresa_idEmpresa = empresa.idEmpresa");
		$query = $this->db->get("usuario");
		return $query->result();
	}

	public function selecionarUsuario($id)
	{
		$this->db->select('usuario.*, empresa.nome_equipe');
		$this->db->join("empresa", "usuario.Empresa_idEmpresa = empresa.idEmpresa");	
		$this->db->where('idUsuario', $id);
		$query = $this->db->get('usuario');
		return $query->result();
	}
	/* ***** fim join tabela usuario e empresa **** */

	public  function listarEquipe()
	{
	    $this->db->select("*");           
	    $query = $this->db->get('empresa');
	    return $query->result();
	} 

	public function inserirUsuario($data)
	{
		$this->db->insert('usuario', $data);
	} 

	public function atualizarUsuario($dados, $id)
	{
		$this->db->update('usuario', $dados, array('idUsuario'=>$id));
	}

	public function deletarUsuario($id)
	{
		$this->db->where('idUsuario', $id);
		$this->db->delete('usuario');
	} 
	public function totalUsuario()
	{	
	  return $this->db->get('usuario')->num_rows();
	}



}