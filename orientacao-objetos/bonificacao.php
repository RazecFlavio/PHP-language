<?php

require_once 'autoload.php';

use Alura\banco\model\funcionario\{Desenvolvedor, Gerente};

use Alura\banco\model\CPF;
use Alura\banco\model\funcionario\Diretor;
use Alura\banco\service\ControlBonificacao;

$flavio = new Desenvolvedor(
    'Flavio Cezar',
    new CPF('338.888.118-99'),
    1000
);
echo "Salario ficou: " . $flavio->getSalario() . PHP_EOL;
$flavio->sobeNivel();
echo "Salario ficou: " . $flavio->getSalario() . PHP_EOL;

$felipe = new Gerente(
    'Felipe Cezar',
    new CPF('338.888.118-99'),
    3000
);
$fernando = new Diretor(
    'Fernando cezar',
    new CPF('123.456.789-10'),
    5000
);

$control = new ControlBonificacao();
$control->addBonificacao($flavio);
$control->addBonificacao($felipe);
$control->addBonificacao($fernando);

echo "Total bonificacao: " . $control->getTotal() . PHP_EOL;