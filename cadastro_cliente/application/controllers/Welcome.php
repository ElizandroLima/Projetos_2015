<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index() {
		$this -> load -> view('welcome_message');
	}

	public function formulario_cadastro() {

		$this -> load -> view('formulario_cadastro');
	}

	public function salva_dados() {
		//teste para inserir campos com o nome igual no banco aos da view
		/*
		 if($this->db->insert('clientes', $this->input->post())) {
		 $this->load->view('dados_inseridos');
		 }
		 */
		//teste para campos com nomes diferentes no banco ao da view
		$nome = $this -> input -> post('nome');
		$email = $this -> input -> post('email');

		$dados = array(
						'nome' => $nome, 
						'email' => $email
						);

		if ($this -> db -> insert('clientes', $dados)) {
			$this -> load -> view('dados_inseridos');
		}
	}
		
	public function listar_clientes(){
		
		$resultado = $this->db->get('clientes');
		
		$dados['resultado'] = $resultado;
		
		$this->load->view("listar_clientes",$dados);
		
	}































}
