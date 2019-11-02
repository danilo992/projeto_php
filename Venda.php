<?php

namespace Venda;

use vendaException\VendaException;

class Venda {

    private $itens = [];

    public function adicionar($ItemVenda) {
        if($ItemVanda == null) {
            throw new VendaException(500,"Item não pode ser nulo");
        }
        array_push($this->itens, $ItemVenda); 
    }

    public function getTotal(){
        $total = 0;

        foreach ($this->itens as $item) {
            $total += $item->getPreco();
        }

        return $total;
    }
}
?>