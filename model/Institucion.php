<?php
/*LA CLASE USUARIO HEREDA DE LA CLASE ENTIDADBASE*/
class Institucion extends EntidadBase{
    private $id;
    private $nombre;
    private $direccion;

/*CONSTRUCTOR PARA ASIGNAR LA TABLA CON LA QUE SE VA A TRABAJAR*/
    public function __construct() {
        $table="institucion";/*TABLA CON LA QUE SE TRABAJA*/
        parent::__construct($table);
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function save(){
        $query="INSERT INTO institucion (id,nombre,direccion)"
                ."VALUES(NULL,"
                       ."'".$this->nombre    ."',"
                       ."'".$this->direccion ."');";

      //SE INVOCA EL METODO DB QUE LO HEREDAMOS DE ENTIDAD BASE
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }
}
?>
