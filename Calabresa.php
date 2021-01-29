<?php


class Calabresa extends RecheioDecorator
{
    private $pao;

    /**
     * Salame constructor.
     * @param Pao $pao
     */
    public function __construct(Pao $pao)
    {
        $this->pao = $pao;
    }

    public function getNome()
    {
        return $this->pao->getNome(). ", Calabresa";
    }

    public function getValor(){
        return 2 + $this->pao->getValor();
    }


}