<?php
namespace app\models\service;
use app\models\validacao\ClienteValidacao;
// use app\util\UtilService;



class ClienteService{
    public static function salvar($cliente, $campo, $tabela){
        global $config_upload;
        
        $validacao = ClienteValidacao::salvar($cliente);
        $id_cliente = Service::salvar($cliente, $campo, $validacao->listaErros(), $tabela);
        /// fazendo o upload do arquivo
				// if($_FILES["arquivo"]["name"]){
				// 	$cliente->foto = UtilService::upload("arquivo", $config_upload);
				// 	if(!$cliente->foto){
				// 	  return false;  
				// 	}
				// }   
        
        // return Service::salvar($cliente, $campo, $validacao->listaErros(), $tabela);

    }
    
}

