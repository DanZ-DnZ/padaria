<?php

    class Padaria extends CI_controller{

        public function __construct(){
            parent::__construct();

            if( !isset($_SESSION["session"]) ){
                header("location: /index.php");
            }
        }

        public function index(){
            $this->load->model('PadariaModel');

            $produtos = $this->PadariaModel->selecionarTodos();

            foreach($produtos as $produto){
                

            }
        }
    }