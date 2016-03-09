<?php

class DominiosController extends AppController {
    
    public function index(){
        $this->Dominios = new Dominios();
    }
}
