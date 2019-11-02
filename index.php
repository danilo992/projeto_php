<?php

use ItemVenda\ItemVenda;
use Venda\Venda;

require_once "Venda.php";
require_once "ItemVenda";

try {
    $camisa = new ItemVenda();
    $camisa->setDescricao("Camisa polo");
    $camisa->setPreco(11.0);

    $bone = new ItemVenda();
    $bone->setDescricao("boné Infatil");
    $bone->setPreco(11.0);

    $Venda = new Venda();
    $Venda->adicionar(null);
    $Venda->adicionar($bone);

    print "Total da venda: "  . $Venda->getTotal();
} catch (InvalidArgumentException $e) {
    echo "Um erro aconteceu: " . $e->getMessage();
} catch (LogicEception $e){
    echo "Erro: " . $e->getMessage();
}