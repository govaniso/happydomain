<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of proveedores_controller
 *
 * @author Govani
 */
class ProveedoresController extends AppController {

    public function before_filter() {
    }

    public function index() {
        
    }

    public function dominios($proveedor_id) {
        $Proveedor = new Proveedores();

        $this->proveedor = $Proveedor->find($proveedor_id);
        $this->Dominios = new Dominios();
    }

}
