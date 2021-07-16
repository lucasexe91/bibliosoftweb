<?php
require_once 'models/Modelocomentario.php';
require_once 'models/Modelousuario.php';
require_once 'api/api.view.php';

class ComentarioApiController {

    private $modelousuario;
    private $modelocomentario;
    private $view;
    private $data;

    public function __construct() {
        $this->modelousuario = new ModeloUsuario();
        $this->modelocomentario =  new ModeloComentario();
        $this->view = new APIView();
        $this->data = file_get_contents("php://input");
    }

    //transforma la informacion a JSON
    private function getData() {
        return json_decode($this->data);
    }

    //toma los datos del comentario y los manda a la funcion "nuevocomentario" dentro de su respectivo modelo.
    public function comentar($params=[]){
        $datos = $this->getData();
        $comentario = $datos->comentario;
        $calificacion = $datos->calificacion;
        $id_libro = $datos->id_libro;
        $usuario = $datos->usuario;
        $id_usuario = $this->modelousuario->getiduserbyusername($usuario);
        $this->modelocomentario->nuevocomentario($comentario, $calificacion, $id_libro, $id_usuario->id);
        $this->view->response('', 200);
    }

    //borra un comentario por id
    public function borrarComentario($params=[]){
        $id = $params[':ID'];
        $comentario = $this->modelocomentario->getComentbyID($id);
        if ($comentario){
            $this->modelocomentario->eliminarcomentario($comentario->id_comentario);
            $this->view->response('comentario eliminado con exito',200);
        }else{
            $this->view->response('comentario no encontrado',404);
        }
    }

    //traer comentarios
    public function getcommentsbybook($params=[]){
        $idlibro = $params[':ID'];
        $comentarios = $this->modelocomentario->buscarComentariosDeLibro($idlibro);
        if ($comentarios){
            $this->view->response($comentarios,200);
        }else{
            $this->view->response('No se pudieron cargar los comentarios de este libro',404);
        }
        return $comentarios;
    }
}
