<?php

require_once 'Pao.php';
require_once 'RecheioDecorator.php';
require_once 'Frances.php';
require_once 'Baguete.php';
require_once 'Salame.php';
require_once 'Calabresa.php';

$frances = new Frances();
$frances = new Salame($frances);
$frances = new Calabresa($frances);

echo $frances->getNome(). " * R$ " . $frances->getValor();

echo "\n";

$baguete = new Salame(new Calabresa(new Baguete()));
echo $baguete->getNome(). " * R$ " . $baguete->getValor();