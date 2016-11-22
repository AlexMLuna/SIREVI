<!--AQUI ES DONDE CREO MIS METODOS Y LOS LLAMO EN LA FUNCION O ACCION DE LOS BOTONES -->

<?php
class UsuariosController extends ControladorBase{

    public function __construct() {
        parent::__construct();
    }

    public function index(){

        //SE CREA EL OBJ USUARIO
        $usuario=new Usuario();

        //OBTENEMOS TODOS LOS USUARIOS
        $allusers=$usuario->getAll();//-->ESTE METODO ESTA EN LA ENTIDAD BASE

        //CARGAMOS LA VISTA INDEX Y LE PASAMOS VALORES
        $this->view("index",array(
            "allusers"=>$allusers,//-->variable
            "Hola"    =>"Valor del index de array"
        ));
    }

    public function crear(){
        if(isset($_POST["nombre"])){

            //CREAMOS UN USUARIO NUEVO
            $usuario=new Usuario();
      //      $usuario->setUsuario($_POST["usuario"]);
            $usuario->setNombre($_POST["nombre"]);
            $usuario->setApellido($_POST["apellido"]);
            $usuario->setCedula($_POST["cedula"]);
            $usuario->setContrasena(sha1($_POST["contrasena"]));
            $usuario->setPuesto($_POST["puesto"]);
            $usuario->setEmail($_POST["email"]);

            $save=$usuario->save();
        }
        $this->redirect("Usuarios", "index");
    }


    public function borrar(){
        if(isset($_GET["id"])){
            $id=(int)$_GET["id"];

            $usuario=new Usuario();
            $usuario->deleteById($id);
        }
        $this->redirect();
    }

/*EL METODO MODIFICAR LE FALTA MAS DE HACER...*/
/*ME IDENTIFICA EL ID DEL USUARIO*/
      public function modificar($id){
        if(isset($_GET["id"])==$id){/*PARA MODIFICAR SE BUSCARA CON LA CEDULA*/

              //CREAMOS UN USUARIO NUEVO
              $usuario=new Usuario();
        //      $usuario->setUsuario($_POST["usuario"]);
              $usuario->setNombre($_POST["nombre"]);
              $usuario->setApellido($_POST["apellido"]);
              $usuario->setCedula($_POST["cedula"]);
              $usuario->setContrasena(sha1($_POST["contrasena"]));
              $usuario->setPuesto($_POST["puesto"]);
              $usuario->setEmail($_POST["email"]);

              $save=$usuario->save();
          }
          $this->redirect("Usuarios", "index");

        echo "El usuario esta en base de datos";/*ENVIA RESPUESTA*/

}

/*===========================================================================================*/
    public function hola(){
        $usuarios=new UsuariosModel();
        $usu=$usuarios->getUnUsuario();
        var_dump($usu);
    }

}
?>
