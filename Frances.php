<?php

require_once "Pao.php";

class Frances extends Pao
{

    /**
     * Frances constructor.
     */
    public function __construct()
    {
        $this->nome = "Frances";
    }

    public function getValor(){
        return 2;
    }
}