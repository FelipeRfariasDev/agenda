<?php
namespace app\models\dao;
use app\core\Model;

class Dao extends Model{    
    public function lista($tabela){
        return  $this->all($this->db, $tabela);
    }

    public function listarEncerrados($tabela){
        return  $this->listarEncerradosAll($this->db, $tabela);
    }

    public function encerrar_cliente($tabela,$encerrado_por,$id){
        return  $this->encerrar_clienteUpdate($this->db, $tabela,$encerrado_por,$id);
    }
    public function get($tabela, $campo, $valor, $eh_lista){
        return  $this->find($this->db,$campo, $valor, $tabela, $eh_lista);
    }    
    public function getGeral($tabela, $campo, $operador, $valor, $eh_lista){
        return  $this->findGeral($this->db,$campo,$operador, $valor, $tabela, $eh_lista);
    }    
    
    public function getEntre($tabela, $campo, $valor1, $valor2){
        return  $this->findEntre($this->db,$campo, $valor1, $valor2, $tabela);
    } 
    
    public function getLike($tabela, $campo, $valor, $eh_lista, $posicao){
        return  $this->findlike($this->db,$campo, $valor, $tabela, $eh_lista, $posicao);
    }
    
    public function getTotal($tabela, $campoAgregacao, $campo, $valor){
        return  $this->findAgrega($this->db, 'total', $campoAgregacao, $tabela,$campo, $valor);
    }
    
    public function getSoma($tabela, $campoAgregacao, $campo, $valor){
        return  $this->findAgrega($this->db, 'soma', $campoAgregacao, $tabela,$campo, $valor);
    }
    
    public function getMaximo($tabela, $campoAgregacao, $campo, $valor){
        return  $this->findAgrega($this->db, 'max', $campoAgregacao, $tabela,$campo, $valor);
    }
    
    public function getMinimo($tabela, $campoAgregacao, $campo, $valor){
        return  $this->findAgrega($this->db, 'min', $campoAgregacao, $tabela,$campo, $valor);
    }
    
    public function getMedia($tabela, $campoAgregacao, $campo, $valor){
        return  $this->findAgrega($this->db, 'media', $campoAgregacao, $tabela,$campo, $valor);
    }
    public function inserir( $valores, $tabela){
        return $this->add($this->db,  $valores, $tabela);
    }
    
    public function editar( $valores, $campo, $tabela){
        return $this->edit($this->db,  $valores,  $campo, $tabela);
    }
    public function editar_encerrado_por(){
        return $this->editar_encerrado_por_id($this->db);
    }
    public function excluir($tabela, $campo, $valor){
        return $this->del($this->db, $campo ,$valor , $tabela);
    }
    public function contar($tabela, $campo, $valor){
        $result = "SELECT count(*) from $this->tabela where $campo = id_cliente";
        $quantidade = $this->select($this->db, $result, false);
        return ($quantidade);
    }
}

