<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Proveedores
 *
 * @author Govani
 */
class Proveedores extends ActiveRecord {
    public $logger = true;

    protected function initialize() {
        $this->has_many('Cuentas', 'model: Cuentas', 'fk: proveedor_id');
        $this->has_many('Dominios', 'through: Cuentas', 'fk: cuenta_id');
    }

}
