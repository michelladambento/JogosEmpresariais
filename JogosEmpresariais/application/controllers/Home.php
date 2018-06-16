<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
	       parent::__construct();	       
	       $this->load->library("Controle_acesso");
	       $this->controle_acesso->controlar(); 

	       $this->load->model('Usuario_model');
	       $this->load->model('Jornal_model');
	       $this->load->model('Equipe_model');       
	       
	}

	public function index()
	{
		$dados['usuario'] = $this->session->userdata("usuario");		
		$dados['totalUsuario'] = $this->Usuario_model->totalUsuario();
		$dados['totalJornal'] = $this->Jornal_model->totalJornal();
		$dados['totalEquipe'] = $this->Equipe_model->totalEquipe();
		$this->load->view('home', $dados);
	}
}
