<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class User extends CI_Controller {

	public function __construct()
	{
	       parent::__construct();	       
	       $this->load->library("Controle_acesso");
	       $this->controle_acesso->controlar();

	       $this->load->model('Usuario_model');      
	       
	}	

	public function index()
	{		
		//$dados['usuario'] = $this->session->userdata("usuario");
		//$this->load->view('home', $dados);		
	}

	public function cadastrarUsuario()
	{
		$dados['usuario'] = $this->session->userdata("usuario");
		$dados['listarEquipe'] = $this->Usuario_model->listarEquipe();
		$this->load->view('user/cadastrarUsuario', $dados);
	}

	public function inserirUsuario()
	{
		//($this->input->post('btnCadastrar'))== true)
		if (isset($_POST["btnCadastrar"])){
			$dados['username'] = $this->input->post('username');
			$dados['password'] = $this->input->post('password');
			$dados['tipo_acesso'] = $this->input->post('tipo_acesso');;
			$dados['Empresa_idEmpresa'] = $this->input->post('Empresa_idEmpresa');
			$is_inserted = $this->Usuario_model->inserirUsuario($dados);		
			
			if (!$is_inserted) {					
				$this->session->set_flashdata('success', 'Cadastrado com sucesso! ');
				redirect('user/cadastrarUsuario');
			}else{
				$this->session->set_flashdata('error', 'Erro ao cadastrar! ');
				redirect('user/cadastrarUsuario');
			}
		}
				
		
	}

	public function editarUsuario($id)
	{
		$dados['usuario'] = $this->session->userdata("usuario");
		$dados['selecionadoUsuario'] = $this->Usuario_model->selecionarUsuario($id);
		$dados['listarEquipe'] = $this->Usuario_model->listarEquipe($id);
		$this->load->view('user/editarUsuario', $dados);
	}

	public function atualizarUsuario($id)
	{
	
		$dados['username'] = $this->input->post('username');
		$dados['password'] = $this->input->post('password');
		$dados['tipo_acesso'] = $this->input->post('tipo_acesso');;
		$dados['Empresa_idEmpresa'] = $this->input->post('Empresa_idEmpresa');
		$this->Usuario_model->atualizarUsuario($dados, $id);
		redirect('user/gerenciarUsuario');
	}

	public function gerenciarUsuario()
	{
		$dados['usuario'] = $this->session->userdata("usuario");
		$dados['listarUsuario'] = $this->Usuario_model->listarUsuario();
		$this->load->view('user/gerenciarUsuario', $dados);
	}	
	/*
	public function editarUsuario($id)
	{
		$dados['usuario'] = $this->session->userdata("usuario");
		$dados['selecionadoUsuario'] = $this->Usuario_model->selecionarUsuario($id);
		$this->load->view('user/editarUsuario', $dados);
	}
	*/

	public function deletarUsuario($id)
	{
		$this->Usuario_model->deletarUsuario($id);
		redirect('user/gerenciarUsuario');
	}


	public function exibirPerfil()
	{
		$dados['usuario'] = $this->session->userdata("usuario");
		$this->load->view('user/exibirPerfil', $dados);
	}

	/*$dados['usuario'] = $this->session->userdata("usuario");
	$dados['listarEquipe'] = $this->jogador_model->listarEquipe();
	$this->load->view('jogador/cadastrarJogador', $dados);
	*/



	
}
