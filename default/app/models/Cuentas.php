<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cuentas
 *
 * @author Govani
 */
class Cuentas extends ActiveRecord {

    //put your code here
    public $logger = true;

    protected function initialize() {
        $this->belongs_to('Proveedores', 'model: Proveedores', 'fk: proveedor_id');
        $this->has_many('Dominios', 'model: Dominios', 'fk: cuenta_id');

       
    }

}
