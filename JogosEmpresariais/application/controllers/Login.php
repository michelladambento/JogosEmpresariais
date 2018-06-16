<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
       parent::__construct();	      
       $this->load->model('login_model');         
	       
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function entrar()
	{
		$login = $this->input->post("username");
		$senha = $this->input->post("password");

		$this->db->where("username", $login);
		$this->db->where("password", $senha);
		$query = $this->db->get("usuario");

		if ($query->num_rows() == 1) {
			$usuario = $query->row();
			$this->session->set_userdata("usuario", $usuario->username);
			$this->session->set_userdata("idusuario", $usuario->id);
			redirect("home");
		}else{
			$this->session->set_flashdata('error', 'inválido o nome e a senha ');
			redirect("login");
		}
	}

	function logout()
	{
		$this->session->set_userdata('username', '');	
		redirect('login');
	}
	
}
