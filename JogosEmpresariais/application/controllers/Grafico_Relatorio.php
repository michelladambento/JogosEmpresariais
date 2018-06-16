<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Grafico_Relatorio extends CI_Controller {

	

	public function index()
	{		
		$this->load->view('home');
		//echo 'controller login';
	}

	public function exibirGrafico()
	{		
		$this->load->view('grafico_relatorio/exibirGrafico');
	}

	public function exibirRelatorio()
	{		
		$this->load->view('grafico_relatorio/exibirRelatorio');
	}

	
	
}
