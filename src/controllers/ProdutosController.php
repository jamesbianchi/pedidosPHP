<?php
namespace src\controllers;
use \core\Controller;
use \src\models\Cliente;
use \src\models\Usuario;
use \src\models\Produto;
use \src\models\Pedido;


class ProdutosController extends Controller {

    public function produtos() {
        
        $produtos = Produto::select()->orderBy('nomeProduto')->execute();
            
        $this->render('produtos', [
                
                'produtos' => $produtos
        ]);
       // $this->render('produtos', ['nome' => 'Será Mostrado a Listagem de Produtos']);
    }

    public function cadProduto() {
            
        $this->render('cadProduto', ['nome' => 'Será Cadastrado Novo Clientes']);
    }

    public function novoProduto() {
        
        $name  = filter_input(INPUT_POST, 'nomeProduto');
        $valor = filter_input(INPUT_POST, 'valorUnitario');
        $descricao = filter_input(INPUT_POST, 'descricaoProduto');
        $peso = filter_input(INPUT_POST, 'peso');
        
        date_default_timezone_set("America/SAO_PAULO");
        $datacadastro = date('Y/m/d H:i:s');  
        
        if($name){         
            $data = Produto::select()->where('nomeProduto', $name)->execute();
            
            if(count($data) === 0){

                Produto::insert([
                    'nomeProduto' => $name,
                    'valorUnitario'=> $valor, 
                    'descricaoProduto'=> $descricao, 
                    'peso'=> $peso, 
                    'dataCadastro'=>$datacadastro
                ])->execute();        
                $this->redirect('/cadProduto');
                exit;
            }
        }
        $this->redirect('/produtos'); 
        exit;
    }






}



?>