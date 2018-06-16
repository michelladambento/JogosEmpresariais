<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Ranking extends CI_Controller {

	

	public function index()
	{		
		$this->load->view('home');
		//echo 'controller login';
	}

	public function exibirRanking()
	{		
		$this->load->view('ranking/exibirRanking');
	}

	
	
}
