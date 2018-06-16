<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Jornal extends CI_Controller {

	public function __construct()
	{
	       parent::__construct();	       
	       $this->load->library("Controle_acesso");
	       $this->controle_acesso->controlar();

	       $this->load->model('Jornal_model');      
	       
	}	

	public function index()
	{		
		$this->load->view('home');
		//echo 'controller login';
	}

	public function cadastrarJornal()
	{		
		$dados['usuario'] = $this->session->userdata("usuario");
		$this->load->view('jornal/cadastrarJornal', $dados);
	}

	public function gerenciarJornal()
	{		
		$dados['usuario'] = $this->session->userdata("usuario");		
		$dados['listarJornal'] = $this->Jornal_model->listarJornal();
		$this->load->view('jornal/gerenciarJornal', $dados);
	}
	/*
	public function exibirJornal()
	{		
		$this->load->view('jornal/exibirJornal');
	}
	*/
	public function exibirJornal($id)
	{
		$dados['usuario'] = $this->session->userdata("usuario");
		$dados['selecionadoJornal'] = $this->Jornal_model->selecionarJornal($id);
		$this->load->view('jornal/exibirJornal', $dados);
	}

	public function exibirTodosJornais()
	{
		$dados['usuario'] = $this->session->userdata("usuario");
		$dados['todosJornais'] = $this->Jornal_model->listarJornal();
		$this->load->view('jornal/todosJornais', $dados);
	}

    public function upload()
    {    	

		$filename = md5(uniqid(rand(), true));

		$config = array(
			'upload_path' => 'uploads/jornal',
			'allowed_types' => "gif|jpg|png|jpeg",
			'file_name' => $filename
		);
		
		$this->load->library('upload', $config);			
			
		
		if($this->upload->do_upload())
		{
			$file_data = $this->upload->data();
			//aqui colocar os inputs
			$dados['ckeditor'] = $this->input->post('ckeditor');
			$dados['descricao'] = $this->input->post('descricao');
			$dados['titulo_jornal'] = $this->input->post('titulo_jornal');
			$dados['file_dir'] = $file_data['file_name'];
			$dados['date_uploaded'] = date('Y-m-d H:i:s');
			$this->load->model('Jornal_model');
			$this->Jornal_model->save_image($dados);
			
			$dados['message'] = "Imagem carregado";
		
			$this->load->model('Jornal_model');
			$dados['listarJornal'] = $this->Jornal_model->get_images();			

			redirect('Jornal/gerenciarJornal');
			}
			else
			{
			$dados = array();	
			$this->load->model('Jornal_model');			
			$dados['listarJornal'] = $this->Jornal_model->get_images();
			
			$error = $this->upload->display_errors();
			$dados['errors'] = $error;

			redirect('Jornal/gerenciarJornal');
		
		}
	}

	public function deletarJornal($id)
	{		
		$this->Jornal_model->deletarJornal($id);
		redirect('Jornal/gerenciarJornal');
	}
	
}
