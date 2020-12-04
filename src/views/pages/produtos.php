<?php
$render('header');

?>
<html>
<link href="assets/css/estilo.css" rel="stylesheet">
<link href="assets/css/grid.css" rel="stylesheet">

<nav class="menu-produtos">
    <div class="prod-cadastrar">
        <a href="<?=$base?>/cadProduto" class="botaoCadastrar">Cadastrar</a>
    </div>
</nav>
<table>
    <caption>Listagem de Produtos Cadastrados</caption>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome Produto</th>
            <th>Valor Unitario</th>
            <th>Descrição do Produto</th>
            <th>Peso</th>
            <th>Data Cadastro</th>
            <th>AÇÔES</th>
        </tr>
    </thead>
    <body>
        <?php 
        foreach($produtos as $produto): ?>    
        <tr>
            <td><?=$produto['id'];?></td>
            <td><?=$produto['nomeProduto'];?></td>
            <td><?=$produto['valorUnitario'];?></td>
            <td><?=$produto['descricaoProduto'];?></td>
            <td><?=$produto['peso'];?></td>
            <?php $data = new datetime($produto['dataCadastro']);?>
            <td><?=$data->format('d/m/Y H:i:s');?></td>
            <td>
                <a href="<?=$base?>/editar/<?=$produto['id'];?>">[Editar]</a>
                <a href="<?=$base?>/excluir/<?=$produto['id'];?>"onclick="return confirm('Tem certeza da exclusão ?')">[Excluir]</a>
            </td>
        </tr>
        <?php 
        endforeach; ?>     
    </body>
</table>
</html>


<?php $render('footer');
?>