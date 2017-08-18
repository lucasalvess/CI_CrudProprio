<?php $this->load->view('cabecalho') ?>
<br>
<h1>Lista de Produtos</h1>

<table class="table">
	<?php foreach ($produtos as $produto):?>
		<tr>
			<td><?=$produto['nome']?></td>
			<td><?=character_limiter($produto['descricao'],20)?>
			</td>
			<td><?=monetizar($produto['preco'])?></td>
			<td><?=anchor("produtos/formularioEdit/{$produto['id']}",'Editar',array(
				"class"=> "btn btn-primary"
				))?></td>
			<td><?=anchor("produtos/excluirProduto/{$produto['id']}",'Excluir',array(
				"class"=> "btn btn-danger"
				))?></td>
			</tr>
		<?php endforeach ?>				
	</table>
	<div class="text-center">
		<?=anchor("produtos/formularioAdd","Adicionar",array("class"=>"btn btn-success form-control"))?>
	</div>
	<?php $this->load->view('rodape') ?>