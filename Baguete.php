<?php

require_once "Pao.php";

class Baguete extends Pao
{

    /**
     * Frances constructor.
     */
    public function __construct()
    {
        $this->nome = "Baguete";
    }

    public function getValor(){
        return 5;
    }
}