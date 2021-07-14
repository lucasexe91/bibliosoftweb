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

    //transforma la informacion a JSON
    private function getData() {
        return json_decode($this->data);
    }

    //toma los datos del comentario y los manda a la funcion "nuevocomentario" dentro de su respectivo modelo.
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
