<?php

/**
 * Description of Dominios
 *
 * @author Govani
 */
class Dominios extends ActiveRecord{
    
    public $logger = true;
    
     protected  function initialize() {
        $this->belongs_to('Cuentas', 'model: Cuentas', 'fk: cuenta_id');
       // $this->belongs_to('Editorial'); //, 'model: Autores', 'fk: autor_id');
      // $this->belongs_to('Usuarios'); //, 'model: Autores', 'fk: autor_id');

       // $this->validates_presence_of('titulo', 'message: Debe escribir un <b>titulo</b> para el libro');
    }
    
    public function get_activos(){
        return $this->find();
    }
    
}
