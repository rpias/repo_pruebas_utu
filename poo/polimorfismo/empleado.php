<?php
abstract class  Empleado 
{
    //Declarar propiedad
    protected $d;

    //Declaracion de metodo

    public function calcularSueldo(){
        
       return $this->sueldo = $this->sueldo * 1.3;
    }
    
}


?>
