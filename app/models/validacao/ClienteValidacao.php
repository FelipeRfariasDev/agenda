<?php
namespace app\models\validacao;
use app\core\Validacao;


class ClienteValidacao
{public static function salvar($cliente) {
    $validacao = new Validacao();
    $validacao-> setData("Nome_Cliente", $cliente->Nome_Cliente);
    $validacao-> setData("Pendencia", $cliente->Pendencia);
    $validacao-> setData("Prazo", $cliente->Prazo);
    $validacao-> setData("Caminho", $cliente->Caminho);
    $validacao-> setData("Acao", $cliente->Acao);
   
    
    $validacao->getData("Nome_Cliente")->isVazio();
    $validacao->getData("Pendencia")->isVazio();
    $validacao->getData("Prazo")->isVazio();
    $validacao->getData("Caminho")->isVazio();
    $validacao->getData("Acao")->isVazio();
    
    return $validacao;
    
}
}

