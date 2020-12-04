<?php
$render('header');

?>
<head>
    <link href="assets/css/formulario.css" rel="stylesheet">
</head>
<h1>Cadastro de Cliente</h1>
<form action="<?=$base?>/novo" method="POST">

    <label for="clientename">Nome do Cliente:</label>
    <input type="text" name="nome" maxlength="50" size="35">
    <label for="endemai">Endereço de Email:</label>
    <input type="email" name="email" maxlength="50" size="35">
    <div class="tel">
        <label for="ddd">DDD:</label>
        <input type="text" name="ddd" maxlength="2" size="2">
        <label for="ddd">TELEFONE:</label>
        <input type="tel" name="fone" pattern="[0-9]{5}-[0-9]{4}" size="9">
    </div>
    <!--
    <label for="datacadastro">Data Cadastro:</label>
    <input type="datetime-local" name="datacadastro">
    !-->

    <button class="botaoenviar">Incluir</button>
</form>

<?php
$render('footer');
?>