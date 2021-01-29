<?php


abstract class RecheioDecorator extends Pao
{

    protected  $nome;
    protected  $valor;

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    public function getValor()
    {
        return $this->valor;
    }


}