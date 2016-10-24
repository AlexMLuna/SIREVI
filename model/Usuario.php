<?php
class Usuario extends EntidadBase{
    private $id;
    private $usuario;
    private $contrasena;
    private $nombre;
    private $apellido;
    private $cedula;
    private $puesto;
    private $email;
 
     
    public function __construct() {
        $table="usuarios";
        parent::__construct($table);
    }
     
    public function getId() {
        return $this->id;
    }
 
    public function setId($id) {
        $this->id = $id;
    }
    
    function getUsuario() {
        return $this->usuario;
    }
    
    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }
    
    function getContrasena() {
        return $this->contrasena;
    }
    
    function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

    public function getNombre() {
        return $this->nombre;
    }
 
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
 
    public function getApellido() {
        return $this->apellido;
    }
 
    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }
 
    function getCedula() {
        return $this->cedula;
    }

    function setCedula($cedula) {
        $this->cedula = $cedula;
    }
    
    function getPuesto() {
        return $this->puesto;
    }

    function setPuesto($puesto) {
        $this->puesto = $puesto;
    }

    public function getEmail() {
        return $this->email;
    }
 
    public function setEmail($email) {
        $this->email = $email;
    }
 
 
    public function save(){
        $query="INSERT INTO usuarios (id,usuario,contrasena,nombre,apellido,cedula,
                    puesto,email)"
                ."VALUES(NULL,"
                       ."'".$this->usuario    ."',"
                       ."'".$this->contrasena ."',"
                       ."'".$this->nombre     ."',"
                       ."'".$this->apellido   ."',"
                       ."'".$this->cedula     ."',"
                       ."'".$this->puesto     ."',"
                       ."'".$this->email      ."');";
      
      //SE INVOCA EL METODO DB QUE LO HEREDAMOS DE ENTIDAD BASE
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }
 
}
?>