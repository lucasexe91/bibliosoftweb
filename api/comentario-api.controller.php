<?php
require_once 'models/Modelocomentario.php';
require_once 'api/api.view.php';

class ComentarioApiController {

    private $modelocomentario;
    private $view;
    private $data;

    public function __construct() {
        $this->modelocomentario =  new ModeloComentario();
        $this->view = new APIView();
        $this->data = file_get_contents("php://input");
    }

    private function getData() {
        return json_decode($this->data);
    }

    public function comentar(){
        $datos = $this->getData();
        
        $comentario = $datos->comentario;
        $calificacion = $datos->calificacion;
        $idlibro = $datos->idlibro;
        $usuario = $datos->usuario;

        $this->modelocomentario->nuevocomentario($comentario, $calificacion, $idlibro, $usuario);

        $this->view->response('', 200);
    }

}
