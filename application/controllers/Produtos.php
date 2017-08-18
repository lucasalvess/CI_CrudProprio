<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Produtos extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->load->helper('monetizacao');
        $this->load->model("produtos_model");
	}

	public function index(){
		$produtos = $this->produtos_model->listaProdutos();
		$dados = array('produtos' => $produtos,"titulo"=>"Controle de produtos"); 
		$this->load->view('lista_produtos.php',$dados);
	}

	public function formularioAdd(){
		$dados = array("titulo"=>"Novo produto","existe"=>false);
		$this->load->view('formulario',$dados); 
	}

	public function adicionarProduto(){
		$produto = array(
			"nome" => $this->input->post("nome"),
			"descricao"=> $this->input->post("descricao"),
			"preco"=> $this->input->post("preco")
			);
		if($this->produtos_model->inserir($produto)){
			redirect('/');
		}
	}

	public function formularioEdit($id){
		$produto = $this->produtos_model->busca($id);
		$dados = array("produto" => $produto, "titulo" => "Editar Produto","existe"=>true);
		$this->load->view("formulario",$dados);
	}

	public function editarProduto($id){
		$produto = array(
			"id" => $id,
			"nome" => $this->input->post("nome"),
			"descricao"=> $this->input->post("descricao"),
			"preco"=> $this->input->post("preco")
			);
		
		if($resposta = $this->produtos_model->editar($produto)){
		redirect('/');	
		}
		
	}

	public function excluirProduto($id){
		$this->load->helper('typography');
		$resposta = $this->produtos_model->excluir($id);
		if($resposta){
			echo "<script> alert('Excluiu')</script>";
		}else{
			echo "<script> alert('Não deu')</script>";
		}
		redirect('/');

	}
}