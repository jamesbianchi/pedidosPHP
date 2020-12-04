<?php
$render('header');
?>

<head>
    <link href="<?=$base?>/assets/css/formulario.css" rel="stylesheet">
</head>

<h1>Alteração do Cadastro do Cliente</h1>
<form action="<?=$base?>/editar/<?=$usuario['id'];?>" method="POST">

    <label for="clientename">Nome do Cliente:</label>
    <input type="text" name="nome" maxlength="50" size="35" value="<?=$usuario['nome'];?>">
    <label for="endemai">Endereço de Email:</label>
    <input type="email" name="email" maxlength="50" size="35" value="<?=$usuario['email'];?>">
    <div class="tel">
        <label for="ddd">DDD:</label>
        <input type="text" name="ddd" maxlength="2" size="2" value="<?=$usuario['ddd'];?>">
        <label for="ddd">TELEFONE:</label>
        <input type="tel" name="fone" pattern="[0-9]{5}-[0-9]{4}" size="9" value="<?=$usuario['fone'];?>">
    </div>

    <button class="botaoenviar">Salvar</button>
</form>

<?php
$render('footer');
?>