<?php
use core\Router;

$router = new Router();

//Rotas Padrão - criadas na instalação do MVC
//$router->get('/', 'HomeController@index');
//$router->get('/sobre/{nome}', 'HomeController@sobreP');
//$router->get('/sobre', 'HomeController@sobre');

$router->get('/', 'HomeController@start');                          //Rota para Iniciar Sistema

$router->get('/clientes', 'ClientesController@clientes');           //Rota para Abrir Clientes

$router->get('/cadastrar', 'ClientesController@cadastrar');         //Rota para Cadastrar Novo Cliente
$router->post('/novo', 'ClientesController@novo');                  //Rota recebe o formulário de Cadastro Clientes

$router->get('/editar/{id}', 'ClientesController@editar');
$router->post('/editar/{id}', 'ClientesController@editarAction');

$router->get('/excluir/{id}', 'ClientesController@del');

$router->get('/produtos', 'ProdutosController@produtos');           //Rota Principal para Produtos

$router->get('/cadProduto', 'ProdutosController@cadProduto');     //Rota para criar um Novo Produto
$router->post('/novoProduto', 'ProdutosController@novoProduto');   //Recebe form para um Novo Produto

$router->get('/pedidos', 'PedidosController@pedidos');     //Rota para criar um Novo Produto
