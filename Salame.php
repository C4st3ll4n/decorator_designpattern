<?php


class Salame extends RecheioDecorator
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
        return $this->pao->getNome(). ", Salame";
    }

    public function getValor(){
        return 1 + $this->pao->getValor();
    }


}