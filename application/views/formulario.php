
<?php $this->load->view('cabecalho');

echo "<br><h1>{$titulo}</h1>"; 


if($existe){   
	echo form_open("produtos/editarProduto/{$produto['id']}");

              //CASO SEJA EDIÇÂO
	echo form_label("Nome","nome");
	echo form_input(array(
		"name"=>"nome",
		"class"=>"form-control",
		"id"=>"nome",
		"type"=>"text",
		"required"=>"",
		"plasseholder"=>"Nome do produto",
		"value"=> $produto['nome']

		));

	echo form_label("Descricao","descricao");
	echo form_input(array(
		"name"=>"descricao",
		"id"=>"descricao",
		"class"=>"form-control",
		"plasseholder" => "Breve descrição",
		"required"=>"",
		"value"=>$produto['descricao']
		));
	echo form_label("Preco","preco");
	echo form_input(array(
		"name"=>"preco",
		"id"=>"preco",
		"type"=>"number",
		"plasseholder"=>"R$ 0,00",
		"required"=>"",
		"class"=>"form-control",
		"value"=>$produto['preco']
		));
	echo "<br>";
	echo form_button(array(
		"class"=>"btn btn-primary form-control",
		"content"=>"Salvar",
		"type"=>"submit"
		));
}else{
	echo form_open("produtos/adicionarProduto");

    //CASO SEJA ADICIONAR
	echo form_label("Nome","nome");
	echo form_input(array(
		"name"=>"nome",
		"class"=>"form-control",
		"id"=>"nome",
		"type"=>"text",
		"required"=>"",
		"plasseholder"=>"Nome do produto"
		));

	echo form_label("Descricao","descricao");
	echo form_input(array(
		"name"=>"descricao",
		"id"=>"descricao",
		"class"=>"form-control",
		"plasseholder" => "Breve descrição",
		"required"=>""
		));
	echo form_label("Preco","preco");
	echo form_input(array(
		"name"=>"preco",
		"id"=>"preco",
		"type"=>"number",
		"plasseholder"=>"R$ 0,00",
		"required"=>"",
		"class"=>"form-control"
		));
	echo "<br>";
	echo form_button(array(
		"class"=>"btn btn-primary form-control",
		"content"=>"Salvar",
		"type"=>"submit"
		));
}



echo form_close();
$this->load->view('rodape'); 