<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function start() {
        $this->render('start', ['nome' => 'Desenvolvido por James Bianchi']);
    }

    public function index() {
        $this->render('home', ['nome' => 'Bonieky']);
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}