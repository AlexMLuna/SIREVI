<?php
class InstitucionModel extends ModeloBase{
    private $table;/*PARAMETRO POR EL CUAL SE ENVIA LA TABLA QUE SE QUIETE CONSULTAR*/

/*CONSTRUCTOR DONDE SE DECLARA LA TABLA QUE SE VA A USAR EN LAS CONSULTAS*/
    public function __construct(){
        $this->table="institucion";/*TABLA DONDE SE VA A HACER LA CONSULTA*/
        parent::__construct($this->table);
    }

    //METODOS DE CONSULTA
    public function get_una_institucion(){
      /*CONSULTA QUE ME OBTIENE EL EMAIL DEL USUARIO*/
        $query="SELECT * FROM institucion WHERE nombre='Universidad Nacional'";
        /*LA CONSULTA SE IGUALA A UNA VARIABLE QUE SE ENVIA POR PARAMETRO A UNA FUNCION*/
        $institucion=$this->ejecutarSql($query);
        /*RETORNA LO QUE LA CONSULTA ENVIA AL SISTEMA A TRAVEZ DE LA VERIABLE */
        return $institucion;
    }

}
?>
