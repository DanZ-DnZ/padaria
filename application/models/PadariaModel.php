<?php
    class PadariaModel extends CI_model {

        public function selecionarTodos(){
            $retorno = $this->db->query("SELECT * FROM produtos")->result();
            return $retorno;          
        }

        public function selecionarTipo($tipo_produto){
            $sql = "SELECT * FROM produtos WHERE tipo= '". $tipo_produto ."'";
            $retorno = $this->db->query($sql)->result();
            return $retorno;
        }

        public function novoProduto($nome, $perecivel, $valor, $tipo_produto){
            $sql = 
            "
            INSERT INTO produto
            (nome, perecivel, valor, tipo_produto)
            VALUES
            ('".$nome."', '".$perecivel."', '".$valor."', '".$tipo_produto."')
            ";
            $this->db->query($sql);

            return true;
        }

        public function excluirProduto($id){

        $this->db->query( "DELETE FROM produto WHERE id=" . $id );
        return true;
        }

        public function alterarproduto( $id, $nome, $perecivel, $valor, $tipo_produto ){
            $sql = "UPDATE veiculo
                    SET
                        nome = '".$nome."',
                        perecivel = '".$perecivel."',
                        valor = '".$valor."',
                        tipo = '".$tipo_produto."',
                    WHERE id=".$id."
            "; 
        }
    }