<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Equipe extends CI_Controller {

	public function __construct()
	{
	       parent::__construct();	       
	       $this->load->library("Controle_acesso");
	       $this->controle_acesso->controlar();

	       $this->load->model('Equipe_model');      
	       
	}	

	public function index()
	{		
		$this->load->view('home');
		//echo 'controller login';
	}
	
	public function cadastrarEquipe()
	{
		$dados['usuario'] = $this->session->userdata("usuario");
		$this->load->view('equipe/cadastrarEquipe', $dados);
	}

	public function inserirEquipe()
	{		
		
		if (isset($_POST["btnCadastrarEmpresa"])){
			$dados['nome_equipe'] = $this->input->post('nome_equipe');
			$dados['qtd_integrante'] = $this->input->post('qtd_integrante');			
			$is_inserted = $this->Equipe_model->inserirEquipe($dados);		
			
			if (!$is_inserted) {					
				$this->session->set_flashdata('success', 'Cadastrado Equipe com sucesso! ');
				redirect('Equipe/cadastrarEquipe');
			}else{
				$this->session->set_flashdata('error', 'Erro ao cadastrar Equipe! ');
				redirect('Equipe/cadastrarEquipe');
			}
		}
		
		//$this->Equipe_model->inserirEquipe($dados);
		//redirect('equipe');
		//falta alterar
	}

	public function gerenciarEquipe()
	{
		$dados['usuario'] = $this->session->userdata("usuario");
		$dados['listarEquipe'] = $this->Equipe_model->listarEquipe();		
		$this->load->view('Equipe/gerenciarEquipe', $dados);
	}

	public function deletarEquipe($id)
	{		
		$this->Equipe_model->deletarEquipe($id);
		redirect('Equipe/gerenciarEquipe');
	}	
	
	public function editarEquipe($id)
	{		
		$dados['usuario'] = $this->session->userdata("usuario");
		$dados['selecionadoEquipe'] = $this->Equipe_model->selecionarEquipe($id);
		//$dados['listarEquipe'] = $this->Equipe_model->listarEquipe($id);		
		$this->load->view('equipe/editarEquipe', $dados);
	}	

	public function atualizarEquipe($id)
	{	
		$dados['idEmpresa'] = $this->input->post('idEmpresa');
		$dados['nome_equipe'] = $this->input->post('nome_equipe');
		$dados['qtd_integrante'] = $this->input->post('qtd_integrante');		
		$this->Equipe_model->atualizarEquipe($dados, $id);
		redirect('equipe/gerenciarEquipe');
	}

	
}
