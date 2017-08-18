<?php 

class Produtos_Model extends CI_Model
{
	public function listaProdutos(){
		return $this->db->get("produtos")->result_array();
	}

	public function busca($id){
		$this->db->where('id',$id);
		return $this->db->get("produtos")->row_array();
	}

	public function editar($produto){
		$this->db->where("id",$produto['id']);
		return $this->db->update("produtos",
			array(
				"nome" => $produto['nome'],
				"descricao" => $produto['descricao'],
				"preco" => $produto['preco'])
			);
	}

	public function excluir($id){
		$this->db->where('id',$id);
		return $this->db->delete("produtos");
	}

	public function inserir($produto){
		return $this->db->insert("produtos", $produto);
	}
	

}