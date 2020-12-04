<?php
$render('header');
?>

<head>
    <link href="<?=$base?>/assets/css/formulario.css" rel="stylesheet">
</head>

<h1>Cadastro do Pedido</h1>

<form action="" method="POST">
    <label for="clientename">Cliente:</label>
    <div class="div-cli">
        <select>
            <?php 
            if(count($clientes) > 0){
                foreach ($clientes as $cliente):?>
                    <option name="nomeCliente" value="<?=$cliente['nome'];?>"><?php echo $cliente['nome'];?></option>              
                        
            <?php 
            endforeach; }?>           
        </select> 
    </div>

    <label for="produtoname">Produto:</label>
    <div class="div-prod">
        <select>
            <?php 
            if(count($produtos) > 0){
                foreach ($produtos as $produto):?>
                    <option name="Produto" value="<?=$produto['id'];?>"><?php echo $produto['nomeProduto'].' - '.$produto['valorUnitario'];?></option>
                <?php
                $valorUnitario = $produto['valorUnitario']; 
                endforeach;
            
            }
            ?>          
        </select> 
    </div>
    <label>Valor Unitario:</label>
        <input type="text" name="valorUnitario" maxlength="15" size="15" value="<?=$valorUnitario;?>">

    <button class="botaoenviar">Incluir</button>
</form>

<?php
    $render('footer');
?>