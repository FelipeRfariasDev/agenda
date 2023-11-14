<?php
namespace app\controllers;

use app\core\Controller;
use app\models\service\Service;
use app\util\UtilService;
use app\core\Flash;
use app\models\service\ClienteService;



class ClienteController extends Controller{
   private $tabela = "cliente";
   private $campo  = "id_cliente";
   
   //  public function __construct(){
      
   //      $this->usuario = UtilService::getUsuario();
   //   if(!$this->usuario){
     //    $this->redirect(URL_BASE ."login");
 //        exit;
        
  //    }
   //   i($this->usuario);
 //  }
         
         
    public function index(){
       $dados["lista"] = Service::lista($this->tabela);
       $dados["listarEncerradosGrafico"] = Service::listarEncerrados($this->tabela);;
       $dados["view"]  = "Cliente/Index";
       $this->load("template", $dados);
    }
    
    public function create(){
        $dados["cliente"] = Flash::getForm();
        $dados["view"] = "Cliente/Create";
        $this->load("template", $dados);
    }
    
    public function edit($id){
        $cliente = Service::get($this->tabela, $this->campo, $id);       
        if(!$cliente){
            $this->redirect(URL_BASE."cliente");
        }
        
        $dados["cliente"]   = $cliente;
        $dados["view"]      = "Cliente/Create";
        $this->load("template", $dados);
    }
    
    public function salvar(){
        $cliente = new \stdClass();
        $cliente->id_cliente        = $_POST["id_cliente"];
        $cliente->Nome_Cliente 		          = $_POST['Nome_Cliente'];
        $cliente->Pendencia 		    = $_POST['Pendencia'];
        $cliente->Prazo 		= $_POST['Prazo'];
        $cliente->Caminho        = $_POST["Caminho"];
        $cliente->Acao 		          = $_POST['Acao'];
        $cliente->Inserido 		    = $_POST['Inserido'];
      
         
        Flash::setForm($cliente);
        if(ClienteService::salvar($cliente, $this->campo, $this->tabela)){
            $this->redirect(URL_BASE."cliente");
        }else{
            if(!$cliente->id_cliente){
                $this->redirect(URL_BASE."cliente/create");
            }else{
                $this->redirect(URL_BASE."cliente/edit/".$cliente->id_cliente);
            }
        }
    }
    
    public function excluir($id){
        Service::excluir($this->tabela, $this->campo, $id);
        $this->redirect(URL_BASE."cliente");
    }
}

