<?php
$render('header');

?>
<head>
    <link href="assets/css/formulario.css" rel="stylesheet">
</head>
<h1>Cadastro de Produtos</h1>
<form action="<?=$base?>/novoProduto" method="POST">

    <label for="produtoname">Nome do Produto:</label>
    <input type="text" name="nomeProduto" maxlength="50" size="35">
    <label for="valor">Valor Unitario:</label>
    <input type="text" name="valorUnitario" maxlength="9" size="35">
    <label for="desc">Descrição:</label>
    <input type="text" name="descricaoProduto" maxlength="100" size="100">
    <label for="peso">PESO:</label>
    <input type="text" name="peso" size="9">
    
    <!--
    <label for="datacadastro">Data Cadastro:</label>
    <input type="datetime-local" name="datacadastro">
    !-->

    <button class="botaoenviar">Incluir</button>
</form>

<?php
$render('footer');
?>