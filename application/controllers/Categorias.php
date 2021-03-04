<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	/**Fazer commit */
	public function index()
	{
		$dados['titulo'] = "Listar categorias";
		$this->load->view('cabecalho', $dados);
		$this->load->view('listar_categorias');
		$this->load->view('rodape');
	}

    public function novo()
	{
		$dados['titulo'] = "Cadastrar Nova Categoria";
		$this->load->view('cabecalho', $dados);
		$this->load->view('novo_categoria');
		$this->load->view('rodape');
	}
}
