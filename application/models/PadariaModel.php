<?php
    class PadariaModel extends CI_model {

        public function selecionarTodos(){
            $retorno = $this->db->query("SELECT * FROM produtos")->result();
            return $retorno;          
        }

        public function selecionarTipo($tipo){
            $sql = "SELECT * FROM produtos WHERE tipo= '". $tipo ."'";
            $retorno = $this->db->query($sql)->result();
            return $retorno;
        }
    }