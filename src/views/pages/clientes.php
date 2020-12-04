<?php
$render('header');

?>
<html>
<link href="assets/css/estilo.css" rel="stylesheet">
<link href="assets/css/grid.css" rel="stylesheet">

<nav class="menu-clientes">
    <div class="cli-cadastrar">
        <a href="<?=$base?>/cadastrar" class="botaoCadastrar">Cadastrar</a>
    </div>
</nav>

<table>
    <caption>Listagem de Clientes Cadastrados</caption>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>DDD</th>
            <th>Telefone</th>
            <th>Data Cadastro</th>
            <th>AÇÔES</th>
        </tr>
    </thead>
    <body>
        <?php 
        foreach($usuarios as $usuario): ?>
        <tr>
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td><?=$usuario['ddd'];?></td>
            <td><?=$usuario['fone'];?></td>
            <?php $data = new datetime($usuario['datacadastro']);?>
            <td><?=$data->format('d/m/Y H:i:s');?></td>
            <td>
                <a href="<?=$base?>/editar/<?=$usuario['id'];?>">[Editar]</a>
                <a href="<?=$base?>/excluir/<?=$usuario['id'];?>"onclick="return confirm('Tem certeza da exclusão ?')">[Excluir]</a>
            </td>
        </tr>
        <?php 
        endforeach; ?>     
    </body>
</table>
</html>


<?php $render('footer');
?>