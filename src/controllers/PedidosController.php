<?php
namespace src\controllers;
use \core\Controller;
use \src\models\Cliente;
use \src\models\Usuario;
use \src\models\Pedido;
use \src\models\Produto;

class PedidosController extends Controller {

    public function pedidos() {

        $clientes = Cliente::select()->orderBy('nome')->execute();
        $produtos = Produto::select(['id', 'nomeProduto', 'valorUnitario' ])->execute();

        //$produtos = Produto::select()->orderBy('nomeProduto')->execute();

        $this->render('pedidos', ['clientes' => $clientes,
                                  'produtos' => $produtos]);
    }


}
