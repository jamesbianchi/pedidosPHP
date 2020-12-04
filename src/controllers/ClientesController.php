<?php
namespace src\controllers;
use \core\Controller;
use \src\models\Cliente;
use \src\models\Usuario;

class ClientesController extends Controller {

        public function clientes() {

            $usuarios = Cliente::select()->orderBy('nome')->execute();
            $this->render('clientes', ['usuarios' => $usuarios]);
        }

        public function cadastrar() {
            
            $this->render('cadastrar', ['nome' => 'Será Cadastrado Novo Clientes']);
        }
    
        public function novo() {
        
            $name  = filter_input(INPUT_POST, 'nome');
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $ddd = filter_input(INPUT_POST, 'ddd' );
            $tel = filter_input(INPUT_POST, 'fone' );
            date_default_timezone_set("America/SAO_PAULO");
            $datacadastro = date('Y/m/d H:i:s');
                        
            if($name && $email){

                $data = Cliente::select()->where('email', $email)->execute();

                if(count($data) === 0){
                    
                    Cliente::insert([
                        'nome' => $name,
                        'email'=> $email, 
                        'ddd'=> $ddd, 
                        'fone'=> $tel, 
                        'datacadastro'=>$datacadastro
                    ])->execute();
                    
                    $this->redirect('/clientes');
                    
                }
            }
            $this->redirect('/cadastrar'); 
        }


        public function editar($args){
            //$usuario = Cliente::select()->where('id', $args['id'])->one();
            
            $usuario = Cliente::select()->find($args['id']);

            $this->render('editar', ['usuario' => $usuario]);
        }

        public function editarAction($args){
        
            $name  = filter_input(INPUT_POST, 'nome');
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $ddd = filter_input(INPUT_POST, 'ddd' );
            $tel = filter_input(INPUT_POST, 'fone' );
            date_default_timezone_set("America/SAO_PAULO");
            $datacadastro = date('Y/m/d H:i:s');
                        
            if($name && $email){

                Cliente::update()
                ->set('nome', $name)
                ->set('email', $email)
                ->set('ddd', $ddd)
                ->set('fone', $tel)
                ->set('datacadastro', $datacadastro)
                ->where('id', $args['id'])
                ->execute();

                $this->redirect('/clientes');
                    
            }     

            $this->redirect('editar');

        }
        public function del($args){

            Cliente::delete()->where('id', $args['id'])->execute();
            $this->redirect('/clientes');
                
        }
}

 
