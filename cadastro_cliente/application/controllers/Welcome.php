<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function formulario_cadastro(){
		
		$this->load->view('formulario_cadastro');
	}
	
	public function salva_dados(){
		
		if($this->db->insert('clientes', $this->input->post())) {
			$this->load->view('dados_inseridos');
		}
		
	}
}
